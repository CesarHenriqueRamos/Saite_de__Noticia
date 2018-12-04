<script src="{$GET_TEMA}/tema/js/tinymce/tinymce.min.js"></script>      

<h4 class="text-center"> Editar produto </h4>
<hr>
  

<!-- começa os campos para form produto    -->
<section class="row" id="camposproduto">
                                           <!--  enctype="multipart/form-data"  -->
    <form name="frm_produto" method="post" action=""  enctype="multipart/form-data">
        
           <div class="col-md-4">
            <label>Catogoria</label>
         
            <select name="categoria" id="categoria" class="form-control" required>
              
                <option value="{$PRO.1.categoria}"> {$PRO.1.nome_cate} </option>                           
                <option value=""> Escolha</option>                           
                    {foreach from=$CATEGORIAS item=C}                    
                <option value="{$C.cate_id}">{$C.cate_nome}</option>                                        
                    {/foreach}                
            </select>
            
            
        </div>
        
        
        
           <div class="col-md-6">
             <label>Titulo</label>
            <input type="text"  name="titulo" id="titulo"   class="form-control" value="{$PRO.1.titulo}">
          </div>
        
        
        
       
        <div class="col-md-12">
            
            <div class="col-md-4">
               <hr> 
               <img src="{$PRO.1.img}" class="thumbnail" alt="">
                
            </div>
            
            <div class="col-md-4">
            
                 <hr>
                 <label>Imagem Principal</label>
                 <!--- campos para adicionar a imagem---->
                 <input type="file" name="img" class="form-control btn btn-default" id="img">
                 <!--pega o nome da imagem atual -->
                 <input type="hidden" name="img_atual" id="img_atual" value="{$PRO.1.img_atual}">
                 <!----pega o caminho completo da imagem atual -->
                 <input type="hidden" name="img_arquivo" id="img_arquivo" value="{$PRO.1.img_arquivo}">
              

          
            </div>
            
            

            
        </div>
        
        
        
           <div class="col-md-12">
            <label>Noticia</label>
           
            <textarea name="noticia" id="noticia" rows="5" class="form-control" >{$PRO.1.noticia}</textarea>

              <script> 
              tinymce.init({ selector:'textarea'  });
              </script> 
          
          
      
            
         
          
          </div>
        
           <div class="col-md-12">
            <label>Slug</label>
            <input type="text" readonly name="slug" id="slug"   class="form-control" value="{$PRO.1.slug}">
            
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

    
        <input type="hidden" name="id" value="{$PRO.1.id}">



        
        
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




                    <input type="hidden" name="id_apagar" value="{$PRO.1.id}">
                    <input type="hidden" name="apagar" value="SIM">
                    
                       <!----pega o caminho completo da imagem atual -->
                 <input type="hidden" name="img_arquivo" id="img_arquivo" value="{$PRO.1.img_arquivo}">

                </form>

            </div>


        </section>
        

<br>
<br>
<br>
<br>
 