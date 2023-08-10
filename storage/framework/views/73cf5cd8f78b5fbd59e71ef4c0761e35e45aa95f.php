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
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="container flex justify-center mx-auto">
                        <div class="flex flex-col">
                            <div class="w-full">
                                <div class="border-b border-gray-200 shadow">
                                    <div class="block p-6 rounded-lg shadow-lg bg-white max-w-sm">
                                        <form method="POST" action="<?php echo e(route('etudients.update', ['etudient' => $user])); ?>">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field("put"); ?>
                                          <div class="form-group mb-6">
                                            <label for="exampleInputEmail1" class="form-label inline-block mb-2 text-gray-700">Nom</label>
                                            <input type="text" name="nom" class="form-control" value="<?php echo e($user->nom); ?>" id="exampleInputEmail1"
                                              aria-describedby="emailHelp" />
                                          </div>
                                          <div class="form-group mb-6">
                                            <label for="exampleInputEmail1" class="form-label inline-block mb-2 text-gray-700">Prenom</label>
                                            <input type="text" name="prenom" class="form-control" value="<?php echo e($user->prenom); ?>" id="exampleInputEmail1"
                                              aria-describedby="emailHelp" />
                                          </div>
                                          <div class="form-group mb-6">
                                            <label for="exampleInputEmail1" class="form-label inline-block mb-2 text-gray-700">Email</label>
                                            <input type="email" name="email" class="form-control" value="<?php echo e($user->email); ?>" id="exampleInputEmail1"
                                              aria-describedby="emailHelp" />
                                          </div>
                                          <button type="submit" class="
                                            px-6
                                            py-2.5
                                            bg-blue-600
                                            text-white
                                            font-medium
                                            text-xs
                                            leading-tight
                                            uppercase
                                            rounded
                                            shadow-md
                                            hover:bg-blue-700 hover:shadow-lg
                                            focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0
                                            active:bg-blue-800 active:shadow-lg
                                            transition
                                            duration-150
                                            ease-in-out">Modifier</button>
                                        </form>
                                      </div>
                                
                </div>
            </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?><?php /**PATH C:\wamp64\www\m-project\resources\views/etudients/edit.blade.php ENDPATH**/ ?>