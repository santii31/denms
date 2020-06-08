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
<div class="container">
<div class="center-align"><h1 class="product-title">Registro</h1></div>
</div>
<br><br>
<div class="container center">
<form action="{{route('register')}}" method="POST">
<div class="row">

    <div class="input-field col l3 s3">
      <input id="name" type="text" name="name" value="{{old('name')}}">
      <label for="name">Nombre</label>
    </div>

    <div class="input-field col l3 s3">
      <input id="lastname" type="text" name="lastname" value="{{old('lastname')}}">
      <label for="lastname">Apellido</label>
  </div>

    <div class="input-field col l6 s6">
    <input id="email" type="email" name="email" value="{{old('email')}}">
        <label for="email">Email</label>
    </div>


    
</div>
<div class="row">

    <div class="input-field col l6 s6">
      <input id="password" type="password" name="password">
      <label for="password">Contraseña</label>
    </div>

    <div class="input-field col l6 s6">
      <input id="password_confirmation" type="password" name="password_confirmation">
      <label for="password_confirmation">Confirmar contraseña</label>
    </div>

    <input type="hidden" value="1" name="r">
    
</div>
<div class="row">
    <div class="col l12 s12">
        <button class="btn waves-effect waves-light" type="submit" name="action">Registrarme
        </button>
    </div>
</div>
{{ csrf_field() }}
</form>
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






