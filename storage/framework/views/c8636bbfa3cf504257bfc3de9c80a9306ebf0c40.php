

<?php $__env->startSection('content'); ?>
<div class="container">

<div class="jumbotron text-white" style="background:#800000; color:#ffffff; height:150px;">
  <div class="container">
    <h1 class="align-middle text-center"><?php echo e($cap); ?></h1>
  </div>
</div>
      <?php if($count== 0): ?>
          <p class="text-center">Sorry, No <?php echo e($cap); ?> Physician available at the moment.</p>
      <?php else: ?>
          <div class="row justify-content-md-center">
            <?php $__currentLoopData = $doctors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $doctor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-6 col-md-4">
                <div class="border text-center" style="margin-bottom: 20px; padding: 10px;">
                <img src="/storage/<?php echo e($doctor->image); ?>" alt="" class=" rounded-circle img-thumbnail" style="width: 100px;">
                <h4 class="mt-2"><?php echo e($doctor->name); ?></h4>
                <h5 class="text-success" ><?php echo e($doctor->schedule); ?></h5>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>

        <?php echo e($doctors->links()); ?>

      <?php endif; ?>

        <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel\ace-pateros\resources\views/layouts/doctor.blade.php ENDPATH**/ ?>