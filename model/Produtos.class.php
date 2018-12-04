<?php 
Class Produtos extends Conexao{

	 private $titulo,$noticia,$img,$slug,$id,$img_arquivo, $categoria ;



	function __construct(){
		parent::__construct();
	}


	function GetProdutos(){
		//query para buscar os produtos de uma categoria especifica.
		$query = "SELECT * FROM {$this->prefix}noticia n INNER JOIN {$this->prefix}categorias c ON n.not_categoria = c.cate_id";

	
		$query .= " ORDER BY not_id DESC";

		$query .= $this->PaginacaoLinks("not_id", $this->prefix."noticia");

		
		$this->ExecuteSQL($query);

		$this->GetLista();
		
	}



	function GetProdutosID($id){
		//query para buscar os produtos de uma categoria especifica.
		$query = "SELECT * FROM {$this->prefix}noticia p INNER JOIN {$this->prefix}categorias c ON p.not_categoria = c.cate_id";

		$query .= " AND not_id = :id";

		$params = array(':id'=>(int)$id);

		$this->ExecuteSQL($query, $params);

		$this->GetLista();
		
	}


	function GetProdutosCateID($id){
		//query para buscar os produtos de uma categoria especifica.

		$id = filter_var($id, FILTER_SANITIZE_NUMBER_INT);

		$query = "SELECT * FROM {$this->prefix}noticia p INNER JOIN {$this->prefix}categorias c ON p.not_categoria = c.cate_id";

		$query .= " AND not_categoria = :id";

		$query .= $this->PaginacaoLinks("not_id", $this->prefix."noticia WHERE not_categoria=".(int)$id);



		$params = array(':id'=>(int)$id);

		$this->ExecuteSQL($query, $params);

		$this->GetLista();
		
	}







    function GetProdutosNome($nome){
        
          // monto a SQL
        $query = "SELECT * FROM {$this->prefix}noticia p INNER JOIN {$this->prefix}categorias c ON p.not_categoria = c.cate_id";       
        $query .= " WHERE not_titulo LIKE '%$nome%'";
        $query .= $this->PaginacaoLinks("not_id", $this->prefix."noticia WHERE not_titulo LIKE '%$nome%'");


        
        // passando parametros
        $params = array(':nome'=>$nome);
       // executando a SQL                      
        $this->ExecuteSQL($query,$params);
        // trazendo a listagem 
        $this->GetLista();
    }



    	
private function GetLista(){
        $i = 1;
        while($lista = $this->ListarDados()):
        $this->itens[$i] = array(
                'id' => $lista['not_id'],
                'noticia' => $lista['noticia'],
                'titulo' => $lista['not_titulo'],
                'slug' => $lista['not_slug'],
                'categoria'=> $lista['not_categoria'],
                'nome_cate'=> $lista['cate_nome'],
                'img'  => Rotas::ImageLink($lista['img'], 250, 250),
                'img_p' => Rotas::ImageLink($lista['img'], 70, 70),
                'img_g' => Rotas::ImageLink($lista['img'],1100, 550),
                'img_arquivo' =>Rotas::get_SiteRAIZ().'/'.Rotas::get_ImagePasta().$lista['img'],
                'img_atual' => $lista['img']
            );

        $i++;
        endwhile;
    }

function Preparar($img, $titulo, $noticia, $slug=null, $categoria){
        $this->setImg($img);
        $this->setTitulo($titulo);
        $this->setNoticia($noticia);
        $this->setSlug($slug);
        $this->setCategoria($categoria);
    }
            function Inserir(){
        $query = "INSERT INTO {$this->prefix}noticia (img, not_titulo, noticia, not_slug, not_categoria) VALUES ";
        $query.="(:img, :titulo, :noticia, :slug, :categoria)";
        $params = array(
            ':img' => $this->getImg(),
            ':titulo' => $this->getTitulo(),
            ':noticia' => $this->get_Noticia(),
            ':slug' => $this->getSlug(),
            ':categoria' =>$this->getCategoria()
        );
        
        if ($this->ExecuteSQL($query, $params)) {
            return TRUE;
        }else{
            return FALSE;
        }
    }
    function Alterar($id){
        $query = "UPDATE {$this->prefix}noticia SET img=:img, not_titulo=:titulo, noticia=:noticia,not_slug=:slug, not_categoria=:categoria";
        $query.= " WHERE not_id=:id";
        $params = array(
            ':img' =>$this->getImg(),
            ':titulo' =>$this->getTitulo(),
            ':noticia' =>$this->get_Noticia(),
            ':slug' =>$this->getSlug(),
            ':categoria' =>$this->getCategoria(),
            ':id'=> (int)$id,
        );
        
        if ($this->ExecuteSQL($query, $params)) {
            return TRUE;
        }else{
            return FALSE;
        }
    }
    function Apagar($id){
        $query = "DELETE FROM {$this->prefix}noticia WHERE not_id =:id";
        $params = array(
            ':id' =>(int)$id
        );
        if ($this->ExecuteSQL($query, $params)) {
            return TRUE;
        }else{
            return FALSE;
        }
    }
//metodo GET
    function getImg(){
        return $this->img;
    }
    function getTitulo(){
        return $this->titulo;
    }
    //bug
    function get_Noticia(){
        
        return $this->noticia;
    }
    function getSlug(){
        return $this->slug;
    }
    function getCategoria(){
        return $this->categoria;
    }
//metodos SET
    function setImg($img){
        $this->img = $img;
    }
    function setTitulo($titulo){
        $this->titulo = $titulo;
    }
    function setNoticia($noticia){
        $this->noticia = $noticia;
    }
    function setSlug($slug){
        $this->slug = Sistema::GetSlug($slug);
    }
    function setCategoria($categoria){
        $this->categoria = $categoria;
    }

}
 
?>
