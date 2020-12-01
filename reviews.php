<!DOCTYPE html>
<html lang="en">

  <?php set_include_path(realpath('./')) ;?>
  <?php include 'includes/header.php' ; ?>

  <?php include 'includes/hero-reviews.php' ; ?>

    <section class="intro text-center bg-dark padding-vert-10">
      <div class="container container-reviews">
        <div class="row">
          <div class="col-12">
            <div class="tg-wrap">
              <table class="tg">
                <tbody>
                  <tr>
                    <td class="tg-0lax"><img src="/img/laruel-french.png"></td>
                    <td class="tg-0lax"><img src="/img/laruel-cupid.png"></td>
                  </tr>
                  <tr>
                    <td class="tg-0lax"><img src="/img/laruel-myself.png"></td>
                    <td class="tg-0lax"><img src="/img/laruel-ninja.png"></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
  </section>

  <!-- Image Showcases -->
  <section class="showcase">
    <div class="container-fluid p-0">
      <div class="row no-gutters">

        <div class="col-lg-6 order-lg-2 text-white showcase-img" data-herf="/theater" style="background-image: url('/img/theaters.jpg');"></div>
        <div class="col-lg-6 order-lg-1 my-auto showcase-text">
          <h2>In Theaters Soon!</h2>
          <p class="lead mb-0">Pumped to see the movie, find out where to go!</p>
        </div>
      </div>
      <div class="row no-gutters">
        <div class="col-lg-6 text-white showcase-img" data-herf="/lore" style="background-image: url('/img/library.jpg');"></div>
        <div class="col-lg-6 my-auto showcase-text">
          <h2>Welcome to the world of Pirates vs Ninjas&copy;</h2>
          <p class="lead mb-0">Dive into the world of Pirates vs Ninjas&copy;</p>
        </div>
      </div>
      <div class="row no-gutters">
        <div class="col-lg-6 order-lg-2 text-white showcase-img" data-herf="/cast" style="background-image: url('/img/cast.jpg');"></div>
        <div class="col-lg-6 order-lg-1 my-auto showcase-text">
          <h2>Meet Our Cast!</h2>
          <p class="lead mb-0">Our leading men and women who bring the Pirates vs Ninjas&copy; world to life!</p>
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
