<?php if(session('mensaje')): ?>
    <script>
        alert('<?php echo e(session('mensaje')); ?>');
    </script>
<?php endif; ?>

<?php $__env->startSection('content'); ?>
    <h2>Patrocinadores</h2>
    <a href="<?php echo e(url('anyadirSponsor')); ?>" class="btn btn-primary">Añadir nuevo sponsor</a>
    <div class="row">
    <?php $__currentLoopData = $sponsor; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php
            $id = $row['id'];
            $logo=preg_replace('([^A-Za-z0-9 ])', '', $row['logo']);
        ?>
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="	http://localhost/bikerollSalma/resources/img/<?php echo strtolower($logo) ?>.png" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title"><?php echo e($row['name']); ?></h5>
                <p class="card-text"><?php echo e($row['description']); ?></p>
                <p class="card-text">
                    <small class="text-muted">
                        Plana principal: 
                        <?php if($row['main_plain'] == 0): ?>
                            No
                        <?php else: ?>
                            Sí
                        <?php endif; ?>
                    </small>
                </p>
                <p>
                    Estado: 
                    <?php if($row['sponsorState'] == 0): ?>
                        <a href="activarSponsor/<?php echo e($id); ?>"><img style="width:40px;height:40px" src="	http://localhost/bikerollSalma/resources/img/off.png" alt=""></a>
                    <?php else: ?>
                        <a href="activarSponsor/<?php echo e($id); ?>"><img style="width:40px;height:40px" src="	http://localhost/bikerollSalma/resources/img/on.png" alt=""></a>
                    <?php endif; ?>
                </p>
                <div class="btn-group">
                    <a class="btn btn-sm btn-outline-secondary" href="editarSponsor/<?php echo e($id); ?>">Editar datos</a>
                    <a class="btn btn-sm btn-outline-secondary" href="editarLogo/<?php echo e($id); ?>">Editar logo</a>
                    <a class="btn btn-sm btn-outline-secondary" href="selectRaces/<?php echo e($id); ?>">Seleccionar carreras</a>
                    <a class="btn btn-sm btn-outline-secondary" href="carreras-sponsor/<?php echo e($id); ?>">Ver carreras</a>
                </div>
                <a href="download-pdf/<?php echo e($id); ?>" class="btn btn-primary">Descargar PDF</a>
            </div>

        </div>
            
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <a href="<?php echo e(url('/paginaPrincipal')); ?>">Pagina principal</a>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\bikerollSalma\resources\views/admin/sponsors/mostrarSponsors.blade.php ENDPATH**/ ?>