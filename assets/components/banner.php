<section class="intro">
  <div class="position-relative">
    <img src="assets/img/banners/e-banner.png" class="banner-evt" alt="Banner">
    <h1 class="xxl-title text-uppercase text-center text-white position-absolute top-50 start-50 translate-middle m-0">
      <?php
      // Get the current page URL
      $current_page = $_SERVER['REQUEST_URI'];
      //var_dump($current_page);

      // Display a message based on the page
      if ($current_page === '/charity/about.php') {
        echo 'about';
      } elseif ($current_page === '/charity/causes.php') {
        echo 'causes';
      } elseif ($current_page === '/charity/events.php') {
        echo 'events';
      } elseif ($current_page === '/charity/goal.php') {
        echo 'goal';
      } elseif ($current_page === '/charity/volunteers.php') {
        echo 'volunteers';
      } elseif ($current_page === '/charity/gallery.php') {
        echo 'gallery';
      } elseif ($current_page === '/charity/contact.php') {
        echo 'contact';
      } else {
        echo 'Welcome to our website!';
      }
      ?>


    </h1>
  </div>
</section>