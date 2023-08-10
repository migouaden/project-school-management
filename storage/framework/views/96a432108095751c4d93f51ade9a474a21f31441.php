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
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-2">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="container w-full flex justify-center mx-auto">
                        <div class="flex flex-col">
                            <div class="w-full">
                                <?php if(session('success')): ?>
                                <div class="p-4 border shadow text-green-800 bg-green-500">
                                    <?php echo e(session('success')); ?>

                                </div>
                                <?php endif; ?>
                                <div class="border-b border-gray-200 shadow">
                                    <table>
                                        <thead class="bg-gray-50">
                                            <tr>
                                                <th class="px-6 py-2 text-xs text-gray-500">
                                                    ID
                                                </th>
                                                <th class="px-6 py-2 text-xs text-gray-500">
                                                    Nom
                                                </th>
                                                <th class="px-6 py-2 text-xs text-gray-500">
                                                    Prenom
                                                </th>
                                                <th class="px-6 py-2 text-xs text-gray-500">
                                                    Email
                                                </th>
                                                <th class="px-6 py-2 text-xs text-gray-500">
                                                    action
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody class="bg-white">
                                            <?php $__currentLoopData = $profs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr class="whitespace-nowrap">
                                                <td class="px-6 py-4 text-sm text-gray-500">
                                                    <?php echo e($item->id); ?>

                                                </td>
                                                <td class="px-6 py-4">
                                                    <div class="text-sm text-gray-900">
                                                       <?php echo e($item->nom); ?>

                                                    </div>
                                                </td>
                                                <td class="px-6 py-4">
                                                    <div class="text-sm text-gray-900">
                                                       <?php echo e($item->prenom); ?>

                                                    </div>
                                                </td>
                                                <td class="px-6 py-4">
                                                    <div class="text-sm text-gray-900">
                                                       <?php echo e($item->email); ?>

                                                    </div>
                                                </td>

                                                <td class="px-6 py-4 flex">
                                                    <a href="<?php echo e(route('profs.edit', ['prof' => $item])); ?>" class="px-4 py-1 text-sm text-white bg-blue-400 rounded mr-2">Edit</a>
                                                    <form method="post" action="<?php echo e(route('profs.destroy', ['prof' => $item])); ?>">
                                                        <?php echo csrf_field(); ?>
                                                        <input type="hidden" name="_method" value="DELETE">
                                                        <button type="submit" class=" px-6
                                                        py-2.5
                                                        bg-red-600
                                                        text-white
                                                        font-medium
                                                        text-xs
                                                        leading-tight
                                                        uppercase
                                                        rounded
                                                        shadow-md
                                                        hover:bg-red-700 hover:shadow-lg
                                                        focus:bg-red-700 focus:shadow-lg focus:outline-none focus:ring-0
                                                        active:bg-red-800 active:shadow-lg
                                                        transition
                                                        duration-150
                                                        ease-in-out">Supprimer</button>
                                                    </form>
                                                </td>
                                            </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tbody>
                                    </table>
                </div>
            </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?><?php /**PATH C:\wamp64\www\m-project\resources\views/profs/index.blade.php ENDPATH**/ ?>