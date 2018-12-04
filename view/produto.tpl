 


{if $PRO_TOTAL < 1}
<H4 class="alert alert-danger">Nenhum produto encontrado!!</H4>
<meta http-equiv="refresh" content=1;url="{$PRODUTOS}">

{/if}
 
    
  
       
    <!--  começa lista de produtos  ---->   
  <section class="row">{foreach from=$PRO item=P} 
  		<div class="col-md-3">
  			
              <div class="thumbnail">
                <img src="{$P.img_p}" alt="imagem">
                <div class="caption">
                  <h3>{$P.titulo}</h3>                  
                  <p><a href="{$PRO_INFO}/{$P.id}/{$P.slug}" class="btn btn-primary" role="button">Ver mais...</a></p>
                </div>
              </div>
              	
            </div>     	        
    {/foreach}
    </section>
    
    
     <!--  paginação inferior   -->  
    <section id="pagincao" class="row">
    <center>
    {$PAGINAS}
    </center>
    </section>

