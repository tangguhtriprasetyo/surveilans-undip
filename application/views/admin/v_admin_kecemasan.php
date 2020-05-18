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
        <?php $this->load->view("admin/_partials/breadcrumb.php") ?>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Data Surveyor Gejala</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="display nowrap table table-striped text-center" style="width: 1800px;">
                    <thead>
                        <tr class="text-center">
                            <th style="width: 1%">
                                No
                            </th>
                            <th>
                                Nama
                            </th>
                            <th>
                                Email
                            </th>
                            <th>
                                Usia
                            </th>
                            <th>
                                No.Hp
                            </th>
                            <th>
                                Posisi Sekarang
                            </th>
                            <th>
                                Status Wilayah
                            </th>
                            <th>
                                Pekerjaan
                            </th>
                            <th>
                                Tempat Bekerja
                            </th>
                            <th>
                                WFH
                            </th>
                            <th>
                                Kesulitan WFH
                            </th>
                            <th style="width: 8%" class="text-center">
                                Skor
                            </th>
                            <th style="width: 8%" class="text-center">
                                Hasil
                            </th>
                            <th style="width: 15%">
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center">
                                1
                            </td>
                            <td>
                                <a>
                                    AdminLTE v3
                                </a>
                                <br/>
                                <small>
                                    Created 01.01.2019
                                </small>
                            </td>
                            <td>
                                daw
                            </td>
                            <td>
                                daw
                            </td>
                            <td>
                                daw
                            </td>
                            <td>
                                daw
                            </td>
                            <td>
                                daw
                            </td>
                            <td>
                                daw
                            </td>
                            <td>
                                daw
                            </td>
                            <td>
                                daw
                            </td>
                            <td>
                                daw
                            </td>
                            <td class="project_progress">
                                data
                            </td>
                            <td class="project-state">
                                <span class="badge badge-success">Success</span>
                            </td>
                            <td class="project-actions text-right">
                                <a class="btn btn-primary btn-sm" href="#">
                                    <i class="fas fa-folder">
                                    </i>
                                    View
                                </a>
                                <a class="btn btn-danger btn-sm" href="#">
                                    <i class="fas fa-trash">
                                    </i>
                                    Delete
                                </a>
                            </td>
                        </tr>
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