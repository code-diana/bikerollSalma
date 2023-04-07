<style>
    td,th{border: 1px solid;}
    td{width: 80px}
    table{width: 1500px;margin: auto;text-align: center;}
    img{width: 50%;height: 50%}
    iframe{max-width:200px !important;max-height:200px;}
</style>
<h1>Carreras</h1>
<table style="border-collapse:collapse">
    <tr>
        <th>Nº de carrera</th>
        <th>Título</th>
        <th>Descripción</th>
        <th>Desnivel</th>
        <th>Mapa</th>
        <th>Numero de participantes</th>
        <th>Km</th>
        <th>Fecha</th>
        <th>Promocion</th>
        <th>Precio del patrocinio</th>
        <th>Estado</th>
        <th>Editar</th>
        <th>Subir fotos</th>
        <th>Ver fotos</th>
        <th>Gestionar aseguradoras</th>
        <th>Corredores apuntados</th>

    </tr>
    <?php $__currentLoopData = $carreras; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php
            $id = $row['id'];
        ?>
        <tr>
            <td><?php echo e($row['id']); ?></td>
            <td><?php echo e($row['title']); ?></td>
            <td><?php echo e($row['description']); ?></td>
            <td><?php echo e($row['unevenness']); ?> km</td>
            
            
            <td><a href="imagenCarrera/<?php echo e($id); ?>"><?php echo $row['image']?></a></td>

            <td><?php echo e($row['number_participants']); ?></td>
            <td><?php echo e($row['km']); ?></td>
            <td><?php echo e($row['date']); ?></td>

            <?php $prom=preg_replace('([^A-Za-z0-9 ])', '', $row['promotion'])?>
            <td><a href="cartelCarrera/<?php echo e($id); ?>"><img src="../resources/img/<?php echo strtolower($prom) ?>.jpg" alt=""></a></td>

            <td><?php echo e($row['price']); ?>€</td>

            <td>
                <?php if($row['state'] == 0): ?>
                    <a href="estadoCarrera/<?php echo e($id); ?>"><img src="../resources/img/off.png" alt=""></a>
                <?php else: ?>
                    <a href="estadoCarrera/<?php echo e($id); ?>"><img src="../resources/img/on.png" alt=""></a>
                <?php endif; ?>
            </td>


            <td><a href="datosCarrera/<?php echo e($id); ?>"><img src="../resources/img/edit.png" alt=""></td>

            <?php 
                //Si la carrera ya ha terminado permitir subir fotos
                if (date($row['date'])<date('Y-m-d H:i:s')){   
                    ?><td><a href="subirFotos/<?php echo e($id); ?>"><img src="../resources/img/upload.png" alt=""></a></td><?php
                }
                else{
                    ?><td><img src="../resources/img/bloquear.png" alt=""></td><?php
                }
            ?>
            <td><a href="verFotos/<?php echo e($id); ?>"><img src="../resources/img/ver.png" alt=""></a></td>

            <td><a href="aseguradoraC/<?php echo e($id); ?>"><img src="../resources/img/edit.png" alt=""></a></td>

            
            <td><a href="runnersRace/<?php echo e($id); ?>">Corredores</a></td>


        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>

<a href="<?php echo e(url('/paginaPrincipal')); ?>">Volver atras</a><?php /**PATH C:\xampp\htdocs\bikerollSalma\resources\views/admin/carreras/editarCarrera.blade.php ENDPATH**/ ?>