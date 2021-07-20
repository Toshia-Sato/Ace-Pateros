<title>Admin | HMO</title>




<?php $__env->startSection('content'); ?>
<br>
<div class="container">
    <div class="col-md-16">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>HMO</h2>
            </div>
        </div>
    </div>

    <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>
    <form action="<?php echo e(route('hmo.store')); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>

        <div class="row">
            
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                <label for="image" class="pr-2">Company Name</label>
                    <input type="text" name="name" class="form-control"">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                <label for="url" class="pr-2">Company Website</label>
                    <input type="text" name="url" class="form-control"">
                </div>
            </div>
            <?php $__errorArgs = ['url'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <strong><?php echo e($message); ?></strong>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

            <div class="col-xs-12 col-sm-12 col-md-12">
                    <label for="image" class="pr-2">Company Logo</label>
                    <input type="file" name="image" id="image" class="form-control-file">
            </div>

            <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <strong><?php echo e($message); ?></strong>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Add</button>
            </div>
        </div>

    </form>




<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                
            </div>
        </div>
    </div>

    <?php if($message = Session::get('success')): ?>
        <div class="alert alert-success">
            <p><?php echo e($message); ?></p>
        </div>
    <?php endif; ?>

    <table class="table table-bordered table-responsive-lg">
        <tr>
            
            <th>ID</th>
            <th>HMO Name</th>
            <th>HMO Logo</th>
            <th width="280px">Action</th>
        </tr>

        <?php $__currentLoopData = $hmo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hmos): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                
                <td><?php echo e($hmos->id); ?></td>
                <td><?php echo e($hmos->name); ?></td>
                <td>
                <img src="/storage/<?php echo e($hmos->image); ?>" alt="" class="img-thumbnail" style="width: 100px;">
                </td>

                <td>
                    <form action="<?php echo e(route('hmo.destroy', $hmos->id)); ?>" method="POST">

                        <a href="hmo/<?php echo e($hmos->id); ?>/edit">
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
    
    
</div>
    </div>

    <div class="container"><?php echo e($hmo->links()); ?></div>

<?php $__env->stopSection(); ?>
</div>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel\ace-pateros\resources\views/hmo/index.blade.php ENDPATH**/ ?>