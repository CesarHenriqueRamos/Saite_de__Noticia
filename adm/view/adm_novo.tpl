<script src="{$GET_TEMA}/tema/js/tinymce/tinymce.min.js"></script>

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
                    {foreach from=$CATEGORIAS item=C}                    
                <option value="{$C.cate_id}">{$C.cate_nome}</option>  

                    {/foreach}                
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

              <script> 
              tinymce.init({ selector:'textarea'  });
              </script> 
          
          
      
            
         
          
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


