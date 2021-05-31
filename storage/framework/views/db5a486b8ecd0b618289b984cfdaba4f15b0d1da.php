<header id="header" class="d-flex align-items-center">
    
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="<?php echo e(url('/')); ?>">
        
        <img src="/img/logo-trans.png"/>
        <span></span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt=""></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Packages</a></li>
          
          
          <li class="dropdown"><a href="#"><span>Account</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              
              <li><a href="<?php echo e(route('login')); ?>">Login</a></li>
              <li><a href="<?php echo e(route('register')); ?>">Register</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      <!-- .navbar -->

    </div>
  </header><?php /**PATH C:\Users\ielemson\Desktop\Apps\Laravel\maxincome\resources\views/partials/header.blade.php ENDPATH**/ ?>