<style>
    td,th{border: 1px solid;}
    td:last-child img{width: 50px}
    td{width: 12.85%}
    table{width: 90%;margin: auto;text-align: center;}
    img{width: 40px;height: 40px}
</style>
<h1>sponsors</h1>

<?php if(session('mensaje')): ?>
    <script>
        alert('<?php echo e(session('mensaje')); ?>');
    </script>
<?php endif; ?>

<table style="border-collapse:collapse">
    <tr>
        <th>Nombre</th>
        <th>Descripción</th>
        <th>logo</th>
        <th>plana principal</th>
        <th>Estado</th>
        <th>Editar</th>
        <th>Seleccionar carreras</th>
        <th>Descargar pdf</th>
    </tr>
    <?php $__currentLoopData = $sponsor; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php
            $id = $row['id'];
        ?>
        <tr>
            <td><?php echo e($row['name']); ?></td>
            <td><?php echo e($row['description']); ?></td>
            
            <?php 
            $logo=preg_replace('([^A-Za-z0-9 ])', '', $row['logo']);
            ?>
            <td><img src="../resources/img/<?php echo strtolower($logo) ?>.png" alt=""></td>

            <td>
                <?php if($row['main_plain'] == 0): ?>
                    <?php echo e("No"); ?>

                <?php else: ?>
                    <?php echo e("Sí"); ?>

                <?php endif; ?>
            </td>
            <td>
                <?php if($row['sponsorState'] == 0): ?>
                    <a href="activarSponsor/<?php echo e($id); ?>"><img src="../resources/img/off.png" alt=""></a>
                <?php else: ?>
                    <a href="activarSponsor/<?php echo e($id); ?>"><img src="../resources/img/on.png" alt=""></a>
                <?php endif; ?>
            </td>
            <td>
                <a href="editarSponsor/<?php echo e($id); ?>"><img src="../resources/img/edit.png" alt=""></a>
                <a href="editarLogo/<?php echo e($id); ?>"><img src="../resources/img/pic.png" alt=""></a>
            </td>
            <td>
                <a href="selectRaces/<?php echo e($id); ?>"><img src="../resources/img/choice.png" alt="checkbox icon"></a>
            </td>
            <td>
                <a href="download-pdf/<?php echo e($id); ?>"><img src="../resources/img/download.png" alt="descargar pdf"></a>
            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>

<a href="<?php echo e(url('/paginaPrincipal')); ?>">Pagina principal</a><?php /**PATH C:\xampp\htdocs\bikerollSalma\resources\views/admin/sponsors/mostrarSponsors.blade.php ENDPATH**/ ?>