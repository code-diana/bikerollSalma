<style>
    td,th{border: 1px solid;}
    td{width: 80px}
    table{width: 1200px;margin: auto;text-align: center;}
    img{width: 50%;height: 50%}
</style>
<h1>Editar Cartel de promoción</h1>
<form action="<?php echo e($carreras['id']); ?>" method="POST" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>

    <div class="form-group row">
        <label for="mapa" class="col-sm-2 col-form-label">Imagen del mapa</label>
        <div class="col-sm-10">
          <input type="file" class="form-control" id="mapa" name="image" accept=".jpg" required>
        </div>
    </div>

    <div class="form-group row">
      <div class="col-sm-10">
        <button type="submit" class="btn btn-primary" name="send">Editar imagen</button>
      </div>
    </div>
</form>   

<a href="<?php echo e(url('/paginaPrincipal')); ?>">Volver atras</a><?php /**PATH C:\xampp\htdocs\bikerollSalma\resources\views/admin/carreras/cambiarCartel.blade.php ENDPATH**/ ?>