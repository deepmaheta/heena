<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.php" class="brand-link">
      <img src="../admin/dist/img/logo.jpeg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Antiquo</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../admin/dist/img/user.jpeg" class="img-circle elevation-2" alt="User Image">
        </div>
        <?php
        include('include/config.php');
        $qry="select name from admin ";
        $res=mysqli_query($conn,$qry);
        $row=mysqli_fetch_row($res);
        ?>
        <div class="info">
          <a href="#" class="d-block"><?php echo "$row[0]";?></a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="../admin/dashboard.php" class="nav-link  <?php echo ($_SERVER['SCRIPT_NAME']=='/heer/admin/dashboard.php'?"active":'');?>">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
          
          

          <li class="nav-item">
            <a href="../admin/product.php" class="nav-link <?php echo ($_SERVER['SCRIPT_NAME']=='/heer/admin/product.php'?"active":'');?>">
              <i class="nav-icon far fa-calendar-alt"></i>
              <?php
                             $cquery = "SELECT * FROM product";
                             $cres = mysqli_query($conn, $cquery);
                             $count=mysqli_num_rows($cres);
                             ?>
              <p>
                Product
                <span class="badge badge-info right"><?php echo $count;?></span>
              </p>
            </a>
          </li>
         
          <li class="nav-item">
            <a href="../admin/order.php" class="nav-link <?php echo ($_SERVER['SCRIPT_NAME']=='/heer/admin/order.php'?"active":'');?>">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Orders
                <span class="badge badge-info right">0</span>
              </p>
            </a>
          </li>
         
         
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>