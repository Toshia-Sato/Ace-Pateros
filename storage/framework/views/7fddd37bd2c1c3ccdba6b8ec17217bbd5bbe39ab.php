<div class="container">
    <div class="row">
        <div class="col-md-12">
            
            <input type="text"  class="form-control" placeholder="Search a Doctor..." wire:model="searchTerm" />

        <table class="table table-bordered table-responsive-lg mt-4">
        <tr>

            <th>ID</th>
            <th>Name</th>
            <th>Specialization</th>
            <th>Category</th>
            <th>Schedule</th>
            <th>Image</th>
            <th width="280px">Action</th>
        </tr>
        <?php $__currentLoopData = $doctors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $doctor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                
                <td><?php echo e($doctor->id); ?></td>
                <td><?php echo e($doctor->name); ?></td>
                <td><?php echo e($doctor->specialization->specialization); ?></td>
                <td><?php echo e($doctor->category); ?></td>
                <td><?php echo e($doctor->schedule); ?></td>
                <td>
                <?php if(!($doctor->image)): ?>
                    <img src="/storage/uploads/default.png" class="img-thumbnail" style="width: 100px;">
                <?php else: ?> 
                     <img src="/storage/<?php echo e($doctor->image); ?>" alt="" class="img-thumbnail" style="width: 100px;">
                <?php endif; ?>
                </td>
                
                <td>
                    <form action="<?php echo e(route('doctors.destroy', $doctor->id)); ?>" method="POST">

                        <a href="<?php echo e(route('doctors.show', $doctor->id)); ?>" title="show">
                            <i class="fas fa-eye text-success  fa-lg"></i>
                        </a>

                        <a href="doctors/<?php echo e($doctor->id); ?>/edit">
                            <i class="fas fa-edit  fa-lg"></i>

                        </a>

                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>

                        <button type="submit" title="delete" style="border: none; background-color:transparent;">
                            <i class="fas fa-trash fa-lg text-danger"></i>

                        </button>
                    </form>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
            <?php echo e($doctors->links()); ?>

        </div>
    </div>
</div><?php /**PATH D:\laravel\ace-pateros\resources\views/livewire/search.blade.php ENDPATH**/ ?>