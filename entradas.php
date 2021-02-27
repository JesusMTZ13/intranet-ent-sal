<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Lear 2021 | Inicio</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="./dashboard/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="./dashboard/dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
 <?php include "./layouts/header.php";?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
 <?php include "./layouts/sidebar.php"; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 style="margin-left: 18px;">Entrada</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right"> </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
         <!--inicia formulario de entradas-->
     <form style="margin-left: 25px;">
        <div class="form-row">
          <div class="form-group col-md-4">
            <label for="">Numero de parte</label>
            <input type="text" class="form-control" id="numparte" placeholder="Escanea numero de parte">
          </div>
          <div class="form-group col-md-4">
            <label for="">Cantidad</label>
            <input type="text" class="form-control" id="cantidad" placeholder="Indica cantidad en pulgadas">
          </div>
        </div>
        <div class="form-group serie " style="width:200px ;">
          <label for="">Numero de serie</label>
          <input type="text" class="form-control" id="serie" >
        </div>
        <button type="submit" class="btn btn-primary btn-guardar">Guardar</button>
      </form>
    </div>
       
        
    <!--termina formulario de entradas-->
    
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php include "./layouts/footer.php"; ?>

  <!-- Control Sidebar -->
  
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="./dashboard/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="./dashboard/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="./dashboard/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="./dashboard/dist/js/demo.js"></script>
</body>
</html>
