<?php $__env->startSection('content'); ?>
    <?php if(session('error')): ?>
      <div class="alert alert-danger"><?php echo e(session('error')); ?></div>
    <?php endif; ?>
  <h1 class="hhh">Iniciar sesión como administrador</h1>
  <form action="formAdmin" method="POST" accept-charset="UTF-8">
    <?php echo csrf_field(); ?>
    <div class="form-group">
      <label for="exampleInputEmail1">Usuario</label>
      <input type="text" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nombre de usuario">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Contraseña</label>
      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="passwd">
    </div>
    <button type="submit" class="btn btn-primary" name="send">Iniciar sesión</button>
  </form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\bikerollSalma\resources\views/admin/formAdmin.blade.php ENDPATH**/ ?>