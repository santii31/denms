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
        <li><a href="#!"><i class="material-icons">add_circle</i>Agregar producto</a></li>
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
        <li><a href="#!"><i class="material-icons">undo</i>Cerrar sesion</a></li>
      </ul>
      <a href="#" data-target="slide-out" class="sidenav-trigger black-text"><i class="material-icons">menu</i></a>
    
    

      <div class="container"><div class="row align center"><h4>Agregar producto</h4></div></div>
        <br>
    <form action="{{route('addProduct')}}" method="POST" enctype="multipart/form-data">
        <div class="container">
        <div class="row center">
            <div class="input-field col s6 l6">
            <input id="name" type="text" name="name" required>
            <label for="name">Nombre</label>
            </div>
            <div class="input-field col s3 l3">
            <input id="price" type="number" name="price" required>
            <label for="price">Precio</label>
            </div>
            <div class="input-field col s3 l3">
            <input id="quantity" type="number" name="quantity" required>
            <label for="quantity">Cantidad</label>
            </div>
        </div>
        <div class="row center">
            <div class="input-field col s3 l3">
                <select name="waist" required>
                <option value="" disabled selected >Seleccione talle</option>
                @foreach ($waists as $waist)
                    <option value="{{$waist->id}}">{{$waist->name}}</option>    
                @endforeach
                </select>
                <label>Talle</label>
            </div>
            <div class="input-field col s3 l3">
                <select name="genre" required>
                <option value="" disabled selected >Seleccione genero</option>
                <option value="1">Masculino</option>
                <option value="2">Femenino</option>
                </select>
                <label>Genero</label>
            </div>
            <div class="input-field col s6 l6">
                <select name="color" required>
                <option value="" disabled selected>Seleccione color</option>
                @foreach ($colors as $color)
                <option value="{{$color->id}}">{{$color->name}}</option>    
                @endforeach
                
                
                </select>
                <label>Color</label>
            </div>
        </div>
        <div class="row center">
            <div class="input-field col s6 l6">
                <select name="category" required>
                <option value="" disabled selected>Seleccione categoria</option>
                @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>    
                @endforeach
                </select>
                <label>Categoria</label>
            </div>
            <div class="input-field col s2 l2">
            <input id="discount" type="number" name="discount">
            <label for="discount">Descuento</label>
            </div>

            <div class="file-field input-field col s2 l2">
                <div class="btn">
                  <span>Foto 1</span>
                  <input type="file" name="photo1">
                </div>
              </div>
          
              <div class="file-field input-field col s2 l2">
                <div class="btn">
                  <span>Foto 2</span>
                  <input type="file" name="photo2">
                </div>
              </div>

        </div>

    <br><br>
        <div class="row center">
            
            <div class="col s12 l12 center-align">
                <button class="btn waves-effect waves-light" type="submit" name="action">Agregar
                </button>
            </div>
        </div>

        
    </div>
    {{csrf_field()}}
</form>

    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="{{asset('js/materialize.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/app.js')}}"></script>

  </body>