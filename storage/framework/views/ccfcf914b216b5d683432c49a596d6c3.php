<?php $__env->startSection('content'); ?>
<?php
    $id_race = $id;
?>
<h1>Corredores apuntados en la carrera <?php echo e($id_race); ?></h1>


<form action="<?php echo e($id_race); ?>" method="post">
    <?php echo csrf_field(); ?>
    <input type="text" name="buscador" id="busc">
    <input type="submit" value="Buscar" name="buscButton">
</form>


<?php if(count($runners)==0): ?>
    <p>No hay ningún corredor matriculado en esta carrera</p>
<?php else: ?>
    <table>
        <tr>
            <th>Nombre</th>
            <th>Edad</th>
            <th>Genero</th>
            <th>Dirección</th>
            <th>Pro</th>
            <th>Numero federación</th>
            <th>Dorsal</th>
            <th>Puntos</th>
            <th>Generar QR</th>
        </tr>
        <?php $__currentLoopData = $runners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $runner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php
                //Calcular la edad de la persona depende de su fecha de nacimiento
                $edad = now()->diff($runner->birth_date)->y;
            ?>

            <tr>
                <td><?php echo e($runner->name . ' ' . $runner->last_name); ?></td>
                <td><?php echo e($edad); ?></td>
                
                <?php if($runner->sex == 1): ?>
                    <td>Mujer</td>
                <?php else: ?>
                    <td>Hombre</td>
                <?php endif; ?>

                <td><?php echo e($runner->adress); ?></td>
                
                <?php if($runner->pro == 1): ?>
                    <td>Sí</td>
                    <td><?php echo e($runner->federation_number); ?></td>
                <?php else: ?>
                    <td>No</td>
                    <td>----</td>
                <?php endif; ?>
                <td><?php echo e($runner->dorsal); ?></td>
                <td><?php echo e($runner->points); ?></td>
                <?php
                    $id_runner = $runner->id;
                    //Link de la pagina en real
                    $url = route('datosQr' , ['id_runner' => $id_runner , 'id_race' => $id_race]);
                    //$url = "http://www.dianasalma-pruebas.com.mialias.net/bikeroll/public/datosQr/$id";
                    echo $url;
                ?>
                <td><?php echo QrCode::size(100)->generate($url); ?></td>

            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
<?php endif; ?>

<a href="<?php echo e(url('/paginaPrincipal')); ?>">Pagina principal</a>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\bikerollSalma\resources\views/admin/inscripciones/runnersRace.blade.php ENDPATH**/ ?>