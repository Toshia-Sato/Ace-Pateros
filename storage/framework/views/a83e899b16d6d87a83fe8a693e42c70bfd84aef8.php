<?php $__env->startSection('content'); ?>

<div class="jumbotron text-white" style="background:#800000; color:#ffffff; height:150px;">
  <div class="container">
    <h1 class="align-middle text-center">Accredited HMO</h1>
  </div>
</div>

      <?php if($count== 0): ?>
          <p class="text-center">Sorry, No Accredited HMO available at the moment.</p>
      <?php else: ?>
        <div class="container">
            <div class="row justify-content-md-center">
            <?php $__currentLoopData = $hmo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hmos): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            
            <div class="col-6 col-md-4">
            <a target="_blank" href="<?php echo e($hmos->url); ?>" class="href">
                <div class="text-center" style="margin-bottom: 20px; padding: 10px;">
                <img src="/storage/<?php echo e($hmos->image); ?>" alt="" class=" rounded-circle img-thumbnail">
                <h4 class="mt-2 text-success"><?php echo e($hmos->name); ?></h4>
                </div>
              </a>
            </div>
           
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>

        <?php echo e($hmo->links()); ?>

      <?php endif; ?>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel\ace-pateros\resources\views/accredited-hmos.blade.php ENDPATH**/ ?>