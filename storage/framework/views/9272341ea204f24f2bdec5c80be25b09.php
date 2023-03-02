     
<?php $__env->startSection('title', 'Fonzie Agência Virtual - Criar Evento'); ?>

<?php $__env->startSection('content'); ?>
     
<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Crie seu evento</h1>
    <form action="/events" method="POST">
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label class="title">Evento:</label>
            <input name="title" type="text" class="form-control" id="title" placeholder="Nome do evento">
        </div>
        <div class="form-group">
            <label class="title">Cidade:</label>
            <input name="city" type="text" class="form-control" id="city" placeholder="Local do evento">
        </div>
        <div class="form-group">
            <label class="title">O evento é privado?</label>
            <select name="private" id="private" class="form-control">
                <option value="0">Não</option>
                <option value="1">Sim</option>
            </select>
        </div>
        <div class="form-group">
            <label class="title">Descrição:</label>
            <textarea name="description" id="description" class="form-control" placeholder="O que vai acontecer no evento?"></textarea>
        </div>
        <input type="submit" class="btn btm-primary" value="Criar Evento">
    </form>
</div>

<?php $__env->stopSection(); ?>   
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/estudos-laravel/resources/views/events/create.blade.php ENDPATH**/ ?>