<?php 
get_header();

?>

<body>

  <nav class="navbar navbar-expand-lg">
    <div class="menu-content">
      <a class="navbar-brand d-block d-lg-none" href="#"><img src="images/logo.svg" class="logo" alt="" /></a>
      <div id="main-nav" class="collapse navbar-collapse">
        <div class="navbar-nav">
          <div class="col-left">
            <a class="navbar-brand" href="#"><img src="images/logo.svg" class="logo" alt="" /></a>
          </div>
          <div class="col-right">
            <ul class="btns-link">
              <li class="btn-link_"><a href="nosotros.html">Nosotros</a></li>
              <li class="btn-link_"><a href="cervicios.html">Servicios</a></li>
              <li class="btn-link_ btn-equipo">
                <a href="equipo.html">Equipo</a>
                <div class="submenu equipo">
                  <div class="row">
                    <div class="col-4">
                      <div class="titulo">Equipo</div>
                      <div class="texto">Facilisi vitae suspendisse eget dui donec, a quisque quis in quis integer volutpat. In tellus commodo.</div>
                    </div>
                    <div class="col-2"></div>
                    <div class="col-6">
                      <div class="form">
                        <div class="row">
                          <div class="col-12">
                            <div class="subtitulo">Buscar abogado</div>
                            <div class="input-email">
                              <input class="input" value="" placeholder="Buscar"></input>
                              <a href="#" class="btn-lupa"></a>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-4">
                            <div class="select">
                              <select id="standard-select">
                                <option value="0" disabled selected>Cargo</option>
                                <option value="1">Opción 1</option>
                                <option value="2">Opción 2</option>
                                <option value="3">Opción 3</option>
                                <option value="4">Opción 4</option>
                                <option value="5">Opción 5</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-4">
                            <div class="select">
                              <select id="standard-select">
                                <option value="0" disabled selected>Sede</option>
                                <option value="1">Opción 1</option>
                                <option value="2">Opción 2</option>
                                <option value="3">Opción 3</option>
                                <option value="4">Opción 4</option>
                                <option value="5">Opción 5</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-4">
                            <a href="#" class="btn-buscar">Buscar</a>
                          </div>
                        </div>
                      </div>
                      <ul class="btns">
                        <li><a href="#">Conoce a nuestro equipo</a></li>
                        <li><a href="#">Únete al equipo</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </li>
              <li class="btn-link_ btn-actualidad">
                <a href="actualidad.html">Actualidad</a>
                <div class="submenu actualidad">
                  <div class="row">
                    <div class="col-4">
                      <div class="titulo">Actualidad</div>
                      <div class="texto">Facilisi vitae suspendisse eget dui donec, a quisque quis in quis integer volutpat. In tellus commodo </div>
                    </div>
                    <div class="col-2"></div>
                    <div class="col-6">
                      <ul class="btns">
                        <li><a href="#">Noticias</a></li>
                        <li><a href="#">Publicacones</a></li>
                      </ul>
                      <div class="subtitulo">Últimas noticias y publicaciones</div>
                      <div class="noticias">
                        <div class="noticia">
                          <div class="row">
                            <div class="col-8"><div class="texto">Dolor magna diam nunc sed in sit leonec netus a dui.</div></div>
                            <div class="col-4 text-end"><img src="images/img-publicaciones-05.jpg" class="img-fluid" alt="" /></div>
                          </div>
                        </div>
                        <div class="noticia">
                          <div class="row">
                            <div class="col-8"><div class="texto">Dolor magna diam nunc sed in sit leonec netus a dui.</div></div>
                            <div class="col-4 text-end"><img src="images/img-publicaciones-06.jpg" class="img-fluid" alt="" /></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="btn-link_"><a href="sagardoy-school.html">Sagardoy School</a></li>
              <li class="btn-link_ contacto"><a href="contacto.html">Contacto</a></li>
            </ul>
            <div class="idioma-dropdown-menu">
              <a class="btn-idioma" href="#" data-bs-toggle="dropdown">Es</a>
              <ul class="dropdown-menu">
                <li><a href="#">Es</a></li>
                <li class="linea"></li>
                <li><a href="#">En</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="navbar-nav-mobile d-block d-lg-none">
          <a href="nosotros.html" class="btn-link">Nosotros</a>
          <a href="servicios.html" class="btn-link">Servicios</a>
          <a href="equipo.html" class="btn-link btn-equipo">Equipo</a>
          <a href="actualidad.html" class="btn-link btn-actualidad">Actualidad</a>
          <a href="sagardoy-school.html" class="btn-link">Sagardoy School</a>
          <a href="contacto.html" class="btn-link">Contacto</a>
          <div class="btn-idiomas">
            <a href="#" class="btn-idioma">Español</a>
            <a href="#" class="btn-idioma activo">English</a>
          </div>
          <a href="#" class="btn-contacto">Contacto</a>
          <div class="holder-equipo">
            <div class="container">
              <div class="row">
                <div class="col-12">
                  <div class="titulo"><a href="#" class="btn-volver"></a>Equipo</div>
                  <div class="form">
                    <div class="subtitulo">Buscar abogado</div>
                    <div class="input-email">
                      <input class="input" value="" placeholder="Buscar"></input>
                      <a href="#" class="btn-lupa"></a>
                    </div>
                    <div class="select">
                      <select id="standard-select">
                        <option value="0" disabled selected>Cargo</option>
                        <option value="1">Opción 1</option>
                        <option value="2">Opción 2</option>
                        <option value="3">Opción 3</option>
                        <option value="4">Opción 4</option>
                        <option value="5">Opción 5</option>
                      </select>
                    </div>
                    <div class="select">
                      <select id="standard-select">
                        <option value="0" disabled selected>Sede</option>
                        <option value="1">Opción 1</option>
                        <option value="2">Opción 2</option>
                        <option value="3">Opción 3</option>
                        <option value="4">Opción 4</option>
                        <option value="5">Opción 5</option>
                      </select>
                    </div>
                    <a href="#" class="btn-buscar">Buscar</a>
                  </div>
                  <ul class="btns">
                    <li><a href="equipo.html">Conoce a nuestro equipo</a></li>
                    <li><a href="unete-al-equipo.html">Únete al equipo</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="holder-actualidad">
            <div class="container">
              <div class="row">
                <div class="col-12">
                  <div class="titulo"><a href="#" class="btn-volver"></a>Actualidad</div>
                  <ul class="btns">
                    <li><a href="noticias.html">Noticias</a></li>
                    <li><a href="publicaciones.html">Publicaciones</a></li>
                  </ul>
                  <div class="subtitulo">Últimas noticias y publicaciones</div>
                  <div class="noticias">
                    <div class="noticia">
                      <div class="row">
                        <div class="col-9">
                          <div class="top">
                            <div class="categoria">NOTICIAS</div>
                            <div class="fecha">25.12.2024</div>
                          </div>
                          <a href="#" class="titulo">Dolor magna diam nunc sed in sit leo. Nec netus a dui ipsum sit diam quam. Erat massa.</a>
                        </div>
                        <div class="col-3">
                          <a href="#"><img src="images/img-publicaciones-06.jpg" class="image" alt="" /></a>
                        </div>
                      </div>
                    </div>
                    <div class="noticia">
                      <div class="row">
                        <div class="col-9">
                          <div class="top">
                            <div class="categoria">NOTICIAS</div>
                            <div class="fecha">25.12.2024</div>
                          </div>
                          <a href="#" class="titulo">Dolor magna diam nunc sed in sit leo. Nec netus a dui ipsum sit diam quam. Erat massa.</a>
                        </div>
                        <div class="col-3">
                          <a href="#"><img src="images/img-publicaciones-07.jpg" class="image" alt="" /></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#main-nav"  aria-expanded="false" aria-label="" title="navbar-toggler"><i class="ico-menu"></i><i class="ico-cerrar"></i></button>
    </div>
  </nav>

  <section class="section cabecera-home cabecera">
    <div class="data">
      <h2 class="titulo">La firma <u>líder</u></h2>
      <p class="texto">en derecho laboral</p>
    </div>
    <img src="images/img-hero-home.jpg" class="img-fluid" alt="" />
  </section>

  <section class="modulo-01 pt-130 pb-130">
    <div class="container">
      <div class="row">
        <div class="col-12 col-sm-9 col-md-9">
          <h2 class="texto">Lideramos desde la responsabilidad, guiamos desde el compromiso.</h2>
          <div class="holder"><a href="#" class="btn-sobre-nosotros">Sobre nosotros</a></div>
          <div class="holder"><a href="#" class="btn-servicios">Servicios Sagardoy</a></div>
        </div>
        <div class="col-12 col-sm-3 col-md-3"></div>
      </div>
    </div>
  </section>

  <section class="modulo-02 pt-130 pb-130">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center">
          <h2 class="texto">Excelencia premiada. Calidad reconocida.</h2>
        </div>
      </div>
      <div class="slider-logos">
        <div class="slick-slider" data-sizes="100vw">
          <div><img src="images/img-logo-01.jpg" class="img-fluid" alt=""></div>
          <div><img src="images/img-logo-02.jpg" class="img-fluid" alt=""></div>
          <div><img src="images/img-logo-03.jpg" class="img-fluid" alt=""></div>
          <div><img src="images/img-logo-04.jpg" class="img-fluid" alt=""></div>
          <div><img src="images/img-logo-05.jpg" class="img-fluid" alt=""></div>
          <div><img src="images/img-logo-06.jpg" class="img-fluid" alt=""></div>
          <div><img src="images/img-logo-07.jpg" class="img-fluid" alt=""></div>
        </div>
      </div>
    </div>
  </section>

  <section class="modulo-03 pt-90 pb-90">
    <div class="container">
      <div class="row">
        <div class="col-12 col-sm-3 col-md-3 text-center">
          <div class="holder">
            <div class="numero"><span class="plus">+</span><span class="counter" data-count="43">0</span></div>
            <div class="texto">años de experiencia</div>
          </div>
        </div>
        <div class="col-12 col-sm-3 col-md-3 text-center">
          <div class="holder">
            <div class="numero"><span class="plus">+</span><span class="counter" data-count="350">0</span></div>
            <div class="texto">profesionales</div>
          </div>
        </div>
        <div class="col-12 col-sm-3 col-md-3 text-center">
          <div class="holder">
            <div class="numero"><span class="counter" data-count="35">0</span></div>
            <div class="texto">sedes en el mundo</div>
          </div>
        </div>
        <div class="col-12 col-sm-3 col-md-3 text-center">
          <div class="holder">
            <div class="numero"><span class="plus">+</span><span class="counter" data-count="43">0</span></div>
            <div class="texto">años de experiencia</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="modulo-04 pt-130 pb-130">
    <div class="container">
      <div class="row">
        <div class="col-12 col-sm-4 col-md-4">
          <div class="subtitulo">Últimas noticias</div>
          <div class="titulo">Lo último, primero en Sagardoy</div>
          <a href="#" class="btn-ver-mas">VER MÁS NOTICIAS</a>
        </div>
        <div class="col-12 col-sm-2 col-md-2"></div>
        <div class="col-12 col-sm-6 col-md-6">
          <div class="noticias">
            <div class="noticia">
              <div class="row">
                <div class="col-7 col-sm-8 col-md-8">
                  <div class="top">
                    <div class="categoria">NOTICIAS</div>
                    <div class="fecha">25.12.2024</div>
                  </div>
                  <a href="#" class="titulo">Dolor magna diam nunc sed in sit leo. Nec netus a dui ipsum sit diam quam. Erat massa.</a>
                </div>
                <div class="col-5 col-sm-4 col-md-4">
                  <a href="#"><img src="images/img-noticia-01.png" class="image" alt="" /></a>
                </div>
              </div>
            </div>
            <div class="noticia">
              <div class="row">
                <div class="col-7 col-sm-8 col-md-8">
                  <div class="top">
                    <div class="categoria">RECONOCIMIENTOS</div>
                    <div class="fecha">25.12.2024</div>
                  </div>
                  <a href="#" class="titulo">Et dignissim duis volutpat imperdiet auctor ultrices vel odio. Elementum et tempor ullamcorper montes lorem at cursus. Congue phasellus lorem ipsum.</a>
                </div>
                <div class="col-5 col-sm-4 col-md-4">
                  <a href="#"><img src="images/img-noticia-02.png" class="image" alt="" /></a>
                </div>
              </div>
            </div>
            <div class="noticia">
              <div class="row">
                <div class="col-7 col-sm-8 col-md-8">
                  <div class="top">
                    <div class="categoria">EVENTOS</div>
                    <div class="fecha">25.12.2024</div>
                  </div>
                  <a href="#" class="titulo">Gravida purus volutpat ultrices aenean pellentesque ultrices luctus risus faucibus.</a>
                </div>
                <div class="col-5 col-sm-4 col-md-4">
                  <a href="#"><img src="images/img-noticia-03.png" class="image" alt="" /></a>
                </div>
              </div>
            </div>
          </div>
          <a href="#" class="btn-ver-mas mobile">VER MÁS NOTICIAS</a>
        </div>
      </div>
    </div>
  </section>

  <section class="modulo-05 bg-gris pt-130 pb-130">
    <div class="container">
      <div class="row">
        <div class="col-12 col-sm-6 col-md-6">
          <h2 class="titulo mb-70">Publicaciones destacadas.</h2>
        </div>
        <div class="col-12 col-sm-6 col-md-6 text-end">
          <div class="d-inline-flex align-items-center gap-3">
            <a href="#" class="btn-ver-mas">Ver más publicaciones</a>
            <div id="btns_slider_01" class="btns-slider">
              <a href="#" class="icons ico-flecha-left btn-prev"></a>
              <a href="#" class="icons ico-flecha-right btn-next"></a>
            </div>
          </div>
        </div>
      </div>
      <div id="slider_01" class="slider-publicaciones">
        <div class="slick-slider" data-sizes="100vw">
          <div>
            <a href="#">
              <div class="line-border">
                <div class="row">
                  <div class="col-5 col-sm-4 col-md-4">
                    <img src="images/img-publicaciones-01.jpg" class="img-fluid" alt="">
                  </div>
                  <div class="col-7 col-sm-8 col-md-8">
                    <div class="data">
                      <div class="d-flex flex-column justify-content-between">
                        <div>
                          <h2 class="subtitulo">HUMAN CAPITAL OUTLOOK No 25</h2>
                          <h2 class="titulo">Gravida purus volutpat ultrices aenean pellentesque ultrices luctus risus faucibus.</h2>
                        </div>
                        <div>
                          <div class="fecha">25.12.2024</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div>
            <a href="#">
              <div class="line-border">
                <div class="row">
                  <div class="col-5 col-sm-4 col-md-4">
                    <img src="images/img-publicaciones-02.jpg" class="img-fluid" alt="">
                  </div>
                  <div class="col-7 col-sm-8 col-md-8">
                    <div class="data">
                      <div class="d-flex flex-column justify-content-between">
                        <div>
                          <h2 class="subtitulo">HUMAN CAPITAL OUTLOOK No 25</h2>
                          <h2 class="titulo">Gravida purus volutpat ultrices aenean pellentesque ultrices luctus risus faucibus.</h2>
                        </div>
                        <div>
                          <div class="fecha">25.12.2024</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div>
            <a href="#">
              <div class="line-border">
                <div class="row">
                  <div class="col-5 col-sm-4 col-md-4">
                    <img src="images/img-publicaciones-03.jpg" class="img-fluid" alt="">
                  </div>
                  <div class="col-7 col-sm-8 col-md-8">
                    <div class="data">
                      <div class="d-flex flex-column justify-content-between">
                        <div>
                          <h2 class="subtitulo">HUMAN CAPITAL OUTLOOK No 25</h2>
                          <h2 class="titulo">Gravida purus volutpat ultrices aenean pellentesque ultrices luctus risus faucibus.</h2>
                        </div>
                        <div>
                          <div class="fecha">25.12.2024</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div>
            <a href="#">
              <div class="line-border">
                <div class="row">
                  <div class="col-5 col-sm-4 col-md-4">
                    <img src="images/img-publicaciones-01.jpg" class="img-fluid" alt="">
                  </div>
                  <div class="col-7 col-sm-8 col-md-8">
                    <div class="data">
                      <div class="d-flex flex-column justify-content-between">
                        <div>
                          <h2 class="subtitulo">HUMAN CAPITAL OUTLOOK No 25</h2>
                          <h2 class="titulo">Gravida purus volutpat ultrices aenean pellentesque ultrices luctus risus faucibus.</h2>
                        </div>
                        <div>
                          <div class="fecha">25.12.2024</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div>
            <a href="#">
              <div class="line-border">
                <div class="row">
                  <div class="col-5 col-sm-4 col-md-4">
                    <img src="images/img-publicaciones-02.jpg" class="img-fluid" alt="">
                  </div>
                  <div class="col-7 col-sm-8 col-md-8">
                    <div class="data">
                      <div class="d-flex flex-column justify-content-between">
                        <div>
                          <h2 class="subtitulo">HUMAN CAPITAL OUTLOOK No 25</h2>
                          <h2 class="titulo">Gravida purus volutpat ultrices aenean pellentesque ultrices luctus risus faucibus.</h2>
                        </div>
                        <div>
                          <div class="fecha">25.12.2024</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div>
            <a href="#">
              <div class="line-border">
                <div class="row">
                  <div class="col-5 col-sm-4 col-md-4">
                    <img src="images/img-publicaciones-03.jpg" class="img-fluid" alt="">
                  </div>
                  <div class="col-7 col-sm-8 col-md-8">
                    <div class="data">
                      <div class="d-flex flex-column justify-content-between">
                        <div>
                          <h2 class="subtitulo">HUMAN CAPITAL OUTLOOK No 25</h2>
                          <h2 class="titulo">Gravida purus volutpat ultrices aenean pellentesque ultrices luctus risus faucibus.</h2>
                        </div>
                        <div>
                          <div class="fecha">25.12.2024</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
      <a href="#" class="btn-ver-mas mobile">Ver más publicaciones</a>
    </div>
  </section>

  <section class="modulo-06 pt-65 pb-130">
    <div class="container">
      <div class="row">
        <div class="col-12 col-sm-12 col-lg-5">
          <h2 class="titulo">Acompañamos a nuestros clientes allí donde estén</h2>
          <p class="texto">Asesoramos a nuestros clientes en España desde nuestras sedes en <b>Madrid, Barcelona, Málaga, Sevilla, Bilbao y Las Palmas de Gran Canaria</b>. Además, nuestra presencia global se refuerza a través de Ius Laboris, una reconocida asociación internacional de firmas especializadas en asesoramiento laboral, de la cual somos miembros fundadores.</p>
        </div>
        <div class="col-12 col-sm-12 col-lg-7">
          <img src="images/img-mapa.svg" class="img-fluid" alt="" />
        </div>
      </div>
      <div class="cols-bottom">
        <div class="row">
          <div class="col-12 col-sm-12 col-lg-6">
            <h2 class="titulo">Sedes en España</h2>
            <p class="texto">Encuentra nuestras sedes en: Madrid</p>
            <ul class="lista">
              <li><a href="#">Barcelona</a></li>
              <li><a href="#">Málaga</a></li>
              <li><a href="#">Sevilla</a></li>
              <li><a href="#">Bilbao</a></li>
              <li><a href="#">Las Palmas de Gran Canaria.</a></li>
            </ul>
          </div>
          <div class="col-12 col-sm-12 col-lg-6">
            <h2 class="titulo">Sagardoy en el mundo</h2>
            <p class="texto">Somos un despacho sin límites, ni fronteras, presente en los 5 continentes y asentado en más de 56 países, con más de 1,500 abogados a nivel mundial, a través de Ius Laboris.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="modulo-07 pt-130 pb-130">
    <div class="container">
      <div class="row">
        <div class="col-12 col-sm-5 col-md-5">
          <img src="images/logo-sagardoy-school.svg" class="logo" alt="" />
          <img src="images/img-school.jpg" class="img-fluid" alt="" />
        </div>
        <div class="col-12 col-sm-1 col-md-1"></div>
        <div class="col-12 col-sm-6 col-md-6">
          <h2 class="titulo">Impulsa tu carrera profesional con Sagardoy School</h2>
          <p class="texto">Asesoramos a nuestros clientes en España desde nuestras sedes en <b>Madrid, Barcelona, Málaga, Sevilla, Bilbao y Las Palmas de Gran Canaria</b>. Además, nuestra presencia global se refuerza a través de Ius Laboris, una reconocida asociación internacional de firmas especializadas en asesoramiento laboral, de la cual somos miembros fundadores.</p>
          <a href="#" class="btn-link">SAGARDOY SCHOOL</a>
        </div>
      </div>
    </div>
  </section>

  <section class="modulo-08 pt-130 pb-130">
    <div class="container">
      <div class="btns-slider-testimonios">
        <a href="#" class="icons ico-flecha-left btn-prev"></a>
        <a href="#" class="icons ico-flecha-right btn-next"></a>
      </div>
      <div class="row">
        <div class="col-12 col-sm-10 col-md-10">
          <div class="slider-testimonios">
            <div class="slick-slider" data-sizes="100vw">
              <div>
                <h2 class="texto">“Mattis nullam imperdiet elit urna mollis. Mi et tortor sit est pretium vulputate aliquam donec pellentesque. At egestas tortor scelerisque lobortis.”</h2>
              </div>
              <div>
                <h2 class="texto">2 “Mattis nullam imperdiet elit urna mollis. Mi et tortor sit est pretium vulputate aliquam donec pellentesque. At egestas tortor scelerisque lobortis.”</h2>
              </div>
              <div>
                <h2 class="texto">3 “Mattis nullam imperdiet elit urna mollis. Mi et tortor sit est pretium vulputate aliquam donec pellentesque. At egestas tortor scelerisque lobortis.”</h2>
              </div>
              <div>
                <h2 class="texto">4 “Mattis nullam imperdiet elit urna mollis. Mi et tortor sit est pretium vulputate aliquam donec pellentesque. At egestas tortor scelerisque lobortis.”</h2>
              </div>
              <div>
                <h2 class="texto">5 “Mattis nullam imperdiet elit urna mollis. Mi et tortor sit est pretium vulputate aliquam donec pellentesque. At egestas tortor scelerisque lobortis.”</h2>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-2 col-md-2"></div>
      </div>
    </div>
  </section>

  <section class="modulo-09 pt-130 pb-130">
    <div class="container">
      <div class="row">
        <div class="col-12 col-sm-5 col-md-5">
          <img src="images/img-contactanos.jpg" class="img-fluid" alt="" />
        </div>
        <div class="col-12 col-sm-1 col-md-1"></div>
        <div class="col-12 col-sm-6 col-md-6">
          <h2 class="titulo">¿Necesitas más información sobre nuestros servicios?</h2>
          <a href="#" class="btn-link">CONTÁCTANOS</a>
        </div>
      </div>
    </div>
  </section>

  <section class="modulo-10 pt-130 pb-130">
    <div class="container">
      <div class="row">
        <div class="col-12 col-sm-12 col-lg-2"></div>
        <div class="col-12 col-sm-12 col-lg-8 text-center">
          <h2 class="titulo"><u>Suscríbete</u> a la última hora en información y actualidad Jurídica</h2>
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
        <div class="col-12 col-sm-12 col-lg-2"></div>
      </div>
    </div>
  </section>


<?php 
get_footer();

?>