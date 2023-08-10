<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
   <?php $__env->slot('header', null, []); ?> 
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          <?php echo e(__('Dashboard')); ?>

      </h2>
   <?php $__env->endSlot(); ?>
<h1 class="text-green-500 text-center font-semibold text-xl"><?php echo e($matiere->nom); ?></h1>
<form action="/ajouter-notes" method="POST">
  <?php echo csrf_field(); ?>
  <input type="hidden" name="matiere_id" value="<?php echo e($matiere->id); ?>">
<table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Nom étudient</th>
        <th scope="col">Note</th>
      </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $etudients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($item->id); ?></td>
            <td><?php echo e($item->getFullName()); ?></td>
            <td><input type="text" name="<?php echo e($item->id); ?>"></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<button type="submit" class="px-3 py-2 hover:bg-sky-600 bg-sky-500 text-white rounded rounded-lg">Ajouter</button>
</form>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php /**PATH C:\wamp64\www\m-project\resources\views/notes/ajouterNote.blade.php ENDPATH**/ ?>