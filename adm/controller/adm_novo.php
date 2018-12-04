<?php 

$smarty = new Template();

if(isset($_POST['titulo'])){
	$titulo      = $_POST['titulo'];
    $noticia     = $_POST['noticia'];   
    $categoria   = $_POST['categoria']; 
    $img         = $_FILES['img']['name'];    
    $slug        = $_POST['slug'];
   
   

    if(!empty($_FILES)){
    	$upload = new ImageUpload();
    	if($upload->Upload(900, 'img')){
    		$img = $upload->retorno;
    	}else{
    		exit('Erro ao enviar a imagem');
    	}
    }



    $gravar = new Produtos();

    $gravar->Preparar($img, $titulo, $noticia, $slug, $categoria );


    if($gravar->Inserir()){
    	echo '<div class="alert alert-success">Cadastrado com Sucesso!!</div>';
    	Rotas::Redirecionar(2, Rotas::pag_ProdutosADM());
    }else{
    	echo '<div class="alert alert-danger">Não cadastrado!!';
    	Sistema::VoltarPagina();
    	echo '</div>';
    	exit();
    }



}


$categorias = new Categorias();
$categorias->GetCategorias();

$smarty->assign('CATEGORIAS', $categorias->GetItens());
$smarty->assign('GET_TEMA', Rotas::get_SiteTEMA());

$smarty->display('adm_novo.tpl');

?>