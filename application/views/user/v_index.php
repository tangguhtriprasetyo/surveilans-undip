<!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->load->view("user/_userPartials/head.php") ?>
</head>

<body>

  <!-- ======= Header ======= -->
    <?php $this->load->view("user/_userPartials/navbar.php") ?>
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="fade-up">
          <div>
            <h1>Selamat Datang di Platform Bantuan Sosial DDART Universitas Diponegoro</h1>
            <h2>Platform Bantuan Sosial DDART merupakan bentuk pengabdian Universitas Diponegoro untuk COVID 19</h2>
            <a href="#about" class="btn-get-started scrollto">Mulai</a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left">
          <img src="<?php echo base_url('assets/img/dokter.png') ?>" class="img-fluid" alt="">
        </div>
      </div>
    </div>
  </section>
  <!-- End Hero -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
        <!-- php -->
    <!-- End Breadcrumbs -->
    
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row">
          <div class="col-lg-6" data-aos="zoom-in">
            <img src="<?php echo base_url('assets/img/ddart.png') ?>" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 d-flex flex-column justify-contents-center" data-aos="fade-left">
            <div class="content pt-4 pt-lg-0">
              <h3>Tentang DDART</h3>
              <p class="font-italic">
                DDART atau Diponegoro Disaster Assistance Response Team merupakan tim penanggulangan bencana Universitas Diponegoro yang betugas untuk menangani segala macam bentuk bencana di dalam maupun luar negeri. <br><br> Ketika menanggulangi bencana, D-DART memiliki parameter agar dapat melindungi masyarakat dengan tepat. Hal tersebut diawali dengan parameter pencegahan.
              </p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
      <div class="section-title" data-aos="fade-up">
        <h2>Infografik Hasil Survei D-Dart</h2>
        <p>Grafik berikut diperoleh dari hasil survei yang dilakukan D-Dart</p>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-4 order-1 order-lg-2" data-aos="zoom-in">
            <div class="tab-content">
              <div class="tab-pane active show" id="tab-1">
              <div class="section-title" data-aos="fade-up">
                <h6>Tingkat Kecemasan Pengguna Survei Penilaian Resiko Pribadi</h6>
                <figure>
                  <canvas id="donutChart" width="300" height="300"></canvas>
                </figure>
              </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 order-1 order-lg-2" data-aos="zoom-in">
            <div class="tab-content">
              <div class="tab-pane active show" id="tab-1">
              <div class="section-title" data-aos="fade-up">
              <h6>Hasil Survei Deteksi Dini Covid-19</h6>
                <figure>
                  <canvas id="donutChart2" width="300" height="300"></canvas>
                </figure>
              </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 order-1 order-lg-2" data-aos="zoom-in">
            <div class="tab-content">
              <div class="tab-pane active show" id="tab-1">
              <div class="section-title" data-aos="fade-up">
                <h6>Ketersediaan APD Pada Instansi Kesehatan</h6>
                <figure>
                  <canvas id="donutChart3" width="300" height="300"></canvas>
                </figure>
              </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Features Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Layanan Kami</h2>
          <p>Kami menyediakan beberapa layanan bagi masyarakat umum terkait Covid-19</p>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in">


            <div class="icon-box icon-box-pink">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4 class="title"><a href="<?php echo base_url('deteksi') ?>">Deteksi Dini Covid - 19 & Penilaian Resiko Pribadi</a></h4>
              <p class="description">Anda bisa melakukan Test Deteksi Dini dan Penilaian Resiko Pribadi disini</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box icon-box-cyan">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title"><a href="<?php echo base_url('resiko') ?>">Penilaian Tingkat Kecemasan</a></h4>
              <p class="description">Anda bisa melakukan Penilaian Tingkat Kecemasan disini</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box icon-box-green">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4 class="title"><a href="<?php echo base_url('apd') ?>" >Permohonan Logistik APD</a></h4>
              <p class="description">Anda bisa mengajukan permohonan bantuan APD dengan mengisi form berikut</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box icon-box-blue">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4 class="title"><a href="" data-toggle="modal" data-target="#modal-hasil">Hasil Survei</a></h4>
              <p class="description">Cek Hasil Survei Anda disini</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->
    <!-- ======= F.A.Q Section ======= -->
    <section id="faq" class="faq">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Frequently Asked Questions</h2>
        </div>

        <ul class="faq-list">

          <li data-aos="fade-up">
            <a data-toggle="collapse" class="" href="#faq1">1. Saya tidak bergejala, apakah saya harus tetap #dirumahaja ? <i class="icofont-simple-up"></i></a>
            <div id="faq1" class="collapse show" data-parent=".faq-list">
              <p>
                HARUS. WAJIB. KUDU. STAY AT HOME. Sebisa mungkin TETAP #DIRUMAHAJA. Karena ada istilah carrier atau Orang Tanpa Gejala (OTG) dimana orang tersebut tidak bergejala, namun sebenarnya dalam tubuh dia ada virus yang bisa menularkan ke orang lain.
              </p>
            </div>
          </li>

          <li data-aos="fade-up" data-aos-delay="100">
            <a data-toggle="collapse" href="#faq2" class="collapsed">2. Saya harus keluar rumah beli bahan pokok, apa saja yang harus saya perhatikan ? <i class="icofont-simple-up"></i></a>
            <div id="faq2" class="collapse" data-parent=".faq-list">
              <p>
                - Jangan lupa berdoa <br> - Hindari kerumunan dan jaga jarak <br> - Gunakan masker <br> - Hindari menyentuh wajah, terutama hidung dan mulut <br> - Sering cuci tangan dengan sabun dan air mengalir

              </p>
            </div>
          </li>

          <li data-aos="fade-up" data-aos-delay="200">
            <a data-toggle="collapse" href="#faq3" class="collapsed">3. Berarti setiap keluar rumah harus menggunakan masker ya ? Apakah bisa apabila saya menggunakan masker kain ? <i class="icofont-simple-up"></i></a>
            <div id="faq3" class="collapse" data-parent=".faq-list">
              <p>
                BISA. Masker kain masih bermanfaat kok. Dari penelitian yang telah dilakukan, masker non medis masih memberikan perlindungan (baik bagi diri sendiri atau orang lain), dibanding tidak menggunakan masker sama sekali. Apalagi ditambah jaga jarak, tidak menyentuh wajah dan cuci tangan maka perlindungannya makin plus - plus
              </p>
            </div>
          </li>

          <li data-aos="fade-up" data-aos-delay="300">
            <a data-toggle="collapse" href="#faq4" class="collapsed">4. Mengapa kita harus jaga jarak ? <i class="icofont-simple-up"></i></a>
            <div id="faq4" class="collapse" data-parent=".faq-list">
              <p>
                Orang yang batuk, bersin, ataupun berbicara keras setidaknya mengeluarkan droplet (tetesan kecil air liur) sejauh 1.5 meter bahkan lebih.
            </div>
          </li>

          <li data-aos="fade-up" data-aos-delay="400">
            <a data-toggle="collapse" href="#faq5" class="collapsed">5. Kenapa tidak boleh menyentuh wajah terutama hidung, mulut dan mata ? <i class="icofont-simple-up"></i></a>
            <div id="faq5" class="collapse" data-parent=".faq-list">
              <p>
                Karena sumber penularan covid-19 ini dari droplet, yang biasanya banyak terdapat di benda - benda yang kita pegang dengan tangan. Kemudian virus yang menempel di benda - benda tadi akan hidup di saluran napas (hidung, mulut) dan mata yang sering kita pegang dengan tangan yang kemungkinan besar terdapat virus
              </p>
            </div>
          </li>

          <li data-aos="fade-up" data-aos-delay="500">
            <a data-toggle="collapse" href="#faq6" class="collapsed">6. Kalau begitu, apakah efektif apabila saya menggunakan kacamata untuk menghindari droplet ke mata ? <i class="icofont-simple-up"></i></a>
            <div id="faq6" class="collapse" data-parent=".faq-list">
              <p>
                Bisa membantu, asalkan tetap tidak menyentuh mata dengan tangan ya ! Dan tetap harus jaga jarak.
              </p>
            </div>
          </li>

        </ul>

      </div>
    </section><!-- End Frequently Asked Questions Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Contact Us</h2>
        </div>

        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch" data-aos="fade-right">
            <div class="info">
              <div class="address">
                <i class="icofont-google-map"></i>
                <h4>Location:</h4>
                <p>Gedung ICT Centre Lantai 4
                Jalan Prof. Sudarto, S.H., Kampus Undip Tembalang Semarang, Jawa Tengah</p>
              </div>

              <div class="email">
                <i class="icofont-envelope"></i>
                <h4>Email:</h4>
                <p>lppm@live.undip.ac.id</p>
              </div>

              <div class="phone">
                <i class="icofont-phone"></i>
                <h4>Call:</h4>
                <p>024-7460032</p>
              </div>

              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.61200516335!2d110.4368555145935!3d-7.054793794904584!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708c1d399ff9f9%3A0x2d2033fed8e955dd!2sGedung%20ICT%20Undip!5e0!3m2!1sid!2sid!4v1589716958476!5m2!1sid!2sid" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch" data-aos="fade-left">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="name">Your Name</label>
                  <input type="text" name="name" class="form-control" id="name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <label for="name">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <label for="name">Message</label>
                <textarea class="form-control" name="message" rows="10" data-rule="required" data-msg="Please write something for us"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

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
  <?php $this->load->view("user/_userPartials/grafik.php") ?>
  <?php $this->load->view("user/_userPartials/grafik2.php") ?>
  <?php $this->load->view("user/_userPartials/grafik3.php") ?>
</body>
</html>