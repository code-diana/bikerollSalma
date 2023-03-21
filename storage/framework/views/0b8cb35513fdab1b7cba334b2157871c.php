
<h1>Form admin</h1>

<form action="formAdmin" method="POST" accept-charset="UTF-8">
  <?php echo csrf_field(); ?>
    <div class="form-group row">
      <label for="inputEmail3" class="col-sm-2 col-form-label">Usuario</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="inputEmail3" name="email" required>
      </div>
    </div>
    <div class="form-group row">
      <label for="inputPassword3" class="col-sm-2 col-form-label">Contraseña</label>
      <div class="col-sm-10">
        <input type="password" class="form-control" id="inputPassword3" placeholder="" name="passwd" required>
      </div>
    </div>
    <div class="form-group row">
      <div class="col-sm-10">
        <button type="submit" class="btn btn-primary" name="send">Iniciar Sesión</button>
      </div>
    </div>
</form>


<a href="<?php echo e(url('/')); ?>">Página principal</a> <?php /**PATH C:\xampp\htdocs\bikerollSalma\resources\views/admin/formAdmin.blade.php ENDPATH**/ ?>