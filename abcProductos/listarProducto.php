<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Listar Productos</title>

  <!-- Bootstrap core CSS -->
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom styles for this template -->
  <!--<link href="C:/xampp/htdocs/dashboard/conexionTienda/css/shop-homepage.css" rel="stylesheet">-->
  <link href="../css/shop-homepage.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <?php
    include("../menu.php");
    //include("fragmentos/menu.php")
    $m1 = new menu();
    $m1 ->mostrarMAP();
    ?>

  <!-- Page Content -->
  <div class="container">

    <!-- Jumbotron Header -->
    <header class="jumbotron my-4">
      <h1 class="display-3">Lista de Productos</h1>

    </header>
    <!-- Page Features -->
    <div class="row text-center">

      <form action="productoCtrl.php" method="post">
        ¿Desea listar los Productos que se encuentran en la base de datos?
        <input type="text" name="opcion" value="listar" hidden>
        <input type="submit" value="Listar"><br><br>
      </form>
      <form action='abcProducto.php' method='post'>
        <input type='submit' value='Regresar'><br><br></form>
    <!-- /.row -->

  </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <?php
    include("../pie.php");
    //include("fragmentos/menu.php")
    $p1 = new pie();
    $p1 ->piePagina();
    ?>

  <!-- Bootstrap core JavaScript -->
  <script src="../vendor/jquery/jquery.min.js"></script>
  
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>
