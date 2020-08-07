<nav class="navbar navbar-expand-lg navbar-light bg-light navbar-static-top">
  <div class="container">
    <!-- Branding Image -->
    <a class="navbar-brand " href="<?php echo e(url('/')); ?>">
      LaraBBS
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- Left Side Of Navbar -->
      <ul class="navbar-nav mr-auto">

      </ul>

      <!-- Right Side Of Navbar -->
      <ul class="navbar-nav navbar-right">
        <!-- Authentication Links -->
        <li class="nav-item"><a class="nav-link" href="<?php echo e(route('login')); ?>">登录</a></li>
        <li class="nav-item"><a class="nav-link" href="<?php echo e(route('register')); ?>">注册</a></li>
      </ul>
    </div>
  </div>
</nav><?php /**PATH /Volumes/Work/home/smartclick/blog/Laravel/resources/views/layouts/_header.blade.php ENDPATH**/ ?>