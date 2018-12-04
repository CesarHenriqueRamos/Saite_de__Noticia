<?php
/* Smarty version 3.1.33, created on 2018-11-28 18:21:54
  from 'C:\xampp\htdocs\saite\adm\view\adm_novo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bfef8e2ad6a12_51414565',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '31b02d68f0cacda6f5b8ce993c285e118aa4c1e8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\saite\\adm\\view\\adm_novo.tpl',
      1 => 1543428625,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bfef8e2ad6a12_51414565 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/js/tinymce/tinymce.min.js"><?php echo '</script'; ?>
>

<h4 class="text-center"> Adicionar novo produto </h4>
<hr>
  

<!-- começa os campos para form produto    -->
<section class="row" id="camposproduto">
                                           <!--  enctype="multipart/form-data"  -->
    <form name="frm_produto" method="post" action=""  enctype="multipart/form-data">
        
        
        
        <div class="col-md-4">
            <label>Catogoria</label>
         
            <select name="categoria" id="categoria" class="form-control" required>
              
                <option value="teste"> Escolha </option>                           
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CATEGORIAS']->value, 'C');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['C']->value) {
?>                    
                <option value="<?php echo $_smarty_tpl->tpl_vars['C']->value['cate_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['C']->value['cate_nome'];?>
</option>  

                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>                
            </select>
            
            
        </div>
        
        
        
        
        <div class="col-md-6">
             <label>Titulo</label>
            <input type="text"  name="titulo" id="titulo"   class="form-control" >
          </div>
          
            
            <div class="col-md-6">
            
                 <hr>
                 <label>Imagem Principal</label>
                 <input type="file" name="img" class="form-control " id="img" required>
            </div>
            
            <div class="col-md-3">
                
             
            
            </div>
            

            
        <div class="col-md-12">
            <label>Noticia</label>
           
            <textarea name="noticia" id="noticia" rows="5" class="form-control" ></textarea>

              <?php echo '<script'; ?>
> 
              tinymce.init({ selector:'textarea'  });
              <?php echo '</script'; ?>
> 
          
          
      
            
         
          
          </div>
        
           <div class="col-md-12">
            <label>Slug</label>
            <input type="text" readonly name="slug" id="slug"   class="form-control" >
            
          </div>
        <!-- botão gravar -->
    
      
            
            <div class="col-md-4">

            </div>

            <div class="col-md-4">
                <br>
                <button class="btn btn-success btn-block btn-lg" name="btn_gravar"> Gravar </button>
            </div>

            <div class="col-md-4">

            </div>

    
     
        
        
    </form>
    
    
    
    
</section>

<br>
<br>
<br>
<br>


<?php }
}
