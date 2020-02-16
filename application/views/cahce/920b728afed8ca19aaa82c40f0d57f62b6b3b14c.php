<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-navy">
    <div class="nav-header bg-primary">
      <a class="navbar-brand"  href="<?php echo e(rt('/')); ?>"><h3><b>NUWSP</b> </h3>  </a>
     
    </div>

  
   <?php if(auth()): ?>
     <div class="dual_collapse animated fadeInLeft collapse navbar-collapse" id="main_nav_collapse">
      <div class=" " >
      <ul class="navbar-nav mr-auto">
        <li class="nav-item d-none d-sm-inline-block">
          <a href="<?php echo e(rt('/dashboard')); ?>" class="nav-link text-white"><i class="fa fa-home"></i> Dahhboard</a>
        </li>
        <li class="dropdown  nav-item d-none d-sm-inline-block">
          <a href="javascript:void(0)" data-toggle="dropdown" class="nav-link text-white dropdown-toggle"><i class="ion ion-cash"></i> Perencanaan Kegiatan</a>

              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="<?php echo e(rt('program_kegiatan_nuwas')); ?>">Per-Daerah</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?php echo e(rt('program-kegiatan/dataperurusan')); ?>">Per-Urusan</a>
              </div>
        </li>
        <li class="  nav-item d-none d-sm-inline-block dropdown">
          <a href="javascript:void(0)"  data-toggle="dropdown" class="nav-link text-white  dropdown-toggle"><i class="ion ion-cash"></i> Anggaran</a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="<?php echo e(rt('anggaran/data')); ?>">Per-Daerah</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="<?php echo e(rt('anggaran/urusan')); ?>">Per-Urusan</a>
          </div>
        </li>
        <li class=" nav-item d-none d-sm-inline-block">
            <a href="<?php echo e(rt('h-pdam/data')); ?>" class="nav-link text-white  ">
              <i class=" fa fa-industry"></i> Profil PDAM
            </a>
        </li>
       <!--  <li class="dropdown nav-item d-none d-sm-inline-block">
          <a  href="javascript:void(0)"  data-toggle="dropdown" class="nav-link text-white  dropdown-toggle"><i class=" fa fa-industry"></i> Profile PDAM</a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="<?php echo e(rt('pdam')); ?>">Seluruhnya</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="<?php echo e(rt('pdam/nuwas')); ?>">Daerah NUWAS</a>
          </div>
        </li> -->
        <li class=" nav-item d-none d-sm-inline-block">
          <a href="<?php echo e(rt('Kebijakan')); ?>" class="nav-link text-white "><i class=" fa fa-list"></i> Profile Kebijakan </a>



        </li>


        <li></li>
        <!-- <li class="nav-item d-none d-sm-inline-block">
          <a href="<?php echo e(rt('map_tematik')); ?>" class="nav-link text-white"><i class="fa fa-map"></i> Map Tematik</a>
        </li> -->

      </ul>
      <form class="form-inline mt-2 mt-md-0">
        <!-- <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button> -->
      </form>

    </div>
   <?php endif; ?>
    
    <?php if(auth()): ?>

      <ul class="navbar-nav ml-auto">
        <li class="  nav-item d-none d-sm-inline-block dropdown">
          <a href="javascript:void(0)"  data-toggle="dropdown" class="nav-link text-white  dropdown-toggle"><i class="fas fa-user-circle"></i> <?php echo e(auth('name')); ?></a>
          <div class="dropdown-menu user-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="<?php echo e(rt('admin')); ?>"><i class="fas fa-tachometer-alt"></i> Dashboard Admin</a>
            <div class="dropdown-divider"></div>

            <a class="dropdown-item" href="<?php echo e(rt('Keuangan')); ?>"><i class="fas fa-user-circle"></i>  Profile</a>
            <div class="dropdown-divider"></div>

            <a class="dropdown-item" href="<?php echo e(rt('login/logout')); ?>"><i class="fas fa-sign-out-alt"></i> Keluar</a>
          </div>
        </li>
           
        </ul>

    <?php else: ?>
     <ul class="navbar-nav ml-auto">
        <li class="  nav-item d-none d-sm-inline-block ">
          <a href="<?php echo e(rt('login')); ?>"  class="nav-link text-white"><i class="fas fa-user-circle"></i> Masuk</a>
         
        </li>
           
        </ul>
    <?php endif; ?>

    </div>

    <div>
        <button class="navbar-toggler" style="position: absolute; right: 5px; top:5px;" type="button" data-toggle="collapse" data-target=".dual_collapse" aria-controls="main_nav_collapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
        
    </div>

    </nav>
<?php /**PATH C:\xampp\htdocs\nws\application\views/component/nav.blade.php ENDPATH**/ ?>