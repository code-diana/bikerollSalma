<style>
    h1{
        text-align: center;
    }
    .importe{
        float: right;
        margin-right: 40px;
    }
    .price{
        float: right;
        position: relative;
        bottom: 56px;
    }
    img{
        width: 50px;
        height: 50px;
    }
</style>
<?php 
    $plana_principal = 0;
    $importe_total = 0;
?>
<div>
    <h1><?php echo e($facturaSponsor[0]->name); ?></h1>
    <?php 
    $logo=preg_replace('([^A-Za-z0-9 ])', '', $facturaSponsor[0]->logo);
    ?>
    <img src="../resources/img/<?php echo strtolower($logo) ?>.png" alt="">
    <p>Description : <?php echo e($facturaSponsor[0]->description); ?></p>
    <p>---------------------------------------------------------------------</p>
</div>
<h2>Carreras patrozinadas</h2>
<?php $__currentLoopData = $facturaSponsor; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <p><?php echo e($item->title); ?> -------------- <?php echo e($item->price); ?>€</p>
    <?php
        $importe_total += $item->price;
        $plana_principal = $item->main_plain;
    ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php if($plana_principal == 1): ?>
    <p>Coste plana principal : 30€</p>
<?php endif; ?>
<div class="importe">
    <p>--------------------------------------------------</p>
    <h2>Importe total</h2>
    <?php if($plana_principal == 1): ?>
        <p class="price"><?php echo e($importe_total+=30); ?>€</p>
    <?php else: ?>
        <p class="price"><?php echo e($importe_total); ?>€</p>
    <?php endif; ?>
</div><?php /**PATH C:\xampp\htdocs\bikerollSalma\resources\views/admin/sponsors/facturaSponsor.blade.php ENDPATH**/ ?>