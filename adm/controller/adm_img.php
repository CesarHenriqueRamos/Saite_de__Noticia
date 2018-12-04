<?php 

$smarty = new Template();

$id = (int)$_POST['id'];
if(isset($_POST['id']) && isset($_FILES['img']['name'])){
		$upload = new ImageUpload();
    	
    	if(!empty($_FILES['img']['name'])){
    	
	    	$upload->Upload(900, 'img');
	    	$pro_img = $upload->retorno;

	    	$gravar = new NoticiaImages();
			$gravar->Insert($img, $id);

    	}
	}

if(isset($_POST['fotos_apagar'])){
	$apagar = new NoticiaImages();
	foreach ($_POST['fotos_apagar'] as $foto){
		$apagar->Deletar($foto);
		$filename = Rotas::get_SiteRAIZ().'/'.Rotas::get_ImagePasta() .$foto;
		@unlink($filename);
	}

	echo '<div class="alert alert-success">Foto(s) apagada(s) com sucesso! </div>';
}



$img = new NoticiaImages($id);
$img->GetImagesPRO($_POST['id']);

$smarty->assign('IMAGES', $img->GetItens());
$smarty->assign('PRO', $pro_id);





$smarty->display('adm_img.tpl');

?>