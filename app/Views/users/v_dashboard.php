<?= $this->extend('layout/templateuser'); ?>

<?= $this->section('content'); ?>

<body>

  <!-- MENU BAR -->
  <nav class="navbar navbar-expand-lg">
    <div class="container">
      <a class="navbar-brand" href="/" id="dashboard">
        <img class="img-profile rounded-circle" src="assets/images/logop.png" width=75px;></i>
        Princess Solution
      </a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" 
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a href="#about" class="nav-link smoothScroll">Dashboard</a>
          </li>
          <li class="nav-item">
            <a href="#project" class="nav-link smoothScroll">Paket Kursus</a>
          </li>
          <li class="nav-item">
            <a href="/daftar" class="nav-link">Daftar</a>
          </li>
          <li class="nav-item">
            <a href="/login" class="nav-link contact">Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


  <!-- HERO -->
  <section class="hero hero-bg d-flex justify-content-center align-items-center">
    <div class="container">
      <div class="row">

        <div class="col-lg-6 col-md-10 col-12 d-flex flex-column justify-content-center align-items-center">
          <div class="hero-text">

            <h1 class="text-white" data-aos="fade-up">Ayo Belajar Mengemudi di Princess Solution</h1>

            <a href="https://wa.me/6281279572555" target="_blank" class="custom-btn btn-bg btn mt-3" data-aos="fade-up" data-aos-delay="100">Hubungi Kami!</a>

            <strong class="d-block py-3 pl-5 text-white" data-aos="fade-up" data-aos-delay="200"><i class="fa fa-phone mr-2"></i> +62 812-7957-2555</strong>
          </div>
        </div>

        <div class="col-lg-6 col-12">
          <div class="hero-image" data-aos="fade-up" data-aos-delay="300">

            <img src="assets/images/instruktur.png" class="img-fluid" alt="working girl">
          </div>
        </div>

      </div>
    </div>
  </section>


  <!-- ABOUT -->
  <section class="about section-padding pb-0" id="about">
    <div class="container">
      <h2 class="mb-4" data-aos="fade-up">the best <br><strong>Car Driving Course</strong> in Lampung</h2>
      <div class="row">
        <div class="col-lg-7 col-md-7 col-12 mb-4">
          <div class="about-info">
            <br>
            <p class="mb-0" data-aos="fade-up">Perusahaan PRINCESS berawal dari sebuah usaha Kursus Mengemudi yang kemudian juga
              dikembangkan di bidang Biro Jasa.
              Perusahaan ini didirikan oleh Bapak Rinaldo PB dan Ibu Fatmawati S. pada tanggal 5 Mei 1990 yang bertempat di sebuah
              lokasi kecil di sisi Jalan Raden Intan, Bandar Lampung.
              <br><br>Perusahaan ini dirintis <strong>pertama</strong> kali dengan hanya memiliki 3
              karyawan untuk melayani konsumen Biro Jasa dan memiliki sebuah mobil Jimny Katana merah sebagai armada Kursus
              Mengemudi.
              Pendiri memberi nama usahanya tersebut dengan nama PRINCESS..
            </p>
          </div>
        </div>

        <div class="col-lg-5 col-ml-5 col-12 mr-0 mb-4 pt-4" style="display: flex;">
          <div class="blog-sidebar d-flex justify-content-center align-items-center " data-aos="fade-up" data-aos-delay="200">
            <iframe src="https://www.youtube.com/embed/Qgqr9yRilBw?autoplay=1&mute=1" frameborder="0" allow="autoplay" width="440" height="240"></iframe>
          </div>
        </div>
      </div>

      <br>

      <div class="about-image" data-aos=" fade-up" data-aos-delay="200">
        <center>
          <img src="assets/images/pp.png" class="img-fluid " alt="office">
        </center>
      </div>
    </div>
  </section>


  <!-- PROJECT -->
  <section class="project section-padding" id="project">
    <div class="container-fluid">
      <div class="row">

        <div class="col-lg-12 col-12">

          <h2 class="mb-5 text-center" data-aos="fade-up">
            Daftar Paket
            <strong>Kursus Mengemudi Mobil</strong>
          </h2>

          <div class="owl-carousel owl-theme" id="project-slide">
            <div class="item project-wrapper" data-aos="fade-up" data-aos-delay="100">
              <img src="assets/images/1.png" class="img-fluid" alt="project image">


            </div>

            <div class="item project-wrapper" data-aos="fade-up">
              <img src="assets/images/2.png" class="img-fluid" alt="project image">


            </div>

            <div class="item project-wrapper" data-aos="fade-up">
              <img src="assets/images/3.png" class="img-fluid" alt="project image">


            </div>




          </div>
        </div>

      </div>
    </div>
  </section>


  <!-- TESTIMONIAL -->
  <section class="testimonial section-padding">
    <div class="container">
      <div class="row">

        <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
          <div class="contact-image" data-aos="fade-up">

            <img src="assets/images/jam.png" class="img-fluid" alt="website">
          </div>
        </div>

        <div class="col-lg-6 col-md-7 col-12">
          <h4 class=" text-center my-5 pt-3" data-aos="fade-up" data-aos-delay="100">Opening Hours</h4>
          <table class="table text-center text-dark">
            <tbody class="fw-normal">
              <tr>
                <td>Senin - Jum'at:</td>
                <td>08.00 - 17.00</td>
              </tr>
              <tr>
                <td>Sabtu:</td>
                <td>08.00 - 15.00</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </section>


  <footer class="site-footer">
    <div class="container">
      <div class="row">

        <div class="col-lg-5 mx-lg-auto col-md-8 col-10">
          <h1 class="text-white" data-aos="fade-up" data-aos-delay="100" id="footer">Princess <strong>Solution</strong>.</h1>
        </div>

        <div class="col-lg-3 col-md-6 col-12" data-aos="fade-up" data-aos-delay="200">
          <h4 class="my-4">Contact Info</h4>

          <p class="mb-1">
            <a href="https://wa.me/6281279572555" target="_blank">
              <i class="fa fa-phone mr-2 footer-icon"></i>
              +62 812-7957-2555
            </a>
          </p>

          <p class="mb-1">
            <a href="https://instagram.com/birojasa_princess?igshid=YmMyMTA2M2Y=" target="_blank">
              <i class="fa fa-instagram mr-2 footer-icon"></i>
              @birojasa_princess
            </a>
          </p>

          <p class="mb-1">
            <a href="https://twitter.com/bjprincess_lpg" target="_blank">
              <i class="fa fa-twitter mr-2 footer-icon"></i>
              @bjprincess_lpg
            </a>
          </p>
        </div>

        <div class="col-lg-3 col-md-6 col-12" data-aos="fade-up" data-aos-delay="300">
          <h4 class="my-4">Alamat</h4>

          <p class="mb-1">
            <i class="fa fa-home mr-2 footer-icon"></i>
            <a href="https://www.google.com/maps/place/Biro+Jasa+Dan+Kursus+Mengemudi+Princess/@-5.4223805,105.2531808,17z/
            data=!4m12!1m6!3m5!1s0x2e40da4ed66816dd:0x8ff01b3b16a3e2d8!2sBiro+Jasa+Dan+Kursus+Mengemudi+Princess!8m2!3d-5.
            4223859!4d105.257408!3m4!1s0x2e40da4ed66816dd:0x8ff01b3b16a3e2d8!8m2!3d-5.4223859!4d105.257408" target="_blank">
              No.06, Jl.Jenderal Ahmad Yani, Gotong Royong, Kec. Tj. Karang Pusat, Kota Bandar Lampung, Lampung 35119.
            </a>
          </p>
        </div>

        <div class="col-lg-4 mx-lg-auto text-center col-md-8 col-12" data-aos="fade-up" data-aos-delay="400">
          <p class="copyright-text">Copyright &copy; 2022 DotaAprilLase
            <br>
          </p>
        </div>
      </div>
    </div>
  </footer>


</body>
<?php $this->endSection(); ?>