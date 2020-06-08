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
    var instances = M.Slider.init(elems);
  });
	
	
	document.addEventListener('DOMContentLoaded', function() {
		var elems = document.querySelectorAll('.dropdown-trigger');
		var instances = M.Dropdown.init(elems, {
			constrainWidth: false,
			inDuration: 10
		});
	});


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
        <li><a href="#modal3" class="modal-trigger"><i class="material-icons">account_circle</i></a></li>
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

  <!-- Index -->

  <div class="fixed-action-btn">
    <a class="btn-floating btn-medium btn-float-color">
      <i class="large material-icons" style="color: white">local_grocery_store</i>
    </a>
    
  </div>
  
  <div class="slider">
      <ul class="slides">
        <li>
          <img src="{{asset('images/levis.jpg')}}"> <!-- random image -->
          <div class="caption center-align">
          
          </div>
        </li>
        <li>
          <img src="{{asset('images/lacoste.jpg')}}"> <!-- random image -->
          <div class="caption left-align">
          
          </div>
        </li>
        <li>
          <img src="{{asset('images/kosiuko.jpg')}}"> <!-- random image -->
          <div class="caption right-align">
          
          </div>
        </li>
        
      </ul>
    </div>
    <br>
    <div class="row">
          <div class="col s3 m1">
            <a class='dropdown-trigger filter-button' href='#' data-target='dropdown1'>Filtros&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>▼</label></a>
          </div>
          
        
      <ul id='dropdown1' class='dropdown-content'>
        @foreach ($categories as $category)
      <li><a href="">{{$category->name}}</a></li> 
        @endforeach
          
    </ul>
  
    </div>
  
      <div class="row catalogue">

        @foreach($products as $product)
          <div class="col s6 m3 l3 marg">
          <div class="card">
              <div class="card-image waves-effect waves-block waves-light">
              <img src="images/{{$product->photo1}}" class="responsive-img activator" alt="">
              </div>
              <div class="card-content">
              <span class="card-title activator grey-text text-darken-4">{{$product->name}}<a href="{{route('showProduct', $product->id)}}" class="right">Ver mas</a></span>
              <p>$3600</p>
              <label class="left aux">Angel y Demonio</label>
              </div>
              <div class="card-reveal">
              <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
              <p>Here is some more information about this product that is only revealed once clicked on.</p>
              </div>
          </div>
          </div>
          @endforeach
      </div>

    
      
      <!-- Footer -->

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
                            <li><img class="responsive-img card-size" src="{{asset('images/visa.png')}}"><img class="responsive-img card-size" src="{{asset('images/mastercard.png')}}"><img class="responsive-img card-size" src="{{asset('images/americanexpress.png')}}"><img class="responsive-img card-size" src="{{asset('images/dinersclub.png')}}"></li>
                            <li><img class="responsive-img card-size" src="{{asset('images/mercadopago.png')}}"><img class="responsive-img card-size" src="{{asset('images/naranja.png')}}"><img class="responsive-img card-size" src="{{asset('images/cabal.png')}}"><img class="responsive-img card-size" src="{{asset('images/nativa.png')}}"></li>
                            <li><img class="responsive-img card-size" src="{{asset('images/shopping.png')}}"><img class="responsive-img card-size" src="{{asset('images/cencosud.png')}}"><img class="responsive-img card-size" src="{{asset('images/rapipago.png')}}"><img class="responsive-img card-size" src="{{asset('images/pagofacil.png')}}"></li>
                        </ul>
                        <h5 class="black-text">Envios</h5>
                        <ul>
                            <li><img class="responsive-img card-size" src=""></li>
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
    

<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="{{asset('js/materialize.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/app.js')}}"></script>
     
</body>
</html>
