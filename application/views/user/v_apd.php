<!DOCTYPE html>
<html lang="en">
<head>
  <?php $this->load->view("user/_userPartials/head.php") ?>
</head>

<body>

  <!-- ======= Header ======= -->
  <?php $this->load->view("user/_userPartials/navbar.php") ?>
  <!-- End Header -->
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <?php $this->load->view("user/_userPartials/breadcrumb.php") ?>
    <!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Form <small>Permohonan Bantuan APD</small></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" id="quickForm">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputNWilayah">1. Jenis instansi</label><br>
                    <input type="radio" id="psbb" name="kondisi" value="psbb">
                    <label for="psbb">Faskes tingkat 1</label><br>
                    <input type="radio" id="psbb" name="kondisi" value="psbb">
                    <label for="psbb">Faskes tingkat 2</label><br>
                    <input type="radio" id="pkm" name="kondisi" value="pkm">
                    <label for="pkm">Faskes tingkat 3</label><br>
                    <input type="radio" id="lockdown" name="kondisi" value="lockdown">
                    <label for="lockdown">Lainnya</label><br>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputNama1">2. Nama Instansi</label>
                    <input type="text" name="nohp" class="form-control" id="exampleInputNoHP" placeholder="Nama Instansi">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputNama1">3. Alamat Instansi</label>
                    <input type="text" name="nohp" class="form-control" id="exampleInputNoHP" placeholder="Alamat Instansi">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputNama1">4. Contact Person (Email / Nomer Telfon)</label>
                    <input type="text" name="nohp" class="form-control" id="exampleInputNoHP" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputNama1">5. Kabupaten / Kota</label>
                    <input type="text" name="nohp" class="form-control" id="exampleInputNoHP" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputNWilayah">6. Apakah Pemerintah Daerah Anda menerapkan skema PSBB ?</label><br>
                    <input type="radio" id="psbb" name="kondisi" value="psbb">
                    <label for="psbb">Ya</label><br>
                    <input type="radio" id="psbb" name="kondisi" value="psbb">
                    <label for="psbb">Tidak</label>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputNWilayah">7. Apakah pemerintah daerah Anda sudah berkoordinasi dengan instansi Anda terkait kesiapsiagaan dalam penanganan Covid-19 (Surat himbauan, pertemuan, dll) ?</label><br>
                    <input type="radio" id="psbb" name="kondisi" value="psbb">
                    <label for="psbb">Sudah</label><br>
                    <input type="radio" id="psbb" name="kondisi" value="psbb">
                    <label for="psbb">Belum</label>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputNWilayah">8. Apakah sudah ada pelatihan terkait penanganan Covid-19 dari Pemerintah/Dinas Kesehatan/ Dinas terkait kepada tenaga kesehatan di instansi Anda ?</label><br>
                    <input type="radio" id="psbb" name="kondisi" value="psbb">
                    <label for="psbb">Ya</label><br>
                    <input type="radio" id="psbb" name="kondisi" value="psbb">
                    <label for="psbb">Tidak</label><br>
                    <input type="radio" id="psbb" name="kondisi" value="psbb">
                    <label for="psbb">Tidak Tahu</label>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputNWilayah">9. Apakah di Kota/Kabupaten atau wilayah kerja anda sudah terdapat kasus positif Covid-19 ?</label><br>
                    <input type="radio" id="psbb" name="kondisi" value="psbb">
                    <label for="psbb">Sudah</label><br>
                    <input type="radio" id="psbb" name="kondisi" value="psbb">
                    <label for="psbb">Belum</label>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputNWilayah">10. Apakah di instansi anda menyediakan fasilitas layanan Rapid Test ?</label><br>
                    <input type="radio" id="psbb" name="kondisi" value="psbb">
                    <label for="psbb">Ya</label><br>
                    <input type="radio" id="psbb" name="kondisi" value="psbb">
                    <label for="psbb">Tidak</label>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputNWilayah">11. Apakah di instansi anda terdapat fasilitas layanan SWAB ?</label><br>
                    <input type="radio" id="psbb" name="kondisi" value="psbb">
                    <label for="psbb">Ya</label><br>
                    <input type="radio" id="psbb" name="kondisi" value="psbb">
                    <label for="psbb">Tidak</label>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputNWilayah">12. Apakah tersedia ruang isolasi pasien Covid-19 di instansi anda ?</label><br>
                    <input type="radio" id="psbb" name="kondisi" value="psbb">
                    <label for="psbb">Ya</label><br>
                    <input type="radio" id="psbb" name="kondisi" value="psbb">
                    <label for="psbb">Tidak</label>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputNama1">13. Bagaimana kondisi ruang isolasi pasien Covid-19 ?</label>
                    <input type="text" name="nohp" class="form-control" id="exampleInputNoHP" placeholder="Jelaskan">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputNWilayah">14. Bagaimana ketersediaan hand sanitizer di instansi Anda ?</label><br>
                    <input type="radio" id="psbb" name="kondisi" value="psbb">
                    <label for="psbb">Kurang</label><br>
                    <input type="radio" id="psbb" name="kondisi" value="psbb">
                    <label for="psbb">Cukup</label>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputNWilayah">15. Apakah tersedia thermometer infrared ?</label><br>
                    <input type="radio" id="psbb" name="kondisi"  value="psbb">
                    <label for="psbb">Ya</label><br>
                    <input type="radio" id="psbb" name="kondisi" value="psbb">
                    <label for="psbb">Tidak</label>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputNWilayah">16. Jumlah tenaga kesehatan yang terlibat dalam penanganan Covid-19</label><br>
                    <input type="checkbox" name="reason" value=""> Dokter <input type="number" placeholder=" Jumlah " /> <br>
                    <input type="checkbox" name="reason" value=""> Petugas Laboran <input type="number" placeholder=" Jumlah " /><br>
                    <input type="checkbox" name="reason" value=""> Perawat <input type="number" placeholder=" Jumlah " /><br>
                    <input type="checkbox" name="reason" value=""> Driver Ambulance <input type="number" placeholder=" Jumlah " /><br>
                    <input type="checkbox" name="reason" value=""> Cleaning Service <input type="number" placeholder=" Jumlah " /><br>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputNWilayah">17. Bagaimana ketersediaan APD di Instansi Anda dalam satu pekan ini, sebutkan</label><br>
                    <input type="checkbox" name="reason" value=""> Masker Bedah <input type="number" placeholder=" Jumlah " /> <br>
                    <input type="checkbox" name="reason" value=""> Masker N95 <input type="number" placeholder=" Jumlah " /><br>
                    <input type="checkbox" name="reason" value=""> Face Shield <input type="number" placeholder=" Jumlah " /><br>
                    <input type="checkbox" name="reason" value=""> Goggle <input type="number" placeholder=" Jumlah " /><br>
                    <input type="checkbox" name="reason" value=""> Sarung Tangan Medis <input type="number" placeholder=" Jumlah " /><br>
                    <input type="checkbox" name="reason" value=""> Hazmat <input type="number" placeholder=" Jumlah " /><br>
                    <input type="checkbox" name="reason" value=""> Sepatu Boot <input type="number" placeholder=" Jumlah " /><br>
                    <input type="checkbox" name="reason" value=""> Caps <input type="number" placeholder=" Jumlah " /><br>
                    <input type="checkbox" name="reason" value=""> Shoe Cover <input type="number" placeholder=" Jumlah " /><br>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputNWilayah">18. Sejauh ini APD digunakan berasal dari</label><br>
                    <input type="radio" id="psbb" name="kondisi" value="psbb">
                    <label for="psbb">Instansi / Mandiri</label><br>
                    <input type="radio" id="psbb" name="kondisi" value="psbb">
                    <label for="psbb">Hibah Pemerintah</label><br>
                    <input type="radio" id="psbb" name="kondisi" value="psbb">
                    <label for="psbb">Hibah Swasta</label><br>
                    <input type="radio" name="reason" value=""> Lainnya <input type="number" placeholder=" Sebutkan " />
                  </div>
                  <div class="form-group">
                    <label for="exampleInputNWilayah">19. Apakah instansi Anda pernah menerima bantuan APD dari D-DART</label><br>
                    <input type="radio" id="psbb" name="kondisi" value="psbb">
                    <label for="psbb">Ya</label><br>
                    <input type="radio" id="psbb" name="kondisi" value="psbb">
                    <label for="psbb">Tidak</label>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputNama1">20. Bantuan apa yang saat ini dibutuhkan oleh instansi Anda dalam menghadapi Covid-19 ?</label>
                    <input type="text" name="nohp" class="form-control" id="exampleInputNoHP" placeholder="">
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- End Portfolio Details Section -->

  </main>
  <!-- End #main -->
  <!-- ======= Footer ======= -->
  <?php $this->load->view("user/_userPartials/footer.php") ?>
  <!-- End Footer -->

  <!-- ======= Modal ======= -->
  <?php $this->load->view("user/_userPartials/modal.php") ?>
  <!-- /.modal -->

  <a href="#" class="back-to-top"><i class="bx bxs-up-arrow-alt"></i></a>
  <!-- MAIN SCRIPTS -->
  <?php $this->load->view("user/_userPartials/js.php") ?>
  <!-- /.MAIN SCRIPTS -->
  <!-- OPTIONAL SCRIPTS -->
  <script>
    $(function () {
    /* ChartJS
     * -------
     * Here we will create a few charts using ChartJS
     */
    //-------------
    //- DONUT CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
    var donutData        = {
      labels: [
      'Chrome', 
      'IE',
      'FireFox', 
      'Safari', 
      'Opera', 
      'Navigator', 
      ],
      datasets: [
      {
        data: [700,500,400,600,300,100],
        backgroundColor : ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
      }
      ]
    }
    var donutOptions     = {
      maintainAspectRatio : false,
      responsive : true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    var donutChart = new Chart(donutChartCanvas, {
      type: 'doughnut',
      data: donutData,
      options: donutOptions      
    })

    //-------------
    //- DONUT CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var donutChartCanvas = $('#donutChart2').get(0).getContext('2d')
    var donutData        = {
      labels: [
      'Chrome', 
      'IE',
      'FireFox', 
      'Safari', 
      'Opera', 
      'Navigator', 
      ],
      datasets: [
      {
        data: [700,500,400,600,300,100],
        backgroundColor : ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
      }
      ]
    }
    var donutOptions     = {
      maintainAspectRatio : false,
      responsive : true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    var donutChart = new Chart(donutChartCanvas, {
      type: 'doughnut',
      data: donutData,
      options: donutOptions      
    })

    //-------------
    //- DONUT CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var donutChartCanvas = $('#donutChart3').get(0).getContext('2d')
    var donutData        = {
      labels: [
      'Chrome', 
      'IE',
      'FireFox', 
      'Safari', 
      'Opera', 
      'Navigator', 
      ],
      datasets: [
      {
        data: [700,500,400,600,300,100],
        backgroundColor : ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
      }
      ]
    }
    var donutOptions     = {
      maintainAspectRatio : false,
      responsive : true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    var donutChart = new Chart(donutChartCanvas, {
      type: 'doughnut',
      data: donutData,
      options: donutOptions      
    })

  })
</script>
</body>
</html>