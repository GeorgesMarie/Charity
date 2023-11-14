<footer class="footer bg-black pb-5">
  <section class="wrapper">
    <section class="container-fluid">
      <div class="row justify-content-between position-relative <?php
                                                                // Display a class css based on the page
                                                                if ($current_page === '/charity/goal.php' || '/charity/volunteers.php') {
                                                                  echo 'd-none';
                                                                } else {
                                                                  echo 'd-block';
                                                                }
                                                                ?>">
        <div class="position-absolute top-0 start-50 translate-middle bg-white small shadow">
          <div class="d-flex justify-content-between align-items-center flex-wrap p-5">
            <div class="col-2"><img src="assets/img/c-sponsor.png" class="img-fluid" alt="Sponsor"></div>
            <div class="col-2"><img src="assets/img/c-sponsor_1.png" class="img-fluid" alt="Sponsor"></div>
            <div class="col-2"><img src="assets/img/c-sponsor_2.png" class="img-fluid" alt="Sponsor"></div>
            <div class="col-2"><img src="assets/img/c-sponsor_3.png" class="img-fluid" alt="Sponsor"></div>
            <div class="col-2"><img src="assets/img/c-sponsor_4.png" class="img-fluid" alt="Sponsor"></div>
          </div>
        </div>
      </div>
      <br><br><br><br><br><br><br><br>
      <div class="row">
        <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 mt-5">
          <a href=""><img src="assets/img/f-logo.png" alt="Footer Logo"></a>
          <address>
            Headquarters:
            5533 NewCapitol Trail PMB# 989 Ubarni DE 77208
            <a href="tel:+1 (555) 560-95555">Phone: +1 (555) 560-95555</a>
            <a href="mailto:help@domain.com">Support Email (FAST): help@domain.com</a>
            <a href="mailto:help@domain.com">Business Email: help@domain.com</a>
          </address>
        </div>
        <div class="col-12 col-sm-6 col-md-14 col-lg-4 col-xl-4 mt-5">
          <h6 class="xxs-title">information</h6>
          <nav role="navigation" aria-label="Footer Navigation">
            <a href=""><i class="fa-solid fa-caret-right"></i> payment options</a>
            <a href=""><i class="fa-solid fa-caret-right"></i> free schedule</a>
            <a href=""><i class="fa-solid fa-caret-right"></i> geeting start</a>
            <a href=""><i class="fa-solid fa-caret-right"></i> identity verification guide</a>
            <a href=""><i class="fa-solid fa-caret-right"></i> card verification guide</a>
          </nav>
        </div>
        <div class="col-12 col-sm-6 col-md-14 col-lg-4 col-xl-4 mt-5">
          <h6 class="xxs-title">service</h6>
          <nav role="navigation" aria-label="Footer Navigation">
            <a href=""><i class="fa-solid fa-caret-right"></i> donate option</a>
            <a href=""><i class="fa-solid fa-caret-right"></i> current rating</a>
            <a href=""><i class="fa-solid fa-caret-right"></i> buy and sell</a>
            <a href=""><i class="fa-solid fa-caret-right"></i> live video watching</a>
            <a href=""><i class="fa-solid fa-caret-right"></i> easy to api server</a>
          </nav>
        </div>
      </div>
    </section>
  </section>
</footer>