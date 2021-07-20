<?php echo \Livewire\Livewire::styles(); ?>

<title>Doctor's Section</title>
<?php $__env->startSection('content'); ?>
<div class="row justify-content-md-center">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="<?php echo e(route('doctors.create')); ?>" title="Create a doctor" target="__blank"> <i class="fas fa-plus-circle"></i>
                    </a>
            </div>
        </div>
    </div>

    <?php if($message = Session::get('success')): ?>
        <div class="alert alert-success">
            <p><?php echo e($message); ?></p>
        </div>
    <?php endif; ?>

    <div class="card-body">
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('search')->html();
} elseif ($_instance->childHasBeenRendered('kRYf3QB')) {
    $componentId = $_instance->getRenderedChildComponentId('kRYf3QB');
    $componentTag = $_instance->getRenderedChildComponentTagName('kRYf3QB');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('kRYf3QB');
} else {
    $response = \Livewire\Livewire::mount('search');
    $html = $response->html();
    $_instance->logRenderedChild('kRYf3QB', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    </div>
    <script src="<?php echo e(asset('js/app.js')); ?>"></script>
    <?php echo \Livewire\Livewire::scripts(); ?>


    <?php echo $doctors->links(); ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravel\ace-pateros\resources\views/doctors/index.blade.php ENDPATH**/ ?>