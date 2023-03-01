     
<?php $__env->startSection('title', 'Fonzie Agência Virtual - Produtos'); ?>

<?php $__env->startSection('content'); ?>
     
<h1>Products</h1>

   <?php if($busca != ''): ?>

   <p>O usuário está buscando por: <b><?php echo e($busca); ?></b></p>

   <?php endif; ?>

<p><a href="/">Voltar</a></p>

<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/estudos-laravel/resources/views/products.blade.php ENDPATH**/ ?>