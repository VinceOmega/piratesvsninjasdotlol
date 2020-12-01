<!DOCTYPE html>
<html lang="en">

  <?php set_include_path(realpath('./')) ;?>
  <?php include 'includes/header.php' ; ?>

  <?php include 'includes/hero-works.php' ; ?>

    <section class="intro text-center bg-sand padding-vert-10">
      <div class="container">
        <div class="row">
          <div class="col-12">

            <h1>Works Cited</h1>

            <p>Here are the sources for all images used in this website.</p>
            <p>Format: Image, Text file containing source.</p>

            <dl>
                <dt><img src="/img/actor1.jpg"  width="20%"></dt>
                <dd><a href="/img/actor1.txt">Citation</a></dd>

                <dt><img src="/img/actress1.jpg"  width="20%"></dt>
                <dd><a href="/img/actress1.txt">Citation</a></dd>

                <dt><img src="/img/actress2.jpg"  width="20%"></dt>
                <dd><a href="/img/actress2.txt">Citation</a></dd>

                <dt><img src="/img/cast.jpg"  width="20%"></dt>
                <dd><a href="/img/cast.txt">Citation</a></dd>

                <dt><img src="/img/director.jpg"  width="20%"></dt>
                <dd><a href="/img/director.txt">Citation</a></dd>

                <dt><img src="/img/bg-masthead.jpg"  width="20%"></dt>
                <dd><a href="/img/bg-masthead.txt">Citation</a></dd>

                <dt><img src="/img/library.jpg"  width="20%"></dt>
                <dd><a href="/img/library.txt">Citation</a></dd>

                <dt><img src="/img/map.jpg"  width="20%"></dt>
                <dd><a href="/img/map.txt">Citation</a></dd>

                <dt><img src="/img/map2.jpg"  width="20%"></dt>
                <dd><a href="/img/map2.txt">Citation</a></dd>

                <dt><img src="/img/reviews.jpg"  width="20%"></dt>
                <dd><a href="/img/reviews.txt">Citation</a></dd>

                <dt><img src="/img/theaters.jpg"  width="20%"></dt>
                <dd><a href="/img/theaters.txt">Citation</a></dd>

                <dt><img src="/img/laruel.png"  width="20%"></dt>
                <dd><a href="/img/lareul.text">Citation</a></dd>

                <dt><img src="/img/testimonials-1.jpg"  width="20%"></dt>
                <dd><a href="/img/testimonials-1.txt">Citation</a></dd>

                <dt><img src="/img/testimonials-2.jpg"  width="20%"></dt>
                <dd><a href="/img/testimonials-2.txt">Citation</a></dd>

                <dt><img src="/img/testimonials-3.jpg"  width="20%"></dt>
                <dd><a href="/img/testimonials-3.txt">Citation</a></dd>

                <dt><img src="/img/favicon.png"  width="20%"></dt>
                <dd><a href="/img/favicon.txt">Citation</a></dd>

            </dl>
   
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
        <div class="col-lg-6 text-white showcase-img" data-herf="/cast" style="background-image: url('/img/cast.jpg');"></div>
        <div class="col-lg-6 my-auto showcase-text">
          <h2>Meet Our Cast!</h2>
          <p class="lead mb-0">Our leading men and women who bring the Pirates vs Ninjas&copy; world to life!</p>
        </div>
      </div>
      <div class="row no-gutters">
        <div class="col-lg-6 order-lg-2 text-white showcase-img" data-herf="/theater" style="background-image: url('/img/theaters.jpg');"></div>
        <div class="col-lg-6 order-lg-1 my-auto showcase-text">
          <h2>In Theaters Soon!</h2>
          <p class="lead mb-0">Pumped to see the movie, find out where to go!</p>
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
