<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if IE 8 ]><html dir="ltr" lang="es" class="ie8"><![endif]-->
<!--[if IE 9 ]><html dir="ltr" lang="es" class="ie9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html dir="ltr" lang="es">
<!--<![endif]-->
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Carro de Compras</title>
<base href="http://wlapps.net/web/17_wl_vidaverde_tvc/" />
<script src="catalog/view/javascript/jquery/jquery-2.1.1.min.js" type="text/javascript"></script>
<link href="catalog/view/javascript/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen" />
<script src="catalog/view/javascript/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<link href="catalog/view/javascript/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link href="//fonts.googleapis.com/css?family=Open+Sans:400,400i,300,700" rel="stylesheet" type="text/css" />
<link href="catalog/view/theme/default/stylesheet/stylesheet.css" rel="stylesheet">

<!-- custom ************** -->

<link href="catalog/view/theme/default/stylesheet/layout.css" rel="stylesheet">
<link href="catalog/view/theme/default/stylesheet/theme.css" rel="stylesheet">
<link href="catalog/view/theme/default/stylesheet/common-header.css" rel="stylesheet">
<link href="catalog/view/theme/default/stylesheet/common-footer.css" rel="stylesheet">

<link href="catalog/view/theme/default/stylesheet/common-home.css" rel="stylesheet">
<link href="catalog/view/theme/default/stylesheet/product-category.css" rel="stylesheet">
<link href="catalog/view/theme/default/stylesheet/product-product.css" rel="stylesheet">

<!-- ******************** -->

<script src="catalog/view/javascript/common.js" type="text/javascript"></script>
<link href="http://wlapps.net/web/17_wl_vidaverde_tvc/image/catalog/favicon.png" rel="icon" />
<script>/*alert("x");*/</script></head>
<body class="checkout-cart">
  
    
  <!-- debug -->

  
  <script>
      //debug
      $(document).ready(function(){

                        var dev_mode = false;
          
          if(dev_mode){
              $(".tag").css({
                  position: 'absolute',
                  padding:  '3px',
                  backgroundColor: 'red',
                  color: 'white',
                  zIndex: '1000',
                  borderRadius: '5px',
                  opacity: '0.7',
                  fontSize: '10px'
              });
              
              $(".tag").parent().css("outline", "dotted red 1px");
          }else{
              $(".tag").css('display', 'none');
          }
      });
  </script>

  <div class="common-header"><span class='tag'>common-header</span>

    <!--<div class="section1 container-fluid"><span class='tag'>section1</span>
      <div class="container">
        <div class="row">

          <div class="send_free col-lg-6 col-md-6 col-sm-6 col-xs-12"><span class='tag'>send_free</span>
            <b>PEDIDOS POR TELÉFONO:</b> 01 (999) 942-67 89 o  <i class="fa fa-truck" aria-hidden="true"></i>
          </div>

          <div class="schedule col-lg-6 col-md-6 col-sm-6 col-xs-12"><span class='tag'>schedule</span>
            LUNES A VIERNES DE 9AM A 7PM Y SÁBADOS DE 9AM A 2PM          </div>
          
        </div>
      </div>
    </div>-->

    <nav id="top" class='section2 container-fluid'><span class='tag'>section2</span>
      <div class="container">
        <div class="row">
          <div class="send_free col-lg-6 col-md-6 col-sm-6 col-xs-12"><span class='tag'>send_free</span>
              <b>PEDIDOS POR TELÉFONO:</b> 01 (999) 942-67 89 o <a href="http://wlapps.net/web/17_wl_vidaverde_tvc/index.php?route=information/contact"><u>CONTÁCTANOS</u></a>
          </div>

                              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"><span class='tag'>nav</span>
            <div id="top-links" class="nav pull-right">
              <ul class="list-inline">
                <!--<li><a href="http://wlapps.net/web/17_wl_vidaverde_tvc/index.php?route=information/contact"><i class="fa fa-phone"></i></a> <span class="hidden-xs hidden-sm hidden-md">123456789</span></li>-->
                <li class="dropdown"><a href="http://wlapps.net/web/17_wl_vidaverde_tvc/index.php?route=account/account" title="Mi Cuenta" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <span class="hidden-xs hidden-sm hidden-md">Mi Cuenta</span> <span class="caret"></span></a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;
                  <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="http://wlapps.net/web/17_wl_vidaverde_tvc/index.php?route=account/register">Registrarse</a></li>
                    <li><a href="http://wlapps.net/web/17_wl_vidaverde_tvc/index.php?route=account/login">Iniciar sesión</a></li>
                                      </ul>
                </li>
                <li><a href="http://wlapps.net/web/17_wl_vidaverde_tvc/index.php?route=account/wishlist" id="wishlist-total" title="Lista de deseos"><i class="fa fa-heart"></i> <span class="hidden-xs hidden-sm hidden-md">Lista de deseos</span></a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;</li>
                <li><a href="http://wlapps.net/web/17_wl_vidaverde_tvc/index.php?route=checkout/cart" title="Carrito de Compras"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs hidden-sm hidden-md">Carrito de Compras</span></a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;</li>
                <li><a href="http://wlapps.net/web/17_wl_vidaverde_tvc/index.php?route=checkout/checkout" title="Pagar"><i class="fa fa-share"></i> <span class="hidden-xs hidden-sm hidden-md">Pagar</span></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </nav>

    <header>
      <div class="section3 container-fluid"><span class='tag'>section3</span>
        <div class="container">
          <div class="row">
            

            <div class="logo col-lg-7 col-md-6 col-sm-5 col-xs-12"><span class='tag'>logo</span>
              <!--                <a href="http://wlapps.net/web/17_wl_vidaverde_tvc/index.php?route=common/home"><img src="http://wlapps.net/web/17_wl_vidaverde_tvc/image/catalog/LOGOvidaverde.png" title="Vida Verde" alt="Vida Verde" /></a>
                -->
            </div>
            
            <div class="search col-lg-3 col-md-3 col-sm-4 col-xs-6"><span class='tag'>search</span>
              <div id="search" class="input-group">
  <input type="text" name="search" value="" placeholder="Buscar productos ..." class="form-control input-lg" />
  <span class="input-group-btn">
    <button type="button" class="btn btn-default btn-lg"><i class="fa fa-search"></i></button>
  </span>
</div>            </div>

            <div class="cart col-lg-2 col-md-3 col-sm-3 col-xs-6 text-right"><span class='tag'>cart</span>
              <div id="cart" class="btn-group btn-block">
  <button type="button" data-toggle="dropdown" data-loading-text="Cargando..." class="btn btn-inverse btn-block btn-lg dropdown-toggle"><i class="fa fa-shopping-cart"></i> <span id="cart-total">1 artículo(s) - $70.00</span></button>
  <ul class="dropdown-menu pull-right">
        <li>
      <table class="table table-striped">
                <tr>
          <td class="text-center">            <a href="http://wlapps.net/web/17_wl_vidaverde_tvc/index.php?route=product/product&amp;product_id=96"><img src="http://wlapps.net/web/17_wl_vidaverde_tvc/image/cache/catalog/verdecom1uu-47x47.png" alt="cilindro demo" title="cilindro demo" class="img-thumbnail" /></a>
            </td>
          <td class="text-left"><a href="http://wlapps.net/web/17_wl_vidaverde_tvc/index.php?route=product/product&amp;product_id=96">cilindro demo</a>
                        </td>
          <td class="text-right">x 1</td>
          <td class="text-right">$70.00</td>
          <td class="text-center"><button type="button" onclick="cart.remove('144');" title="Remover" class="btn btn-danger btn-xs"><i class="fa fa-times"></i></button></td>
        </tr>
                      </table>
    </li>
    <li>
      <div>
        <table class="table table-bordered">
                    <tr>
            <td class="text-right"><strong>Sub-Total</strong></td>
            <td class="text-right">$70.00</td>
          </tr>
                    <tr>
            <td class="text-right"><strong>Total</strong></td>
            <td class="text-right">$70.00</td>
          </tr>
                  </table>
        <p class="text-right"><a href="http://wlapps.net/web/17_wl_vidaverde_tvc/index.php?route=checkout/cart"><strong><i class="fa fa-shopping-cart"></i> Carrito</strong></a>&nbsp;&nbsp;&nbsp;<a href="http://wlapps.net/web/17_wl_vidaverde_tvc/index.php?route=checkout/checkout"><strong><i class="fa fa-share"></i> Pagar</strong></a></p>
      </div>
    </li>
      </ul>
</div>
            </div>

          </div>
        </div>
      </div>
    </header>

          <div class="section4 container-fluid"><span class='tag'>section4</span>
        <div class="container">
          <div class="row">
            <div class="logo col-sm-4"><span class='tag'>logo</span>
                              <a href="http://wlapps.net/web/17_wl_vidaverde_tvc/index.php?route=common/home"><img src="http://wlapps.net/web/17_wl_vidaverde_tvc/image/catalog/LOGOvidaverde.png" title="Vida Verde" alt="Vida Verde" /></a>
                            </div>

            <div class="menu col-lg-8 col-md-8 col-sm-8 col-xs-12"><span class='tag'>menu</span>
              <nav id="menu" class="navbar">

                <div class="navbar-header"><span id="category" class="visible-xs">Categorías</span>
                  <button type="button" class="btn btn-navbar navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"><i class="fa fa-bars"></i></button>
                </div>

                <div class="collapse navbar-collapse navbar-ex1-collapse">
                  <ul class="nav navbar-nav">
                                                            <li class="dropdown"><a href="http://wlapps.net/web/17_wl_vidaverde_tvc/index.php?route=product/category&amp;path=67" class="dropdown-toggle" data-toggle="dropdown">Tienda de productos</a>
                      <div class="dropdown-menu">
                        <div class="dropdown-inner">
                                                    <ul class="list-unstyled">
                                                        <li><a href="http://wlapps.net/web/17_wl_vidaverde_tvc/index.php?route=product/category&amp;path=67_75">Agendas (0)</a></li>
                                                        <li><a href="http://wlapps.net/web/17_wl_vidaverde_tvc/index.php?route=product/category&amp;path=67_72">Camisas (0)</a></li>
                                                        <li><a href="http://wlapps.net/web/17_wl_vidaverde_tvc/index.php?route=product/category&amp;path=67_74">Chanclas (0)</a></li>
                                                        <li><a href="http://wlapps.net/web/17_wl_vidaverde_tvc/index.php?route=product/category&amp;path=67_69">Cilindros (2)</a></li>
                                                        <li><a href="http://wlapps.net/web/17_wl_vidaverde_tvc/index.php?route=product/category&amp;path=67_73">Gorras (0)</a></li>
                                                        <li><a href="http://wlapps.net/web/17_wl_vidaverde_tvc/index.php?route=product/category&amp;path=67_68">Novedades (0)</a></li>
                                                        <li><a href="http://wlapps.net/web/17_wl_vidaverde_tvc/index.php?route=product/category&amp;path=67_70">Tazas (0)</a></li>
                                                        <li><a href="http://wlapps.net/web/17_wl_vidaverde_tvc/index.php?route=product/category&amp;path=67_71">Vasos (0)</a></li>
                                                      </ul>
                                                  </div>
                        <a href="http://wlapps.net/web/17_wl_vidaverde_tvc/index.php?route=product/category&amp;path=67" class="see-all">Ver: Tienda de productos</a> </div>
                    </li>
                                                            <li><a href="./index.php?route=information/information&information_id=4">Diseño a medida</a></li>
                    <li><a href="./index.php?route=information/information&information_id=4">Servicios</a></li>
                    <li><a href="./index.php?route=information/information&information_id=4">Quiénes somos</a></li>
                    <li><a href="http://wlapps.net/web/17_wl_vidaverde_tvc/index.php?route=information/contact">Contacto</a></li>
                  </ul>
                </div>

              </nav>
            </div>
            
          </div>
        </div>
      </div>
    
  </div>
  <div class="background">
  </div><div class="container">
  <ul class="breadcrumb">
        <li><a href="http://wlapps.net/web/17_wl_vidaverde_tvc/index.php?route=common/home"><i class="fa fa-home"></i></a></li>
        <li><a href="http://wlapps.net/web/17_wl_vidaverde_tvc/index.php?route=checkout/cart">Carro de Compras</a></li>
      </ul>
        <div class="row" style="margin-bottom: 50px;" >                <div id="content" class="col-sm-12">      <h1>Carro de Compras      	 <!--
                &nbsp;(0.00kg)
                -->
      </h1>
      <form action="http://wlapps.net/web/17_wl_vidaverde_tvc/index.php?route=checkout/cart/edit" method="post" enctype="multipart/form-data">
        <div class="table-responsive">
          <table class="table table-bordered">
            <thead>
              <tr>
                <td class="text-center">Imagen</td>
                <td class="text-left">Nombre Producto</td>
                <td class="text-left">Modelo</td>
                <td class="text-left">Cantidad</td>
                <td class="text-right">Precio Unitario</td>
                <td class="text-right">Total</td>
              </tr>
            </thead>
            <tbody>
                            <tr>
                <td class="text-center">                  <a href="http://wlapps.net/web/17_wl_vidaverde_tvc/index.php?route=product/product&amp;product_id=96"><img src="http://wlapps.net/web/17_wl_vidaverde_tvc/image/cache/catalog/verdecom1uu-47x47.png" alt="cilindro demo" title="cilindro demo" class="img-thumbnail" /></a>
                  </td>
                <td class="text-left"><a href="http://wlapps.net/web/17_wl_vidaverde_tvc/index.php?route=product/product&amp;product_id=96" style="color: black;">
                	<b>cilindro demo</b><br>Color del producto: verde,<br>Estampado: est1 negro,<br>Corte: Único, Tamaño: Único,<br>                		
                	</a>
                                                                        </td>
                <td class="text-left">1234</td>
                <td class="text-left"><div class="input-group btn-block" style="max-width: 200px;">
                    <input type="text" name="quantity[144]" value="1" size="1" class="form-control" />
                    <span class="input-group-btn">
                    <button type="submit" data-toggle="tooltip" title="Actualizar" class="btn btn-primary"><i class="fa fa-refresh"></i></button>
                    <button type="button" data-toggle="tooltip" title="Remover" class="btn btn-danger" onclick="cart.remove('144');"><i class="fa fa-times-circle"></i></button></span></div></td>
                <td class="text-right">$70.00</td>
                <td class="text-right">$70.00</td>
              </tr>
                                        </tbody>
          </table>
        </div>
      </form>
      <br />
      <div class="row">
        <div class="col-sm-4 col-sm-offset-8">
          <table class="table table-bordered">
                        <tr>
              <td class="text-right"><strong>Sub-Total:</strong></td>
              <td class="text-right">$70.00</td>
            </tr>
                        <tr>
              <td class="text-right"><strong>Total:</strong></td>
              <td class="text-right">$70.00</td>
            </tr>
                      </table>
        </div>
      </div>
      <div class="buttons">
        <div class="pull-left"><a href="http://wlapps.net/web/17_wl_vidaverde_tvc/index.php?route=common/home" class="btn btn-default">Continuar Comprando</a></div>
        <div class="pull-right col-sm-4 " style="padding-right: 0px;padding-left: 20px;">
          <a href="http://wlapps.net/web/17_wl_vidaverde_tvc/index.php?route=checkout/checkout" class="btn btn-primary" style="width: 100%;">
            Realiar pago
          </a>
        </div>
      </div>
      </div>
    </div>
</div>

<div class="common-footer"><span class='tag'>common-footer</span>
  
  <footer>
    
    <div class="section1 container-fluid"><span class='tag'>section1</span>
      <div class="container">
        <div class="row">

          <div class="newsletter_movil col-sm-4 visible-xs"><span class='tag'>newsletter_movil</span>
            <h3>BOLETÍN DE PROMOCIONES</h3>
            <p>Registra tu email y obtén un 5% de descuento en toda la tienda al instante.</p>
            
<div id="common_newsletter_495">
  <div class="alert alert-success"></div>
  <div class="alert alert-danger"></div>
  <form class="form-inline">
    <div>
      <i class="fa fa-envelope" aria-hidden="true"></i>
      <input type="text" class="form-control" placeholder="Ingresa tu e-mail">
      <input type="button" value='AGREGAR' class="btn btn-primary">
    </div>
  </form>
</div>

<script>
  $(document).ready(function(){
    
    var pnlSuccess = $("#common_newsletter_495 .alert-success");
    var pnlError   = $("#common_newsletter_495 .alert-danger");
    var txtEmail   = $("#common_newsletter_495 input[type='text']");
    var btnSend    = $("#common_newsletter_495 input[type='button']");
    
    pnlSuccess.css("display", "none");
    pnlError.css("display", "none");

    btnSend.click(function(){
      
      $.ajax({
        type:     'POST',
        url:      "http://wlapps.net/web/17_wl_vidaverde_tvc/index.php?route=common/newsletter/newsletter",
        data:     'email=' + encodeURIComponent(txtEmail.val()),
        dataType: 'json',
        beforeSend: function(){
          pnlSuccess.css("display", "none");
          pnlError.css("display", "none");
          btnSend.css("display", "none");
        },
        success: function(response){
          if(response.status == "OK"){
            pnlSuccess.css("display", "block").html(response.datas);
            txtEmail.val("");
          }else{
            pnlError.css("display", "block").html(response.messages[0]);
          }
          btnSend.css("display", "inline");
        },
        error: function(){
          alert("ERROR: Error en la comunicación con el servidor.");
          btnSend.css("display", "inline");
        }
      });
    });
    
  });
</script>          </div>
          
          <div class="col-sm-8">
            <div class="row">

              <!--
              <b>Notice</b>: Undefined variable: informations in <b>/home2/bweuemja/public_html/web/17_wl_vidaverde_tvc/catalog/view/theme/default/template/common/footer.php</b> on line <b>20</b>              -->
              <div class="information col-sm-3"><span class='tag'>information</span>
                <h5>MI CUENTA</h5>
                <ul class="list-unstyled">
                  <li><a href="http://wlapps.net/web/17_wl_vidaverde_tvc/index.php?route=account/account">Iniciar sesión</a></li>
                  <li><a href="http://wlapps.net/web/17_wl_vidaverde_tvc/index.php?route=account/order">Historial de pedidos</a></li>
                  <li><a href="http://wlapps.net/web/17_wl_vidaverde_tvc/index.php?route=account/wishlist">Lista de deseos</a></li>
                  <li><a href="http://wlapps.net/web/17_wl_vidaverde_tvc/index.php?route=account/address">Libreta de direcciones</a></li>
                </ul>
              </div>

              <div class="information col-sm-3"><span class='tag'>information</span>
                <h5>SERVICIO AL CLIENTE</h5>
                <ul class="list-unstyled">
                                      <li><a href="http://wlapps.net/web/17_wl_vidaverde_tvc/index.php?route=information/information&amp;information_id=8">Formas de pago</a></li>
                                      <li><a href="http://wlapps.net/web/17_wl_vidaverde_tvc/index.php?route=information/information&amp;information_id=10">Tips</a></li>
                                      <li><a href="http://wlapps.net/web/17_wl_vidaverde_tvc/index.php?route=information/information&amp;information_id=12">Preguntas frecuentes</a></li>
                                      <li><a href="http://wlapps.net/web/17_wl_vidaverde_tvc/index.php?route=information/information&amp;information_id=14">Políticas de envio</a></li>
                                    <li><a href="http://wlapps.net/web/17_wl_vidaverde_tvc/index.php?route=information/contact">Contacto</a></li>
                  <li><a href="http://wlapps.net/web/17_wl_vidaverde_tvc/index.php?route=account/return/add">Devoluciones</a></li>
                  <li><a href="http://wlapps.net/web/17_wl_vidaverde_tvc/index.php?route=information/sitemap">Mapa del Sitio</a></li>
                </ul>
              </div>
              
              <div class="information col-sm-3"><span class='tag'>information</span> 
                <h5>SOBRE VIDA VERDE</h5>
                <ul class="list-unstyled">
                                      <li><a href="http://wlapps.net/web/17_wl_vidaverde_tvc/index.php?route=information/information&amp;information_id=4">Quiénes somos</a></li>
                                      <li><a href="http://wlapps.net/web/17_wl_vidaverde_tvc/index.php?route=information/information&amp;information_id=3">Aviso de privacidad</a></li>
                                      <li><a href="http://wlapps.net/web/17_wl_vidaverde_tvc/index.php?route=information/information&amp;information_id=6">Información de envios</a></li>
                                      <li><a href="http://wlapps.net/web/17_wl_vidaverde_tvc/index.php?route=information/information&amp;information_id=5">Términos y condiciones</a></li>
                                  </ul>
              </div>
             

              <!--
              <div class="information col-sm-3"><span class='tag'>information</span>
                <h5>EXTRAS PARA COMPRAR</h5>
                <ul class="list-unstyled">
                  <li><a href="http://wlapps.net/web/17_wl_vidaverde_tvc/index.php?route=account/voucher">Tarjetas de Regalo</a></li>
                  <li><a href="http://wlapps.net/web/17_wl_vidaverde_tvc/index.php?route=account/reward">Puntos de recompensa</a></li>
                  <li><a href="http://wlapps.net/web/17_wl_vidaverde_tvc/index.php?route=affiliate/account">Afiliados</a></li>
                  <li><a href="http://wlapps.net/web/17_wl_vidaverde_tvc/index.php?route=product/special">Ofertas</a></li>
                </ul>
              </div>
              -->

               <!--
              <div class="information col-sm-3"><span class='tag'>information</span>
                <h5>Servicio al Cliente</h5>
                <ul class="list-unstyled">
                  <li><a href="http://wlapps.net/web/17_wl_vidaverde_tvc/index.php?route=information/contact">Contacto</a></li>
                  <li><a href="http://wlapps.net/web/17_wl_vidaverde_tvc/index.php?route=account/return/add">Devoluciones</a></li>
                  <li><a href="http://wlapps.net/web/17_wl_vidaverde_tvc/index.php?route=information/sitemap">Mapa del Sitio</a></li>
                </ul>
              </div>
              -->
              
            </div>
          </div>
          
          <div class="newsletter_desktop col-sm-4 hidden-xs"><span class='tag'>newsletter_desktop</span>
            <!--<h3>BOLETÍN DE PROMOCIONES</h3>-->
            <p>Registra tu email y obtén un 5% de descuento en toda la tienda al instante.</p>
            
<div id="common_newsletter_199">
  <div class="alert alert-success"></div>
  <div class="alert alert-danger"></div>
  <form class="form-inline">
    <div>
      <i class="fa fa-envelope" aria-hidden="true"></i>
      <input type="text" class="form-control" placeholder="Ingresa tu e-mail">
      <input type="button" value='AGREGAR' class="btn btn-primary">
    </div>
  </form>
</div>

<script>
  $(document).ready(function(){
    
    var pnlSuccess = $("#common_newsletter_199 .alert-success");
    var pnlError   = $("#common_newsletter_199 .alert-danger");
    var txtEmail   = $("#common_newsletter_199 input[type='text']");
    var btnSend    = $("#common_newsletter_199 input[type='button']");
    
    pnlSuccess.css("display", "none");
    pnlError.css("display", "none");

    btnSend.click(function(){
      
      $.ajax({
        type:     'POST',
        url:      "http://wlapps.net/web/17_wl_vidaverde_tvc/index.php?route=common/newsletter/newsletter",
        data:     'email=' + encodeURIComponent(txtEmail.val()),
        dataType: 'json',
        beforeSend: function(){
          pnlSuccess.css("display", "none");
          pnlError.css("display", "none");
          btnSend.css("display", "none");
        },
        success: function(response){
          if(response.status == "OK"){
            pnlSuccess.css("display", "block").html(response.datas);
            txtEmail.val("");
          }else{
            pnlError.css("display", "block").html(response.messages[0]);
          }
          btnSend.css("display", "inline");
        },
        error: function(){
          alert("ERROR: Error en la comunicación con el servidor.");
          btnSend.css("display", "inline");
        }
      });
    });
    
  });
</script>            <div class="social col-lg-12 col-md-12 col-sm-12 col-xs-12"><span class='tag'>social</span>
              <span class="fa-stack fa-lg">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
              </span>
              <span class="fa-stack fa-lg">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
              </span>
              <span class="fa-stack fa-lg">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-pinterest-p fa-stack-1x fa-inverse"></i>
              </span>
              <span class="fa-stack fa-lg">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-instagram fa-stack-1x fa-inverse"></i>
              </span>
           </div>
          </div>

        </div>
      </div>
    </div>
    
    <!--
    <div class="section2 container-fluid"><span class='tag'>section2</span>
      <div class="container">
        <div class="row">

          <div class="social col-lg-12 col-md-12 col-sm-12 col-xs-12"><span class='tag'>social</span>
            <h5>Síguenos en las redes sociales</h5>
            <a href=''><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
            <a href=''><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
            <a href=''><i class="fa fa-instagram" aria-hidden="true"></i></a>
          </div>

        </div>
      </div>
    </div>
    -->

    <div class="section3 container-fluid"><span class='tag'>section3</span>
      <div class="container">
        <div class="row">

          <div class="logos col-lg-12 col-md-12 col-sm-12 col-xs-12"><span class='tag'>logos</span>
            <img src='./catalog/view/theme/default/image/common-footer/payments/1.jpg' />
            <img src='./catalog/view/theme/default/image/common-footer/payments/2.jpg' />
            <img src='./catalog/view/theme/default/image/common-footer/payments/3.jpg' />
            <img src='./catalog/view/theme/default/image/common-footer/payments/4.jpg' />
            <img src='./catalog/view/theme/default/image/common-footer/payments/5.jpg' />
            <img src='./catalog/view/theme/default/image/common-footer/payments/6.jpg' />
          </div>

        </div>
      </div>
    </div>

    <div class="section4 container-fluid"><span class='tag'>section4</span>
      <div class="container">
        <div class="row">

          <div class="copy col-lg-12 col-md-12 col-sm-12 col-xs-12"><span class='tag'>copy</span>
            <p>&copy Vida Verde 2018 | Sitio desarrollado por <a href='http://weblogica.mx'>weblogica.mx</a></p>
          </div>
          
        </div>
      </div>
    </div>
    
  </footer>
</div>

</body>
</html>