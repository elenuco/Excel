<?php
	session_start();
	$rut='../';
	$pagina='Detalle de registros';
	$direc='accion_registro.php';
	require_once($rut.'0code.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?= $pagina.TIT?></title>
	<?php require_once($rut.'1styles.php'); ?>
	<?php $inf=null;
    require_once($rut.DIRACT.$direc);
    $inf= index($rut);
	 ?>
</head>
<body>
	<div class="container">
  <!---navbar-->
  	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Logo</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Registro
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
  </div>
<div class="container">
	<div class="row pb-5">
		<br>
	</div>
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6 text-center">
			<h1>Lista de <?= $pagina; ?></h1>
		</div>
		<div class="col-md-3 text-rigth">
			<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Nuevo <?= substr($pagina, 0,-1); ?></button>
		</div>
	</div>
	<div class="row pb-5">
		<br>
	</div>
	<!---Tables--->
	<table class="table">
		<?php echo $inf; $inf=null; ?>
	</table>
</div>
<!---scripts--->
<?php require_once($rut.'4java.php'); ?>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Recipient:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Message:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Send message</button>
      </div>
    </div>
  </div>
</div>
</body>
</html>