<?php 

$smarty = new Template();
$gravar = new Produtos();

if(isset($_POST['apagar']) && isset($_POST['id_apagar']) && $_POST['apagar'] == 'SIM'){
	if($gravar->Apagar($_POST['id_apagar'])){
		echo '<div class="alert alert-success"> Excluido com Sucesso!!</div>';
		@unlink($_POST['img_arquivo']);
		Rotas::Redirecionar(2, Rotas::pag_ProdutosADM());
		exit();
	}else{
		echo '<div class="alert alert-danger">O produto não pode ser excluido!!</div>';
	}
}


if(isset($_POST['titulo']) ){
	$titulo      = $_POST['titulo'];
    $noticia     = $_POST['noticia'];   
    $categoria   = $_POST['categoria']; 
    $img         = $_FILES['img']['name'];    
    $slug        = $_POST['slug'];
    $id          = $_POST['id'];
    $img_arquivo = $_POST['img_arquivo'];




    if(!empty($_FILES['img']['name'])){
    	$upload = new ImageUpload();
    	if($upload->Upload(900, 'img')){
    		$img = $upload->retorno;
    		@unlink($img_arquivo);
    	}else{
    		exit('Erro ao enviar a imagem');
    	}
    }else{
    		$img = $_POST['img_atual'];
   }



   

    $gravar->Preparar($img, $titulo, $noticia, $slug, $categoria );


    if($gravar->Alterar($id)){
    	echo '<div class="alert alert-success">Editato com Sucesso!!</div>';
    	Rotas::Redirecionar(2, Rotas::pag_ProdutosADM());
    }else{
    	echo '<div class="alert alert-danger">Falha ao Executar!!';
    	Sistema::VoltarPagina();
    	echo '</div>';
    	exit();
    }



}





$categorias = new Categorias();
$categorias->GetCategorias();


//pegar o id dos produtos
$produtos = new Produtos();
$id = $_POST['id'];

$produtos->GetProdutosID($id);

$smarty->assign('CATEGORIAS', $categorias->GetItens());
$smarty->assign('GET_TEMA', Rotas::get_SiteTEMA());
$smarty->assign('PRO', $produtos->GetItens());

$smarty->display('adm_editar.tpl');

?>