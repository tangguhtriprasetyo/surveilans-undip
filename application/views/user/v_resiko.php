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
                <h3 class="card-title">Form <small>Penilaian Resiko Pribadi</small></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" id="quickForm">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputNama1">Nama Lengkap</label>
                    <input type="text" name="nama" class="form-control" id="exampleInputNama1" placeholder="Nama Lengkap">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputNama1">Usia</label>
                    <input type="text" name="usia" class="form-control" id="exampleInputUsia1" placeholder="Usia">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputNama1">Nomer Handphone</label>
                    <input type="text" name="nohp" class="form-control" id="exampleInputNoHP" placeholder="+62">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputNama1">Tanggal</label>
                    <input type="text" name="usia" class="form-control" id="exampleInputUsia1" placeholder="Usia">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPosisi1">Dimana Posisi Anda Sekarang</label>
                    <input type="text" name="posisi" class="form-control" id="exampleInputUPosisi1" placeholder="Nama Kota">
                  </div>
                  <div class="form-group">
                   <label for="exampleInputNWilayah">Apakah wilayah anda saat ini sedang diberlakukan pembatasan wilayah ?</label><br>
                   <input type="radio" id="psbb" name="kondisi" value="psbb">
                   <label for="psbb">Pembatasan Sosial Skala Besar</label><br>
                   <input type="radio" id="pkm" name="kondisi" value="pkm">
                   <label for="pkm">Pembatasan Kegiatan Masyarakat</label><br>
                   <input type="radio" id="lockdown" name="kondisi" value="lockdown">
                   <label for="lockdown">Lockdown</label><br>
                   <input type="radio" id="tidak" name="kondisi" value="tidak">
                   <label for="tidak">Tidak Ada</label><br>
                 </div>
                 <div class="form-group">
                  <label for="exampleInputKerja1">Apa pekerjaan anda ?</label><br>
                  <input type="checkbox" id="kerja" name="kerja" value="Mahasiswa">
                  <label for="kerja">Mahasiswa</label><br>
                  <input type="checkbox" id="kerja" name="kerja" value="Pelajar">
                  <label for="kerja">Pelajar</label><br>
                  <input type="checkbox" id="kerja" name="kerja" value="Dosen">
                  <label for="kerja">Dosen</label><br>
                  <input type="checkbox" id="kerja" name="kerja" value="TenagaPendidikan">
                  <label for="kerja">Tenaga Pendidikan</label><br>
                  <input type="checkbox" id="kerja" name="kerja" value="CleaningService">
                  <label for="kerja">Cleaning Service</label><br>
                  <input type="checkbox" id="kerja" name="kerja" value="Security">
                  <label for="kerja">Security</label><br>
                  <input type="checkbox" id="kerja" name="kerja" value="PNS">
                  <label for="kerja">PNS</label><br>
                  <input type="checkbox" id="kerja" name="kerja" value="Wiraswasta">
                  <label for="kerja">Wiraswasta</label><br>
                  <input type="checkbox" id="kerja" name="kerja" value="TenagaMedis">
                  <label for="kerja">Tenaga Medis</label><br>
                  <input type="checkbox" id="kerja" name="kerja" value="TNI">
                  <label for="kerja">TNI</label><br>
                  <input type="checkbox" id="kerja" name="kerja" value="Polri">
                  <label for="kerja">Polri</label><br>
                </div>
                <div class="form-group">
                  <label for="exampleInputPosisi1">Dimana Anda Bekerja ?</label>
                  <input type="text" name="posisi" class="form-control" id="exampleInputUPosisi1">
                </div>
                <div class="form-group">
                  <label for="exampleInputKerja1">Apakah anda menerapkan kebijakan di rumah saja ?</label><br>
                  <input type="checkbox" name="kerja" value="Iya">
                  <label for="kerja">Iya</label><br>
                  <input type="checkbox" name="kerja" value="Tidak">
                  <label for="kerja">Tidak</label><br>
                </div>
                <div class="form-group">
                  <label for="exampleInputKerja1">Jika anda bekerja, Apakah anda mengalami kesulitan selama ada kebijakan work from home ?</label><br>
                  <input type="checkbox" id="kerja" name="kerja" value="Mahasiswa">
                  <label for="kerja">Kendala jaringan internet</label><br>
                  <input type="checkbox" id="kerja" name="kerja" value="Pelajar">
                  <label for="kerja">Sulit berkoordinasi dengan rekan kerja</label><br>
                  <input type="checkbox" id="kerja" name="kerja" value="Dosen">
                  <label for="kerja">Kurang dapat mengontrol pekerjaan</label><br>
                  <input type="checkbox" id="kerja" name="kerja" value="TenagaPendidikan">
                  <label for="kerja">Tugas menumpuk</label><br>
                  <input type="checkbox" id="kerja" name="kerja" value="CleaningService">
                  <label for="kerja">Sulit menentukan prioritas</label><br>
                  <input type="checkbox" id="kerja" name="kerja" value="Security">
                  <label for="kerja">Mudah Bosan</label><br>
                </div><br><br>
                <div>
                  <h4>Berikut adalah daftar gejala yang mendeskripsikan apa yang anda rasakan saat ini. Bacalah soal dibawah ini dan pilihlah salah satu dari lima respon yang paling menggambarkan perasaan anda dari 14 pertanyaan. Tidak ada jawaban yang salah dan semua jawaban yang anda pilih adalah benar.</h4>
                </div>
                <div>
                  <p>Catatan <br> 0 : Tidak ada Gejala, 1 : satu dari gejala yang ada, 2  : Separuh dari gejala yang ada, 3 : Berat, 4  : Sangat Berat</p>
                </div>
                <div class="form-group">
                  <label for="exampleInputNWilayah">1. Perasaan Ansietas (Cemas, firasat buruk, takut akan pilihan sendiri)</label><br>
                  <input type="radio" id="psbb" name="kondisi" value="psbb">
                  <label for="psbb">0</label>
                  <input type="radio" id="psbb" name="kondisi" value="psbb">
                  <label for="psbb">1</label>
                  <input type="radio" id="pkm" name="kondisi" value="pkm">
                  <label for="pkm">2</label>
                  <input type="radio" id="lockdown" name="kondisi" value="lockdown">
                  <label for="lockdown">3</label>
                  <input type="radio" id="tidak" name="kondisi" value="tidak">
                  <label for="tidak">4</label>
                </div>
                <div class="form-group">
                  <label for="exampleInputNWilayah">2. Ketegangan (merasa ketegangan, lesu, tidak bisa istirahat dengan tenang, mudah terkejut, gelisah)</label><br>
                  <input type="radio" id="psbb" name="kondisi" value="psbb">
                  <label for="psbb">0</label>
                  <input type="radio" id="psbb" name="kondisi" value="psbb">
                  <label for="psbb">1</label>
                  <input type="radio" id="pkm" name="kondisi" value="pkm">
                  <label for="pkm">2</label>
                  <input type="radio" id="lockdown" name="kondisi" value="lockdown">
                  <label for="lockdown">3</label>
                  <input type="radio" id="tidak" name="kondisi" value="tidak">
                  <label for="tidak">4</label>
                </div>
                <div class="form-group">
                  <label for="exampleInputNWilayah">3. Ketakutan (Pada gelap, pada orang asing, ditinggal sendiri, pada keramaian lalu lintas, pada kerumunan orang banyak)</label><br>
                  <input type="radio" id="psbb" name="kondisi" value="psbb">
                  <label for="psbb">0</label>
                  <input type="radio" id="psbb" name="kondisi" value="psbb">
                  <label for="psbb">1</label>
                  <input type="radio" id="pkm" name="kondisi" value="pkm">
                  <label for="pkm">2</label>
                  <input type="radio" id="lockdown" name="kondisi" value="lockdown">
                  <label for="lockdown">3</label>
                  <input type="radio" id="tidak" name="kondisi" value="tidak">
                  <label for="tidak">4</label>
                </div>
                <div class="form-group">
                  <label for="exampleInputNWilayah">4. Gangguan tidur (sulit tidur, terbangun di malam hari, tidak nyenyak, bangun dengan lesu, banyak mimpi)</label><br>
                  <input type="radio" id="psbb" name="kondisi" value="psbb">
                  <label for="psbb">0</label>
                  <input type="radio" id="psbb" name="kondisi" value="psbb">
                  <label for="psbb">1</label>
                  <input type="radio" id="pkm" name="kondisi" value="pkm">
                  <label for="pkm">2</label>
                  <input type="radio" id="lockdown" name="kondisi" value="lockdown">
                  <label for="lockdown">3</label>
                  <input type="radio" id="tidak" name="kondisi" value="tidak">
                  <label for="tidak">4</label>
                </div>
                <div class="form-group">
                  <label for="exampleInputNWilayah">5. Intelektual (Sulit berkonsentrasi, daya ingat lemah)</label><br>
                  <input type="radio" id="psbb" name="kondisi" value="psbb">
                  <label for="psbb">0</label>
                  <input type="radio" id="psbb" name="kondisi" value="psbb">
                  <label for="psbb">1</label>
                  <input type="radio" id="pkm" name="kondisi" value="pkm">
                  <label for="pkm">2</label>
                  <input type="radio" id="lockdown" name="kondisi" value="lockdown">
                  <label for="lockdown">3</label>
                  <input type="radio" id="tidak" name="kondisi" value="tidak">
                  <label for="tidak">4</label>
                </div>
                <div class="form-group">
                  <label for="exampleInputNWilayah">6. Perasaan depresi (hilangnya minat, berkurangnya kesenangan pada hobi, sedih, bangun dini hari)</label><br>
                  <input type="radio" id="psbb" name="kondisi" value="psbb">
                  <label for="psbb">0</label>
                  <input type="radio" id="psbb" name="kondisi" value="psbb">
                  <label for="psbb">1</label>
                  <input type="radio" id="pkm" name="kondisi" value="pkm">
                  <label for="pkm">2</label>
                  <input type="radio" id="lockdown" name="kondisi" value="lockdown">
                  <label for="lockdown">3</label>
                  <input type="radio" id="tidak" name="kondisi" value="tidak">
                  <label for="tidak">4</label>
                </div>
                <div class="form-group">
                  <label for="exampleInputNWilayah">7. Gejala somatik otot (sakit dan nyeri otot)</label><br>
                  <input type="radio" id="psbb" name="kondisi" value="psbb">
                  <label for="psbb">0</label>
                  <input type="radio" id="psbb" name="kondisi" value="psbb">
                  <label for="psbb">1</label>
                  <input type="radio" id="pkm" name="kondisi" value="pkm">
                  <label for="pkm">2</label>
                  <input type="radio" id="lockdown" name="kondisi" value="lockdown">
                  <label for="lockdown">3</label>
                  <input type="radio" id="tidak" name="kondisi" value="tidak">
                  <label for="tidak">4</label>
                </div>
                <div class="form-group">
                  <label for="exampleInputNWilayah">8. Gejala somatik sensorik (penglihatan kabur, muka merah, atau pucat)</label><br>
                  <input type="radio" id="psbb" name="kondisi" value="psbb">
                  <label for="psbb">0</label>
                  <input type="radio" id="psbb" name="kondisi" value="psbb">
                  <label for="psbb">1</label>
                  <input type="radio" id="pkm" name="kondisi" value="pkm">
                  <label for="pkm">2</label>
                  <input type="radio" id="lockdown" name="kondisi" value="lockdown">
                  <label for="lockdown">3</label>
                  <input type="radio" id="tidak" name="kondisi" value="tidak">
                  <label for="tidak">4</label>
                </div>
                <div class="form-group">
                  <label for="exampleInputNWilayah">9. Gejala kardiovaskulir (berdebar, nyeri di dada, denyut nadi mengeras)</label><br>
                  <input type="radio" id="psbb" name="kondisi" value="psbb">
                  <label for="psbb">0</label>
                  <input type="radio" id="psbb" name="kondisi" value="psbb">
                  <label for="psbb">1</label>
                  <input type="radio" id="pkm" name="kondisi" value="pkm">
                  <label for="pkm">2</label>
                  <input type="radio" id="lockdown" name="kondisi" value="lockdown">
                  <label for="lockdown">3</label>
                  <input type="radio" id="tidak" name="kondisi" value="tidak">
                  <label for="tidak">4</label>
                </div>
                <div class="form-group">
                  <label for="exampleInputNWilayah">10. Gejala respiratori (rasa tertekan di dada, perasaan tercekik, sering sesak napas)</label><br>
                  <input type="radio" id="psbb" name="kondisi" value="psbb">
                  <label for="psbb">0</label>
                  <input type="radio" id="psbb" name="kondisi" value="psbb">
                  <label for="psbb">1</label>
                  <input type="radio" id="pkm" name="kondisi" value="pkm">
                  <label for="pkm">2</label>
                  <input type="radio" id="lockdown" name="kondisi" value="lockdown">
                  <label for="lockdown">3</label>
                  <input type="radio" id="tidak" name="kondisi" value="tidak">
                  <label for="tidak">4</label>
                </div>
                <div class="form-group">
                  <label for="exampleInputNWilayah">11. Gejala gastrointestinal (sulit menelan, perut perih, kembung, mual)</label><br>
                  <input type="radio" id="psbb" name="kondisi" value="psbb">
                  <label for="psbb">0</label>
                  <input type="radio" id="psbb" name="kondisi" value="psbb">
                  <label for="psbb">1</label>
                  <input type="radio" id="pkm" name="kondisi" value="pkm">
                  <label for="pkm">2</label>
                  <input type="radio" id="lockdown" name="kondisi" value="lockdown">
                  <label for="lockdown">3</label>
                  <input type="radio" id="tidak" name="kondisi" value="tidak">
                  <label for="tidak">4</label>
                </div>
                <div class="form-group">
                  <label for="exampleInputNWilayah">12. Gejala urogenital (sering buang air kecil, tidak dapat menahan kencing, impotensi)</label><br>
                  <input type="radio" id="psbb" name="kondisi" value="psbb">
                  <label for="psbb">0</label>
                  <input type="radio" id="psbb" name="kondisi" value="psbb">
                  <label for="psbb">1</label>
                  <input type="radio" id="pkm" name="kondisi" value="pkm">
                  <label for="pkm">2</label>
                  <input type="radio" id="lockdown" name="kondisi" value="lockdown">
                  <label for="lockdown">3</label>
                  <input type="radio" id="tidak" name="kondisi" value="tidak">
                  <label for="tidak">4</label>
                </div>
                <div class="form-group">
                  <label for="exampleInputNWilayah">13. Gejala otonom (mulut kering, muka merah, mudah berkeringat, pusing, sakit kepala)</label><br>
                  <input type="radio" id="psbb" name="kondisi" value="psbb">
                  <label for="psbb">0</label>
                  <input type="radio" id="psbb" name="kondisi" value="psbb">
                  <label for="psbb">1</label>
                  <input type="radio" id="pkm" name="kondisi" value="pkm">
                  <label for="pkm">2</label>
                  <input type="radio" id="lockdown" name="kondisi" value="lockdown">
                  <label for="lockdown">3</label>
                  <input type="radio" id="tidak" name="kondisi" value="tidak">
                  <label for="tidak">4</label>
                </div>
                <div class="form-group">
                  <label for="exampleInputNWilayah">14. Tingkah laku pada wawancara (gelisah, tidak tenang, jari gemetar, muka tegang)</label><br>
                  <input type="radio" id="psbb" name="kondisi" value="psbb">
                  <label for="psbb">0</label>
                  <input type="radio" id="psbb" name="kondisi" value="psbb">
                  <label for="psbb">1</label>
                  <input type="radio" id="pkm" name="kondisi" value="pkm">
                  <label for="pkm">2</label>
                  <input type="radio" id="lockdown" name="kondisi" value="lockdown">
                  <label for="lockdown">3</label>
                  <input type="radio" id="tidak" name="kondisi" value="tidak">
                  <label for="tidak">4</label>
                </div><br><br>
                <div class="form-group mb-0">
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" name="terms" class="custom-control-input" id="exampleCheck1">
                    <label class="custom-control-label" for="exampleCheck1">Saya sudah membaca dan menyetujui bahwa apa yang saya isikan diatas benar adanya.</label>
                  </div>
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