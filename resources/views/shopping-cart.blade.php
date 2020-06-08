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



  <div class="container">
<h1 class="center" style="font-size: 25px">
    <i class="material-icons">local_grocery_store</i>Carrito de compras
</h1>

<br>

<table class="responsive-table">
        <thead>
          <tr>
              <th>Producto</th>
              <th>Cantidad</th>
              <th>Precio unitario</th>
              <th>Subtotal</th>
              <th>Ver</th>
              <th  class="center">Quitar</th>
          </tr>
        </thead>
    
        <tbody>
          <tr>
            <td>Jean ejemplo</td>
            <td><input type="number" value="1" style="width: 15%; border: none; height: 15px"></td>
            <td>$3600</td>
            <td>$3600</td>
            <td><a class="modal-trigger icon-color fa fa-image" href="#modal1"></a></td>
            <td class="center"><a class="icon-color fa fa-minus"></a></td>
           
            <div id="modal1" class="modal">
              <div class="row">
                <div class="col s6"><img src="../angeldemonio1.jpg" class="responsive-img activator " alt=""></div>
                <div class="col s6"><img src="../segundafoto.jpg" class="responsive-img activator " alt=""></div>
              </div>
            </div>
          </tr>
          <tr>
            <td>Jean Nombrelargo</td>
            <td><input type="number" value="1" style="width: 15%; border: none; height: 15px"></td>
            <td>$3600</td>
            <td>$3600</td>
            <td><a class="modal-trigger icon-color fa fa-image" href="#modal2"></a></td>
            <td class="center"><a class="icon-color fa fa-minus"></a></td>
           
            <div id="modal2" class="modal">
              <div class="row">
                <div class="col s6"><img src="../angeldemonio2.jpg" class="responsive-img activator " alt=""></div>
                <div class="col s6"><img src="../segundafoto.jpg" class="responsive-img activator " alt=""></div>
              </div>
            </div>
          </tr>
    
        </tbody>
      </table>
</div>
<br><br>

<div class="container">
    <div class="row">
    <div class="col l12 m12 s12">
        <span>Subtotal<small>(sin envío): </small></span><span>$3.600,00</span><br>
        <span class="price-font">Total</span><span>: $3.600,00</span>
    </div>
    </div>
    <div class="divider"></div>
    <form>
      
    </form>
</div>

<br><br>
<div class="container">
<div class="row">
    <div class="right">
        <button class="btn waves-effect waves-light" type="submit" name="action">Comprar
        </button>
    </div>
    <div class="left">
        <button class="btn waves-effect waves-light" type="submit" name="action">Agregar mas productos
        </button>
    </div>
</div>
</div>




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