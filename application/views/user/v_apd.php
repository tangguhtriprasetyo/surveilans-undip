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
              <form action="<?php echo base_url('apd/add') ?>" method="post" enctype="multipart/form-data" id="formApd">
                <div class="card-body">

                  <div class="section-title" data-aos="fade-up">
                    <h2>Form Surveilens ini dinisiasi oleh D-DART danP2KKN UNDIP 2020</h2>
                  </div>
                  
                  <div class="form-group">
                    <label for="jenis">1. Jenis instansi</label><br>
                    <input type="radio" id="jenis" name="jenis" value="Faskes Tingkat 1" onclick="document.getElementById('textjenis').disabled = true;">
                    <label for="Faskes Tingkat 1">Faskes tingkat 1</label><br>
                    <input type="radio" id="jenis" name="jenis" value="Faskes Tingkat 2" onclick="document.getElementById('textjenis').disabled = true;">
                    <label for="Faskes Tingkat 2">Faskes tingkat 2</label><br>
                    <input type="radio" id="jenis" name="jenis" value="Faskes Tingkat 3" onclick="document.getElementById('textjenis').disabled = true;">
                    <label for="Faskes Tingkat 3">Faskes tingkat 3</label><br>
                    <input type="radio" id="jenis" name="jenis" value="Faskes Tingkat 3" onclick="document.getElementById('textjenis').disabled = false;">
                    <label for="Faskes Tingkat 3"> <input type="text" id="textjenis" name="jenis" placeholder="  Lainnya" disabled="disabled"> </label><br>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputNama1">2. Nama Instansi</label>
                    <input type="text" name="nama" class="form-control" id="exampleInputNoHP" placeholder="Nama Instansi">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputNama1">3. Alamat Instansi</label>
                    <input type="text" name="alamat" class="form-control" id="exampleInputNoHP" placeholder="Alamat Instansi">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputNama1">4. Contact Person (Email / Nomer Telfon)</label>
                    <input type="text" name="kontak" class="form-control" id="exampleInputNoHP" placeholder="">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputNama1">5. Kabupaten / Kota</label>
                    <input type="text" name="daerah" class="form-control" id="exampleInputNoHP" placeholder="">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputNWilayah">6. Apakah Pemerintah Daerah Anda menerapkan skema PSBB ?</label><br>
                    <input type="radio" id="psbb" name="psbb" value="Ya">
                    <label for="psbb">Ya</label><br>
                    <input type="radio" id="psbb" name="psbb" value="Tidak">
                    <label for="psbb">Tidak</label>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputNWilayah">7. Apakah pemerintah daerah Anda sudah berkoordinasi dengan instansi Anda terkait kesiapsiagaan dalam penanganan Covid-19 (Surat himbauan, pertemuan, dll) ?</label><br>
                    <input type="radio" id="psbb" name="koordinasi" value="Sudah">
                    <label for="psbb">Sudah</label><br>
                    <input type="radio" id="psbb" name="koordinasi" value="Belum">
                    <label for="psbb">Belum</label>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputNWilayah">8. Apakah sudah ada pelatihan terkait penanganan Covid-19 dari Pemerintah/Dinas Kesehatan/ Dinas terkait kepada tenaga kesehatan di instansi Anda ?</label><br>
                    <input type="radio" id="psbb" name="pelatihan" value="Sudah">
                    <label for="psbb">Sudah</label><br>
                    <input type="radio" id="psbb" name="pelatihan" value="Belum">
                    <label for="psbb">Belum</label><br>
                    <input type="radio" id="psbb" name="pelatihan" value="Tidak Tahu">
                    <label for="psbb">Tidak Tahu</label>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputNWilayah">9. Apakah di Kota/Kabupaten atau wilayah kerja anda sudah terdapat kasus positif Covid-19 ?</label><br>
                    <input type="radio" id="psbb" name="kasus" value="Sudah">
                    <label for="psbb">Sudah</label><br>
                    <input type="radio" id="psbb" name="kasus" value="Belum">
                    <label for="psbb">Belum</label>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputNWilayah">10. Apakah di instansi anda menyediakan fasilitas layanan Rapid Test ?</label><br>
                    <input type="radio" id="psbb" name="rapid" value="Ya">
                    <label for="psbb">Ya</label><br>
                    <input type="radio" id="psbb" name="rapid" value="Tidak">
                    <label for="psbb">Tidak</label>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputNWilayah">11. Apakah di instansi anda terdapat fasilitas layanan SWAB ?</label><br>
                    <input type="radio" id="psbb" name="swab" value="Ya">
                    <label for="psbb">Ya</label><br>
                    <input type="radio" id="psbb" name="swab" value="Tidak">
                    <label for="psbb">Tidak</label>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputNWilayah">12. Apakah tersedia ruang isolasi pasien Covid-19 di instansi anda ?</label><br>
                    <input type="radio" id="psbb" name="isolasi" value="Ya">
                    <label for="psbb">Ya</label><br>
                    <input type="radio" id="psbb" name="isolasi" value="Tidak">
                    <label for="psbb">Tidak</label>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputNama1">13. Bagaimana kondisi ruang isolasi pasien Covid-19 ?</label>
                    <input type="text" name="kondisi" class="form-control" id="exampleInputNoHP" placeholder="Jelaskan">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputNWilayah">14. Bagaimana ketersediaan hand sanitizer di instansi Anda ?</label><br>
                    <input type="radio" id="psbb" name="sanitizer" value="Kurang">
                    <label for="psbb">Kurang</label><br>
                    <input type="radio" id="psbb" name="sanitizer" value="Cukup">
                    <label for="psbb">Cukup</label>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputNWilayah">15. Apakah tersedia thermometer infrared ?</label><br>
                    <input type="radio" id="psbb" name="thermo"  value="Ya">
                    <label for="psbb">Ya</label><br>
                    <input type="radio" id="psbb" name="thermo" value="Tidak">
                    <label for="psbb">Tidak</label>
                  </div>

                  <div class="form-group">
                    <label for="Tenaga Kesehatan">16. Jumlah tenaga kerja yang terlibat dalam penanganan Covid-19</label><br>

                    <input type="checkbox" id="checkbox" /> Dokter
                    <input style="margin: 8px;" name="dokter" type="number" id="textbox" placeholder="  Jumlah" readonly /> </br>

                    <input type="checkbox" id="checkbox2" /> Petugas Laboran
                    <input style="margin: 8px;" name="laboran" type="number" id="textbox2" placeholder="  Jumlah" readonly /> </br>

                    <input type="checkbox" id="checkbox3" /> Perawat
                    <input style="margin: 8px;" name="perawat" type="number" id="textbox3" placeholder="  Jumlah" readonly /> </br>

                    <input type="checkbox" id="checkbox4" /> Driver Ambulance
                    <input style="margin: 8px;" name="driver" type="number" id="textbox4" placeholder="  Jumlah" readonly /> </br>

                    <input type="checkbox" id="checkbox5" /> Cleaning Service
                    <input style="margin: 8px;" name="cs" type="number" id="textbox5" placeholder="  Jumlah" readonly /> </br>

                    <input type="checkbox" id="checkbox6" /> Security
                    <input style="margin: 8px;" name="security" type="number" id="textbox6" placeholder="  Jumlah" readonly /> </br>

                  </div>

                  <div class="form-group">
                    <label for="exampleInputNWilayah">17. Bagaimana ketersediaan APD di Instansi Anda dalam satu pekan ini, sebutkan</label><br>

                    <input type="checkbox" id="checkbox7" /> Masker Bedah
                    <input style="margin: 8px;" name="bedah" type="number" id="textbox7" placeholder="  Jumlah" readonly /> </br>

                    <input type="checkbox" id="checkbox8" /> Masker N95
                    <input style="margin: 8px;" name="n95" type="number" id="textbox8" placeholder="  Jumlah" readonly /> </br>

                    <input type="checkbox" id="checkbox9" /> Face Shield
                    <input style="margin: 8px;" name="faceshield" type="number" id="textbox9" placeholder="  Jumlah" readonly /> </br>

                    <input type="checkbox" id="checkbox10" /> Goggle
                    <input style="margin: 8px;" name="goggle" type="number" id="textbox10" placeholder="  Jumlah" readonly /> </br>

                    <input type="checkbox" id="checkbox11" /> Sarung Tangan Medis
                    <input style="margin: 8px;" name="sarungtangan" type="number" id="textbox11" placeholder="  Jumlah" readonly /> </br>

                    <input type="checkbox" id="checkbox12" /> Hazmat
                    <input style="margin: 8px;" name="hazmat" type="number" id="textbox12" placeholder="  Jumlah" readonly /> </br>

                    <input type="checkbox" id="checkbox13" /> Caps
                    <input style="margin: 8px;" name="caps" type="number" id="textbox13" placeholder="  Jumlah" readonly /> </br>

                    <input type="checkbox" id="checkbox15" /> Shoe Cover
                    <input style="margin: 8px;" name="cover" type="number" id="textbox15" placeholder="  Jumlah" readonly /> </br>

                    <input type="checkbox" id="checkbox16" /> Bilik Dekontaminan
                    <input style="margin: 8px;" name="dekontaminan" type="number" id="textbox16" placeholder="  Jumlah" readonly /> </br>

                    <input type="checkbox" id="checkbox17" /> Headbox
                    <input style="margin: 8px;" name="headbox" type="number" id="textbox17" placeholder="  Jumlah" readonly /> </br>

                    <input type="checkbox" id="checkbox14" /> Bilik Swab
                    <input style="margin: 8px;" name="bilik_swab" type="number" id="textbox14" placeholder="  Jumlah" readonly /> </br>

                  </div>

                  <div class="form-group">
                    <label for="exampleInputNWilayah">18. Sejauh ini APD digunakan berasal dari</label><br>
                    <input type="radio" id="psbb" name="asal" value="Instansi / Mandiri" onclick="document.getElementById('textbantuan').disabled = true;">
                    <label for="psbb">Instansi / Mandiri</label><br>
                    <input type="radio" id="psbb" name="asal" value="Hibah Pemerintah" onclick="document.getElementById('textbantuan').disabled = true;">
                    <label for="psbb">Hibah Pemerintah</label><br>
                    <input type="radio" id="psbb" name="asal" value="Hibah Swasta" onclick="document.getElementById('textbantuan').disabled = true;">
                    <label for="psbb">Hibah Swasta</label><br>
                    <input type="radio" id="jenis" name="asal" onclick="document.getElementById('textbantuan').disabled = false;">
                    <label for="jenis"><input type="text" id="textbantuan" name="asal" placeholder="  Lainnya" disabled="disabled"></label><br>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputNWilayah">19. Apakah instansi Anda pernah menerima bantuan APD dari D-DART</label><br>
                    <input type="radio" id="psbb" name="bantuan" value="Pernah">
                    <label for="psbb">Pernah</label><br>
                    <input type="radio" id="psbb" name="bantuan" value="Belum">
                    <label for="psbb">Belum Pernah</label>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputNama1">20. Bantuan apa yang saat ini dibutuhkan oleh instansi Anda dalam menghadapi Covid-19 ?</label>
                    <input type="text" name="kebutuhan" class="form-control" id="exampleInputNoHP" placeholder="Sebutkan">
                  </div>

                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" name="btn" value="Save" class="btn btn-primary">Submit</button>
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
<script src="<?php echo base_url('assets/js/validasi_apd.js') ?>"></script>
  <!-- OPTIONAL SCRIPTS -->
  <script>
    $(function () {
      document.getElementById('checkbox').onchange = function() {
        document.getElementById('textbox').readOnly = !this.checked;
      };
      document.getElementById('checkbox2').onchange = function() {
        document.getElementById('textbox2').readOnly = !this.checked;
      };
      document.getElementById('checkbox3').onchange = function() {
        document.getElementById('textbox3').readOnly = !this.checked;
      };
      document.getElementById('checkbox4').onchange = function() {
        document.getElementById('textbox4').readOnly = !this.checked;
      };
      document.getElementById('checkbox5').onchange = function() {
        document.getElementById('textbox5').readOnly = !this.checked;
      };
      document.getElementById('checkbox6').onchange = function() {
        document.getElementById('textbox6').readOnly = !this.checked;
      };
      document.getElementById('checkbox7').onchange = function() {
        document.getElementById('textbox7').readOnly = !this.checked;
      };
      document.getElementById('checkbox8').onchange = function() {
        document.getElementById('textbox8').readOnly = !this.checked;
      };
      document.getElementById('checkbox9').onchange = function() {
        document.getElementById('textbox9').readOnly = !this.checked;
      };
      document.getElementById('checkbox10').onchange = function() {
        document.getElementById('textbox10').readOnly = !this.checked;
      };
      document.getElementById('checkbox11').onchange = function() {
        document.getElementById('textbox11').readOnly = !this.checked;
      };
      document.getElementById('checkbox12').onchange = function() {
        document.getElementById('textbox12').readOnly = !this.checked;
      };
      document.getElementById('checkbox13').onchange = function() {
        document.getElementById('textbox13').readOnly = !this.checked;
      };
      document.getElementById('checkbox14').onchange = function() {
        document.getElementById('textbox14').readOnly = !this.checked;
      };

      document.getElementById('checkbox15').onchange = function() {
        document.getElementById('textbox15').readOnly = !this.checked;
      };

      document.getElementById('checkbox16').onchange = function() {
        document.getElementById('textbox16').readOnly = !this.checked;
      };

      document.getElementById('checkbox17').onchange = function() {
        document.getElementById('textbox17').readOnly = !this.checked;
      };

    })
  </script>
</body>
</html>