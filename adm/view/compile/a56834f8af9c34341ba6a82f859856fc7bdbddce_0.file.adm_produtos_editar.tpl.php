<?php
/* Smarty version 3.1.33, created on 2018-11-28 15:29:04
  from 'C:\xampp\htdocs\saite\adm\view\adm_produtos_editar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bfed060a34a63_00421845',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a56834f8af9c34341ba6a82f859856fc7bdbddce' => 
    array (
      0 => 'C:\\xampp\\htdocs\\saite\\adm\\view\\adm_produtos_editar.tpl',
      1 => 1543426068,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bfed060a34a63_00421845 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/tema/js/tinymce/tinymce.min.js"><?php echo '</script'; ?>
>      

<h4 class="text-center"> Editar produto </h4>
<hr>
  

<!-- começa os campos para form produto    -->
<section class="row" id="camposproduto">
                                           <!--  enctype="multipart/form-data"  -->
    <form name="frm_produto" method="post" action=""  enctype="multipart/form-data">
        
           <div class="col-md-4">
            <label>Catogoria</label>
         
            <select name="categoria" id="categoria" class="form-control" required>
              
                <option value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['categoria'];?>
"> <?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['nome_cate'];?>
 </option>                           
                <option value=""> Escolha</option>                           
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
            <input type="text"  name="titulo" id="titulo"   class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['titulo'];?>
">
          </div>
        
        
        
       
        <div class="col-md-12">
            
            <div class="col-md-4">
               <hr> 
               <img src="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['img'];?>
" class="thumbnail" alt="">
                
            </div>
            
            <div class="col-md-4">
            
                 <hr>
                 <label>Imagem Principal</label>
                 <!--- campos para adicionar a imagem---->
                 <input type="file" name="img" class="form-control btn btn-default" id="img">
                 <!--pega o nome da imagem atual -->
                 <input type="hidden" name="img_atual" id="img_atual" value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['img_atual'];?>
">
                 <!----pega o caminho completo da imagem atual -->
                 <input type="hidden" name="img_arquivo" id="img_arquivo" value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['img_arquivo'];?>
">
              

          
            </div>
            
            

            
        </div>
        
        
        
           <div class="col-md-12">
            <label>Noticia</label>
           
            <textarea name="noticia" id="noticia" rows="5" class="form-control" ><?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['noticia'];?>
</textarea>

              <?php echo '<script'; ?>
> 
              tinymce.init({ selector:'textarea'  });
              <?php echo '</script'; ?>
> 
          
          
      
            
         
          
          </div>
        
           <div class="col-md-12">
            <label>Slug</label>
            <input type="text" readonly name="slug" id="slug"   class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['slug'];?>
">
            
          </div>
        
        <!-- botão gravar -->
    
      
            
            <div class="col-md-4">

            </div>

            <div class="col-md-4">
                <br>
                <button class="btn btn-success btn-block btn-lg" name="btn_gravar"> Editar </button>
            </div>

            <div class="col-md-4 text-right">
               
            </div>

    
        <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['id'];?>
">



        
        
    </form>
    
    
    
    
</section>
        
        
        
        <!---bloco de apagar o produto -->
        <section class="row">

            <div class="col-md-4">

            </div>

            <div class="col-md-4">


            </div>

            <div class="col-md-4 text-right">
                <!--- botão que abre a opção de apagar -->
                <br>
                <button class="btn btn-danger " name="btn_apagar" data-toggle="collapse" data-target="#btnapagar" ><i class="glyphicon glyphicon-remove"></i> Apagar Produto</button> 

            </div>


            <div class="col-md-12 text-center collapse alert alert-danger" id="btnapagar">

                <br>
            

                <form name="frm_apagar" method="post" action="">
                    <label>Apagar este produto?</label>

                    <input type="radio" name="confirmar" value="SIM" required>
                    <!---botao que apagar o produto de uma vez -->
                    <button class="btn btn-danger " name="btn_apagar"><i class="glyphicon glyphicon-remove"></i> OK </button> 




                    <input type="hidden" name="id_apagar" value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['id'];?>
">
                    <input type="hidden" name="apagar" value="SIM">
                    
                       <!----pega o caminho completo da imagem atual -->
                 <input type="hidden" name="img_arquivo" id="img_arquivo" value="<?php echo $_smarty_tpl->tpl_vars['PRO']->value[1]['img_arquivo'];?>
">

                </form>

            </div>


        </section>
        

<br>
<br>
<br>
<br>
 <?php }
}
