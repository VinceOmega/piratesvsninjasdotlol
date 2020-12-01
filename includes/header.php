<?php 

  $urlPath = $_SERVER['REQUEST_URI'] ; 
  $titles = array(

        '/' => 'Pirates vs Ninjas: Scurvy into Darkness',
        '/story/' => 'Pirates vs Ninjas: Our story so far',
        '/cast/' => 'Pirates vs Ninjas: Meet the Cast!',
        '/theater/' => 'Pirate vs Ninjas : Park your booty at your local theatre today!',
        '/director/' => 'Pirates vs Ninjas: Meet the visionary behind the magic!',
        '/lore/' => ' Pirates vs Ninjas: The Lore',
        '/reviews/' => 'Pirates vs Ninjas: The critics love our booty! '

  );

  $title = $titles[$urlPath];

?>

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title><?php echo $title ;?> | Larry Stanfield IFT 301-86951</title>

  <!-- Bootstrap core CSS -->
  <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="/vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template -->
  <link href="/css/landing-page.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav id="pvn-top-nav" class="navbar navbar-light bg-dark static-top">
    <ul class="container nav">
      <li class="nav-item"><a href="/">Home</a></li>
      <li class="nav-item"><a href="/story">Story</a></li>
      <li class="nav-item"><a href="/cast">Cast</a></li>
      <li class="nav-item"><a href="/theater">Theater</a></li>
      <li class="nav-item"><a href="/director">Director</a></li>
      <li class="nav-item"><a href="/lore">Lore</a></li>
      <li class="nav-item"><a href="/reviews">Reviews</a></li>
    </ul>
  </nav>