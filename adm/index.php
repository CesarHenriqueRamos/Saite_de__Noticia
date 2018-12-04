<?php 


date_default_timezone_set('America/Sao_Paulo');

if(!isset($_SESSION)){
	session_start();
	
}



require '../lib/autoload.php';

if(!Login::LogadoADM()){
	Rotas::Redirecionar(1, 'login.php');
	exit('<h2>Erro! Acesso negado </h2>');
}


$smarty = new Template();
$categorias = new Categorias();
$categorias->GetCategorias();


//valores para o template
$smarty->assign('NOME', 'CESAR HENRIQUE RAMOS');
$smarty->assign('GET_TEMA', Rotas::get_SiteTEMA());
$smarty->assign('TITULO_SITE', Config::SITE_NOME);
$smarty->assign('SITE_NOME', Config::SITE_NOME);
$smarty->assign('GET_SITE_HOME', Rotas::get_SiteHOME());
$smarty->assign('GET_SITE_ADM', Rotas::get_SiteADM());


$smarty->assign('PAG_CONTATO', Rotas::pag_Contato());
$smarty->assign('PAG_CATEGORIAS', Rotas::pag_CategoriasADM());
$smarty->assign('PAG_ADM_NOTICIAS', Rotas::pag_ProdutosADM());
$smarty->assign('PAG_SENHA', Rotas::get_SiteADM() . '/adm_senha');
$smarty->assign('PAG_LOGOFF', Rotas::pag_LogoffADM());
$smarty->assign('CATEGORIAS', $categorias->GetItens());
$smarty->assign('DATA', Sistema::DataAtualBR());
$smarty->assign('LOGADO', Login::LogadoADM());
//$smarty->assign('LOGADO', Login::LogadoADM());
//$smarty->assign('PAG_LOGOFF', Rotas::get_SiteADM() .'/logoff');
//$smarty->assign('PAG_SENHA', Rotas::get_SiteADM() .'/adm_senha');


if(Login::LogadoADM()){
	$smarty->assign('USER', $_SESSION['ADM']['user_nome']);
	$smarty->assign('DATA', $_SESSION['ADM']['user_data']);
	$smarty->assign('HORA', $_SESSION['ADM']['user_hora']);
}


$smarty->display('adm_index.tpl');
 ?>