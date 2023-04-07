<?php $__env->startSection('content'); ?>
  <?php if(session('error')): ?>
    <div class="alert alert-danger"><?php echo e(session('error')); ?></div>
  <?php endif; ?>

  <section class="h-100 gradient-form" style="background-color: #eee;">
    <div class="container py-5 h-100"  style="margin-bottom: 0;">
      <form action="formAdmin" method="POST" accept-charset="UTF-8">
        <?php echo csrf_field(); ?>
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-12 col-md-8 col-lg-6 col-xl-5">
            <div class="card bg-dark" style="border-radius: 1rem;border:2px solid #101632;background-color:white !important;">
              <div class="card-body p-5 text-center">
                <div class="mb-md-5 mt-md-4 pb-5">
                  <h2 class="fw-bold mb-2 text-uppercase" style="color:#101632">Formulario login</h2>
                  <p class="text-white-50 mb-5"></p>
                  <div class="form-outline form-white mb-4">
                    <input type="text" name="email" id="typeEmailX" class="form-control form-control-lg" placeholder="Nombre de usuario" required/>
                  </div>
                  <div class="form-outline form-white mb-4">
                    <input type="password" name="passwd" id="typePasswordX" class="form-control form-control-lg" placeholder="Contraseña" required/>
                  </div>
                  <p class="text-white-50 mb-5"></p>
                  <button class="btn btn-outline-light btn-lg px-5" type="submit" name="send" style="background-color: #101632;color:white">Iniciar sesión</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
  </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\bikerollSalma\resources\views/admin/formAdmin.blade.php ENDPATH**/ ?>