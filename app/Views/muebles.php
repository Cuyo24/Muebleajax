<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">

	<link rel="stylesheet" type="text/css" href="<?php echo base_url('Librerias/css/bootstrap.min.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('Librerias/css/fontawesome/css/all.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('Librerias/css/dataTables.bootstrap4.min.css') ?>">
	<title>Gestor</title>
	
	<script>
		var base_url = '<?php echo base_url() ?>';
	</script>
</head>
<body>

<h1>Administración de catálogo</h1>
    <div class="row">
        <div class="col-sm-4">
            <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarUsuario">
                <span class="fas fa-plus-square"></span> Agregar
            </button>
        </div>
    </div>
    <hr>
    <div class="row">
        <hr>
    	<div class="col-sm-12">
    		<div id="tablaCargadaUsuarios"></div>
    	</div>
    </div>


    <!-- Modal -->
<div class="modal fade" id="modalAgregarUsuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar nuevo registro <span class="fas fa-cat"></span></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form id="frmAgregaUsuario">
            <label>Nombre del mueble</label>
            <input type="text" id="nombre" name="nombre" class="form-control">
            <label>Tipo de madera</label>
            <input type="text" id="tipo" name="tipo" class="form-control">
            <label>Costo de venta</label>
            <input type="text" id="CostoVenta" name="CostoVenta" class="form-control">
            <label>Costo de compra</label>
            <input type="text" id="CostoCompra" name="CostoCompra" class="form-control">
       </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" id="btnAgregarUsuario">Guardar</button>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="modalActualizarUsuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Actualizar usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form id="frmAgregaUsuariou">
            <input type="text" id="idComprau" name="idComprau" hidden="">
            <label>Nombre del mueble</label>
            <input type="text" id="nombreu" name="nombreu" class="form-control">
            <label>Tipo de madera</label>
            <input type="text" id="tipou" name="tipou" class="form-control">
            <label>Costo de venta</label>
            <input type="text" id="CostoVentau" name="CostoVentau" class="form-control">
            <label>Costo de compra</label>
            <input type="text" id="CostoComprau" name="CostoComprau" class="form-control">
       </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-warning" onclick="actualizarUsuario()">Actualizar</button>
      </div>
    </div>
  </div>
</div>
	<script src="<?php echo base_url('Librerias/js/jquery-3.4.1.min.js') ?>"></script>
	<script src="<?php echo base_url('Librerias/js/popper.min.js');?>"></script>
	<script src="<?php echo base_url('Librerias/js/bootstrap.min.js');?>"></script>
	<script src="<?php echo base_url('Librerias/js/sweetalert.min.js');?>"></script>
	<script src="<?php echo base_url('Librerias/js/jquery.dataTables.min.js') ?>"></script>
	<script src="<?php echo base_url('Librerias/js/dataTables.bootstrap4.min.js') ?>"></script>
	<script src="<?php echo base_url('Librerias/js/MueblesF.js') ?>"></script>
</body>
</html>