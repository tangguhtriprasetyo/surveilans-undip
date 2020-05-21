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
                    <h1>Hasil Penilaian Resiko Pribadi : <?php echo $resiko->nama; ?></h1>
                  </div>
                  <?php 
                    $skor = $resiko->skor;
                    if ($skor < 14) :?>
                    <div class="alert alert-success" role="alert">
                        <h2><strong>Hasil :</strong> Dari survey yang anda isi, didapatkan hasil bahwa anda tidak memiliki kecemasan.</strong></h2>
                        <h2><strong>Saran :</strong> Kurangi hal - hal yang dapat membuat anda tertekan, berikan waktu istirahat yang cukup.</h2>
                        <p class="text-center">Untuk bantuan anda dapat menghubungi DDART </br> email: lppm@live.undip.ac.id</p>
                    </div>
                    <?php elseif ($skor > 15 && $skor <= 20):?>
                    <div class="alert alert-success" role="alert">
                        <h2><strong>Hasil :</strong> Dari survey yang anda isi, didapatkan hasil bahwa anda memiliki tingkat kecemasan <strong> Ringan</strong></h2>
                        <h2><strong>Saran :</strong> Kurangi hal - hal yang dapat membuat anda tertekan, berikan waktu istirahat yang cukup.</h2>
                        <p class="text-center">Untuk bantuan anda dapat menghubungi DDART </br> email: lppm@live.undip.ac.id</p>
                    </div>
                    <?php elseif ($skor >= 20 && $skor <= 28):?>
                    <div class="alert alert-warning" role="alert">
                        <h2><strong>Hasil :</strong> Dari survey yang anda isi, didapatkan hasil bahwa anda memiliki tingkat kecemasan <strong> Sedang</strong></h2>
                        <h2><strong>Saran :</strong> Kurangi hal - hal yang dapat membuat anda tertekan, berikan waktu istirahat yang cukup.</h2>
                        <p class="text-center">Untuk bantuan anda dapat menghubungi DDART </br> email: lppm@live.undip.ac.id</p>
                    </div>
                    <?php elseif ($skor > 28 ):?>
                    <div class="alert alert-danger" role="alert">
                        <h2><strong>Hasil :</strong> Dari survey yang anda isi, didapatkan hasil bahwa anda memiliki tingkat kecemasan <strong> Berat</strong></h2>
                        <h2><strong>Saran :</strong> Sebaiknya anda berkonsultasi ke psikolog profesional untuk info lebih lanjut dan lebih akurat.</h2>
                        <p class="text-center">Untuk bantuan anda dapat menghubungi DDART </br> email: lppm@live.undip.ac.id</p>
                    </div>

                    <?php endif; ?>
                    <p><a class="btn btn-danger float-right" href="<?php echo site_url('resiko/edit/' .$resiko->id_kecemasan) ?>">Update Kondisi</a></p>
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
  <?php $this->load->view("user/_userPartials/grafik.php") ?>
</body>
</html>