

<?php $__env->startSection('content'); ?>
<div class="container">

<div class="jumbotron text-white" style="background:#800000; color:#ffffff; height:150px;">
  <div class="container">
    <h1 class="align-middle text-center"><?php echo e($cap); ?></h1>
  </div>
</div>
      <?php if($count== 0): ?>
          <p class="text-center">No <?php echo e($cap); ?> available at the moment.</p>
      <?php else: ?>
          <div class="row justify-content-md-center">
            <?php $__currentLoopData = $service; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $services): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-6 col-md-4">
                <div class="border text-center" style="margin-bottom: 20px; padding: 10px;">
                <img src="/storage/<?php echo e($services->image); ?>" alt="" class=" rounded-circle img-thumbnail" style="width: 100px;">
                <h4><?php echo e($services->name); ?></h4>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>

        <?php echo e($service->links()); ?>

      <?php endif; ?>

        <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel\ace-pateros\resources\views/layouts/service.blade.php ENDPATH**/ ?>