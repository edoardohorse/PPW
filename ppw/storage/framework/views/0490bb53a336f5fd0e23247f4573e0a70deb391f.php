<?php echo $__env->make('include_bootstrap', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<style>
    .nav-background {
        background-color: #38c172;
    }

</style>

<div class="container">
    <div class="row">
        <div class="col-12">
            <img class="mx-auto d-block" src="<?php echo e(asset('img/logo.png')); ?>" alt="Not found">
        </div>
    </div>

</div>

<nav class="navbar navbar-expand-lg navbar-light  nav-background">
    <div class="container col-md-12 col-sm-12 text-center">
        <div class="col-md-6 col-sm-6">
            <a class="navbar-brand" href="#">Contatti</a>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-6">
            <a class="navbar-brand" href="#">Chi siamo</a>
        </div>
    </div>
</nav>
