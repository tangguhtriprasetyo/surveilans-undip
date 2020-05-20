<!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->load->view("admin/_partials/head.php") ?>
</head>
<body class="hold-transition sidebar-mini">

<div class="wrapper">
    
  <!-- Navbar -->
    <?php $this->load->view("admin/_partials/navbar.php") ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
    <?php $this->load->view("admin/_partials/sidebar.php") ?>
  <!-- /.Main Sidebar Container -->
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Data Survei Deteksi Dini</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Data Surveyor Gejala</h3>
              <a href="#" class="btn btn-sm btn-tool">Download Excel
                    <i class="fas fa-download"></i>
                  </a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="display nowrap table table-striped text-center" style="width: 100%;">
                <thead>
                    <tr>
                        <th style="width: 1%">
                            No
                        </th>
                        <th>
                            Nama
                        </th>
                        <th>
                            Jenis Kelamin
                        </th>
                        <th>
                            Tanggal Lahir
                        </th>
                        <th>
                            Email
                        </th>
                        <th>
                            No. HP
                        </th>
                        <th>
                            No. Kerabat
                        </th>
                        <th>
                            Tempat Tinggal
                        </th>
                        <th>
                            Alamat
                        </th>
                        <th>
                          Daerah Asal
                        </th>
                        <th>
                          Pendidikan
                        </th>
                        <th>
                          Pekerjaan
                        </th>
                        <th>
                          Skor
                        </th>
                        <th style="width: 15%">
                        </th>
                    </tr>
                </thead>
                <tbody>
                <?php
                        $no = 0;
                        foreach ($deteksi as $key => $deteksi) {?>
                    <tr>
                        <td class="text-center">
                        <?php echo $no += 1; ?>
                        </td>
                        <td>
                            <a>
                            <?php echo $deteksi->nama ?>
                            </a>
                            <br/>
                            <small>
                            <?php echo $deteksi->date ?>
                            </small>
                        </td>
                        <td>
                        <?php echo $deteksi->gender ?>
                        </td>
                        <td>
                        <?php echo $deteksi->ttl ?>
                        </td>
                        <td>
                        <?php echo $deteksi->email ?>
                        </td>
                        <td>
                        <?php echo $deteksi->hp ?>
                        </td>
                        <td>
                        <?php echo $deteksi->kerabat ?>
                        </td>
                        <td>
                        <?php echo $deteksi->tinggal ?>
                        </td>
                        <td>
                        <?php echo $deteksi->alamat ?>
                        </td>
                        <td>
                        <?php echo $deteksi->asal ?>
                        </td>
                        <td>
                        <?php echo $deteksi->pendidikan ?>
                        </td>
                        <td>
                        <?php echo $deteksi->pekerjaan ?>
                        </td>
                        <td>
                        <?php echo $deteksi->skor ?>
                        </td>
                        <td class="project-actions text-right">
                            <a class="btn btn-danger btn-sm" href="<?php echo site_url('admin/admin_deteksi/delete/' .$deteksi->id_deteksi) ?>">
                                <i class="fas fa-trash">
                                </i>
                                Delete
                            </a>
                        </td>
                    </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
    <?php $this->load->view("admin/_partials/footer.php") ?>
  <!-- Main Footer -->
  
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<?php $this->load->view("admin/_partials/js.php") ?>
<!-- /.REQUIRED SCRIPTS -->

<!-- OPTIONAL SCRIPTS -->
<script>
  $(function () {
    $("#example1").DataTable({
      "scrollX": true
    });
  });
</script>
<!-- /.OPTIONAL SCRIPTS -->
</body>
</html>