

<?php $__env->startSection('title', '我的通知'); ?>

<?php $__env->startSection('content'); ?>
  <div class="container">
    <div class="col-md-10 offset-md-1">
      <div class="card ">

        <div class="card-body">

          <h3 class="text-xs-center">
            <i class="far fa-bell" aria-hidden="true"></i> 我的通知
          </h3>
          <hr>

          <?php if($notifications->count()): ?>

            <div class="list-unstyled notification-list">
              <?php $__currentLoopData = $notifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notification): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php echo $__env->make('notifications.types._' . Str::snake(class_basename($notification->type)), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

              <?php echo $notifications->render(); ?>

            </div>

          <?php else: ?>
            <div class="empty-block">没有消息通知！</div>
          <?php endif; ?>

        </div>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\phpstudy\WWW\laravelstudy\resources\views/notifications/index.blade.php ENDPATH**/ ?>