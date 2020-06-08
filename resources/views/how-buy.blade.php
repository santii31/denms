<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	
	<link href="https://fonts.googleapis.com/css?family=Rubik:400,700&display=swap" rel="stylesheet">
	<!--Import Google Icon Font-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--Import materialize.css-->
	<link href="{{asset('css/materialize.min.css')}}" rel="stylesheet">
	<!--Import custom style-->
	<link href="{{asset('css/style.css')}}" rel="stylesheet" >

	<!-- Add icon library -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	
	
	<script>
	document.addEventListener('DOMContentLoaded', function() {
		var elems = document.querySelectorAll('.slider');
		var instances = M.Slider.init(elems, options);
	});
	
	document.addEventListener('DOMContentLoaded', function() {
		var elems = document.querySelectorAll('.carousel');
		var instances = M.Carousel.init(elems);
	});
  
	document.addEventListener('DOMContentLoaded', function() {
		var elems = document.querySelectorAll('.dropdown-trigger');
		var instances = M.Dropdown.init(elems, {
			constrainWidth: false,
			inDuration: 10
		});
	});

	document.addEventListener('DOMContentLoaded', function() {
		var elems = document.querySelectorAll('.materialboxed');
		var instances = M.Materialbox.init(elems);
	});

	var slideIndex = 1;
	showDivs(slideIndex);

	function plusDivs(n) {
		showDivs(slideIndex += n);
	}

	function showDivs(n) {
	var i;
	var x = document.getElementsByClassName("mySlides");
	if (n > x.length) {slideIndex = 1}
	if (n < 1) {slideIndex = x.length}
	for (i = 0; i < x.length; i++) {
		x[i].style.display = "none";  
	}
		x[slideIndex-1].style.display = "block";  
	}

	document.addEventListener('DOMContentLoaded', function() {
		var elems = document.querySelectorAll('.modal');
		var instances = M.Modal.init(elems);
	});

	</script>
</head>


<body class="dashboard">
    <!-- Navbar -->  

    <nav class="white" role="navigation">
    <div class="nav-wrapper">
      <a id="logo-container" href="#" class="brand-logo">Nombre</a>
      <ul id="test" class="right hide-on-med-and-down">
      <li class="itg"><a href="#" class="fa fa-instagram"></a></li>
      <li class="fb"><a href="https://www.facebook.com" class="fa fa-facebook"></a></li>
      <li class="whp"><a href="#" class="fa fa-whatsapp"></a></li>
      <li><a href="#"><i class="material-icons">search</i></a></li>
        <li><a href="#"><i class="material-icons">account_circle</i></a></li>
      </ul>

      <ul id="nav-mobile" class="sidenav">
      <li><a class="subheader">Catalogo</a></li>
      <li><div class="divider"></div></li>
        <li><a href="#">Pantalones</a></li>
        <li><a href="#">Remeras</a></li>
        <li><a href="#">Chaquetas</a></li>
        <li><a href="#">Calzados</a></li>
        <li><div class="divider"></div></li>
        <li><a class="subheader">Redes sociales y contacto</a></li>
        <li><div class="divider"></div></li>
        <li><a href="#" class="fa fa-instagram"></a></li>
        <li><a href="#" class="fa fa-facebook"></a></li>
        <li><a href="#" class="fa fa-whatsapp"></a></li>
        <li><a href="#" class="fa fa-envelope"></a></li>
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>





  <br>
<div class="row">
<h2 class="center au-t">Como comprar</h2>
</div>
<br><br>

<div class="container">
<div class="row">
    <div class="col l6 m6 s6 center">
        <strong class="au-title"><i class="fa fa-search"></i>Navega</strong><div class="divider"></div>
        <p class="au-description">Navega a través de nuestro catalogo, selecciona los productos que desees y agregalos al carrito</p>
    </div>
    <div class="col l6 m6 s6 center">
    <strong class="au-title"><i class="fa fa-shopping-cart"></i>Confirma compra</strong><div class="divider"></div>
        <p class="au-description">Una vez agregados los productos deseados podras, dentro de la seccion "Mi carrito", comprobar los detalles de tu compra y confirmar la misma</p>
    </div>
</div>
<div class="row">
    <div class="col l6 m6 s6 center">
    <strong class="au-title"><i class="fa fa-list-ul"></i>Completar tus datos</strong><div class="divider"></div>
        <p class="au-description">Completa tus datos de contacto. Es importante que ingreses de forma correcta tu email, ya que se te enviara la informacion de la compra al correo electronico que sea ingresado</p>
    </div>
    <div class="col l6 m6 s6 center">
    <strong class="au-title"><i class="fa fa-truck"></i>Datos de envio</strong><div class="divider"></div>
        <p class="au-description">Luego de confirmar tu compra e ingresar tus datos deberas completar los datos de envio</p>
    </div>
</div>
<div class="row">
    <div class="col l6 m6 s6 center">
    <strong class="au-title"><i class="fa fa-credit-card"></i>Medio de pago</strong><div class="divider"></div>
        <p class="au-description">Selecciona la opción MERCADOPAGO, admite tarjeta de Crédito, débito, efectivo y transferencia. Esta opcion te rediccionara al sitio de Mercado pago donde podras completar tu pago</p>
    </div>
    <div class="col l6 m6 s6 center">
    <strong class="au-title"><i class="fa fa-check"></i>Listo</strong><div class="divider"></div>
        <p class="au-description">Vas a recibir un mail con tu numero de seguimiento para que puedas llevar un control del envio de tu compra</p>
    </div>
</div>
</div>
<br><br>





<div class="divider"></div>
<div class="cont">    
    <footer class="page-footer">
          <div class="container">
            <div class="row">
              <div class="col s12 m4 l6">
              <h5 class="black-text">Home</h5>
                <ul>
                    <div class="navigation">
                    <li><a href="#">Quienes somos</a></li>
                    <li><a href="#">Preguntas frecuentes</a></li>
                    <li><a href="#">Como comprar</a></li>
                    <li><a href="#">Contactos</a></li>
                    <li><a href="#"></a></li>
                </ul>
              </div>
              <div class="col s12 m4 l6">
              <h5 class="black-text">Medios de pago</h5>
                <ul>
                    <li><img class="responsive-img card-size" src=""><img class="responsive-img card-size" src=""><img class="responsive-img card-size" src=""><img class="responsive-img card-size" src=""></li>
                    <li><img class="responsive-img card-size" src=""><img class="responsive-img card-size" src=""><img class="responsive-img card-size" src=""><img class="responsive-img card-size" src=""></li>
                    <li><img class="responsive-img card-size" src=""><img class="responsive-img card-size" src=""><img class="responsive-img card-size" src=""></li>
                </ul>
                <h5 class="black-text">Envios</h5>
                <ul>
                    <li><img class="responsive-img card-size" src="naranja.png"></li>
                </ul>  
                
              </div>
              
              
            </div>
          </div>
          <div class="footer-copyright" style="background: white">
            <div class="container black-text">
            © 2014 Copyright Text
            <a class="black-text text-lighten-4 right" href="#!">More Links</a>
            </div>
          </div>
    </footer>
</div>

	
<script type="text/javascript" src="{{asset('js/materialize.min.js')}}"></script>
    <script>
        if ( window.history.replaceState ) {
            window.history.replaceState( null, null, window.location.href );
        }
    </script>


</body>

</html>