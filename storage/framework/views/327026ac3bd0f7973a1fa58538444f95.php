<?php if(session('mensaje')): ?>
    <script>
        alert('<?php echo e(session('mensaje')); ?>');
    </script>
<?php endif; ?>

<?php $__env->startSection('content'); ?>
    <a href="<?php echo e(url('/paginaPrincipal')); ?>">Pagina principal</a>

    <div class="container">
        <h1 style="margin-top: 30px;">Sponsors</h1>
        <hr>
        <div class="container mt-3">
            <div class="row">
                <div class="col-lg-12">
                    <a href="<?php echo e(url('anyadirSponsor')); ?>" class="btn btn-primary float-right mr-3" style="margin-top: 30px;">+ Nuevo Sponsor</a>
                </div>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
            <?php $__currentLoopData = $sponsor; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php
                    $id = $row['id'];
                    $logo=preg_replace('([^A-Za-z0-9 ])', '', $row['logo']);
                ?>
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100">
                    <div class="card-header">
                        <img class="card-img-top" src="	http://localhost/bikerollSalma/resources/img/<?php echo strtolower($logo) ?>.png" alt="Card image cap">
                        <h2 class="card-title"><?php echo e($row['name']); ?></h2>
                    </div>
                    <div class="card-body">
                        <p class="card-text"><?php echo e($row['description']); ?></p>
                        <p class="card-text"><strong>Plana principal:</strong>
                            <?php if($row['main_plain'] == 0): ?>
                                No
                            <?php else: ?>
                                Sí
                            <?php endif; ?>
                        </p>
                        <p class="card-text"><strong>Estado:</strong>
                            <?php if($row['sponsorState'] == 0): ?>
                                <a href="activarSponsor/<?php echo e($id); ?>"><img style="width:40px;height:40px" src="	http://localhost/bikerollSalma/resources/img/off.png" alt=""></a>
                            <?php else: ?>
                                <a href="activarSponsor/<?php echo e($id); ?>"><img style="width:40px;height:40px" src="	http://localhost/bikerollSalma/resources/img/on.png" alt=""></a>
                            <?php endif; ?>
                        </p>
                        </div>
                        <div class="card-footer text-center">
                            <a href="editarSponsor/<?php echo e($id); ?>" class="btn btn-primary mx-2"><i class="bi bi-pencil-square"></i> Editar datos</a>
                            <a href="editarLogo/<?php echo e($id); ?>" class="btn btn-primary"><i class="bi bi-image"></i> Editar logo</a>
                            <a href="selectRaces/<?php echo e($id); ?>" class="btn btn-primary" style="margin-top:5px;"><i class="bi bi-check-square"></i> Seleccionar carreras</a>
                            <a href="carreras-sponsor/<?php echo e($id); ?>" class="btn btn-primary" style="margin-top:5px;"><i class="bi bi-calendar-event"></i> Ver carreras patrocinadas</a>
                            <a href="download-pdf/<?php echo e($id); ?>" class="btn btn-primary" style="width:100%;background-color:#243B66 !important;margin-top:20px;"><i class="bi bi-file-earmark-pdf"></i> Descargar factura</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
      </div>
      
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\bikerollSalma\resources\views/admin/sponsors/mostrarSponsors.blade.php ENDPATH**/ ?>