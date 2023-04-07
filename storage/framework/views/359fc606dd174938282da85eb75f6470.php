<?php $__env->startSection('content'); ?>
<h1>Información carrera</h1>

<div class="row">
    
    <div class="col-lg-8">
        <p>Mapa</p>
        <div class="racemap"><?php echo $races['image']?></div>
    </div>

    <div class="col-lg-4">
        <div>
            <h3><?php echo e($races['title']); ?></h3>
        </div>
        <div>
            <p>Descripción : <?php echo e($races['description']); ?></p>
        </div>  
        <div>
            <p>Desnivel : <?php echo e($races['unevenness']); ?> km</p>
        </div>
        <div>
            <p>Numero participantes : <?php echo e($races['number_participants']); ?></p>
        </div>
        <div>
            <p>Kilometros : <?php echo e($races['km']); ?> km</p>
        </div>
        <div>
            <p>Fecha y hora de salida  : <?php echo e($races['date']); ?></p>
        </div>
        <div>
            <p>Punto de salida : <?php echo e($races['start']); ?></p>
        </div>
        <div>
            <p>Precio : Desde <?php echo e($races['price']); ?>€</p>
        </div>

<?php $id=$races['id']; 


//revisar

//ver si la fecha de la carrera es más grande que hoy
// $fecha_actual = date("d-m-Y");
// $newDate = date("d-m-Y", strtotime($races['date'])); 
$fecha_actual = strtotime(date("d-m-Y H:i:00",time()));
$newDate = strtotime($races['date']); 

//calcular el intervalo
$hoy=now();
$carrera=$races->date;
$intervalo = $hoy->diff($carrera);

if ($intervalo->m<1 && $intervalo->d<30 && $newDate>$fecha_actual){ ?>

<h3><a href="<?php echo e(url('/altaCorredor/'.$id)); ?>">Darse de alta</a></h3>

<?php } ?>
    </div>
</div>


<div>
    <a href="<?php echo e(url('/')); ?>">Pagina principal</a>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\bikerollSalma\resources\views/infoRace.blade.php ENDPATH**/ ?>