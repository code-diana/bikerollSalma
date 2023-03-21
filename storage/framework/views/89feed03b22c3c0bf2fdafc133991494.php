<h1>Elegir Carreras disponibles</h1>
<?php if(count($races)==0): ?>
    <p>Ya has seleccionado todas las carreras!</p>
<?php else: ?>
    <form action="../chooseRaces/<?php echo e($id); ?>" method="post">
        <?php echo csrf_field(); ?>
        <table>
            <tr>
                <?php $__currentLoopData = $races; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $race): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php $id = $race['id']; ?>
                    <td>
                        <input type="checkbox" name="racescheck[]" value="<?php echo e($id); ?>">
                        <label><?php echo e($race['title']); ?></label><br>
                    </td>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tr> 
        </table>
        <input type="submit" value="Seleccionar" name="select">
    </form>
<?php endif; ?>

<a href="<?php echo e(url('/paginaPrincipal')); ?>">Pagina principal</a><?php /**PATH C:\xampp\htdocs\bikerollSalma\resources\views/admin/sponsors/elegirCarreras.blade.php ENDPATH**/ ?>