<?php $__env->startSection('content'); ?>
    <div class="divCarreras">
        <h1>Página principal</h1>
        <div class="races">
            <?php $__currentLoopData = $races; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $race): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php
                    $id = $race['id'];
                ?>
                <div class="divraces">
                    <?php $image=preg_replace('([^A-Za-z0-9 ])', '', $race['image'])?>
                    <a href="#"><img src="../resources/img/<?php echo strtolower($image) ?>.jpg" alt=""></a>
                    <h2><?php echo e($race['title']); ?></h2>
                    <p><?php echo e($race['description']); ?></p>
                    <p><?php echo e($race['date']); ?></p>
                    <a href="infoRace/<?php echo e($id); ?>"><div class="info"><p>Más información</p></div></a>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>

    <div class="divSponsors">
        <h1>Sponsors</h1>
        </div class="sponsors">
            <?php $__currentLoopData = $sponsors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sponsor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php
                    $id = $sponsor['id'];
                ?>
                <div>
                    <?php $image=preg_replace('([^A-Za-z0-9 ])', '', $sponsor['logo'])?>
                    <a href="#"><img class="logo" src="../resources/img/<?php echo strtolower($image) ?>.png" alt=""></a>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\bikerollSalma_\resources\views/paginaPrincipal.blade.php ENDPATH**/ ?>