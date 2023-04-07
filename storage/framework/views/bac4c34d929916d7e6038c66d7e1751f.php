<?php $__env->startSection('content'); ?>
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="http://localhost/bikerollSalma/resources/pics/race3.jpg" class="d-block w-100" alt="Imagen 1">
            </div>
            <div class="carousel-item">
                <img src="http://localhost/bikerollSalma/resources/pics/race2.jpg" class="d-block w-100" alt="Imagen 2">
            </div>
            <div class="carousel-item">
                <img src="http://localhost/bikerollSalma/resources/pics/race1.jpg" class="d-block w-100" alt="Imagen 3">
            </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Siguiente</span>
        </button>
    </div>

    <div class="divCarreras">
        <div class="row">
            <?php $limit=0; ?>
            <?php $__currentLoopData = $races; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $race): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php
                if ($limit!=4){
                    $id = $race['id'];

                    //control de fechas ESTO SÍ QUE FUNCIONA
                    $fecha_actual = strtotime(date("d-m-Y H:i:00",time()));
                    $newDate = strtotime($race['date']); 

                if ($newDate>$fecha_actual){
                ?>
                <div class="col-lg-3">
                    <?php $prom=preg_replace('([^A-Za-z0-9 ])', '', $race['promotion'])?>
                    <img class="carrerasproximas" src="../resources/img/<?php echo strtolower($prom) ?>.jpg" alt="">
                    <h2><?php echo e($race['title']); ?></h2>
                    <p><?php echo e($race['description']); ?></p>
                    <p><?php echo e($race['date']); ?></p>
                    <a href="infoRace/<?php echo e($id); ?>"><div class="info but"><p>Más información</p></div></a>
                </div>
                <?php 
                $limit++;
                }
                }
                ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>

    <p class="divisor"></p>

    <div class="divSponsors">
        <div class="titleSpon"><p>Patrocinadores</p></div>
        <div class="container">
            <div class="row">
                <?php $__currentLoopData = $sponsors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sponsor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-sm">
                        <?php
                            $id = $sponsor['id'];
                        ?>
                        <?php $image=preg_replace('([^A-Za-z0-9 ])', '', $sponsor['logo'])?>
                        <img class="logo" src="../resources/img/<?php echo strtolower($image) ?>.png" alt="">
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>

    <!-- Finalizadas -->
    <div class="row">
        <h1>Carreras Recientes</h1>
        <?php $cont=0; ?>
        <?php $__currentLoopData = $fin; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $f): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php
            if($cont!=2){
                $id = $race['id'];

                $fecha_actual = strtotime(date("d-m-Y H:i:00",time()));
                $newDate = strtotime($f['date']); 

                $hoy=now();
                $carrera=$f->date;
                $intervalo = $hoy->diff($carrera);

                //Cogemos las carreras del ultimo mes con limite de 2, lo cogemos por descendente por lo tanto siempre saldrá la mas cercana primero
                if ($newDate<$fecha_actual && $intervalo->m<=3){
            ?>
            <div class="col-lg-6">
                <?php $prom=preg_replace('([^A-Za-z0-9 ])', '', $f['promotion'])?>
                <img class="carrerasproximas"  src="../resources/img/<?php echo strtolower($prom) ?>.jpg" alt="">
                <h2><?php echo e($f['title']); ?></h2>
                <p><?php echo e($f['description']); ?></p>
                <p><?php echo e($f['date']); ?></p>
                <a href="infoRace/<?php echo e($id); ?>"><div class="info but"><p>Más información</p></div></a>
            </div>
                <?php 
            //Limit 2
            $cont++;
            } 
        }?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\bikerollSalma\resources\views/paginaPrincipal.blade.php ENDPATH**/ ?>