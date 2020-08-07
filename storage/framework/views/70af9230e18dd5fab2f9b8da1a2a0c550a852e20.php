<?php $__env->startSection('title', '话题列表'); ?>

<?php $__env->startSection('content'); ?>

<div class="row mb-5">
  <div class="col-lg-9 col-md-9 topic-list">
    <div class="card ">

      <div class="card-header bg-transparent">
        <ul class="nav nav-pills">
          <li class="nav-item"><a class="nav-link active" href="#">最后回复</a></li>
          <li class="nav-item"><a class="nav-link" href="#">最新发布</a></li>
        </ul>
      </div>

      <div class="card-body">
        
        <?php echo $__env->make('topics._topic_list', ['topics' => $topics], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        
        <div class="mt-5">
          <?php echo $topics->appends(Request::except('page'))->render(); ?>

        </div>
      </div>
    </div>
  </div>

  <div class="col-lg-3 col-md-3 sidebar">
    <?php echo $__env->make('topics._sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\phpstudy\WWW\laravelstudy\resources\views/topics/index.blade.php ENDPATH**/ ?>