<?php $__env->startSection('content'); ?>
<div class="container">
  <div class="col-md-10 offset-md-1">
    <div class="card ">
      <div class="card-header">
        <h1>
          Topic
          <a class="btn btn-success float-xs-right" href="<?php echo e(route('topics.create')); ?>">Create</a>
        </h1>
      </div>

      <div class="card-body">
        <?php if($topics->count()): ?>
          <table class="table table-sm table-striped">
            <thead>
              <tr>
                <th class="text-xs-center">#</th>
                <th>Title</th> <th>Body</th> <th>User_id</th> <th>Category_id</th> <th>Reply_count</th> <th>View_count</th> <th>Last_reply_user_id</th> <th>Order</th> <th>Excerpt</th> <th>Slug</th>
                <th class="text-xs-right">OPTIONS</th>
              </tr>
            </thead>

            <tbody>
              <?php $__currentLoopData = $topics; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $topic): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr>
                <td class="text-xs-center"><strong><?php echo e($topic->id); ?></strong></td>

                <td><?php echo e($topic->title); ?></td> <td><?php echo e($topic->body); ?></td> <td><?php echo e($topic->user_id); ?></td> <td><?php echo e($topic->category_id); ?></td> <td><?php echo e($topic->reply_count); ?></td> <td><?php echo e($topic->view_count); ?></td> <td><?php echo e($topic->last_reply_user_id); ?></td> <td><?php echo e($topic->order); ?></td> <td><?php echo e($topic->excerpt); ?></td> <td><?php echo e($topic->slug); ?></td>

                <td class="text-xs-right">
                  <a class="btn btn-sm btn-primary" href="<?php echo e(route('topics.show', $topic->id)); ?>">
                    V
                  </a>

                  <a class="btn btn-sm btn-warning" href="<?php echo e(route('topics.edit', $topic->id)); ?>">
                    E
                  </a>

                  <form action="<?php echo e(route('topics.destroy', $topic->id)); ?>" method="POST" style="display: inline;" onsubmit="return confirm('Delete? Are you sure?');">
                    <?php echo e(csrf_field()); ?>

                    <input type="hidden" name="_method" value="DELETE">

                    <button type="submit" class="btn btn-sm btn-danger">D </button>
                  </form>
                </td>
              </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
          </table>
          <?php echo $topics->render(); ?>

        <?php else: ?>
          <h3 class="text-xs-center alert alert-info">Empty!</h3>
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\phpstudy\WWW\laravelstudy\resources\views/topics/index.blade.php ENDPATH**/ ?>