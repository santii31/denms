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

  

  const quantityInput = document.getElementById("quantity");

  const ele = document.getElementById("waist");

  let value = ele.options[ele.selectedIndex].value;

  ele.addEventListener("change", (e) => {
      // Cada vez que hay un cambio, guardo el nuevo valor de value
      value = ele.options[ele.selectedIndex].value;
      // Seteo el nuevo valor como max en el input
      quantityInput.setAttribute("max", value);
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







  <div class="fixed-action-btn">
    <a class="btn-floating btn-medium btn-float-color modal-trigger" href="#modal1">
      <i class="large material-icons" style="color: white">local_grocery_store</i>
    </a>
  </div>
  
  <div id="modal1" class="modal">
      <div class="modal-content">
        <h4><i class="material-icons">local_grocery_store</i>Mi carrito</h4>
        <p>A bunch of text</p>
      </div>
      <div class="modal-footer">
        <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
      </div>
    </div>
  
  <br>
  
  <div class="container">
    
      <div class="row">
          <img src="" class="responsive-img activator" alt="">
      </div>
  </div>
  
  <div class="row">
  <div class="col s6 m6 l6">
  <img src="../images/{{$product->photo1}}" class="mySlides responsive-img activator materialboxed" alt="">
    <img src="../images/{{$product->photo2}}" class="mySlides responsive-img activator" alt="" style="display: none">
    <br><br>
    <div class="center">
      <button class="gallery-button" onclick="plusDivs(-1)"><i class="material-icons">chevron_left</i></button>
      <button class="gallery-button" onclick="plusDivs(-1)"><i class="material-icons">chevron_right</i></button>
    </div>  
  </div>
  
  <div class="col s6">
  <h1 class="product-title">{{$product->name}}</h1>
  <span class="price">${{$product->price}}</span><br>
      <img class="responsive-img datasheet-card" src="../images/credit-cards.jpg"><br>
      <a class="modal-trigger" href="#modal2">Ver medios de pago</a>
      <div id="modal2" class="modal">
        <div class="modal-content">
          <h4>Medios de pago</h4>
          <p>Estos son los medios de pago</p>
        </div>
        <div class="modal-footer">
          <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
        </div>
      </div>
      <br><br>

      <div class="divider"></div>
      <br>

      <div class="input-field col s4 m6 l2">   
        <select name="waist" id="waist">
          @foreach ($waists as $waist)
        <option value="{{$waist->quantity}}">{{$waist->name}}</option>    
          @endforeach
        </select>
        <label>Talle</label>
      </div>

      <div class="input-field col s4 m6 l2">   
        <select name="color">
          @foreach ($colors as $color)
            <option>{{$color->name}}</option>    
          @endforeach
        </select>
        <label>Color</label>
      </div>

      <input type="hidden" name="waist-name">

      <h1>
        @foreach($waists as $waist)
          {{$waists->quantity}}
        @endforeach
      </h1>

      <div class="input-field col s3 m2 l1">
      <input id="quantity" type="number" name="quantity" min="1" required>
          <label>Cantidad</label>
      </div>

    
  
    <div class="row">
      <div class="col s12 l12 m12">
          <button class="btn waves-effect waves-light" type="submit" name="action">Agregar al carrito
              <i class="material-icons right">local_grocery_store</i>
          </button>
      </div>

  </div>
  
  </div>
      
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






