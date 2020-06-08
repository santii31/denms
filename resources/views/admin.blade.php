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


		



	</script>

</head>

<body>
    <ul id="slide-out" class="sidenav">
        <li><div class="user-view">
          <span class="grey-text name">Santiago Rinaldi</span>
          <span class="grey-text email">santiago@hotmail.com</span>
          <li><div class="divider"></div></li>
        </div></li>
        <li><a href="{{route('addProduct')}}"><i class="material-icons">add_circle</i>Agregar producto</a></li>
        <li><a href="#!"><i class="material-icons">edit</i>Modificar producto</a></li>
        <li><a href="#!"><i class="material-icons">delete</i>Eliminar producto</a></li>
        <li><div class="divider"></div></li>
        <li><a href="#!"><i class="material-icons">account_circle</i>Listar clientes</a></li>
        <li><a href="#!"><i class="material-icons">payment</i>Listar ventas</a></li>
        <li><a href="#!"><i class="material-icons">contact_mail</i>Suscriptores de newsletter</a></li>
        <li><div class="divider"></div></li>
        <li><a href="#!"><i class="material-icons">person_add</i>Agregar administrador</a></li>
        <li><a href="#!"><i class="material-icons">supervisor_account</i>Agregar administradores</a></li>
        <li><div class="divider"></div></li>
      <li><a href="{{route('logout')}}"><i class="material-icons">undo</i>Cerrar sesion</a></li>
      </ul>
      <a href="#" data-target="slide-out" class="sidenav-trigger black-text"><i class="material-icons">menu</i></a>
    
    
      <div class="container">
        <div class="row center">
            <h3>Bienvenido Santiago<h3>
        </div>
    </div>
    
    
    
    
    
    
    
    
    
    
    
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="{{asset('js/materialize.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/app.js')}}"></script>
    
      </body>