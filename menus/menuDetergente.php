<?php 

//$conexion=mysql_connect()
$conexion=mysqli_connect("localhost","root","","base1");


 ?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Abarrotes</title>

  <!-- Bootstrap core CSS -->
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom styles for this template -->
  <!--<link href="C:/xampp/htdocs/dashboard/conexionTienda/css/shop-homepage.css" rel="stylesheet">-->
  <link href="../css/shop-homepage.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="index.html">Tienda</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.html">Inicio
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="menu.html">Productos</a>
          </li>
          <li class="nav-item">
          <!--  <a class="nav-link" href="index.html">Cerrar Sesion</a> -->
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <div class="col-lg-3">

        <h1 class="my-4">Abarrotes</h1>
        <div class="list-group">
          <a href="menu.html" class="list-group-item">Abarrotes</a>
          <a href="menuLacteos.html" class="list-group-item">Lacteos</a>
          <a href="menuDetergente.html" class="list-group-item">Detergentes</a>
          <a href="menuAlimentos.html" class="list-group-item">Alimentos</a>
        </div>

      </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">

        <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid" src="img/abarrotes/promo.png" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="img/abarrotes/promo2.png" alt="Second slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>

        <div class="row">

          <br> 
  <table>
    <tr>
      <td>Codigo</td>
      <td>Nombre</td>
      <td>Precio</td>
    </tr>

    <?php 
    $sql="SELECT * FROM PRODUCTOS where codigocategoria='Detergentes'";
    $result=mysqli_query($conexion,$sql);

    while($mostrar=mysqli_fetch_array($result)){


    

     ?>

    <tr>
      <td><?php echo $mostrar['codigo'] ?></td>
      <td><?php echo $mostrar['nombre'] ?></td>
      <td><?php echo $mostrar['precio'] ?></td>
    </tr>
    <?php 
    }

     ?>
    
  </table>

        </div>
        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright 2020 &copy;<a href="https://www.instagram.com/omarxxzavaleta/" rel="nofollow"> Zavaleta Angeles Omar</a></p>
      <link href='https://www.instagram.com/omarxxzavaleta/' rel='stylesheet' type='text/css'>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="../vendor/jquery/jquery.min.js"></script>
  
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
