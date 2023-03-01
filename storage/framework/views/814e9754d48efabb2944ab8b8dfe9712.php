<?php $__env->startSection('title', 'HDC Events'); ?>

<?php $__env->startSection('content'); ?>

<div id="searc-container" class="col-md-12">
    <h1>Busque um evento</h1>
    <form action="">
        <input type="text" id="search" class="form-control" placeholder="Procurar...">
    </form>
</div>
<div id="events-container" class="col-md-12">
    <h2>próximos eventos</h2>
    <p>Veja os proximos dias</p>
    <div id="cards-container" class="row">
        <?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="card col-md-3">
                <img src="" alt="" class="src">
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/estudos-laravel/resources/views/welcome.blade.php ENDPATH**/ ?>