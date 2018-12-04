  <section>
    <div class="row" id="pularliha">
      <div id="materia" class="row">
      
        {foreach from=$PRO item=$P}
        <div class="col-md-12">
          <div class="thumbnail">           
            <img src="{$P.img_g}" >
            <div class="caption">
              <h4 class="text-center">{$P.titulo}</h4>
              <p>{$P.noticia}</p>
            </div>            
          </div>
        </div>
        {/foreach}
      </div>
    </div>
  </section>
 