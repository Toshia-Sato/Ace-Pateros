<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e(__('Dashboard')); ?></div>

                <div class="card-body text-center">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                    <?php echo e(__('Welcome Admin!')); ?> <br><br>
                    <?php echo e(__('Click the link on the carry Administrative Task.')); ?>



                </div>

                
            </div>
            <p style="font-size:10px" class="mt-3 text-center">
* * * * * * * * * * W A R N I N G * * * * * * * * * * <br>
This computer system is the property of the ACE Medical Center Pateros. It is for authorized use only.  By using this system, all users acknowledge notice of, and agree to comply with, the ACEMCP Acceptable Use of Information Technology Resources Policy (“AUP”).  Click here to read the policy (IT0110).  Unauthorized or improper use of this system may result in civil charges/criminal penalties, and/or other sanctions as set forth in the ACEMCP AUP. By continuing to use this system you indicate your awareness of and consent to these terms and conditions of use.
If you are physically located in the European Union, you may have additional rights per the GDPR. Visit the web site dataprivacy.utk.edu for more information. <br><br>

LOG OFF IMMEDIATELY if you do not agree to the conditions stated in this warning. <br><br>

* * * * * * * * * * * * * * * * * * * * * * * *


                    </p>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel\ace-pateros\resources\views/home.blade.php ENDPATH**/ ?>