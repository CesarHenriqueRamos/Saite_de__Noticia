<?php 

$smarty = new Template();

$produtos = new Produtos();

if(isset(Rotas::$pag[1])){
	$produtos->GetProdutosCateID(Rotas::$pag[1]);
}else{
	$produtos->GetProdutos();
}




$smarty->assign('PRO', $produtos->GetItens());
//$smarty->assign('PRO_INFO', Rotas::pag_ProdutosInfo());
$smarty->assign('PRO_TOTAL', $produtos->TotalDados());
$smarty->assign('PAGINAS', $produtos->ShowPaginacao());
$smarty->assign('PAG_PRODUTO_NOVO', Rotas::pag_NovoADM());
$smarty->assign('PAG_PRODUTO_EDITAR', Rotas::pag_EditarADM());
$smarty->assign('PAG_PRODUTO_IMG', Rotas::pag_ImgADM());

$smarty->display('adm_produtos.tpl');

?>