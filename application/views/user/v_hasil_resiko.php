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
            <div class="col-lg-6 pt-5 pt-lg-0 order-1 order-lg-1 d-flex flex-column justify-content-center" data-aos="fade-up">
                <div><div class="section-title" data-aos="fade-up">
                    <h1>Hasil Penilaian Resiko Pribadi : Tangguh Tri Prasetyo</h1>
                  </div>
                    
                    <div class="alert alert-danger" role="alert">
                        <h2><strong>Hasil :</strong> Dari survey yang anda isi, didapatkan hasil bahwa anda memiliki tingkat kecemasan <strong> Sedang</strong></h2>
                        <h2><strong>Saran :</strong> Perbanyak zikir, jangan banyak berdosa</h2>
                        <p class="text-center">Untuk bantuan anda dapat menghubungi DDART </br> email: ddart@liveudinp</p>
                    </div>
                    <p><a class="btn btn-danger float-right" href="<?php echo base_url('') ?>">Update Kondisi</a></p>
                </div>
            </div>
            <div class="col-lg-6 order-3 order-lg-2 hero-img" data-aos="fade-left">
                <div class="section-title" data-aos="fade-up">
                    <h2>Infografik Hasil Survey Tingkat Kecemasan Pengguna</h2> 
                <figure>
                    <canvas id="donutChart" width="300" height="300"></canvas>
                </figure>
                </div>
            </div>
            <div class="col-lg-6 order-2 order-lg-2 hero-img" data-aos="fade-left">
                
            </div>
      </div>
    </div>
  </section>
  <!-- End Hero -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
        <!-- php -->
    <!-- End Breadcrumbs -->


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
  <script src="<?php echo base_url('assets/js/grafik.js') ?>"></script>
</body>
</html>