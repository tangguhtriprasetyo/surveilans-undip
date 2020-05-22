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
                <h3 class="card-title">Form <small>Deteksi Dini dan Penilaian Resiko Pribadi</small></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="<?php echo base_url('deteksi/add') ?>" method="post" id="formDeteksi">
                <div class="card-body">
                <div class="section-title" data-aos="fade-up">
                  <h2>Form Surveilens ini diinisiasi oleh DDART dan P2KKN UNDIP 2020</h2>
                  <p>Semua data yang diperoleh pada form ini akan di jaga kerahasiaannya serta hanya akan digunakan untuk kepentingan Surveilens</p>
                </div>

                <div class="form-group">
                    <label for="nama">Nama Lengkap</label>
                    <input type="text" name="nama" class="form-control" id="email"
                    placeholder="Nama Lengkap">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputKelamin1">Jenis Kelamin</label><br>
                    <input type="radio" name="gender" value="laki">
                    <label for="jeniskelamin">Laki - Laki</label><br>
                    <input type="radio" name="gender" value="perempuan">
                    <label for="jeniskelamin">Perempuan</label><br>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Tanggal Lahir</label>
                    <input type="date" name="ttl" class="form-control" id="exampleInputNama1"
                    placeholder="Tempat Tanggal Lahir">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputNama1">Nomer Handphone</label>
                    <input type="number" name="hp" class="form-control" id="exampleInputNoHP" placeholder="">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Kontak Nomer/WA Kerabat yang bisa dihubungi</label>
                    <input type="number" name="kerabat" class="form-control" id="exampleInputNama1" placeholder="">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputNWilayah">Saat ini sedang tinggal dimana ?</label><br>
                    <input type="radio" id="psbb" name="tinggal" value="Kontrakan">
                    <label for="psbb">Kontrakan</label><br>
                    <input type="radio" id="psbb" name="tinggal" value="Rumah Sendiri">
                    <label for="psbb">Rumah Sendiri</label><br>
                    <input type="radio" id="pkm" name="tinggal" value="Kos">
                    <label for="pkm">Kos</label><br>
                    <input type="radio" id="lockdown" name="tinggal" value="Lainnya">
                    <label for="lockdown">Lainnya</label><br>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Alamat lengkap Kosan / Kontrakan / Rumah </label>
                    <input type="text" name="alamat" class="form-control" id="exampleInputNama1"
                    placeholder="Alamat Lengkap">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Daerah asal (Tuliskan nama Kota dan Provinsi)</label>
                    <input type="text" name="asal" class="form-control" id="exampleInputNama1"
                    placeholder="contoh : Semarang, Jawa Tengah">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputNWilayah">Pendidikan terakhir</label><br>
                    <input type="radio" id="psbb" name="pendidikan" value="SD">
                    <label for="psbb">SD</label><br>
                    <input type="radio" id="psbb" name="pendidikan" value="SMP">
                    <label for="psbb">SMP</label><br>
                    <input type="radio" id="pkm" name="pendidikan" value="SMA">
                    <label for="pkm">SMA</label><br>
                    <input type="radio" id="lockdown" name="pendidikan" value="D1_D2_D3">
                    <label for="lockdown">D1/D2/D3</label><br>
                    <input type="radio" id="lockdown" name="pendidikan" value="S1">
                    <label for="lockdown">S1</label><br>
                    <input type="radio" id="lockdown" name="pendidikan" value="S2">
                    <label for="lockdown">S2</label><br>
                    <input type="radio" id="lockdown" name="pendidikan" value="S3">
                    <label for="lockdown">S3</label><br>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputKelamin1">Apakah saudara/i sudah bekerja ?</label><br>
                    <input type="radio" name="status" value="Ya">
                    <label for="jeniskelamin">Ya</label><br>
                    <input type="radio" name="status" value="Tidak">
                    <label for="jeniskelamin">Tidak</label><br>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputKelamin1">Jika sudah bekerja, apakah pekerjaan Anda ?</label><br>
                    <input type="radio" name="pekerjaan" value="Dokter" onchange="document.getElementById('textkerja').disabled = true;">
                    <label for="pekerjaan">Dokter / Paramedis</label><br>
                    <input type="radio" name="pekerjaan" value="Dosen" onchange="document.getElementById('textkerja').disabled = true;">
                    <label for="pekerjaan">Dosen / Guru</label><br>
                    <input type="radio" name="pekerjaan" value="Polisi" onchange="document.getElementById('textkerja').disabled = true;">
                    <label for="pekerjaan">Tentara / Polisi</label><br>
                    <input type="radio" name="pekerjaan" value="Pedagang" onchange="document.getElementById('textkerja').disabled = true;">
                    <label for="pekerjaan">Pedagang</label><br>
                    <input type="radio" name="pekerjaan" value="Petani" onchange="document.getElementById('textkerja').disabled = true;">
                    <label for="pekerjaan">Petani</label><br>
                    <input type="radio" name="pekerjaan" value="Wiraswasta" onchange="document.getElementById('textkerja').disabled = true;">
                    <label for="pekerjaan">Wiraswasta</label><br>
                    <input type="radio" name="pekerjaan" value="Swasta" onchange="document.getElementById('textkerja').disabled = true;">
                    <label for="pekerjaan">Pegawai Swasta</label><br>
                    <input type="radio" name="pekerjaan" value="BUMN" onchange="document.getElementById('textkerja').disabled = true;">
                    <label for="pekerjaan">PNS / Pegawai BUMN</label><br>
                    <input type="radio" name="pekerjaan" value="ojol" onchange="document.getElementById('textkerja').disabled = true;">
                    <label for="pekerjaan">Driver Online</label><br>
                    <input type="radio" name="pekerjaan" value="olshop" onchange="document.getElementById('textkerja').disabled = true;">
                    <label for="pekerjaan">Pedagang Online</label><br>
                    <input type="radio" id="kerja" name="pekerjaan" onchange="document.getElementById('textkerja').disabled = false;">
                    <label for="kerja"></label> <input type="text" id="textkerja" name="pekerjaan" placeholder="  Lainnya" disabled> <br>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputKelamin1">Apakah selama ini saudara/i pernah mengalami gejala Covid-19 ?
                    Jika pernah, gejala apa yang pernah Anda rasakan ? (pilihan boleh dari 1)</label><br>
                    <input type="checkbox" name="gejala[]" id="checkbox1" value=1>
                    <label for="gejala">Demam</label><br>
                    <input type="checkbox" name="gejala[]" id="checkbox2" value=1>
                    <label for="gejala">Batuk</label><br>
                    <input type="checkbox" name="gejala[]" id="checkbox3" value=1>
                    <label for="gejala">Sesak Nafas</label><br>
                    <input type="checkbox" name="gejala[]" id="checkbox4" value=1>
                    <label for="gejala">Pusing, Kelelahan</label><br>
                    <input type="checkbox" name="gejala[]" id="checkbox5" value=1>
                    <label for="gejala">Mual</label><br>
                    <input type="checkbox" name="gejala[]" id="checkbox6" value=1>
                    <label for="gejala">Diare</label><br>
                    <input type="checkbox" name="gejala[]" id="checkbox7" value=1>
                    <label for="gejala">Sakit Tenggorokan</label><br>
                    <input type="checkbox" name="gejala[]" id="checkbox8" value=1>
                    <label for="gejala"><input type="text" id="textbox1" placeholder="  Lainnya" readonly></label><br>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Sudah berapa lama kamu merasakan gejala tersebut ?</label>
                    <input type="number" name="durasi" class="form-control" id="textbox" placeholder="Sebutkan Berapa Hari" readonly>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputKelamin1">Apakah anda mempunyai riwayat perjalanan keluar negeri atau kota -
                    kota lain yang terjangkit Covid-19 sebelum timbul gejala ? (Pilih salah satu)</label><br>
                    <input type="radio" name="riwayat" value=1>
                    <label for="riwayat">Jakarta</label><br>
                    <input type="radio" name="riwayat" value=1>
                    <label for="riwayat">Bandung</label><br>
                    <input type="radio" name="riwayat" value=1>
                    <label for="riwayat">Yogyakarta</label><br>
                    <input type="radio" name="riwayat" value=1>
                    <label for="riwayat">Depok</label><br>
                    <input type="radio" name="riwayat" value=1>
                    <label for="riwayat">Tangerang</label><br>
                    <input type="radio" name="riwayat" value=1>
                    <label for="riwayat">Bogor</label><br>
                    <input type="radio" name="riwayat" value=1>
                    <label for="riwayat">Surabaya</label><br>
                    <input type="radio" name="riwayat" value=1>
                    <label for="riwayat">Manado</label><br>
                    <input type="radio" name="riwayat" value=1>
                    <label for="riwayat">Pontianak</label><br>
                    <input type="radio" name="riwayat" value=1>
                    <label for="riwayat">Surakarta</label><br>
                    <input type="radio" name="riwayat" value=1>
                    <label for="riwayat">Denpasar</label><br>
                    <input type="radio" name="riwayat" value=1>
                    <label for="riwayat">Semarang</label><br>
                    <input type="radio" name="riwayat" value=0>
                    <label for="riwayat">Tidak Pernah</label><br>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputNWilayah">Apakah dalam radius 3 Km dari posisi anda ada ODP/PDP/Positif atau
                    bahkan jenazah yang dikubur sesuai protokol Covid-19 ?</label><br>
                    <input type="radio" id="psbb" name="radius" value=1>
                    <label for="psbb">Ya</label><br>
                    <input type="radio" id="psbb" name="radius" value=0>
                    <label for="psbb">Tidak</label><br>
                    <input type="radio" id="psbb" name="radius" value=0>
                    <label for="psbb">Tidak Tahu</label>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputNWilayah">Apakah anda pernah atau sedang melakukan kontak dengan
                    ODP/PDP/Positif atau bahkan jenazah yang dikubur sesuai protokol Covid-19 ?</label><br>
                    <input type="radio" id="psbb" name="kontak" value=1>
                    <label for="psbb">Ya</label><br>
                    <input type="radio" id="psbb" name="kontak" value=0>
                    <label for="psbb">Tidak</label><br>
                    <input type="radio" id="psbb" name="kontak" value=0>
                    <label for="psbb">Tidak Tahu</label>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputNWilayah">Apakah anda telah melakukan karantina mandiri selama 14 hari di
                    kediaman anda ?</label><br>
                    <input type="radio" id="psbb" name="karantina" value=1>
                    <label for="psbb">Ya, karena saya mengalami gejala yang tertera di atas</label><br>
                    <input type="radio" id="psbb" name="karantina" value=1>
                    <label for="psbb">Ya, karena saya baru saja berpergian lintas kota</label><br>
                    <input type="radio" id="psbb" name="karantina" value=1>
                    <label for="psbb">Ya, karena saya telah kontak dengan pasien ODP/PDP/Positif Covid-19</label><br>
                    <input type="radio" id="psbb" name="karantina" value=0>
                    <label for="psbb">Tidak</label>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputKelamin1">Apakah anda telah menerapkan prinsip pencegahan Covid-19? (Pilihan
                    boleh lebih dari 1)</label><br>
                    <input type="checkbox" name="prinsip[]" value=1>
                    <label for="prinsip">Tidak mencuci tangan pakai sabun/ hand sanitizer setiap selesai kontak dengan
                      barang,sebelum makan maupun saat tangan terasa kotor</label><br>
                    <input type="checkbox" name="prinsip[]" value=1>
                    <label for="prinsip">Tidak menggunakan masker kain setiap keluar dari kediaman atau hendak kontak dengan
                    manusia lain</label><br>
                    <input type="checkbox" name="prinsip[]" value=1>
                    <label for="prinsip">Sembarang menyentuh benda yang terletak di tempat umum maupun
                    berjabat tangan</label><br>
                    <input type="checkbox" name="prinsip[]" value=1>
                    <label for="prinsip">Tidak menerapkan karantina mandiri setelah kontak dengan ODP/PDP/Positif
                    Covid-19</label><br>
                    <input type="checkbox" name="prinsip[]" value=0>
                    <label for="prinsip">Saya menerapkan prinsip pencegahan Covid-19</label><br>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputKelamin1">Jika anda terpaksa keluar rumah, apa saja langkah yang anda
                    lakukan saat tiba dirumah? (pilihan boleh lebih dari 1)</label><br>
                    <input type="checkbox" name="keluar[]" value=1>
                    <label for="jeniskelamin">Tidak Mengganti pakaian pergi dengan pakaian bersih</label><br>
                    <input type="checkbox" name="keluar[]" value=1>
                    <label for="keluar">Tidak Cuci tangan pakai sabun sebelum masuk rumah</label><br>
                    <input type="checkbox" name="keluar[]" value=1>
                    <label for="keluar">Tidak Mandi</label><br>
                    <input type="checkbox" name="keluar[]" value=1>
                    <label for="keluar">Tidak Membuka sepatu di luar rumah</label><br>
                    <input type="checkbox" name="keluar[]" value=1>
                    <label for="keluar">Tidak Menyemprotkan disinfektan ke barang-barang yang dibawa
                    bepergian</label><br>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputNWilayah">Apakah dirumah anda dilakukan penyemprotan
                    disinfektan?</label><br>
                    <input type="radio" id="psbb" name="penyemprotan" value=0>
                    <label for="psbb">Ya, saya menyemprotkan disinfektan secara mandiri</label><br>
                    <input type="radio" id="psbb" name="penyemprotan" value=0>
                    <label for="psbb">Ya, rumah saya disemprot disinfektan oleh petugas</label><br>
                    <input type="radio" id="psbb" name="penyemprotan" value=1>
                    <label for="psbb">Tidak</label>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputNWilayah">Apakah masyarakat di lingkungan anda melakukan physical
                    distancing?</label><br>
                    <input type="radio" id="psbb" name="physical" value=1>
                    <label for="psbb">Tidak, masyarakat disekitar saya masih mengadakan bentuk kegiatan yang mengumpulkan warga </label><br>
                    <input type="radio" id="psbb" name="physical" value=1>
                    <label for="psbb">Tidak,  masih ada beberapa kegiatan kumpul warga seperti arisan, pengajian, rapat rutin, dll</label><br>
                    <input type="radio" id="psbb" name="physical" value=1>
                    <label for="psbb">Tidak, masyarakat berinteraksi seperti biasa tanpa batasan</label><br>
                    <input type="radio" id="psbb" name="physical" value=0>
                    <label for="psbb">Ya, masyarakat di sekitar saya sama sekali tidak mengadakan kegiatan kumpul warga</label>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputKelamin1">Apakah anda memiliki riwayat kontak dengan banyak orang dalam
                    suatu kerumunan, seperti berikut (pilihan boleh lebih dari 1)</label><br>
                    <input type="checkbox" name="kerumunan[]" value=1>
                    <label for="kerumunan">Ya, saya pergi ke pasar tradisional/pasar modren/ pusat
                    perbelanjaan</label><br>
                    <input type="checkbox" name="kerumunan[]" value=1>
                    <label for="kerumunan">Ya, saya masih menghadiri acara keagamaan secara bersama</label><br>
                    <input type="checkbox" name="kerumunan[]" value=1>
                    <label for="kerumunan">Ya, saya masih menghadiri aacara perkumpulan
                    keluarga/warga/komunitas</label><br>
                    <input type="checkbox" name="kerumunan[]" value=1>
                    <label for="kerumunan">Ya, saya masih harus bekerja di kantor</label><br>
                    <input type="checkbox" name="kerumunan[]" value=1>
                    <label for="kerumunan">Ya, saya pernah pergi ke tempat wisata maupun rekreasi selama periode
                    pandemi Covid-19</label><br>
                    <input type="checkbox" name="kerumunan[]" value=1>
                    <label for="kerumunan">Ya, saya masih mengunjungi rumah makan/restoran/kedai kopi</label><br>
                    <input type="checkbox" name="kerumunan[]" value=0>
                    <label for="kerumunan">Tidak, saya melakukan phsycal distancing dan karantina mandiri
                    total</label><br>
                  </div>

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
<script src="<?php echo base_url('assets/js/validasi_deteksi.js') ?>"></script>

<script>
    $(function () {
      document.getElementById('checkbox1').onchange = function() {
      document.getElementById('textbox').readOnly = !this.checked;
    };
      document.getElementById('checkbox2').onchange = function() {
      document.getElementById('textbox').readOnly = !this.checked;
    };
      document.getElementById('checkbox3').onchange = function() {
      document.getElementById('textbox').readOnly = !this.checked;
    };
      document.getElementById('checkbox4').onchange = function() {
      document.getElementById('textbox').readOnly = !this.checked;
    };
      document.getElementById('checkbox5').onchange = function() {
      document.getElementById('textbox').readOnly = !this.checked;
    };
      document.getElementById('checkbox6').onchange = function() {
      document.getElementById('textbox').readOnly = !this.checked;
    };
      document.getElementById('checkbox7').onchange = function() {
      document.getElementById('textbox').readOnly = !this.checked;
    };
      document.getElementById('checkbox8').onchange = function() {
      document.getElementById('textbox').readOnly = !this.checked;
      document.getElementById('textbox1').readOnly = !this.checked;
    };
  })
</script>
</body>
</html>