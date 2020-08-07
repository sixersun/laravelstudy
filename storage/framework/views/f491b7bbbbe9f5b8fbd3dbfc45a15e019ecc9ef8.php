<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

  <title><?php echo $__env->yieldContent('title', 'LaraBBS'); ?> - MY BBS</title>

  <!-- Styles -->
  <link href="<?php echo e(mix('css/app.css')); ?>" rel="stylesheet">

</head>

<body>
  <div id="app" class="<?php echo e(route_class()); ?>-page">

    <?php echo $__env->make('layouts._header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="container">

      <?php echo $__env->make('shared._messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

      <?php echo $__env->yieldContent('content'); ?>

    </div>

    <?php echo $__env->make('layouts._footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </div>

  <!-- Scripts -->
  <script src="<?php echo e(mix('js/app.js')); ?>"></script>
</body>

</html><?php /**PATH D:\phpstudy\WWW\laravelstudy\resources\views/layouts/app.blade.php ENDPATH**/ ?>