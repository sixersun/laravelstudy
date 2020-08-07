<?php $__env->startSection('title', $user->name . ' 的个人中心'); ?>

<?php $__env->startSection('content'); ?>

<div class="row">

  <div class="col-lg-3 col-md-3 hidden-sm hidden-xs user-info">
    <div class="card ">
      <img class="card-img-top" src="https://cdn.learnku.com/uploads/images/201709/20/1/PtDKbASVcz.png?imageView2/1/w/600/h/600" alt="<?php echo e($user->name); ?>">
      <div class="card-body">
            <h5><strong>个人简介</strong></h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
            <hr>
            <h5><strong>注册于</strong></h5>
            <p>January 01 1901</p>
      </div>
    </div>
  </div>
  <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
    <div class="card ">
      <div class="card-body">
          <h1 class="mb-0" style="font-size:22px;"><?php echo e($user->name); ?> <small><?php echo e($user->email); ?></small></h1>
      </div>
    </div>
    <hr>

    
    <div class="card ">
      <div class="card-body">
        暂无数据 ~_~
      </div>
    </div>

  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Volumes/Work/home/smartclick/blog/Laravel/resources/views/users/show.blade.php ENDPATH**/ ?>