<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="theme-color" content="#333">
    <title>UTAM</title>
    <meta name="description" content="Material Style Theme">
    <link rel="shortcut icon" href="{{ asset('assets/img/favicon-utam-blue.png') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/plugins/revolution/revolution/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css') }}">
    <!-- REVOLUTION STYLE SHEETS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/plugins/revolution/revolution/css/settings.css') }}">
    <!-- REVOLUTION LAYERS STYLES -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/plugins/revolution/revolution/css/layers.css') }}">
    <!-- REVOLUTION NAVIGATION STYLES -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/plugins/revolution/revolution/css/navigation.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/preload.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins.min.css') }}">
    <!-- TYPEWRITER ADDON -->
    <script type="text/javascript" src="{{ asset('assets/plugins/revolution/revolution-addons/typewriter/js/revolution.addon.typewriter.min.js') }}"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/plugins/revolution/revolution-addons/typewriter/css/typewriter.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.grey-800.min.css') }}">
    <!--[if lt IE 9]>
        <script src="assets/js/html5shiv.min.js"></script>
        <script src="assets/js/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div id="ms-preload" class="ms-preload">
      <div id="status">
        <div class="spinner">
          <div class="dot1"></div>
          <div class="dot2"></div>
        </div>
      </div>
    </div>
    <div class="ms-site-container">
      <!-- Modal -->
      <div class="modal modal-primary" id="ms-account-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog animated zoomIn animated-3x" role="document">
          <div class="modal-content">
            <div class="modal-header d-block shadow-2dp no-pb">
              <button type="button" class="close d-inline pull-right mt-2" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">
                  <i class="zmdi zmdi-close"></i>
                </span>
              </button>
              <div class="modal-title text-center">
                <span class="ms-logo ms-logo-white ms-logo-sm mr-1">M</span>
                <h3 class="no-m ms-site-title">Material
                  <span>Style</span>
                </h3>
              </div>
              <div class="modal-header-tabs">
                <ul class="nav nav-tabs nav-tabs-full nav-tabs-3 nav-tabs-primary" role="tablist">
                  <li class="nav-item" role="presentation">
                    <a href="#ms-login-tab" aria-controls="ms-login-tab" role="tab" data-toggle="tab" class="nav-link active withoutripple">
                      <i class="zmdi zmdi-account"></i> Login</a>
                  </li>
                  <li class="nav-item" role="presentation">
                    <a href="#ms-register-tab" aria-controls="ms-register-tab" role="tab" data-toggle="tab" class="nav-link withoutripple">
                      <i class="zmdi zmdi-account-add"></i> Register</a>
                  </li>
                  <li class="nav-item" role="presentation">
                    <a href="#ms-recovery-tab" aria-controls="ms-recovery-tab" role="tab" data-toggle="tab" class="nav-link withoutripple">
                      <i class="zmdi zmdi-key"></i> Recovery Pass</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="modal-body">
              <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade active show" id="ms-login-tab">
                  <form autocomplete="off">
                    <fieldset>
                      <div class="form-group label-floating">
                        <div class="input-group">
                          <span class="input-group-addon">
                            <i class="zmdi zmdi-account"></i>
                          </span>
                          <label class="control-label" for="ms-form-user">Username</label>
                          <input type="text" id="ms-form-user" class="form-control"> </div>
                      </div>
                      <div class="form-group label-floating">
                        <div class="input-group">
                          <span class="input-group-addon">
                            <i class="zmdi zmdi-lock"></i>
                          </span>
                          <label class="control-label" for="ms-form-pass">Password</label>
                          <input type="password" id="ms-form-pass" class="form-control"> </div>
                      </div>
                      <div class="row mt-2">
                        <div class="col-md-6">
                          <div class="form-group no-mt">
                            <div class="checkbox">
                              <label>
                                <input type="checkbox"> Remember Me </label>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <button class="btn btn-raised btn-primary pull-right">Login</button>
                        </div>
                      </div>
                    </fieldset>
                  </form>
                  <div class="text-center">
                    <h3>Login with</h3>
                    <a href="javascript:void(0)" class="wave-effect-light btn btn-raised btn-facebook">
                      <i class="zmdi zmdi-facebook"></i> Facebook</a>
                    <a href="javascript:void(0)" class="wave-effect-light btn btn-raised btn-twitter">
                      <i class="zmdi zmdi-twitter"></i> Twitter</a>
                    <a href="javascript:void(0)" class="wave-effect-light btn btn-raised btn-google">
                      <i class="zmdi zmdi-google"></i> Google</a>
                  </div>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="ms-register-tab">
                  <form>
                    <fieldset>
                      <div class="form-group label-floating">
                        <div class="input-group">
                          <span class="input-group-addon">
                            <i class="zmdi zmdi-account"></i>
                          </span>
                          <label class="control-label" for="ms-form-user-r">Username</label>
                          <input type="text" id="ms-form-user-r" class="form-control"> </div>
                      </div>
                      <div class="form-group label-floating">
                        <div class="input-group">
                          <span class="input-group-addon">
                            <i class="zmdi zmdi-email"></i>
                          </span>
                          <label class="control-label" for="ms-form-email-r">Email</label>
                          <input type="email" id="ms-form-email-r" class="form-control"> </div>
                      </div>
                      <div class="form-group label-floating">
                        <div class="input-group">
                          <span class="input-group-addon">
                            <i class="zmdi zmdi-lock"></i>
                          </span>
                          <label class="control-label" for="ms-form-pass-r">Password</label>
                          <input type="password" id="ms-form-pass-r" class="form-control"> </div>
                      </div>
                      <div class="form-group label-floating">
                        <div class="input-group">
                          <span class="input-group-addon">
                            <i class="zmdi zmdi-lock"></i>
                          </span>
                          <label class="control-label" for="ms-form-pass-rn">Re-type Password</label>
                          <input type="password" id="ms-form-pass-rn" class="form-control"> </div>
                      </div>
                      <button class="btn btn-raised btn-block btn-primary">Register Now</button>
                    </fieldset>
                  </form>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="ms-recovery-tab">
                  <fieldset>
                    <div class="form-group label-floating">
                      <div class="input-group">
                        <span class="input-group-addon">
                          <i class="zmdi zmdi-account"></i>
                        </span>
                        <label class="control-label" for="ms-form-user-re">Username</label>
                        <input type="text" id="ms-form-user-re" class="form-control"> </div>
                    </div>
                    <div class="form-group label-floating">
                      <div class="input-group">
                        <span class="input-group-addon">
                          <i class="zmdi zmdi-email"></i>
                        </span>
                        <label class="control-label" for="ms-form-email-re">Email</label>
                        <input type="email" id="ms-form-email-re" class="form-control"> </div>
                    </div>
                    <button class="btn btn-raised btn-block btn-primary">Send Password</button>
                  </fieldset>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!--modal contact-->

      <div class="modal modal-primary" id="ms-contact-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog animated zoomIn animated-3x" role="document">
          <div class="modal-content">
            <div class="modal-header d-block shadow-2dp no-pb">
              <button type="button" class="close d-inline pull-right mt-2" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">
                  <i class="zmdi zmdi-close"></i>
                </span>
              </button>
              <div class="modal-title text-center">
                <h3 class="no-m ms-site-title">
                  <span>CONTÁCTENOS</span>
                </h3>
              </div>
              <div class="modal-header-tabs">
                <ul class="nav nav-tabs nav-tabs-full nav-tabs-3 nav-tabs-primary" role="tablist">
                  <li class="nav-item" role="presentation">
                    <a href="#ms-form-tab" aria-controls="ms-login-tab" role="tab" data-toggle="tab" class="nav-link active withoutripple">
                      <i class="fas fa-envelope-open"></i> Formulario</a>
                  </li>
                  <li class="nav-item" role="presentation">
                    <a href="#ms-map-tab" aria-controls="ms-register-tab" role="tab" data-toggle="tab" class="nav-link withoutripple">
                      <i class="fas fa-globe"></i> Mapa</a>
                  </li>
                  <li class="nav-item" role="presentation">
                    <a href="#ms-date-tab" aria-controls="ms-recovery-tab" role="tab" data-toggle="tab" class="nav-link withoutripple">
                      <i class="fas fa-address-card"></i> Datos</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="modal-body">
              <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade active show" id="ms-form-tab">
                  <form autocomplete="off">
                    <fieldset>
                      <div class="form-group label-floating">
                        <div class="input-group">
                          <span class="input-group-addon">
                            <i class="zmdi zmdi-account"></i>
                          </span>
                          <label for="inputName" autocomplete="false" class="col-lg-12 control-label">Nombre</label>
                          <input type="text" id="ms-form-user" class="form-control"> </div>
                          <span class="help-block ml-5">Por favor ingrese su nombre completo.</span>
                      </div>
                      <div class="form-group label-floating">
                        <div class="input-group">
                          <span class="input-group-addon">
                            <i class="zmdi zmdi-email"></i>
                          </span>
                          <label for="inputEmail" autocomplete="false" class="col-lg-12 control-label">E-mail</label>
                          <input type="text" id="ms-form-user" class="form-control"> </div>
                          <span class="help-block ml-5">Por favor ingrese su Email.</span>
                      </div>
                      <div class="form-group label-floating">
                        <div class="input-group mb-5">
                          <span class="input-group-addon">
                            <i class="fas fa-comments"></i>
                          </span>
                          <label for="textArea" class="col-lg-2 control-label">Mensaje</label>
                          <textarea class="form-control" rows="5" id="textArea"></textarea>
                          <span class="help-block">Por favor ingrese su mensaje.</span>
                      </div>
                      <button class="btn btn-raised btn-block btn-primary">ENVIAR</button>
                      
                    </fieldset>
                  </form>
                  <div class="text-center">
                    <h3>Síguenos en Redes Sociales</h3>
                    <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-linkedin">
                      <i class="zmdi zmdi-linkedin"></i></a>
                    <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-facebook">
                      <i class="zmdi zmdi-facebook"></i></a>
                    <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-instagram">
                      <i class="zmdi zmdi-instagram"></i></a>
                    <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-youtube">
                      <i class="fab fa-youtube"></i></a>  
                  </div>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="ms-map-tab">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5623.567562362534!2d-74.061706814131!3d4.689357942170462!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9ac1aac7ccb7%3A0x4c97443b29033d6!2sUTAM!5e0!3m2!1ses!2sco!4v1518531453393" width="100%" height="450" frameborder="0"  allowfullscreen=""></iframe>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="ms-date-tab">
                  <div class="container">
                    <div class="row">
                      <div class="col-12">
                        <address class="no-mb">
                          <p>
                            <i class="color-danger-light zmdi zmdi-pin mr-1"></i> AV Carrera 45 No. 102 10, Piso 7</p>
                          <p>
                            <i class="color-warning-light zmdi zmdi-map mr-1"></i> Bogotá, Colombia</p>
                          <p>
                            <i class="color-info-light zmdi zmdi-email mr-1"></i>
                            <a href="mailto:joe@example.com">comercialgeneral@utam.com.co</a>
                          </p>
                          <p>
                            <i class="color-royal-light zmdi zmdi-phone mr-1"></i>Pbx: +57 (1) 432 56 69 </p>
                          <p>
                            <i class="color-success-light fas fa-mobile-alt mr-1"></i>Cel: 322 763 38 42 </p>
                          <p>
                            <i class="color-primary-light fas fa-laptop mr-1"></i>https://utam.com.co</p>
                        </address>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!--end modal contact-->
      <header class="ms-header ms-header-primary">
        <!--ms-header-primary-->
        <div class="container container-full">
          <div class="ms-title">
            <a href="{{ url('/') }}">
              <img class="animated fadeInRight animation-delay-6" src="{{ asset('assets/img/logo-borde-blanco.png') }}" alt="" style="width: 50%;">
              <!--<span class="ms-logo animated zoomInDown animation-delay-5">M</span>-->
              <h1 class="animated fadeInRight animation-delay-6" style="font-size: 20px; word-spacing: 2px;">
                <span></span>
              </h1>
            </a>
          </div>
          <div class="header-right">
            <div class="share-menu">
              <ul class="share-menu-list">
                <li class="animated fadeInRight animation-delay-3">
                  <a href="javascript:void(0)" class="btn-circle btn-google">
                    <i class="zmdi zmdi-linkedin"></i>
                  </a>
                </li>
                <li class="animated fadeInRight animation-delay-2">
                  <a href="javascript:void(0)" class="btn-circle btn-facebook">
                    <i class="zmdi zmdi-facebook"></i>
                  </a>
                </li>
                <li class="animated fadeInRight animation-delay-2">
                  <a href="javascript:void(0)" class="btn-circle btn-facebook">
                    <i class="zmdi zmdi-instagram"></i>
                  </a>
                </li>
                <li class="animated fadeInRight animation-delay-2">
                  <a href="javascript:void(0)" class="btn-circle btn-facebook">
                    <i class="zmdi zmdi-youtube"></i>
                  </a>
                </li>
              </ul>
              <a href="javascript:void(0)" class="btn-circle btn-circle-primary animated zoomInDown animation-delay-7">
                <i class="zmdi zmdi-share"></i>
              </a>
            </div>
            <a href="javascript:void(0)" class="btn-circle btn-circle-primary no-focus animated zoomInDown animation-delay-8" data-toggle="modal" data-target="#ms-account-modal">
              <i class="zmdi zmdi-account"></i>
            </a>
            <a href="javascript:void(0)" class="btn-circle btn-circle-primary no-focus animated zoomInDown animation-delay-8" data-toggle="modal" data-target="#ms-contact-modal">
              <i class="zmdi zmdi-email"></i>
            </a>
            <!--<form class="search-form animated zoomInDown animation-delay-9">
              <input id="search-box" type="text" class="search-input" placeholder="Search..." name="q" />
              <label for="search-box">
                <i class="zmdi zmdi-email"></i>
              </label>
            </form>-->
            <a href="javascript:void(0)" class="btn-ms-menu btn-circle btn-circle-primary ms-toggle-left animated zoomInDown animation-delay-10">
              <i class="zmdi zmdi-menu"></i>
            </a>
          </div>
        </div>
      </header>
      <nav class="navbar navbar-expand-md  navbar-static ms-navbar ms-navbar-white">
        <div class="container container-full">
          <div class="navbar-header">
            <a class="navbar-brand" href="index.html">
              <img src="assets/img/logo.png" alt="" style="width: 45%;">
              
            </a>
          </div>
          <div class="collapse navbar-collapse" id="ms-navbar">
            <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a href="{{ url('/') }}" class="animated fadeIn animation-delay-7" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false" data-name="page">Inicio
                  <i class="zmdi zmdi-chevron-down"></i>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a href="{{ url('/nosotros') }}" class="animated fadeIn animation-delay-7" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false" data-name="page">Nosotros
                  <i class="zmdi zmdi-chevron-down"></i>
                </a>
              </li>
              <li class="nav-item dropdown dropdown-megamenu-container">
                <a href="#" class="nav-link dropdown-toggle animated fadeIn animation-delay-7" data-toggle="dropdown" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false" data-name="component">Modelo BPO
                  <i class="zmdi zmdi-chevron-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-megamenu animated fadeIn animated-2x">
                  <li class="container">
                    <div class="row">
                      <div class="col-sm-3 megamenu-col">
                        <div class="megamenu-block animated fadeInLeft animated-2x">
                          <h3 class="megamenu-block-title">
                            <i class="fa fa-bold"></i> Bootstrap CSS</h3>
                          <ul class="megamenu-block-list">
                            <li>
                              <a class="withripple" href="component-typography.html">
                                <i class="fa fa-font"></i> Typography</a>
                            </li>
                            <li>
                              <a class="withripple" href="component-headers.html">
                                <i class="fa fa-header"></i> Headers</a>
                            </li>
                            <li>
                              <a class="withripple" href="component-dividers.html">
                                <i class="fa fa-arrows-h"></i> Dividers</a>
                            </li>
                            <li>
                              <a class="withripple" href="component-blockquotes.html">
                                <i class="fa fa-quote-right"></i> Blockquotes</a>
                            </li>
                            <li>
                              <a class="withripple" href="component-forms.html">
                                <i class="fa fa-check-square-o"></i> Forms
                                <span class="badge badge-info pull-right">
                                  <i class="zmdi zmdi-long-arrow-up no-mr"></i> 1.5</span>
                              </a>
                            </li>
                            <li>
                              <a class="withripple" href="component-slider.html">
                                <i class="fa fa-sliders"></i> Sliders
                                <span class="badge badge-success pull-right">2.3</span>
                              </a>
                            </li>
                            <li>
                              <a class="withripple" href="component-tables.html">
                                <i class="fa fa-table"></i> Tables</a>
                            </li>
                          </ul>
                        </div>
                        <div class="megamenu-block animated fadeInLeft animated-2x">
                          <h3 class="megamenu-block-title">
                            <i class="fa fa-hand-o-up"></i> Buttons</h3>
                          <ul class="megamenu-block-list">
                            <li>
                              <a class="withripple" href="component-basic-buttons.html">
                                <i class="fa fa-arrow-circle-right"></i> Basic Buttons</a>
                            </li>
                            <li>
                              <a class="withripple" href="component-buttons-components.html">
                                <i class="fa fa-arrow-circle-right"></i> Buttons Components</a>
                            </li>
                            <li>
                              <a class="withripple" href="component-social-buttons.html">
                                <i class="fa fa-arrow-circle-right"></i> Social Buttons
                                <span class="badge badge-info pull-right">
                                  <i class="zmdi zmdi-long-arrow-up no-mr"></i> 1.3</span>
                              </a>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <div class="col-sm-3 megamenu-col">
                        <div class="megamenu-block animated fadeInLeft animated-2x">
                          <h3 class="megamenu-block-title">
                            <i class="fa fa-list-alt"></i> Basic Components</h3>
                          <ul class="megamenu-block-list">
                            <li>
                              <a class="withripple" href="component-panels.html">
                                <i class="zmdi zmdi-view-agenda"></i> Panels</a>
                            </li>
                            <li>
                              <a class="withripple" href="component-alerts.html">
                                <i class="zmdi zmdi-info"></i> Alerts &amp; Wells</a>
                            </li>
                            <li>
                              <a class="withripple" href="component-badges.html">
                                <i class="zmdi zmdi-tag"></i> Badges &amp; Badges Pills</a>
                            </li>
                            <li>
                              <a class="withripple" href="component-lists.html">
                                <i class="zmdi zmdi-view-list"></i> Lists</a>
                            </li>
                            <li>
                              <a class="withripple" href="component-thumbnails.html">
                                <i class="zmdi zmdi-image-o"></i> Thumbnails</a>
                            </li>
                            <li>
                              <a class="withripple" href="component-carousels.html">
                                <i class="zmdi zmdi-view-carousel"></i> Carousels</a>
                            </li>
                            <li>
                              <a class="withripple" href="component-modals.html">
                                <i class="zmdi zmdi-window-maximize"></i> Modals</a>
                            </li>
                            <li>
                              <a class="withripple" href="component-tooltip.html">
                                <i class="zmdi zmdi-pin-help"></i> Tooltip &amp; Popover</a>
                            </li>
                            <li>
                              <a class="withripple" href="component-progress-bars.html">
                                <i class="zmdi zmdi-view-headline"></i> Progress Bars</a>
                            </li>
                            <li>
                              <a class="withripple" href="component-pagination.html">
                                <i class="zmdi zmdi-n-2-square"></i> Pagination</a>
                            </li>
                            <li>
                              <a class="withripple" href="component-breadcrumb.html">
                                <i class="zmdi zmdi-label-alt-outline"></i> Breadcrumb
                                <span class="badge badge-success pull-right">2.2</span>
                              </a>
                            </li>
                            <li>
                              <a class="withripple" href="component-dropdowns.html">
                                <i class="fa fa-info"></i> Dropdowns</a>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <div class="col-sm-3 megamenu-col">
                        <div class="megamenu-block animated fadeInRight animated-2x">
                          <h3 class="megamenu-block-title">
                            <i class="zmdi zmdi-folder-star-alt"></i> Extra Components</h3>
                          <ul class="megamenu-block-list">
                            <li>
                              <a class="withripple" href="component-cards.html">
                                <i class="zmdi zmdi-card-membership"></i> Cards</a>
                            </li>
                            <li>
                              <a class="withripple" href="component-composite-cards.html">
                                <i class="zmdi zmdi-card-giftcard"></i> Composite Cards</a>
                            </li>
                            <li>
                              <a class="withripple" href="component-counters.html">
                                <i class="zmdi zmdi-n-6-square"></i> Counters</a>
                            </li>
                            <li>
                              <a class="withripple" href="component-audio-video.html">
                                <i class="zmdi zmdi-play-circle"></i> Audio &amp; Video
                                <span class="badge badge-info pull-right">
                                  <i class="zmdi zmdi-long-arrow-up no-mr"></i> 2.3</span>
                              </a>
                            </li>
                            <li>
                              <a class="withripple" href="component-masonry.html">
                                <i class="zmdi zmdi-view-dashboard"></i> Masonry Layer</a>
                            </li>
                            <li>
                              <a class="withripple" href="component-snackbar.html">
                                <i class="zmdi zmdi-notifications-active"></i> SnackBar
                                <span class="badge badge-success pull-right">1.2</span>
                              </a>
                            </li>
                            <li>
                              <a class="withripple" href="component-lightbox.html">
                                <i class="zmdi zmdi-collection-image-o"></i> Lightbox
                                <span class="badge badge-success pull-right">1.5</span>
                              </a>
                            </li>
                          </ul>
                        </div>
                        <div class="megamenu-block animated fadeInRight animated-2x">
                          <h3 class="megamenu-block-title">
                            <i class="zmdi zmdi-tab"></i> Collapses &amp; Tabs</h3>
                          <ul class="megamenu-block-list">
                            <li>
                              <a class="withripple" href="component-collapses.html">
                                <i class="zmdi zmdi-view-day"></i> Collapses</a>
                            </li>
                            <li>
                              <a class="withripple" href="component-horizontal-tabs.html">
                                <i class="zmdi zmdi-tab"></i> Horitzontal Tabs</a>
                            </li>
                            <li>
                              <a class="withripple" href="component-vertical-tabs.html">
                                <i class="zmdi zmdi-menu"></i> Vertical Tabs</a>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <div class="col-sm-3 megamenu-col">
                        <div class="megamenu-block animated fadeInRight animated-2x">
                          <h3 class="megamenu-block-title">
                            <i class="fa fa-briefcase"></i> Icons</h3>
                          <ul class="megamenu-block-list">
                            <li>
                              <a class="withripple" href="component-icons-basic.html">
                                <i class="fa fa-arrow-circle-right"></i> Basic Icons</a>
                            </li>
                            <li>
                              <a class="withripple" href="component-icons-fontawesome.html">
                                <i class="fa fa-arrow-circle-right"></i> Font Awesome</a>
                            </li>
                            <li>
                              <a class="withripple" href="component-icons-iconic.html">
                                <i class="fa fa-arrow-circle-right"></i> Material Design Iconic</a>
                            </li>
                            <li>
                              <a class="withripple" href="component-icons-glyphicons.html">
                                <i class="fa fa-arrow-circle-right"></i> Glyphicons</a>
                            </li>
                            <li>
                              <a class="withripple" href="component-icons-ionicons.html">
                                <i class="fa fa-arrow-circle-right"></i> Ionicons
                                <span class="badge badge-info pull-right">
                                  <i class="zmdi zmdi-long-arrow-up no-mr"></i> 2.4</span>
                              </a>
                            </li>
                          </ul>
                        </div>
                        <div class="megamenu-block animated fadeInRight animated-2x">
                          <h3 class="megamenu-block-title">
                            <i class="fa fa-area-chart"></i> Charts</h3>
                          <ul class="megamenu-block-list">
                            <li>
                              <a class="withripple" href="component-charts-circle.html">
                                <i class="zmdi zmdi-chart-donut"></i> Circle Charts</a>
                            </li>
                            <li>
                              <a class="withripple" href="component-charts-bar.html">
                                <i class="fa fa-bar-chart"></i> Bars Charts</a>
                            </li>
                            <li>
                              <a class="withripple" href="component-charts-line.html">
                                <i class="fa fa-line-chart"></i> Line Charts</a>
                            </li>
                            <li>
                              <a class="withripple" href="component-charts-more.html">
                                <i class="fa fa-pie-chart"></i> More Charts</a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle animated fadeIn animation-delay-7" data-toggle="dropdown" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false" data-name="blog">Software
                  <i class="zmdi zmdi-chevron-down"></i>
                </a>
                <ul class="dropdown-menu">
                  <li>
                    <a class="dropdown-item" href="blog-sidebar.html">
                      <i class="zmdi zmdi-view-compact"></i> Blog Sidebar 1</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="blog-sidebar2.html">
                      <i class="zmdi zmdi-view-compact"></i> Blog Sidebar 2</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="blog-masonry.html">
                      <i class="zmdi zmdi-view-dashboard"></i> Blog Masonry 1</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="blog-masonry2.html">
                      <i class="zmdi zmdi-view-dashboard"></i> Blog Masonry 2</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="blog-full.html">
                      <i class="zmdi zmdi zmdi-view-stream"></i> Blog Full Page 1</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="blog-full2.html">
                      <i class="zmdi zmdi zmdi-view-stream"></i> Blog Full Page 2</a>
                  </li>
                  <li class="dropdown-divider"></li>
                  <li>
                    <a class="dropdown-item" href="blog-post.html">
                      <i class="zmdi zmdi-file-text"></i> Blog Post 1</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="blog-post2.html">
                      <i class="zmdi zmdi-file-text"></i> Blog Post 2</a>
                  </li>
                </ul>
              </li>
              
              <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle animated fadeIn animation-delay-9" data-toggle="dropdown" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false" data-name="ecommerce">Sala de Prensa
                  <i class="zmdi zmdi-chevron-down"></i>
                </a>
                <ul class="dropdown-menu">
                  <li>
                    <a class="dropdown-item" href="ecommerce-filters.html">E-Commerce Sidebar</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="ecommerce-filters-full.html">E-Commerce Sidebar Full</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="ecommerce-filters-full2.html">E-Commerce Topbar Full</a>
                  </li>
                  <li class="dropdown-divider"></li>
                  <li>
                    <a class="dropdown-item" href="ecommerce-item.html">E-Commerce Item</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="ecommerce-cart.html">E-Commerce Cart</a>
                  </li>
                  
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle animated fadeIn animation-delay-9" data-toggle="dropdown" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false" data-name="ecommerce">Herramientas
                  <i class="zmdi zmdi-chevron-down"></i>
                </a>
                <ul class="dropdown-menu">
                  <li>
                    <a class="dropdown-item" href="ecommerce-filters.html">Buscador CIE10</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="ecommerce-filters-full.html">Homologador CUPS</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="ecommerce-filters-full2.html">Soat</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="ecommerce-item.html">Iss 2001</a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
          <a href="javascript:void(0)" class="ms-toggle-left btn-navbar-menu">
            <i class="zmdi zmdi-menu"></i>
          </a>
        </div>
        <!-- container -->
      </nav>
      
        @yield('content');
        
        <aside class="ms-footbar">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 ms-footer-col">
              <div class="ms-footbar-block">
                <h3 class="ms-footbar-title">Sitemap</h3>
                <ul class="list-unstyled ms-icon-list three_cols">
                  <li>
                    <a href="index.html">
                      <i class="zmdi zmdi-home"></i> Home</a>
                  </li>
                  <li>
                    <a href="page-blog.html">
                      <i class="zmdi zmdi-edit"></i> Blog</a>
                  </li>
                  <li>
                    <a href="page-blog.html">
                      <i class="zmdi zmdi-image-o"></i> Portafolio</a>
                  </li>
                  <li>
                    <a href="portfolio-filters_sidebar.html">
                      <i class="zmdi zmdi-case"></i> Works</a>
                  </li>
                  <li>
                    <a href="page-timeline_left2.html">
                      <i class="zmdi zmdi-time"></i> Timeline</a>
                  </li>
                  <li>
                    <a href="page-pricing.html">
                      <i class="zmdi zmdi-money"></i> Pricing</a>
                  </li>
                  <li>
                    <a href="page-about.html">
                      <i class="zmdi zmdi-favorite-outline"></i> About Us</a>
                  </li>
                  <li>
                    <a href="page-team2.html">
                      <i class="zmdi zmdi-accounts"></i> Our Team</a>
                  </li>
                  <li>
                    <a href="page-services.html">
                      <i class="zmdi zmdi-face"></i> Services</a>
                  </li>
                  <li>
                    <a href="page-faq2.html">
                      <i class="zmdi zmdi-help"></i> FAQ</a>
                  </li>
                  <li>
                    <a href="page-login2.html">
                      <i class="zmdi zmdi-lock"></i> Login</a>
                  </li>
                  <li>
                    <a href="page-contact.html">
                      <i class="zmdi zmdi-email"></i> Contact</a>
                  </li>
                </ul>
              </div>
              <div class="ms-footbar-block">
                <h3 class="ms-footbar-title">Subscribe</h3>
                <p class="">Lorem ipsum Amet fugiat elit nisi anim mollit minim labore ut esse Duis ullamco ad dolor veniam velit.</p>
                <form>
                  <div class="form-group label-floating mt-2 mb-1">
                    <div class="input-group ms-input-subscribe">
                      <label class="control-label" for="ms-subscribe">
                        <i class="zmdi zmdi-email"></i> Email Adress</label>
                      <input type="email" id="ms-subscribe" class="form-control"> </div>
                  </div>
                  <button class="ms-subscribre-btn" type="button">Subscribe</button>
                </form>
              </div>
            </div>
            <div class="col-lg-5 col-md-7 ms-footer-col ms-footer-alt-color">
              <div class="ms-footbar-block">
                <h3 class="ms-footbar-title text-center mb-2">Last Articles</h3>
                <div class="ms-footer-media">
                  <div class="media">
                    <div class="media-left media-middle">
                      <a href="javascript:void(0)">
                        <img class="media-object media-object-circle" src="assets/img/demo/p75.jpg" alt="..."> </a>
                    </div>
                    <div class="media-body">
                      <h4 class="media-heading">
                        <a href="javascript:void(0)">Lorem ipsum dolor sit expedita cumque amet consectetur adipisicing repellat</a>
                      </h4>
                      <div class="media-footer">
                        <span>
                          <i class="zmdi zmdi-time color-info-light"></i> August 18, 2016</span>
                        <span>
                          <i class="zmdi zmdi-folder-outline color-warning-light"></i>
                          <a href="javascript:void(0)">Design</a>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="media">
                    <div class="media-left media-middle">
                      <a href="javascript:void(0)">
                        <img class="media-object media-object-circle" src="assets/img/demo/p75.jpg" alt="..."> </a>
                    </div>
                    <div class="media-body">
                      <h4 class="media-heading">
                        <a href="javascript:void(0)">Labore ut esse Duis consectetur expedita cumque ullamco ad dolor veniam velit</a>
                      </h4>
                      <div class="media-footer">
                        <span>
                          <i class="zmdi zmdi-time color-info-light"></i> August 18, 2016</span>
                        <span>
                          <i class="zmdi zmdi-folder-outline color-warning-light"></i>
                          <a href="javascript:void(0)">News</a>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="media">
                    <div class="media-left media-middle">
                      <a href="javascript:void(0)">
                        <img class="media-object media-object-circle" src="assets/img/demo/p75.jpg" alt="..."> </a>
                    </div>
                    <div class="media-body">
                      <h4 class="media-heading">
                        <a href="javascript:void(0)">voluptates deserunt ducimus expedita cumque quaerat molestiae labore</a>
                      </h4>
                      <div class="media-footer">
                        <span>
                          <i class="zmdi zmdi-time color-info-light"></i> August 18, 2016</span>
                        <span>
                          <i class="zmdi zmdi-folder-outline color-warning-light"></i>
                          <a href="javascript:void(0)">Productivity</a>
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-5 ms-footer-col ms-footer-text-right">
              <div class="ms-footbar-block">
                <div class="ms-footbar-title">
                  <span class="ms-logo ms-logo-white ms-logo-sm mr-1">M</span>
                  <h3 class="no-m ms-site-title">Material
                    <span>Style</span>
                  </h3>
                </div>
                <address class="no-mb">
                  <p>
                    <i class="color-danger-light zmdi zmdi-pin mr-1"></i> 795 Folsom Ave, Suite 600</p>
                  <p>
                    <i class="color-warning-light zmdi zmdi-map mr-1"></i> San Francisco, CA 94107</p>
                  <p>
                    <i class="color-info-light zmdi zmdi-email mr-1"></i>
                    <a href="mailto:joe@example.com">example@domain.com</a>
                  </p>
                  <p>
                    <i class="color-royal-light zmdi zmdi-phone mr-1"></i>+34 123 456 7890 </p>
                  <p>
                    <i class="color-success-light fa fa-fax mr-1"></i>+34 123 456 7890 </p>
                </address>
              </div>
              <div class="ms-footbar-block">
                <h3 class="ms-footbar-title">Social Media</h3>
                <div class="ms-footbar-social">
                  <a href="javascript:void(0)" class="btn-circle btn-facebook">
                    <i class="zmdi zmdi-facebook"></i>
                  </a>
                  <a href="javascript:void(0)" class="btn-circle btn-twitter">
                    <i class="zmdi zmdi-twitter"></i>
                  </a>
                  <a href="javascript:void(0)" class="btn-circle btn-youtube">
                    <i class="zmdi zmdi-youtube-play"></i>
                  </a>
                  <br>
                  <a href="javascript:void(0)" class="btn-circle btn-google">
                    <i class="zmdi zmdi-google"></i>
                  </a>
                  <a href="javascript:void(0)" class="btn-circle btn-instagram">
                    <i class="zmdi zmdi-instagram"></i>
                  </a>
                  <a href="javascript:void(0)" class="btn-circle btn-github">
                    <i class="zmdi zmdi-github"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </aside>  
      <footer class="ms-footer">
        <div class="container">
          <p>Copyright &copy; Material Style 2017</p>
        </div>
      </footer>
      <div class="btn-back-top">
        <a href="#" data-scroll id="back-top" class="btn-circle btn-circle-primary btn-circle-sm btn-circle-raised ">
          <i class="zmdi zmdi-long-arrow-up"></i>
        </a>
      </div>
    </div>
    <!-- ms-site-container -->
    <div class="ms-slidebar sb-slidebar sb-left sb-style-overlay" id="ms-slidebar">
      <div class="sb-slidebar-container">
        <header class="ms-slidebar-header">
          <div class="ms-slidebar-login">
            <a href="javascript:void(0)" class="withripple">
              <i class="zmdi zmdi-account"></i> Login</a>
            <a href="javascript:void(0)" class="withripple">
              <i class="zmdi zmdi-account-add"></i> Register</a>
          </div>
          <div class="ms-slidebar-title">
            <form class="search-form">
              <input id="search-box-slidebar" type="text" class="search-input" placeholder="Search..." name="q" />
              <label for="search-box-slidebar">
                <i class="zmdi zmdi-search"></i>
              </label>
            </form>
            <div class="ms-slidebar-t">
              <span class="ms-logo ms-logo-sm">M</span>
              <h3>Material
                <span>Style</span>
              </h3>
            </div>
          </div>
        </header>
        <ul class="ms-slidebar-menu" id="slidebar-menu" role="tablist" aria-multiselectable="true">
          <li class="card" role="tab" id="sch1">
            <a class="collapsed" role="button" data-toggle="collapse" href="#sc1" aria-expanded="false" aria-controls="sc1">
              <i class="zmdi zmdi-home"></i> Home </a>
            <ul id="sc1" class="card-collapse collapse" role="tabpanel" aria-labelledby="sch1" data-parent="#slidebar-menu">
              <li>
                <a href="index.html">Default Home</a>
              </li>
              <li>
                <a href="home-generic-2.html">Home Black Slider</a>
              </li>
              <li>
                <a href="home-landing.html">Home Landing Intro</a>
              </li>
              <li>
                <a href="home-landing3.html">Home Landing Video</a>
              </li>
              <li>
                <a href="home-shop.html">Home Shop 1</a>
              </li>
            </ul>
          </li>
          <li class="card" role="tab" id="sch2">
            <a class="collapsed" role="button" data-toggle="collapse" href="#sc2" aria-expanded="false" aria-controls="sc2">
              <i class="zmdi zmdi-desktop-mac"></i> Pages </a>
            <ul id="sc2" class="card-collapse collapse" role="tabpanel" aria-labelledby="sch2" data-parent="#slidebar-menu">
              <li>
                <a href="page-about.html">About US</a>
              </li>
              <li>
                <a href="page-team.html">Our Team</a>
              </li>
              <li>
                <a href="page-product.html">Products</a>
              </li>
              <li>
                <a href="page-services.html">Services</a>
              </li>
              <li>
                <a href="page-faq.html">FAQ</a>
              </li>
              <li>
                <a href="page-timeline_left.html">Timeline</a>
              </li>
              <li>
                <a href="page-contact.html">Contact Option</a>
              </li>
              <li>
                <a href="page-login.html">Login</a>
              </li>
              <li>
                <a href="page-pricing.html">Pricing</a>
              </li>
              <li>
                <a href="page-coming.html">Coming Soon</a>
              </li>
            </ul>
          </li>
          <li class="card" role="tab" id="sch4">
            <a class="collapsed" role="button" data-toggle="collapse" href="#sc4" aria-expanded="false" aria-controls="sc4">
              <i class="zmdi zmdi-edit"></i> Blog </a>
            <ul id="sc4" class="card-collapse collapse" role="tabpanel" aria-labelledby="sch4" data-parent="#slidebar-menu">
              <li>
                <a href="blog-sidebar.html">Blog Sidebar 1</a>
              </li>
              <li>
                <a href="blog-sidebar2.html">Blog Sidebar 2</a>
              </li>
              <li>
                <a href="blog-masonry.html">Blog Masonry 1</a>
              </li>
              <li>
                <a href="blog-masonry2.html">Blog Masonry 2</a>
              </li>
              <li>
                <a href="blog-full.html">Blog Full Page 1</a>
              </li>
              <li>
                <a href="blog-full2.html">Blog Full Page 2</a>
              </li>
              <li>
                <a href="blog-post.html">Blog Post 1</a>
              </li>
              <li>
                <a href="blog-post2.html">Blog Post 2</a>
              </li>
            </ul>
          </li>
          <li class="card" role="tab" id="sch5">
            <a class="collapsed" role="button" data-toggle="collapse" href="#sc5" aria-expanded="false" aria-controls="sc5">
              <i class="zmdi zmdi-shopping-basket"></i> E-Commerce </a>
            <ul id="sc5" class="card-collapse collapse" role="tabpanel" aria-labelledby="sch5" data-parent="#slidebar-menu">
              <li>
                <a href="ecommerce-filters.html">E-Commerce Sidebar</a>
              </li>
              <li>
                <a href="ecommerce-filters-full.html">E-Commerce Sidebar Full</a>
              </li>
              <li>
                <a href="ecommerce-filters-full2.html">E-Commerce Topbar Full</a>
              </li>
              <li>
                <a href="ecommerce-item.html">E-Commerce Item</a>
              </li>
              <li>
                <a href="ecommerce-cart.html">E-Commerce Cart</a>
              </li>
            </ul>
          </li>
          <li class="card" role="tab" id="sch6">
            <a class="collapsed" role="button" data-toggle="collapse" href="#sc6" aria-expanded="false" aria-controls="sc6">
              <i class="zmdi zmdi-collection-image-o"></i> Portfolio </a>
            <ul id="sc6" class="card-collapse collapse" role="tabpanel" aria-labelledby="sch6" data-parent="#slidebar-menu">
              <li>
                <a href="portfolio-filters_sidebar.html">Portfolio Sidebar Filters</a>
              </li>
              <li>
                <a href="portfolio-filters_topbar.html">Portfolio Topbar Filters</a>
              </li>
              <li>
                <a href="portfolio-filters_sidebar_fluid.html">Portfolio Sidebar Fluid</a>
              </li>
              <li>
                <a href="portfolio-filters_topbar_fluid.html">Portfolio Topbar Fluid</a>
              </li>
              <li>
                <a href="portfolio-cards.html">Porfolio Cards</a>
              </li>
              <li>
                <a href="portfolio-masonry.html">Porfolio Masonry</a>
              </li>
              <li>
                <a href="portfolio-item.html">Portfolio Item 1</a>
              </li>
              <li>
                <a href="portfolio-item2.html">Portfolio Item 2</a>
              </li>
            </ul>
          </li>
          <li>
            <a class="link" href="component-typography.html">
              <i class="zmdi zmdi-view-compact"></i> UI Elements</a>
          </li>
          <li>
            <a class="link" href="page-all.html">
              <i class="zmdi zmdi-link"></i> All Pages</a>
          </li>
        </ul>
        <div class="ms-slidebar-social ms-slidebar-block">
          <h4 class="ms-slidebar-block-title">Social Links</h4>
          <div class="ms-slidebar-social">
            <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-facebook">
              <i class="zmdi zmdi-facebook"></i>
              <span class="badge-pill badge-pill-pink">12</span>
              <div class="ripple-container"></div>
            </a>
            <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-twitter">
              <i class="zmdi zmdi-twitter"></i>
              <span class="badge-pill badge-pill-pink">4</span>
              <div class="ripple-container"></div>
            </a>
            <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-google">
              <i class="zmdi zmdi-google"></i>
              <div class="ripple-container"></div>
            </a>
            <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-instagram">
              <i class="zmdi zmdi-instagram"></i>
              <div class="ripple-container"></div>
            </a>
          </div>
        </div>
      </div>
    </div>
    <script src="{{ asset('assets/js/plugins.min.js') }}"></script>
    <script src="{{ asset('assets/js/app.min.js') }}"></script>
    <script src="{{ asset('assets/js/home-generic-7.js') }}"></script>
    <!-- REVOLUTION JS FILES -->
    <script type="text/javascript" src="{{ asset('assets/plugins/revolution/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/plugins/revolution/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
    <script src="{{ asset('assets/js/app.min.js') }}"></script>
    <script type="text/javascript">
      var tpj = jQuery;
      tpj(document).ready(function()
      {
        if (tpj("#rev_slider_1081_1").revolution == undefined)
        {
          revslider_showDoubleJqueryError("#rev_slider_1081_1");
        }
        else
        {
          revapi1081 = tpj("#rev_slider_1081_1").show().revolution(
          {
            sliderType: "standard",
            jsFileLocation: "assets/plugins/revolution/revolution/js/",
            sliderLayout: "fullscreen",
            dottedOverlay: "none",
            delay: 9000,
            navigation:
            {
              keyboardNavigation: "on",
              keyboard_direction: "vertical",
              mouseScrollNavigation: "carousel",
              mouseScrollReverse: "default",
              onHoverStop: "off",
              touch:
              {
                touchenabled: "on",
                swipe_threshold: 75,
                swipe_min_touches: 1,
                swipe_direction: "vertical",
                drag_block_vertical: false
              },
              bullets:
              {
                enable: true,
                hide_onmobile: true,
                hide_under: 778,
                style: "hermes",
                hide_onleave: false,
                direction: "vertical",
                h_align: "right",
                v_align: "center",
                h_offset: 20,
                v_offset: 0,
                space: 5,
                tmp: ''
              }
            },
            responsiveLevels: [1240, 1024, 778, 480],
            visibilityLevels: [1240, 1024, 778, 480],
            gridwidth: [1240, 1024, 778, 480],
            gridheight: [768, 768, 960, 720],
            lazyType: "smart",
            shadow: 0,
            spinner: "spinner",
            stopLoop: "on",
            stopAfterLoops: 0,
            stopAtSlide: 1,
            shuffle: "off",
            autoHeight: "off",
            fullScreenAutoWidth: "off",
            fullScreenAlignForce: "off",
            fullScreenOffsetContainer: ".header",
            fullScreenOffset: "",
            disableProgressBar: "on",
            hideThumbsOnMobile: "off",
            hideSliderAtLimit: 0,
            hideCaptionAtLimit: 0,
            hideAllCaptionAtLilmit: 0,
            debugMode: false,
            fallbacks:
            {
              simplifyAll: "off",
              nextSlideOnWindowFocus: "off",
              disableFocusListener: false,
            }
          });
        }
      }); /*ready*/
    </script>
  </body>
</html>