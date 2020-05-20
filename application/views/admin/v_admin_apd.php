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
            <h1 class="m-0 text-dark">Data Permohonan APD</h1>
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
              <h3 class="card-title">Data Pemohon</h3>
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
                        <th style="width: 15%">
                        </th>
                    </tr>
                </thead>
                <tbody>
                   <?php
                        $no = 0;
                        foreach ($apd as $key => $apd) {?>
                    <tr>
                        <td class="text-center">
                        <?php echo $no += 1; ?>
                        </td>
                        <td>
                            <a>
                            <?php echo $apd->nama ?>
                            </a>
                            <br/>
                            <small>
                            Diisi pada <?php echo $apd->date ?>
                            </small>
                        </td>
                        <td>
                        <?php echo $apd->jenis ?>
                        </td>
                        <td>
                        <?php echo $apd->alamat ?>
                        </td>
                        <td>
                            
                        <?php echo $apd->kontak ?>
                        </td>
                        <td>
                        <?php echo $apd->daerah ?>
                        </td>
                        <td>
                        <?php echo $apd->psbb ?>
                        </td>
                        <td>
                        <?php echo $apd->koordinasi ?>
                        </td>
                        <td>
                        <?php echo $apd->pelatihan ?>
                        </td>
                        <td>
                        <?php echo $apd->kasus ?>
                        </td>
                        <td>
                        <?php echo $apd->rapid ?>
                        </td>
                        <td>
                        <?php echo $apd->swab ?>
                        </td>
                        <td>
                        <?php echo $apd->isolasi ?>
                        </td>
                        <td>
                        <?php echo $apd->kondisi ?>
                        </td>
                        <td>
                          <ul class="list-inline">
                            <li class="list-inline-item">
                               <strong>Dokter</strong></br><center><?php echo $apd->dokter ?></center>
                            </li>
                            <li class="list-inline-item">
                              <strong>Laboran</strong></br><center><?php echo $apd->laboran ?></center>
                            </li>
                            <li class="list-inline-item">
                              <strong>Perawat</strong></br><center><?php echo $apd->perawat ?></center>
                            </li>
                            <li class="list-inline-item">
                              <strong>Driver Ambulance</strong></br><center><?php echo $apd->driver ?></center>
                            </li>
                            <li class="list-inline-item">
                              <strong>Cleaning Service</strong></br><center><?php echo $apd->cs ?></center>
                            </li>
                          </ul>
                        </td>
                        <td>
                          <ul class="list-inline">
                            <li class="list-inline-item">
                               <strong>Masker Bedah</strong></br><center><?php echo $apd->bedah ?></center>
                            </li>
                            <li class="list-inline-item">
                              <strong>Masker N95</strong></br><center><?php echo $apd->n95 ?></center>
                            </li>
                            <li class="list-inline-item">
                              <strong>Face Shield</strong></br><center><?php echo $apd->faceshield ?></center>
                            </li>
                            <li class="list-inline-item">
                              <strong>Goggle</strong></br><center><?php echo $apd->goggle ?></center>
                            </li>
                            <li class="list-inline-item">
                              <strong>Sarung Tangan Medis</strong></br><center><?php echo $apd->sarungtangan ?></center>
                            </li>
                            <li class="list-inline-item">
                              <strong>Hazmat</strong></br><center><?php echo $apd->hazmat ?></center>
                            </li>
                            <li class="list-inline-item">
                              <strong>Sepatu Boot</strong></br><center><?php echo $apd->boot ?></center>
                            </li>
                            <li class="list-inline-item">
                              <strong>Caps</strong></br><center><?php echo $apd->caps ?></center>
                            </li>
                            <li class="list-inline-item">
                              <strong>Shoe Cover</strong></br><center><?php echo $apd->cover ?></center>
                            </li>
                          </ul>
                        </td>
                        <td>
                        <?php echo $apd->asal ?>
                        </td>
                        <td>
                        <?php echo $apd->bantuan ?>
                        </td>
                        <td>
                        <?php echo $apd->kebutuhan ?>
                        </td>
                        <td class="project-actions text-right">
                          <a class="btn btn-danger btn-sm" href="#">
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