<style>
    div{
        border: 1px solid;
        width: 25%;
        height: 500px;
    }
    img{
        width: 200px;
    }
    .pdf{
        background-color:black;
        color: white;
        padding: 10px 20px; 
        margin-left: 50px;
    }
</style>
<h1>Carreras</h1>


<form action="verCorredores" method="post">
    <?php echo csrf_field(); ?>
    <input type="text" name="buscador" id="busc">
    <input type="submit" value="Buscar" name="buscButton">
</form>

<?php if(count($races) == 0): ?>
    <div>
        <p>No se ha encontrado ningún resultado</p>
        <a href="anyadirCarrera"><p>Crear nueva carrera</p></a>
    </div>
<?php else: ?>
    <?php $__currentLoopData = $races; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $race): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div>
        <?php
            $id = $race->id;
            $image=preg_replace('([^A-Za-z0-9 ])', '', $race->image);
            $date = new DateTime($race->date);
        ?>
        <a href="runnersRace/<?php echo e($id); ?>"><img src="../resources/img/<?php echo strtolower($image) ?>.jpg" alt=""></a>
        
        <h2>Carrera <?php echo e($loop->index+1); ?></h2>
        <p><?php echo e($date->format('d/m/Y')); ?></p>
        <p><?php echo e($id); ?></p>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>

<a href="<?php echo e(url('/paginaPrincipal')); ?>">Pagina principal</a>
<?php /**PATH C:\xampp\htdocs\bikerollSalma\resources\views/admin/inscripciones/inscripcion.blade.php ENDPATH**/ ?>