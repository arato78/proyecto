<!DOCTYPE html>
<html LANG="es">
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Titulo</title>
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<link href="<?php echo base_url().'/publica/css/fontawesome/css/all.css' ?>" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="<?php echo base_url().'/publica/img/logos/logo01.png' ?>" alt="" width="180" height="64" class="d-inline-block align-text-top">
    </a>
				<span class="navbar-text h3">
					Ayuntamiento Constitucional de Comalcalco Tabasco
				</span>
  </div>
		
</nav>

<?= $this->renderSection('contenido'); ?>
  

<footer class="footer mt-auto py-3 bg-light fixed-bottom">
  <div class="container">
    <span class="text-muted"><b>Soporte:</b> <i class="fa-solid fa-envelope"></i> arato78@gmail.com <i class="fa-solid fa-phone"></i> 933.110.6792</span>
  </div>
</footer>

</body>

<script type="text/javascript" src="<?php echo base_url().'/publica/js/jquery-3.6.0.min.js' ?>"></script>
<script type="text/javascript" src="<?php echo base_url().'/publica/js/acceso.js' ?>"></script>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</body>
</html>