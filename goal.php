<!DOCTYPE html>
<html lang="en">

<?php include 'assets/components/head.php'; ?>

<body>
  <!-- Header -->
  <?php include 'assets/components/nav.php'; ?>

  <!-- Main content -->
  <main class="">
    <!-- Main content -->
    <?php include 'assets/components/banner.php'; ?>
    <!-- Goal -->
    <section class="y-goal wrapper bg-white">
      <section>
        <header>
          <h2 class="xl-title mt-5">our goal</h2>
          <p class="p-details text-center">There are many variations of azer duskam of Lorem Ipsum available.</p>
        </header>
        <div class="f-ctnr">
          <div class="container-fluid">
            <div class="row">
              <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 text-center">
                <i class="fa-regular fa-face-smile"></i>
                <h3 class="md-title">childrean health</h3>
                <p class="p-details">Perspiciatis unde omns iste natu error sit vot
                  luptatem is going for</p>
              </div>
              <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 text-center">
                <i class="fa-regular fa-heart"></i>
                <h3 class="md-title">people care</h3>
                <p class="p-details">Perspiciatis unde omns iste natu error sit vot
                  luptatem is going for</p>
              </div>
              <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 text-center">
                <i class="fa-regular fa-handshake"></i>
                <h3 class="md-title">sponsership</h3>
                <p class="p-details">Perspiciatis unde omns iste natu error sit vot
                  luptatem is going for</p>
              </div>
            </div>
          </div>
        </div>
      </section>
    </section>
    <!-- How Can You Help -->
    <section class="y-help bg-white">
      <section class="wrapper">
        <header>
          <h2 class="xl-title">how can you help</h2>
          <p class="p-details text-center mb-5">There are many variations of azer duskam of Lorem Ipsum available.</p>
        </header>
        <div class="container-fluid mb-5">
          <div class="row">
            <figure class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
              <img src="assets/img/home/h-help.png" class="figure-img img-fluid w-100" alt="Help Box">
            </figure>
            <section class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 d-flex flex-wrap align-items-center">
              <div class="text-center w-50">
                <i class="fa-solid fa-wallet"></i>
                <h3 class="md-title">donate dollar</h3>
                <p class="p-details">Perspiciatis unde omns iste natu error sit vot luptatem is going for</p>
              </div>

              <div class="text-center w-50">
                <i class="fa-solid fa-user"></i>
                <h3 class="md-title">donate dollar</h3>
                <p class="p-details">Perspiciatis unde omns iste natu error sit vot luptatem is going for</p>
              </div>

              <div class="text-center w-50">
                <i class="fa-solid fa-gift"></i>
                <h3 class="md-title">make a aid</h3>
                <p class="p-details">Perspiciatis unde omns iste natu error sit vot luptatem is going for</p>
              </div>

              <div class="text-center w-50">
                <i class="fa-solid fa-camera"></i>
                <h3 class="md-title">from media</h3>
                <p class="p-details">Perspiciatis unde omns iste natu error sit vot luptatem is going for</p>
              </div>
            </section>
          </div>
        </div>
      </section>
    </section>
    <!-- Statistics -->
    <section class="stats py-5 my-5 <?php
                                    // Display a class css based on the page
                                    if ($current_page === '/charity/goal.php') {
                                      echo 'goal-bg mb-0';
                                    }
                                    ?> ">
      <section class="wrapper">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12 col-sm-6 col-md-3 col-lg-3 col-xl-3">
              <p class="text-white">We are served since 35 years to helpless people with trust and we are happy for come to light</p>
              <button class="y-btn m-0 <?php
                                        // Display a class css based on the page
                                        if ($current_page === '/charity/goal.php') {
                                          echo 'btn-goal';
                                        }
                                        ?> ">join with us</button>
            </div>
            <figure class="text-center col-12 col-sm-6 col-md-3 col-lg-3 col-xl-3">
              <i class="fa-regular fa-hand-pointer mx-auto p-3"></i>
              <figcaption class="text-white text-uppercase"><span>3500</span>causes solves</figcaption>
            </figure>

            <figure class="text-center col-12 col-sm-6 col-md-3 col-lg-3 col-xl-3">
              <i class="fa-solid fa-hand mx-auto p-3"></i>
              <figcaption class="text-white text-uppercase"><span>1800</span>total volunteers</figcaption>
            </figure>

            <figure class="text-center col-12 col-sm-6 col-md-3 col-lg-3 col-xl-3">
              <i class="fa-solid fa-thumbs-up mx-auto p-3"></i>
              <figcaption class="text-white text-uppercase"><span>262</span>total projects</figcaption>
            </figure>
          </div>
        </div>
      </section>
    </section>

  </main>
  <!-- Footer -->
  <?php include 'assets/components/footer.php'; ?>
  <!-- Scripts -->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/index.js"></script>
  <!-- Signature -->
  <?php include 'assets/components/sign.php'; ?>
</body>

</html>