<?php
/* Smarty version 3.1.33, created on 2018-11-27 17:58:06
  from 'C:\xampp\htdocs\saite\adm\view\adm_senha.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bfda1ce9d9518_92390181',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3a9ded9ea4882930bf4952542e419464a26d68bb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\saite\\adm\\view\\adm_senha.tpl',
      1 => 1505320888,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bfda1ce9d9518_92390181 (Smarty_Internal_Template $_smarty_tpl) {
?><h3 class="text-center">Alteração de senha de acesso</h3>


<form name="alterarsenha" method="post" action="">
    
    <section>
        <div class="col-md-4"></div>
        
        <div class="col-md-4">
            <label>Digite sua senha atual</label>
          
            <input type="password" name="adm_senha_atual" id="adm_senha_atual" class="form-control" required>
          
           
            
            <label>Digite sua nova senha</label>
          
            <input type="password" name="adm_senha" id="adm_senha" class="form-control" required>
            <br>
           
            
            
            <button type="submit" class="btn btn-success btn-block"> Alterar </button>
        </div>
       
        <div class="col-md-4">
       
            
            
        </div>
        
        
        
    </section>

  

    
    
    
</form><?php }
}
