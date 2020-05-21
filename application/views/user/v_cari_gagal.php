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
            <div class="col-lg-12 pt-5 pt-lg-0 order-1 order-lg-1 d-flex flex-column justify-content-center" data-aos="fade-up">
                <div><div class="section-title" data-aos="fade-up">
                    <h1>Hasil Pencarian :</h1>
                  </div>
                    <div class="alert alert-danger text-center" role="alert">
                        <h2><strong>Data Tidak Ditemukan !</strong></h2>
                        <h2><strong>Cek kembali data yang anda masukkan !</h2>
                        <p class="text-center">Untuk bantuan anda dapat menghubungi DDART </br> email: lppm@live.undip.ac.id</p>
                    </div>
                    <p><a class="btn btn-danger float-right" href="<?php echo site_url('') ?>">Kembali Ke Home</a></p>
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
  <?php $this->load->view("user/_userPartials/grafik2.php") ?>
</body>
</html>