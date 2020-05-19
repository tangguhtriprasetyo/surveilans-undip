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
                <div class="section-title" data-aos="fade-up">
                  <h2>Form Surveilens ini dinisiasi oleh P2KKN UNDIP 2020</h2>
                  <p>Semua data yang diperoleh pada form ini akan di jaga kerahasiaannya serta hanya akan digunakan untuk kepentingan Surveilens</p>
                </div>

                  <div class="form-group">
                    <label for="exampleInputNama1">Nama Lengkap</label>
                    <input type="text" name="nama" class="form-control" id="exampleInputNama1" placeholder="Nama Lengkap">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputNama1">Usia</label>
                    <input type="number" name="usia" class="form-control" id="exampleInputUsia1" placeholder="Usia">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputNama1">Nomer Handphone</label>
                    <input type="text" name="hp" class="form-control" id="exampleInputNoHP" placeholder="+62">
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
                   <input type="radio" id="psbb" name="wilayah" value="psbb">
                   <label for="psbb">Pembatasan Sosial Skala Besar</label><br>
                   <input type="radio" id="pkm" name="wilayah" value="pkm">
                   <label for="pkm">Pembatasan Kegiatan Masyarakat</label><br>
                   <input type="radio" id="lockdown" name="wilayah" value="lockdown">
                   <label for="lockdown">Lockdown</label><br>
                   <input type="radio" id="tidak" name="wilayah" value="tidak">
                   <label for="tidak">Tidak Ada</label><br>
                 </div>

                 <div class="form-group">
                  <label for="exampleInputKerja1">Apa pekerjaan anda ?</label><br>
                  <input type="radio" id="kerja" name="pekerjaan" value="Mahasiswa">
                  <label for="kerja">Mahasiswa</label><br>
                  <input type="radio" id="kerja" name="pekerjaan" value="Pelajar">
                  <label for="kerja">Pelajar</label><br>
                  <input type="radio" id="kerja" name="pekerjaan" value="Dosen">
                  <label for="kerja">Dosen</label><br>
                  <input type="radio" id="kerja" name="pekerjaan" value="TenagaPendidikan">
                  <label for="kerja">Tenaga Pendidikan</label><br>
                  <input type="radio" id="kerja" name="pekerjaan" value="CleaningService">
                  <label for="kerja">Cleaning Service</label><br>
                  <input type="radio" id="kerja" name="pekerjaan" value="Security">
                  <label for="kerja">Security</label><br>
                  <input type="radio" id="kerja" name="pekerjaan" value="PNS">
                  <label for="kerja">PNS</label><br>
                  <input type="radio" id="kerja" name="pekerjaan" value="Wiraswasta">
                  <label for="kerja">Wiraswasta</label><br>
                  <input type="radio" id="kerja" name="pekerjaan" value="TenagaMedis">
                  <label for="kerja">Tenaga Medis</label><br>
                  <input type="radio" id="kerja" name="pekerjaan" value="TNI">
                  <label for="kerja">TNI</label><br>
                  <input type="radio" id="kerja" name="pekerjaan" value="Polri">
                  <label for="kerja">Polri</label><br>
                  <input type="radio" id="kerja" name="pekerjaan" >
                  <label for="kerja"><input type="text" id="kerja" name="pekerjaan" placeholder="Lainnya"></label><br>
                </div>

                <div class="form-group">
                  <label for="exampleInputPosisi1">Dimana Anda Bekerja ?</label>
                  <input type="text" name="tempat_kerja" class="form-control" id="exampleInputUPosisi1">
                </div>

                <div class="form-group">
                  <label for="exampleInputKerja1">Apakah anda menerapkan kebijakan di rumah saja ?</label><br>
                  <input type="radio" name="wfh" value="Iya">
                  <label for="kerja">Iya</label><br>
                  <input type="radio" name="wfh" value="Tidak">
                  <label for="kerja">Tidak</label><br>
                </div>

                <div class="form-group">
                  <label for="exampleInputKerja1">Jika anda bekerja, Apakah anda mengalami kesulitan selama ada kebijakan work from home ?</label><br>
                  <input type="checkbox" id="kerja" name="kesulitan" value="kendala_jaringan">
                  <label for="kerja">Kendala jaringan internet</label><br>
                  <input type="checkbox" id="kerja" name="kesulitan" value="sulit_berkoordinasi">
                  <label for="kerja">Sulit berkoordinasi dengan rekan kerja</label><br>
                  <input type="checkbox" id="kerja" name="kesulitan" value="kurang_dapat">
                  <label for="kerja">Kurang dapat mengontrol pekerjaan</label><br>
                  <input type="checkbox" id="kerja" name="kesulitan" value="tugas_menumpuk">
                  <label for="kerja">Tugas menumpuk</label><br>
                  <input type="checkbox" id="kerja" name="kesulitan" value="sulit_menentukan">
                  <label for="kerja">Sulit menentukan prioritas</label><br>
                  <input type="checkbox" id="kerja" name="kesulitan" value="mudah_bosan">
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
</body>
</html>