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
                <h3 class="card-title">Form <small>Deteksi Dini Covid-19</small></h3>
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
                    <label for="exampleInputEmail1">Nama Lengkap</label>
                    <input type="text" name="nama" class="form-control" id="exampleInputNama1" placeholder="Nama Lengkap">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputKelamin1">2. Jenis Kelamin</label><br>
                    <input type="checkbox" name="jeniskelamin" value="laki">
                    <label for="jeniskelamin">Laki - Laki</label><br>
                    <input type="checkbox" name="jeniskelamin" value="perempuan">
                    <label for="jeniskelamin">Perempuan</label><br>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Usia</label>
                    <input type="text" name="nama" class="form-control" id="exampleInputNama1" placeholder="Masukkan Usia Anda">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputNama1">Nomer Handphone</label>
                    <input type="text" name="nohp" class="form-control" id="exampleInputNoHP" placeholder="+62">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Kontak Nomer/WA Kerabat yang bisa dihubungi</label>
                    <input type="text" name="nama" class="form-control" id="exampleInputNama1" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputNWilayah">Saat ini sedang tinggal dimana ?</label><br>
                    <input type="radio" id="psbb" name="kondisi" value="psbb">
                    <label for="psbb">Kontrakan</label><br>
                    <input type="radio" id="psbb" name="kondisi" value="psbb">
                    <label for="psbb">Rumah Sendiri</label><br>
                    <input type="radio" id="pkm" name="kondisi" value="pkm">
                    <label for="pkm">Kos</label><br>
                    <input type="radio" id="lockdown" name="kondisi" value="lockdown">
                    <label for="lockdown">Lainnya</label><br>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Alamat lengkap Kosan / Kontrakan / Rumah </label>
                    <input type="text" name="nama" class="form-control" id="exampleInputNama1" placeholder="Alamat Lengkap">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Daerah asal (Tuliskan nama Kota dan Provinsi)</label>
                    <input type="text" name="nama" class="form-control" id="exampleInputNama1" placeholder="contoh : Semarang, Jawa Tengah">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputNWilayah">Pendidikan terakhir</label><br>
                    <input type="radio" id="psbb" name="kondisi" value="psbb">
                    <label for="psbb">SD</label><br>
                    <input type="radio" id="psbb" name="kondisi" value="psbb">
                    <label for="psbb">SMP</label><br>
                    <input type="radio" id="pkm" name="kondisi" value="pkm">
                    <label for="pkm">SMA</label><br>
                    <input type="radio" id="lockdown" name="kondisi" value="lockdown">
                    <label for="lockdown">D1/D2/D3</label><br>
                    <input type="radio" id="lockdown" name="kondisi" value="lockdown">
                    <label for="lockdown">S1</label><br>
                    <input type="radio" id="lockdown" name="kondisi" value="lockdown">
                    <label for="lockdown">S2</label><br>
                    <input type="radio" id="lockdown" name="kondisi" value="lockdown">
                    <label for="lockdown">S3</label><br>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputKelamin1">Apakah saudara/i sudah bekerja ?</label><br>
                    <input type="checkbox" name="jeniskelamin" value="laki">
                    <label for="jeniskelamin">Ya</label><br>
                    <input type="checkbox" name="jeniskelamin" value="perempuan">
                    <label for="jeniskelamin">Tidak</label><br>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputKelamin1">Jika sudah bekerja, apakah pekerjaan Anda ?</label><br>
                    <input type="radio" name="jeniskelamin" value="laki">
                    <label for="jeniskelamin">Dokter / Paramedis</label><br>
                    <input type="radio" name="jeniskelamin" value="perempuan">
                    <label for="jeniskelamin">Dosen / Guru</label><br>
                    <input type="radio" name="jeniskelamin" value="perempuan">
                    <label for="jeniskelamin">Tentara / Polisi</label><br>
                    <input type="radio" name="jeniskelamin" value="perempuan">
                    <label for="jeniskelamin">Pedagang</label><br>
                    <input type="radio" name="jeniskelamin" value="perempuan">
                    <label for="jeniskelamin">Petani</label><br>
                    <input type="radio" name="jeniskelamin" value="perempuan">
                    <label for="jeniskelamin">Wiraswasta</label><br>
                    <input type="radio" name="jeniskelamin" value="perempuan">
                    <label for="jeniskelamin">Pegawai Swasta</label><br>
                    <input type="radio" name="jeniskelamin" value="perempuan">
                    <label for="jeniskelamin">PNS / Pegawai BUMN</label><br>
                    <input type="radio" name="jeniskelamin" value="perempuan">
                    <label for="jeniskelamin">Driver Online</label><br>
                    <input type="radio" name="jeniskelamin" value="perempuan">
                    <label for="jeniskelamin">Pedagang Online</label><br>
                    <input type="radio" name="jeniskelamin" value="perempuan">
                    <label for="jeniskelamin">Lainnya</label><br>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputKelamin1">Apakah selama ini saudara/i pernah mengalami gejala Covid-19 ? Jika pernah, gejala apa yang pernah Anda rasakan ? (pilihan boleh dari 1)</label><br>
                    <input type="checkbox" name="jeniskelamin" value="laki">
                    <label for="jeniskelamin">Demam</label><br>
                    <input type="checkbox" name="jeniskelamin" value="perempuan">
                    <label for="jeniskelamin">Batuk</label><br>
                    <input type="checkbox" name="jeniskelamin" value="perempuan">
                    <label for="jeniskelamin">Sesak Nafas</label><br>
                    <input type="checkbox" name="jeniskelamin" value="perempuan">
                    <label for="jeniskelamin">Pusing, Kelelahan</label><br>
                    <input type="checkbox" name="jeniskelamin" value="perempuan">
                    <label for="jeniskelamin">Mual</label><br>
                    <input type="checkbox" name="jeniskelamin" value="perempuan">
                    <label for="jeniskelamin">Diare</label><br>
                    <input type="checkbox" name="jeniskelamin" value="perempuan">
                    <label for="jeniskelamin">Sakit Tenggorokan</label><br>
                    <input type="checkbox" name="jeniskelamin" value="perempuan">
                    <label for="jeniskelamin">Lainnya</label><br>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Sudah berapa lama kamu merasakan gejala tersebut ?</label>
                    <input type="text" name="nama" class="form-control" id="exampleInputNama1" placeholder="contoh : 6 hari">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputKelamin1">Apakah anda mempunyai riwayat perjalanan keluar negeri atau kota - kota lain yang terjangkit Covid-19 sebelum timbul gejala ? (Pilih salah satu)</label><br>
                    <input type="radio" name="jeniskelamin" value="laki">
                    <label for="jeniskelamin">Jakarta</label><br>
                    <input type="radio" name="jeniskelamin" value="perempuan">
                    <label for="jeniskelamin">Bandung</label><br>
                    <input type="radio" name="jeniskelamin" value="perempuan">
                    <label for="jeniskelamin">Yogyakarta</label><br>
                    <input type="radio" name="jeniskelamin" value="perempuan">
                    <label for="jeniskelamin">Depok</label><br>
                    <input type="radio" name="jeniskelamin" value="perempuan">
                    <label for="jeniskelamin">Tangerang</label><br>
                    <input type="radio" name="jeniskelamin" value="perempuan">
                    <label for="jeniskelamin">Bogor</label><br>
                    <input type="radio" name="jeniskelamin" value="perempuan">
                    <label for="jeniskelamin">Surabaya</label><br>
                    <input type="radio" name="jeniskelamin" value="perempuan">
                    <label for="jeniskelamin">Manado</label><br>
                    <input type="radio" name="jeniskelamin" value="perempuan">
                    <label for="jeniskelamin">Pontianak</label><br>
                    <input type="radio" name="jeniskelamin" value="perempuan">
                    <label for="jeniskelamin">Surakarta</label><br>
                    <input type="radio" name="jeniskelamin" value="perempuan">
                    <label for="jeniskelamin">Denpasar</label><br>
                    <input type="radio" name="jeniskelamin" value="perempuan">
                    <label for="jeniskelamin">Semarang</label><br>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputNWilayah">Apakah dalam radius 3 Km dari posisi anda ada ODP/PDP/Positif atau bahkan jenazah yang dikubur sesuai protokol Covid-19 ?</label><br>
                    <input type="radio" id="psbb" name="kondisi"  value="psbb">
                    <label for="psbb">Ya</label><br>
                    <input type="radio" id="psbb" name="kondisi" value="psbb">
                    <label for="psbb">Tidak</label><br>
                    <input type="radio" id="psbb" name="kondisi" value="psbb">
                    <label for="psbb">Tidak Tahu</label>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputNWilayah">Apakah anda pernah atau sedang melakukan kontak dengan ODP/PDP/Positif atau bahkan jenazah yang dikubur sesuai protokol Covid-19 ?</label><br>
                    <input type="radio" id="psbb" name="kondisi"  value="psbb">
                    <label for="psbb">Ya</label><br>
                    <input type="radio" id="psbb" name="kondisi" value="psbb">
                    <label for="psbb">Tidak</label><br>
                    <input type="radio" id="psbb" name="kondisi" value="psbb">
                    <label for="psbb">Tidak Tahu</label>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputNWilayah">Apakah anda telah melakukan karantina mandiri selama 14 hari di kediaman anda ?</label><br>
                    <input type="radio" id="psbb" name="kondisi"  value="psbb">
                    <label for="psbb">Ya, karena saya mengalami gejala yang tertera di atas</label><br>
                    <input type="radio" id="psbb" name="kondisi" value="psbb">
                    <label for="psbb">Ya, karena saya baru saja berpergian lintas kota</label><br>
                    <input type="radio" id="psbb" name="kondisi" value="psbb">
                    <label for="psbb">Ya, karena saya telah kontak dengan pasien ODP/PDP/Positif Covid-19</label><br>
                    <input type="radio" id="psbb" name="kondisi" value="psbb">
                    <label for="psbb">Tidak</label>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputKelamin1">Apakah anda telah menerapkan prinsip pencegahan Covid-19? (Pilihan boleh lebih dari 1)</label><br>
                    <input type="checkbox" name="jeniskelamin" value="laki">
                    <label for="jeniskelamin">Mencuci tangan pakai sabun/ hand sanitizer setiap selesai kontak dengan barang yang dibawa bepergian, setelah memegang uang, sebelum makan maupun saat tangan terasa kotor sehingga merasa harus menerapkan prinsip pencegahan sesuai dengan protokol Covid-19</label><br>
                    <input type="checkbox" name="jeniskelamin" value="perempuan">
                    <label for="jeniskelamin">Mencegah masker kain setiap keluar dari kediaman atau hendak kontak dengan manusia lain</label><br>
                    <input type="checkbox" name="jeniskelamin" value="perempuan">
                    <label for="jeniskelamin">Tidak sembarang menyentuh benda yang terletak di tempat umum maupun berjabat tangan</label><br>
                    <input type="checkbox" name="jeniskelamin" value="perempuan">
                    <label for="jeniskelamin">Menerapkan karantina mandiri setelah kontak dengan ODP/PDP/Positif Covid-19</label><br>
                    <input type="checkbox" name="jeniskelamin" value="perempuan">
                    <label for="jeniskelamin">Saya menerapkan menerapkan seluruh langkah tersebut</label><br>
                    <input type="checkbox" name="jeniskelamin" value="perempuan">
                    <label for="jeniskelamin">Saya tidak menerapkan apapun sama sekali</label><br>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputKelamin1">Jika anda terpaksa keluar rumah, apa saja langkah yang anda lakukan saat tiba dirumah? (pilihan boleh lebih dari 1)</label><br>
                    <input type="checkbox" name="jeniskelamin" value="laki">
                    <label for="jeniskelamin">Mengganti pakaian pergi dengan pakaian bersih</label><br>
                    <input type="checkbox" name="jeniskelamin" value="perempuan">
                    <label for="jeniskelamin">Cuci tangan pakai sabun sebelum masuk rumah</label><br>
                    <input type="checkbox" name="jeniskelamin" value="perempuan">
                    <label for="jeniskelamin">Mandi</label><br>
                    <input type="checkbox" name="jeniskelamin" value="perempuan">
                    <label for="jeniskelamin">Membuka sepatu di luar rumah</label><br>
                    <input type="checkbox" name="jeniskelamin" value="perempuan">
                    <label for="jeniskelamin">Menyemprotkan disinfektan ke barang-barang yang dibawa bepergian</label><br>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputNWilayah">Apakah dirumah anda dilakukan penyemprotan disinfektan?</label><br>
                    <input type="radio" id="psbb" name="kondisi"  value="psbb">
                    <label for="psbb">Ya, saya menyemprotkan disinfektan secara mandiri</label><br>
                    <input type="radio" id="psbb" name="kondisi" value="psbb">
                    <label for="psbb">Ya, rumah saya disemprot disinfektan oleh petugas</label><br>
                    <input type="radio" id="psbb" name="kondisi" value="psbb">
                    <label for="psbb">Tidak</label>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputNWilayah">Apakah masyarakat di lingkungan anda melakukan physical distancing?</label><br>
                    <input type="radio" id="psbb" name="kondisi"  value="psbb">
                    <label for="psbb">Ya, namun masih ada beberapa kegiatan kumpul warga seperti arisan, pengajian, rapat rutin, dll</label><br>
                    <input type="radio" id="psbb" name="kondisi" value="psbb">
                    <label for="psbb">Ya, rumah saya disemprot disinfektan oleh petugas</label><br>
                    <input type="radio" id="psbb" name="kondisi" value="psbb">
                    <label for="psbb">Tidak, masyarakat berinteraksi seperti biasa tanpa batasan</label>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputKelamin1">Apakah anda memiliki riwayat kontak dengan banyak orang dalam suatu kerumunan, seperti berikut (pilihan boleh lebih dari 1)</label><br>
                    <input type="checkbox" name="jeniskelamin" value="laki">
                    <label for="jeniskelamin">Ya, saya pergi ke pasar tradisional/pasar modren/ pusat perbelanjaan</label><br>
                    <input type="checkbox" name="jeniskelamin" value="perempuan">
                    <label for="jeniskelamin">Ya, saya masih menghadiri acara keagamaan secara bersama</label><br>
                    <input type="checkbox" name="jeniskelamin" value="perempuan">
                    <label for="jeniskelamin">Ya, saya masih menghadiri aacara perkumpulan keluarga/warga/komunitas</label><br>
                    <input type="checkbox" name="jeniskelamin" value="perempuan">
                    <label for="jeniskelamin">Ya, saya masih harus bekerja di  kantor</label><br>
                    <input type="checkbox" name="jeniskelamin" value="perempuan">
                    <label for="jeniskelamin">Ya, saya pernah pergi ke tempat wisata maupun rekreasi selama periode pandemi Covid-19</label><br>
                    <input type="checkbox" name="jeniskelamin" value="perempuan">
                    <label for="jeniskelamin">Ya, saya masih  mengunjungi rumah makan/restoran/kedai kopi</label><br>
                    <input type="checkbox" name="jeniskelamin" value="perempuan">
                    <label for="jeniskelamin">Tidak, saya melakukan phsycal distancing dan karantina mandiri total</label><br>
                  </div><br><br>
                  <div class="form-group mb-0">
                  <div class="custom-control custom-checkbox">
                  <input type="checkbox" name="terms" class="custom-control-input" id="exampleCheck1">
                  <label class="custom-control-label" for="exampleCheck1">Saya sudah membaca dan menyetujui <a href="" data-toggle="modal" data-target="#modal-tos-deteksi">syarat dan ketentuan yang berlaku</a>.</label>
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