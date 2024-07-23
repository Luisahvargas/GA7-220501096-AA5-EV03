<?php $__env->startSection('titulo', 'registrar usuario'); ?>

<?php $__env->startSection('contenido'); ?>

<br>
    <h3>Registrar Usuario</h3>
    <form action="/usuarios" method="POST">
        <?php echo csrf_field(); ?>
        <div class="mb-3">
          <label for="Nombre" class="form-label">Digite su nombre</label>
          <input type="text" class="form-control" id="Nombre" name="Nombre">
        </div>
        <div class="mb-3">
            <label for="Apellido" class="form-label">Digite su Apellido</label>
            <input type="text" class="form-control" id="Apellido" name="Apellido">
          </div>
        <div class="mb-3">
            <label for="Cedula" class="form-label">Digita la cedula</label>
            <input type="number" class="form-control" id="Cedula" name="Cedula">
        </div>
        <div class="mb-3">
            <label for="Email" class="form-label">Digite su Correo</label>
            <input type="text" class="form-control" id="Email" name="Email">
        </div>
        <div class="mb-3">
            <label for="Cargo" class="form-label">Digite su Cargo</label>
            <input type="text" class="form-control" id="Cargo" name="Cargo">
        </div>
        <br>
        <button type="submit" class="btn btn-success">Guardar</button>
    </form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Luisa Fernanda Herna\Desktop\Proyecto_laravel\luisa_app\resources\views/usuario/create.blade.php ENDPATH**/ ?>