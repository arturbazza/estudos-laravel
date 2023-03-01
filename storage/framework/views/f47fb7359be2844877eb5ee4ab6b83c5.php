     
<?php $__env->startSection('title', 'Fonzie Agência Virtual - Produto'); ?>

<?php $__env->startSection('content'); ?>

<?php if($id != null): ?>

    <p>Exibindo produto ID: <?php echo e($id); ?> !!!</p>

<?php endif; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/estudos-laravel/resources/views/product.blade.php ENDPATH**/ ?>