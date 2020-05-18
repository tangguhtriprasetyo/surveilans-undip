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
              <table id="example1" class="display nowrap table table-striped text-center" style="width: 100%;">
                <thead>
                    <tr>
                        <th style="width: 1%">
                            No
                        </th>
                        <th>
                            Nama Instansi
                        </th>
                        <th>
                            Jenis Instansi
                        </th>
                        <th>
                            Kontak
                        </th>
                        <th>
                            Daerah
                        </th>
                        <th>
                            Penerapan PSBB
                        </th>
                        <th>
                            Koordinasi Dengan Pemda
                        </th>
                        <th>
                            Pelatihan Terkait Covid-19
                        </th>
                        <th>
                            Terdapat Kasus Positif
                        </th>
                        <th>
                          Terdapat Layanan Rapid Tes
                        </th>
                        <th>
                          Terdapat Layanan SWAB
                        </th>
                        <th>
                          Tersedia Hand Sanitizer
                        </th>
                        <th>
                          Tersedia Thermometer Infrared
                        </th>
                        <th>
                          Kondisi Ruang Isolasi
                        </th>
                        <th>
                          Jumlah Tenaga Kesehatan
                        </th>
                        <th>
                          Ketersediaan APD
                        </th>
                        <th>
                          Sumber Bantuan APD
                        </th>
                        <th>
                          Menerima Bantuan APD
                        </th>
                        <th>
                          Bantuan Yang Dibutuhkan
                        </th>
                        <th style="width: 8%" class="text-center">
                            Status
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
                        <td>
                            daw
                        </td>
                        <td>
                            daw
                        </td>
                        <td>
                          Baiik
                        </td>
                        <td>
                          <ul class="list-inline">
                            <li class="list-inline-item">
                               <strong>Dokter</strong></br><center>3</center>
                            </li>
                            <li class="list-inline-item">
                              <strong>Laboran</strong></br><center>3</center>
                            </li>
                            <li class="list-inline-item">
                              <strong>Perawat</strong></br><center>3</center>
                            </li>
                            <li class="list-inline-item">
                              <strong>Driver Ambulance</strong></br><center>3</center>
                            </li>
                            <li class="list-inline-item">
                              <strong>Cleaning Service</strong></br><center>3</center>
                            </li>
                          </ul>
                        </td>
                        <td>
                          <ul class="list-inline">
                            <li class="list-inline-item">
                               <strong>Masker Bedah</strong></br><center>3</center>
                            </li>
                            <li class="list-inline-item">
                              <strong>Masker N95</strong></br><center>3</center>
                            </li>
                            <li class="list-inline-item">
                              <strong>Face Shield</strong></br><center>3</center>
                            </li>
                            <li class="list-inline-item">
                              <strong>Goggle</strong></br><center>3</center>
                            </li>
                            <li class="list-inline-item">
                              <strong>Sarung Tangan Medis</strong></br><center>3</center>
                            </li>
                            <li class="list-inline-item">
                              <strong>Hazmat</strong></br><center>3</center>
                            </li>
                            <li class="list-inline-item">
                              <strong>Sepatu Boot</strong></br><center>3</center>
                            </li>
                            <li class="list-inline-item">
                              <strong>Caps</strong></br><center>3</center>
                            </li>
                            <li class="list-inline-item">
                              <strong>Shoe Cover</strong></br><center>3</center>
                            </li>
                          </ul>
                        </td>
                        <td>
                            daw
                        </td>
                        <td>
                            daw
                        </td>
                        <td>
                            data
                        </td>
                        <td class="project-state">
                            <span class="badge badge-success">Success</span>
                        </td>
                        <td class="project-actions text-right">
                          <a class="btn btn-primary btn-sm" href="#">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit Status
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