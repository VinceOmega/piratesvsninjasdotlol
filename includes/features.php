  <?php 

  $urlPath = $_SERVER['REQUEST_URI'] ; 
  $titles = array(

        '/' => 1,
        '/story/' => 2,
        '/cast/' => 3,
        '/theater/' => 4,
        '/director/' => 5,
        '/lore/' => 6,
        '/reviews/' => 7,
        '/works-cited/' => 1

  );

  $pages =  array(

        1 => array( 'story','cast','theater' ),
        2 => array( 'cast', 'home', 'director' ),
        3 => array( 'home', 'director', 'theater'),
        4 => array( 'story', 'home', 'director' ),
        5 => array( 'cast','lore','home' ),
        6 => array( 'lore','theater','cast' ),
        7 => array( 'director', 'story', 'lore' )

  );

  $title = $titles[$urlPath];
  $cnt = 1;

  $orderLg2 = 'order-lg-2';
  $orderLg1 =  'order-lg-1';
  $blank    = '';

  $store = <<< TXT
      <div class='row no-gutters'>
        <div class='col-lg-6 text-white showcase-img' data-herf='' style='.'background-image: url('.'/img/story.jpg'.');></div>
        <div class='col-lg-6 order-lg-1 my-auto showcase-text'>
          <h2>Pirates vs Ninja</h2>
          <p class='lead mb-0'>Learn about the central conflict of the Pirate vs Ninjas&copy; world!</p>
        </div>
      </div>
      </div>
TXT;

  $cast = '

      <div class="row no-gutters">
        <div class="col-lg-6 text-white showcase-img" data-herf="" style="background-image: url('/img/cast.jpg');"></div>
        <div class="col-lg-6 my-auto showcase-text">
          <h2>Meet Our Cast!</h2>
          <p class="lead mb-0">Our leading men and women who bring the Pirates vs Ninjas&copy; world to life!</p>
        </div>
      </div>
  ';

  $theater = <<< TXT
      <div class='row no-gutters'>
        <div class='col-lg-6 order-lg-2 text-white showcase-img' data-herf='' style='background-image: url('/img/theaters.jpg');'></div>
        <div class='col-lg-6 order-lg-1 my-auto showcase-text'>
          <h2>In Theaters Soon!</h2>
          <p class='lead mb-0'>Pumped to see the movie, find out where to go!</p>
        </div>
      </div>

TXT;


?>

  <!-- Image Showcases -->
  <section class="showcase">
    <div class="container-fluid p-0">






  </section>