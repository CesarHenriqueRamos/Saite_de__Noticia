

<?php 

$smarty = new Template();




$smarty->display('home.tpl');

include_once Rotas::get_Pasta_Controller() .'/produto.php';

 ?>