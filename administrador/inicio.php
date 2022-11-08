<?php include('template/cabecera.php'); ?>

<?php $url="http://".$_SERVER['HTTP_HOST']."/sitioweb"; ?>

<div class="col-md-12">
    <div class="jumbotron">
        <h1 class="display-3">Sistema de administración</h1>
        <p class="lead"><b>Bienvenido <?php echo $nombreUsuario; ?> al sistema de administrador</b></p>
        <hr class="my-2">
        <p>Comenzar</p>
        <p class="lead">
            <a class="btn btn-primary btn-lg" href="<?php echo $url; ?>/administrador/seccion/productos.php" role="button">Ir a productos</a>
        </p>
    </div>
</div>

<?php include('template/pie.php'); ?>
   