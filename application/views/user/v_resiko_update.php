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
              <form action="<?php echo base_url('resiko/update') ?>" method="post" enctype="multipart/form-data" id="formResiko">
              <input type="hidden" name="id" value="<?php echo $resiko->id_kecemasan?>" />
              <input type="hidden" name="ttl" value="<?php echo $resiko->ttl?>" />
              <input type="hidden" name="hp" value="<?php echo $resiko->hp?>" />
              <input type="hidden" name="wilayah" value="<?php echo $resiko->wilayah?>" />
              <input type="hidden" name="tempat_kerja" value="<?php echo $resiko->tempat_kerja?>" />
              <input type="hidden" name="wfh" value="<?php echo $resiko->wfh?>" />
              <input type="hidden" name="kesulitan" value="<?php echo $resiko->kesulitan?>" />
              <input type="hidden" name="pekerjaan" value="<?php echo $resiko->pekerjaan?>" />
                <div class="card-body">
                <div class="section-title" data-aos="fade-up">
                  <h2>Form Surveilens ini dinisiasi oleh P2KKN UNDIP 2020</h2>
                  <p>Semua data yang diperoleh pada form ini akan di jaga kerahasiaannya serta hanya akan digunakan untuk kepentingan Surveilens</p>
                </div>

                  <div class="form-group">
                    <label for="exampleInputNama1">Nama Lengkap</label>
                    <input type="text" name="nama" class="form-control" id="exampleInputNama1" placeholder="Nama Lengkap" value="<?php echo $resiko->nama ?>" readonly>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email" value="<?php echo $resiko->email ?>" readonly>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPosisi1">Dimana Posisi Anda Sekarang</label>
                    <input type="text" name="posisi" class="form-control" id="exampleInputUPosisi1" placeholder="Nama Kota" value="<?php echo $resiko->posisi ?>">
                  </div>

                  <div class="form-group">
                   <label for="exampleInputNWilayah">Apakah wilayah anda saat ini sedang diberlakukan pembatasan wilayah ?</label><br>
                   <input type="radio" id="psbb" name="wilayah" value="psbb">
                   <label for="psbb">Pembatasan Sosial Skala Besar</label><br>
                   <input type="radio" id="pkm" name="wilayah" value="pkm">
                   <label for="pkm">Pembatasan Kegiatan Masyarakat</label><br>
                   <input type="radio" id="lockdown" name="wilayah" value="lockdown">
                   <label for="lockdown">Lockdown</label><br>
                   <input type="radio" id="tidak" name="wilayah" value="tidak">
                   <label for="tidak">Tidak Ada</label><br>
                 </div>

                <div>
                  <h4>Berikut adalah daftar gejala yang mendeskripsikan apa yang anda rasakan saat ini. Bacalah soal dibawah ini dan pilihlah salah satu dari lima respon yang paling menggambarkan perasaan anda dari 14 pertanyaan. Tidak ada jawaban yang salah dan semua jawaban yang anda pilih adalah benar.</h4>
                </div>
                <div>
                  <p>Catatan <br> 0 : Tidak ada Gejala, 1 : satu dari gejala yang ada, 2  : Separuh dari gejala yang ada, 3 : Berat, 4  : Sangat Berat</p>
                </div>

                <div class="form-group">
                  <label for="exampleInputNWilayah">1. Perasaan Ansietas (Cemas, firasat buruk, takut akan pilihan sendiri)</label><br>
                  <input type="radio" id="psbb" name="ansietas" value="0">
                  <label for="psbb">0</label>
                  <input type="radio" id="psbb" name="ansietas" value="1">
                  <label for="psbb">1</label>
                  <input type="radio" id="pkm" name="ansietas" value="2">
                  <label for="pkm">2</label>
                  <input type="radio" id="lockdown" name="ansietas" value="3">
                  <label for="lockdown">3</label>
                  <input type="radio" id="tidak" name="ansietas" value="4">
                  <label for="tidak">4</label>
                </div>

                <div class="form-group">
                  <label for="exampleInputNWilayah">2. Ketegangan (merasa ketegangan, lesu, tidak bisa istirahat dengan tenang, mudah terkejut, gelisah)</label><br>
                  <input type="radio" id="psbb" name="ketegangan" value="0">
                  <label for="psbb">0</label>
                  <input type="radio" id="psbb" name="ketegangan" value="1">
                  <label for="psbb">1</label>
                  <input type="radio" id="pkm" name="ketegangan" value="2">
                  <label for="pkm">2</label>
                  <input type="radio" id="lockdown" name="ketegangan" value="3">
                  <label for="lockdown">3</label>
                  <input type="radio" id="tidak" name="ketegangan" value="4">
                  <label for="tidak">4</label>
                </div>

                <div class="form-group">
                  <label for="exampleInputNWilayah">3. Ketakutan (Pada gelap, pada orang asing, ditinggal sendiri, pada keramaian lalu lintas, pada kerumunan orang banyak)</label><br>
                  <input type="radio" id="psbb" name="ketakutan" value="0">
                  <label for="psbb">0</label>
                  <input type="radio" id="psbb" name="ketakutan" value="1">
                  <label for="psbb">1</label>
                  <input type="radio" id="pkm" name="ketakutan" value="2">
                  <label for="pkm">2</label>
                  <input type="radio" id="lockdown" name="ketakutan" value="3">
                  <label for="lockdown">3</label>
                  <input type="radio" id="tidak" name="ketakutan" value="4">
                  <label for="tidak">4</label>
                </div>

                <div class="form-group">
                  <label for="exampleInputNWilayah">4. Gangguan tidur (sulit tidur, terbangun di malam hari, tidak nyenyak, bangun dengan lesu, banyak mimpi)</label><br>
                  <input type="radio" id="psbb" name="gangguan" value="0">
                  <label for="psbb">0</label>
                  <input type="radio" id="psbb" name="gangguan" value="1">
                  <label for="psbb">1</label>
                  <input type="radio" id="pkm" name="gangguan" value="2">
                  <label for="pkm">2</label>
                  <input type="radio" id="lockdown" name="gangguan" value="3">
                  <label for="lockdown">3</label>
                  <input type="radio" id="tidak" name="gangguan" value="4">
                  <label for="tidak">4</label>
                </div>

                <div class="form-group">
                  <label for="exampleInputNWilayah">5. Intelektual (Sulit berkonsentrasi, daya ingat lemah)</label><br>
                  <input type="radio" id="psbb" name="intelek" value="0">
                  <label for="psbb">0</label>
                  <input type="radio" id="psbb" name="intelek" value="1">
                  <label for="psbb">1</label>
                  <input type="radio" id="pkm" name="intelek" value="2">
                  <label for="pkm">2</label>
                  <input type="radio" id="lockdown" name="intelek" value="3">
                  <label for="lockdown">3</label>
                  <input type="radio" id="tidak" name="intelek" value="4">
                  <label for="tidak">4</label>
                </div>

                <div class="form-group">
                  <label for="exampleInputNWilayah">6. Perasaan depresi (hilangnya minat, berkurangnya kesenangan pada hobi, sedih, bangun dini hari)</label><br>
                  <input type="radio" id="psbb" name="depresi" value="0">
                  <label for="psbb">0</label>
                  <input type="radio" id="psbb" name="depresi" value="1">
                  <label for="psbb">1</label>
                  <input type="radio" id="pkm" name="depresi" value="2">
                  <label for="pkm">2</label>
                  <input type="radio" id="lockdown" name="depresi" value="3">
                  <label for="lockdown">3</label>
                  <input type="radio" id="tidak" name="depresi" value="4">
                  <label for="tidak">4</label>
                </div>

                <div class="form-group">
                  <label for="exampleInputNWilayah">7. Gejala somatik otot (sakit dan nyeri otot)</label><br>
                  <input type="radio" id="psbb" name="somatik" value="0">
                  <label for="psbb">0</label>
                  <input type="radio" id="psbb" name="somatik" value="1">
                  <label for="psbb">1</label>
                  <input type="radio" id="pkm" name="somatik" value="2">
                  <label for="pkm">2</label>
                  <input type="radio" id="lockdown" name="somatik" value="3">
                  <label for="lockdown">3</label>
                  <input type="radio" id="tidak" name="somatik" value="4">
                  <label for="tidak">4</label>
                </div>

                <div class="form-group">
                  <label for="exampleInputNWilayah">8. Gejala somatik sensorik (penglihatan kabur, muka merah, atau pucat)</label><br>
                  <input type="radio" id="psbb" name="sensorik" value="0">
                  <label for="psbb">0</label>
                  <input type="radio" id="psbb" name="sensorik" value="1">
                  <label for="psbb">1</label>
                  <input type="radio" id="pkm" name="sensorik" value="2">
                  <label for="pkm">2</label>
                  <input type="radio" id="lockdown" name="sensorik" value="3">
                  <label for="lockdown">3</label>
                  <input type="radio" id="tidak" name="sensorik" value="4">
                  <label for="tidak">4</label>
                </div>

                <div class="form-group">
                  <label for="exampleInputNWilayah">9. Gejala kardiovaskulir (berdebar, nyeri di dada, denyut nadi mengeras)</label><br>
                  <input type="radio" id="psbb" name="kardio" value="0">
                  <label for="psbb">0</label>
                  <input type="radio" id="psbb" name="kardio" value="1">
                  <label for="psbb">1</label>
                  <input type="radio" id="pkm" name="kardio" value="2">
                  <label for="pkm">2</label>
                  <input type="radio" id="lockdown" name="kardio" value="3">
                  <label for="lockdown">3</label>
                  <input type="radio" id="tidak" name="kardio" value="4">
                  <label for="tidak">4</label>
                </div>

                <div class="form-group">
                  <label for="exampleInputNWilayah">10. Gejala respiratori (rasa tertekan di dada, perasaan tercekik, sering sesak napas)</label><br>
                  <input type="radio" id="psbb" name="respi" value="0">
                  <label for="psbb">0</label>
                  <input type="radio" id="psbb" name="respi" value="1">
                  <label for="psbb">1</label>
                  <input type="radio" id="pkm" name="respi" value="2">
                  <label for="pkm">2</label>
                  <input type="radio" id="lockdown" name="respi" value="3">
                  <label for="lockdown">3</label>
                  <input type="radio" id="tidak" name="respi" value="4">
                  <label for="tidak">4</label>
                </div>

                <div class="form-group">
                  <label for="exampleInputNWilayah">11. Gejala gastrointestinal (sulit menelan, perut perih, kembung, mual)</label><br>
                  <input type="radio" id="psbb" name="gastro" value="0">
                  <label for="psbb">0</label>
                  <input type="radio" id="psbb" name="gastro" value="1">
                  <label for="psbb">1</label>
                  <input type="radio" id="pkm" name="gastro" value="2">
                  <label for="pkm">2</label>
                  <input type="radio" id="lockdown" name="gastro" value="3">
                  <label for="lockdown">3</label>
                  <input type="radio" id="tidak" name="gastro" value="4">
                  <label for="tidak">4</label>
                </div>

                <div class="form-group">
                  <label for="exampleInputNWilayah">12. Gejala urogenital (sering buang air kecil, tidak dapat menahan kencing, impotensi)</label><br>
                  <input type="radio" id="psbb" name="urogen" value="0">
                  <label for="psbb">0</label>
                  <input type="radio" id="psbb" name="urogen" value="1">
                  <label for="psbb">1</label>
                  <input type="radio" id="pkm" name="urogen" value="2">
                  <label for="pkm">2</label>
                  <input type="radio" id="lockdown" name="urogen" value="3">
                  <label for="lockdown">3</label>
                  <input type="radio" id="tidak" name="urogen" value="4">
                  <label for="tidak">4</label>
                </div>

                <div class="form-group">
                  <label for="exampleInputNWilayah">13. Gejala otonom (mulut kering, muka merah, mudah berkeringat, pusing, sakit kepala)</label><br>
                  <input type="radio" id="psbb" name="otonom" value="0">
                  <label for="psbb">0</label>
                  <input type="radio" id="psbb" name="otonom" value="1">
                  <label for="psbb">1</label>
                  <input type="radio" id="pkm" name="otonom" value="2">
                  <label for="pkm">2</label>
                  <input type="radio" id="lockdown" name="otonom" value="3">
                  <label for="lockdown">3</label>
                  <input type="radio" id="tidak" name="otonom" value="4">
                  <label for="tidak">4</label>
                </div>

                <div class="form-group">
                  <label for="exampleInputNWilayah">14. Tingkah laku pada wawancara (gelisah, tidak tenang, jari gemetar, muka tegang)</label><br>
                  <input type="radio" id="psbb" name="tingkah" value="0">
                  <label for="psbb">0</label>
                  <input type="radio" id="psbb" name="tingkah" value="1">
                  <label for="psbb">1</label>
                  <input type="radio" id="pkm" name="tingkah" value="2">
                  <label for="pkm">2</label>
                  <input type="radio" id="lockdown" name="tingkah" value="3">
                  <label for="lockdown">3</label>
                  <input type="radio" id="tidak" name="tingkah" value="4">
                  <label for="tidak">4</label>
                </div><br><br>

                <div class="form-group mb-0">
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" name="terms" class="custom-control-input" id="exampleCheck1">
                    <label class="custom-control-label" for="exampleCheck1">Saya sudah membaca dan menyetujui <a href="" data-toggle="modal" data-target="#modal-tos-resiko">syarat dan ketentuan yang berlaku</a>.</label>
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
<script src="<?php echo base_url('assets/js/validasi_resiko.js') ?>"></script>
</body>
</html>