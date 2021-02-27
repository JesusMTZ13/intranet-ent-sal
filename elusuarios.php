<?php 

  include "./php/conexion.php" ;
  $resultado=$conexion->query("select * from usuarios order by id ASC")or die($conexion->error);
?>


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
            <h1>Modificacion de usuario</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

      <!-- Main content -->
      <section class="content">

<!-- Default entradas -->
<div class="card">
  <div class="card-header">
    <h3 class="card-title">Eliminacion o edicion de permisos</h3>

    <div class="card-tools">
      <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
        <i class="fas fa-minus"></i>
      </button>
      <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
        <i class="fas fa-times"></i>
      </button>
    </div>
  </div>
  <div class="card-body">
    -Modificacion o eliminacion de usuarios. <br> -Asignacion de permisos o autorizacion a vistas.
  </div>
  <!-- /.card-body -->
  <div class="card-body ">
  
</div>
<!-- /.card -->

<h2 class="subtitle" style="margin-left: 15px;">Listado de usuarios</h2>
<?php    
    if(isset($_GET['error'])){
      ?>
      <div class="alert alert-danger"> 
    <b>Error:</b> <?php echo $_GET['error']; ?>
  </div>

      <?php
    }
    
    
    if(isset($_GET['success'])){
      ?>
      <div class="alert alert-success"> 
    <b>Listo!</b> <?php echo $_GET['success']; ?>
  </div>

      <?php
    }
    
    ?>
<table class="table">
  <thead>
    <th>Id</th>
    <th>Nombre</th>
    <th>Apellido</th>
    <th>Usuario</th>
    <th>Password</th>
    <th></th>
  </thead>
  <tbody>
  <?php  
  while($fila = mysqli_fetch_array($resultado)){
  
  ?>
    <tr>
      <td><?php echo $fila['id'] ?></td>
      <td><?php echo $fila['nombre']; ?></td>
      <td><?php echo $fila['apellido'] ?></td>
      <td><?php echo $fila['reloj'] ?></td>
      <td>******</td>
      <td> 
        <button class="btn btn-warning btnEdit" data-toggle="modal" data-target="#modal-editar" 
        data-id="<?php echo $fila['id'] ?>"
        data-nombre="<?php echo $fila['nombre'] ?>"
        data-ap="<?php echo $fila['apellido'] ?>"
        data-reloj="<?php echo $fila['reloj'] ?> "
        > <i class="fa fa-edit"></i></button>
        <button class="btn btn-danger btnEliminar" data-toggle="modal" data-target="#modal-eliminar" 
        data-id="<?php echo $fila['id'] ?>"><i class="fa fa-trash"></i></button>
      </td>
    </tr>
<?php
  }
  ?>
  </tbody>

</table>

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

  <?php include "./layouts/footer.php"; ?>
  <!-- modal eliminar -->
  <div class="modal fade" id="modal-eliminar">
        <div class="modal-dialog">
          <div class="modal-content bg-danger">
            <div class="modal-header">
              <h4 class="modal-title">Eliminar Usuario</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="./php/eliminarUsuario.php" method="POST">
            <div class="modal-body">
              
              <p>Desea eliminar el Usuario?</p>
              <input type="hidden" id="idEliminar" name="id">
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-outline-light" data-dismiss="modal">Cancelar</button>
              <button type="submit" class="btn btn-outline-light">Eliminar</button>
            </div>
            </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
<!-- modal eliminar -->

<!-- modal editar -->
<div class="modal fade" id="modal-editar">
        <div class="modal-dialog">
          <div class="modal-content ">
            <div class="modal-header">
              <h4 class="modal-title">Editar Usuario</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="./php/editarUsuario.php" method="POST">
            <div class="modal-body">
            <div class="col-12">
            <label for="">Nombre</label>
            <input type="text" class="form-control" placeholder="Insertar nombre" name="nombre" id="nombreEdit" required>
          </div>
          <div class="col-12">
            <label for="">Apellido</label>
            <input type="text" class="form-control" placeholder="Insertar apellido" name="ap" id="apEdit" required>
          </div>
          <div class="col-12">
            <label for="">Usuario</label>
            <input type="text" class="form-control" placeholder="Numero de reloj" name="reloj" id="relojEdit" required >
          </div>
          <div class="col-12">
            <label for="">Password</label>
            <input type="password" class="form-control" placeholder="Insertar password" name="p1" required>
          </div>
          <div class="col-12">
            <label for="">Confirmar Password</label>
            <input type="password" class="form-control" placeholder="Confirmar password" name="p2" required >
          </div>
              
              
              <input type="hidden" id="idEditar" name="id">
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancelar</button>
              <button type="submit" class="btn btn-outline-primary">Guardar</button>
            </div>
            </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>

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
<script>
  var idEliminar=0;
  $(document).ready(function(){
    $(".btnEliminar").click(function(){
       idEliminar=$(this).data('id');
      $("#idEliminar"). val(idEliminar);
    });
    $(".btnEdit").click(function(){
      var idEdit=$(this).data('id');
      var nombre=$(this).data('nombre');
      var ap=$(this).data('ap');
      var reloj=$(this).data('reloj');
      $("#nombreEdit").val(nombre);
      $("#apEdit").val(ap);
      $("#relojEdit").val(reloj);
      $("#idEditar").val(idEdit);
  });
});
</script>
</body>
</html>
