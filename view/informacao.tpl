 
  <hr>

{if $PRO_TOTAL < 1}
<H4 class="alert alert-danger">Nenhum produto encontrado!!</H4>
<meta http-equiv="refresh" content=1;url="{$PRODUTOS}">

{/if}
 
    
  
       
    <!--  começa lista de produtos  ---->   
  <section id="produtos" class="row">  
 
		<ul style="list-style: none" >
		    
		    
		  
		                  <div class="row" id="pularliha">
		        {foreach from=$PRO item=P} 
		           
		        <li class="col-md-4">

		            <div class="thumbnail">

		                <a href="{$PRO_INFO}/{$P.pro_id}/{$P.pro_slug}">


		                    <img src="{$P.pro_img}" width="200" height="200" alt="" > 

		                    <div class="caption">

		                        <h4 class="text-center"> {$P.titulo}</h4> 

		                        <h3 class="text-center text-danger">R$ {$P.titulo}</h3>

		                    </div>

		                </a>

		            </div>


		        </li>

		        {/foreach}
		        
		         </div>
		         
		    
		</ul>
    
    </section>
    
    
     <!--  paginação inferior   -->  
    <section id="pagincao" class="row">
    <center>
    {$PAGINAS}
    </center>
    </section>
