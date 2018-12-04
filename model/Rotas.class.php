<?php 
Class Rotas{

	public static $pag;
	private static $pasta_controller = 'controller';
	private static $pasta_view = 'view';
	private static $pasta_ADM = 'adm';

	static function get_SiteHOME(){
		return Config::SITE_URL.'/'.Config::SITE_PASTA;
	}
	static function get_SiteRAIZ(){
		return $_SERVER['DOCUMENT_ROOT'].'/'.Config::SITE_PASTA;
	}

	static function get_SiteTEMA(){
		return self::get_SiteHOME().'/'.self::$pasta_view;
	}
	//controller
	static function pag_Noticia(){
		return self::get_SiteHOME().'/noticia';
	}
	static function pag_Contato(){
		return self::get_SiteHOME().'/contato';
	}
	static function pag_Produtos(){
		return self::get_SiteHOME().'/produto';
	}
	static function pag_ProInfo(){
		return self::get_SiteHOME().'/materia';
	}
	//get paginas
	static function get_ImagePasta(){
		return 'media/images/';
	}
	static function get_ImageURL(){
		return self::get_SiteHOME().'/'.self::get_ImagePasta();
	}
	static function ImageLink($img, $largura, $altura){
		$imagem = self::get_ImageURL()."thumb.php?src={$img}&w={$largura}&h={$altura}&zc=1";
		return $imagem;
	}
	//rotas para área administrativa

	static function get_SiteADM(){
		return self::get_SiteHOME() .'/' .self::$pasta_ADM;

	}


	static function pag_ProdutosADM(){
		return self::get_SiteADM() .'/adm_produtos';

	}

	static function pag_NovoADM(){
		return self::get_SiteADM() .'/adm_novo';

	}

	static function pag_EditarADM(){
		return self::get_SiteADM() .'/adm_editar';

	}

	static function pag_DeletarADM(){
		return self::get_SiteADM() .'/adm_deletar';

	}

	static function pag_ImgADM(){
		return self::get_SiteADM() .'/adm_img';

	}



	

	static function pag_CategoriasADM(){
		return self::get_SiteADM() .'/adm_categorias';

	}


	static function pag_LogoffADM(){
		return self::get_SiteADM() .'/adm_logoff';

	}

	static function get_Pasta_Controller(){
		return self::$pasta_controller;
	}
	//metodos para redirecionar
	static function Redirecionar($tempo, $pagina){
		$url = '<meta http-equiv="refresh" content="'.$tempo.'; url='.$pagina.'">';
		echo $url;
	}
	static function get_Pagina(){
		if (isset($_GET['pag'])) {
			$pagina = $_GET['pag'];
			self::$pag = explode('/', $pagina);
			$pagina = 'controller/'.self::$pag[0].'.php';
			if (file_exists($pagina)) {
				include $pagina;
			}else{
				include 'erro.php';
			}
		}else{
			include 'home.php';
		}
	}
}
 ?>