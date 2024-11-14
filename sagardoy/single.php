<?php
/*
Single de post
*/


get_header();


//Cabecera
set_query_var("titulo", get_the_title());
set_query_var("tags", get_the_tags());
set_query_var("fecha", get_the_date());


?>

<!-- Cabecera ok-->
<?php get_template_part('componentes/single/comp','cabecera');?>

<!-- the content -->
<section class="modulo-36 pt-130 pb-130">
    <div class="container">
      <div class="row">
        <div class="col-12 col-sm-12 col-lg-6">
          <div class="texto-top">Quam dui montes quam ultrices aliquet mollis ornare amet. Viverra phasellus sit integer proin faucibus. Ut nisl dictumst odio neque. Odio feugiat scelerisque non ac. Urna netus pellentesque nulla elementum. Turpis dictum vulputate bibendum velit sagittis. Purus nulla.</div>
          <h2 class="titulo-l">Titular tamaño L</h2>
          <h3 class="titulo-m">Titular tamaño M</h3>
          <p class="texto">
            Pulvinar nibh dignissim nec tristique congue. Lacus rhoncus sit euismod scelerisque vitae. Vestibulum faucibus lectus facilisi sed dui adipiscing. At massa non arcu hendrerit. Ante nibh et condimentum commodo auctor aliquet sit. Egestas tortor convallis pellentesque eget gravida. Velit est id ultricies magnis id viverra.
            <br><br>
            Malesuada magna lacus at tortor quisque. Etiam molestie amet cras facilisi nam lacus massa sed viverra. Nec massa scelerisque <span class="rojo">vestibulum egestas ullamcorper</span> magna massa proin consectetur. Sit vel tincidunt in sit auctor lacus sit. Sed faucibus vitae tincidunt libero. Mauris id convallis tristique semper cum. Blandit tristique vitae quam velit. Tincidunt porta neque nullam augue. Faucibus pulvinar feugiat at feugiat a in et quis. Turpis sit magna adipiscing in sed dolor sollicitudin. Maecenas semper tortor convallis nisi eget amet pretium. Sagittis facilisis mi egestas pulvinar.
          </p>
          <h4 class="titulo-s">(Titular tamaño S) Pulvinar nibh dignissim nec tristique congue. Lacus</h4>
          <ul class="lista">
            <li>Sagittis egestas quis convallis fringilla mauris lacus euismod tellus.</li>
            <li>Nec tristique nulla rutrum augue quam maecenas pharetra fames.</li>
            <li>Lacus placerat viverra sed ipsum elementum pharetra. Gravida porttitor dolor est ut dignissim consequat cras. Pellentesque lorem consectetur quam elit id. Elementum at id arcu eget gravida lectus sed. Eget avida porttitor dolor est ut dignissim consequat.</li>
            <li>Nec tristique nulla rutrum augue quam.</li>
            <li>Elementum at id arcu eget gravida lectus sed.</li>
          </ul>
          <div class="image-holder">
            <img src="images/img-noticia.png" class="image" alt="" />
            <p class="texto">Elementum at id arcu eget gravida lectus sed.</p>
          </div>
          <div class="testimonio">
            <div class="texto">“Id ac purus odio molestie semper arcu. Nam enim nulla et dolor at et feugiat at. Suspendisse aliquam phasellus donec non. Quam sagittis ornare sollicitudin lorem ornare vel. Mi turpis fusce vitae luctus purus natoque nunc ultricies nunc. Lacinia ut orci tempor pretium tortor.”</div>
            <div class="nombre">Nombre y Apellidos</div>
            <div class="cargo">Cargo</div>
          </div>

          <div class="bloque mb-100">
            <h3 class="titulo-m"><span class="num">1</span> Titular tamaño M</h3>
            <p class="texto">Pulvinar nibh dignissim nec tristique congue. Lacus rhoncus sit euismod scelerisque vitae. Vestibulum faucibus lectus facilisi sed dui adipiscing. At massa non arcu hendrerit. Ante nibh et condimentum commodo auctor aliquet sit. Egestas tortor convallis pellentesque eget gravida.</p>
          </div>

          <div class="bloque mb-100">
            <h3 class="titulo-m"><span class="num">2</span> Titular tamaño M</h3>
            <p class="texto">
              Pulvinar nibh dignissim nec tristique congue. Lacus rhoncus sit euismod scelerisque vitae. Vestibulum faucibus lectus facilisi sed dui adipiscing. At massa non arcu hendrerit. Ante nibh et condimentum commodo auctor aliquet sit. Egestas tortor convallis pellentesque eget gravida. Velit est id ultricies magnis id viverra.
              <br><br>
              Malesuada magna lacus at tortor quisque. Etiam molestie amet cras facilisi nam lacus massa sed viverra. Nec massa scelerisque vestibulum egestas ullamcorper magna massa proin consectetur. Sit vel tincidunt in sit auctor lacus sit. Sed faucibus vitae tincidunt libero. Mauris id convallis tristique semper cum. Blandit tristique vitae quam velit. Tincidunt porta neque nullam augue. Faucibus pulvinar feugiat at feugiat a in et quis. Turpis sit magna adipiscing in sed dolor sollicitudin. Maecenas semper tortor convallis nisi eget amet pretium. Sagittis facilisis mi egestas pulvinar.
            </p>
          </div>

          <div class="btns-redes">
            <div class="titulo">Compartir</div>
            <div class="btns-holder">
              <div class="btns">
                <a href="#" class="btn-linkedin"></a>
                <a href="#" class="btn-facebook"></a>
                <a href="#" class="btn-whatsapp"></a>
              </div>
              <a href="#" class="btn-copiar">Copiar enlace</a>
            </div>
          </div>

        </div>
        <div class="col-12 col-sm-12 col-lg-1"></div>
        <div class="col-12 col-sm-4 col-lg-4 d-none d-lg-block">
          <div class="noticias-relacionadas">
            <div class="titulo">Noticias relacionadas</div>
            
            <div class="noticia">
              <div class="row">
                <div class="col-8 col-sm-9 col-md-9 d-lg-flex align-items-center">
                  <a href="#" class="titulo">Dolor magna diam nunc sed in sit leonec netus a dui.</a>
                </div>
                <div class="col-4 col-sm-3 col-md-3">
                  <a href="#"><img src="images/img-noticia-01.png" class="image" alt="" /></a>
                </div>
              </div>
            </div>
            <div class="noticia">
              <div class="row">
                <div class="col-8 col-sm-9 col-md-9 d-lg-flex align-items-center">
                  <a href="#" class="titulo">Dolor magna diam nunc sed in sit leonec netus a dui.</a>
                </div>
                <div class="col-4 col-sm-3 col-md-3">
                  <a href="#"><img src="images/img-noticia-02.png" class="image" alt="" /></a>
                </div>
              </div>
            </div>
            <div class="noticia">
              <div class="row">
                <div class="col-8 col-sm-9 col-md-9 d-lg-flex align-items-center">
                  <a href="#" class="titulo">Dolor magna diam nunc sed in sit leonec netus a dui.</a>
                </div>
                <div class="col-4 col-sm-3 col-md-3">
                  <a href="#"><img src="images/img-noticia-03.png" class="image" alt="" /></a>
                </div>
              </div>
            </div>
            <div class="noticia">
              <div class="row">
                <div class="col-8 col-sm-9 col-md-9 d-lg-flex align-items-center">
                  <a href="#" class="titulo">Dolor magna diam nunc sed in sit leonec netus a dui.</a>
                </div>
                <div class="col-4 col-sm-3 col-md-3">
                  <a href="#"><img src="images/img-noticia-04.png" class="image" alt="" /></a>
                </div>
              </div>
            </div>
          </div>

          <div class="newletter">
            <div class="title">Suscríbete a la última hora en información y actualidad Jurídica</div>
            <div class="input-email">
              <input class="input" value="" placeholder="Email"></input>
              <a href="#" class="btn-link"></a>
            </div>
            <div class="politica">
              <label class="checkbox-holder">
                <input type="checkbox" checked="checked">
                <span class="checkmark"></span>
              </label>
              <div class="label">Enviando este formulario estoy aceptando la <a href="#">política de privacidad</a></div>
            </div>
          </div>

        </div>
        <div class="col-12 col-sm-12 col-lg-1"></div>
      </div>
    </div>
  </section>




<?php get_footer(); ?>