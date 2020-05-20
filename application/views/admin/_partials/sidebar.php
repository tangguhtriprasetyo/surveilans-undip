  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="<?php echo base_url('assets/img/ddart.png') ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="<?php echo base_url('admin') ?>" <?php if ($this->uri->segment(2) == '') {echo 'class="nav-link active"';} else echo 'class="nav-link"' ?>>
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-header">EXAMPLES</li>
          <li class="nav-item">
            <a href="<?php echo base_url('admin/admin_kecemasan') ?>"<?php if ($this->uri->segment(2) == 'admin_kecemasan') {echo 'class="nav-link active"';} else echo 'class="nav-link"' ?>>
              
              <p>
              Penilaian Tingkat Kecemasan
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo site_url('admin/admin_deteksi') ?>" <?php if ($this->uri->segment(2) == 'admin_deteksi') {echo 'class="nav-link active"';} else echo 'class="nav-link"' ?>>
              
              <p>
                Deteksi Dini Gejala Covid-19 & Penilaian Resiko Pribadi
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo site_url('admin/admin_apd') ?>" <?php if ($this->uri->segment(2) == 'admin_apd') {echo 'class="nav-link active"';} else echo 'class="nav-link"' ?>>
              
              <p>
                Data Permohononan APD
              </p>
            </a>
          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>