<!DOCTYPE html>
<html lang="en">

  <?php set_include_path(realpath('./')) ;?>
  <?php include 'includes/header.php' ; ?>

  <?php include 'includes/hero-theater.php' ; ?>

    <section class="intro text-center bg-sand padding-vert-10">
      <div class="container">
        <div class="row">
          <div class="col-12">


            <h2>You can find us at your local theater!</h2>

            <iframe
              width="100%"
              height="450"
              frameborder="0" style="border:0"
              src="https://www.google.com/maps/embed/v1/search?key=AIzaSyBULaVP8qnbECtMEul1FDaZmGbsHLOyibY
                &q=movie+theathers+near+me" allowfullscreen>
            </iframe>

          </div>
        </div>
      </div>
  </section>

  <!-- Image Showcases -->
  <section class="showcase">
    <div class="container-fluid p-0">
      <div class="row no-gutters">

        <div class="col-lg-6 order-lg-2 text-white showcase-img" data-herf="/story" style="background-image: url('/img/story.jpg');"></div>
        <div class="col-lg-6 order-lg-1 my-auto showcase-text">
          <h2>Our Story So Far</h2>
          <p class="lead mb-0">Learn about the central conflict of the Pirate vs Ninjas&copy; world!</p>
        </div>
      </div>
      <div class="row no-gutters">
        <div class="col-lg-6 text-white showcase-img" data-herf="/" style="background-image: url('/img/map.jpg');"></div>
        <div class="col-lg-6 my-auto showcase-text">
          <h2>The Sage Continues</h2>
          <p class="lead mb-0">Pirates vs Ninjas&copy; : Scurvvy into Darkness! &copy;</p>
        </div>
      </div>
      <div class="row no-gutters">
        <div class="col-lg-6 order-lg-2 text-white showcase-img" data-herf="/director" style="background-image: url('/img/director.jpg');"></div>
        <div class="col-lg-6 order-lg-1 my-auto showcase-text">
          <h2>Beeven Steelsburg!</h2>
          <p class="lead mb-0">The Man, The Myth, The Legend!</p>
        </div>
      </div>
    </div>
  </section>

  <?php include 'includes/testimonal.php' ; ?>


  <!-- Call to Action -->
  <section class="call-to-action text-white text-center">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-xl-9 mx-auto">
          <h2 class="mb-4">Subscribe to our mailing list to get all the Pirates vs Ninjas&copy; news!</h2>
        </div>
        <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
          <form>
            <div class="form-row">
              <div class="col-12 col-md-9 mb-2 mb-md-0">
                <input type="email" class="form-control form-control-lg" placeholder="Enter your email...">
              </div>
              <div class="col-12 col-md-3">
                <button type="submit" class="btn btn-block btn-lg btn-primary">Sign up!</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <?php include 'includes/footer.php' ; ?>

</body>

</html>
