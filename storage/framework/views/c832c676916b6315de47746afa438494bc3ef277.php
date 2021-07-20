<?php $__env->startSection('content'); ?>


<div class="container">

<div class="jumbotron text-white" style="background:#800000; color:#ffffff; height:150px;">
  <div class="container">
    <h1 class="align-middle text-center">Careers</h1>
  </div>
</div>

    <div class="row justify-content-center">

        <?php if($count == 0): ?>
          <p class="text-center">Sorry, No Careeer Opening available at the moment.</p>
        <?php else: ?>
        <div class="container">
            <div class="row justify-content-md-center">
            <?php $__currentLoopData = $careers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $career): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="posts clearfix row">
						<div class="col-xs-12 m-3">
							<!-- Department -->
							<span class="post-date">Posted <strong><?php echo e($career->created_at->format('F Y')); ?></strong></span>
						</div>
						<div class="col-xs-12 m-3">
							<h4 class="post-title"><?php echo e($career->jobtitle); ?></h4>
							<span><div style="font-size: 13px;"><span class="card-text" style="color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif;">
                            <?php echo e(Str::limit($career->description, 500)); ?></span></div></span>
						</div>
						<div class="col-xs-12 m-3">
							<a class="btn btn-lg btn-danger btn-block" target="_blank" href="https://docs.google.com/forms/d/e/1FAIpQLScNSz1YE4MXnGm8ymucZTOmfrpOkRTF1TxlY6NjopbiVwV8Bw/formResponse" >Apply</a>
						</div>
					</li>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>

        <?php echo e($careers->links()); ?>

      <?php endif; ?>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel\ace-pateros\resources\views/careers.blade.php ENDPATH**/ ?>