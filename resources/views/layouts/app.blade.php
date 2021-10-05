<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha512-tDXPcamuZsWWd6OsKFyH6nAqh/MjZ/5Yk88T5o+aMfygqNFPan1pLyPFAndRzmOWHKT+jSDzWpJv8krj6x1LMA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<style type="text/css">

		.login-margen-arriba {
			margin-top: 100px;
		}

	</style>
</head>
<body>
	<div class="container">
		<!--NAVBAR-->
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
		  <a class="navbar-brand" href="#">LoginApp</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav mr-auto">
		      <li class="nav-item active">
		        <a class="nav-link" href="login">Login <span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item">
		      	<!--el nombre registration del href es el nombre del método en el controladorCustomAuthController-->
		        <a class="nav-link" href="registration">Registro</a>
		      </li>
		    </ul> 
		  </div>
		</nav>
		<!--FIN NAVBAR-->
	
		<div class="login-margen-arriba"></div>
			@yield('content')
		</div>

	</div>

</body>
</html>