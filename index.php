<!DOCTYPE html>
<html id="pocetna">

<head>
  <title>Miodrag Gavrilovic</title>
  <meta charset="utf-8">
  <link rel="icon" href="logo_mg_top.png">
  <link rel="image_src" href="random.jpg" /link>
<script type='text/javascript' src="jquery-3.1.1.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link type="text/css" rel="stylesheet" href="stil.css">
  <script type='text/javascript' src="javascript.js"></script>
</head>

<body data-spy="scroll" data-targer=".navbar" data-offset="60">
  <!-- Navigacioni bar -->
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <button id="togl" type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar top-bar"></span>
          <span class="icon-bar middle-bar"></span>
          <span class="icon-bar bottom-bar"></span>
        </button>
        <a class="brand" id="logo" href="#pocetna">
          <img id ="logo_img" src="./images/logo_mg.png" alt="logo">
        </a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul id="prvi" class="nav navbar-nav">
          <li><a href="#home">HOME</a></li>
          <li><a href="#studije">STUDIES</a></li>
          <li><a href="#projekti">PROJECTS</a></li>
          <li><a href="#kontakt">CONTACT</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="https://www.facebook.com/shugibugii" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true" style="font-size:20px"></i></a></li>
          <li><a href="https://www.instagram.com/shugibugii/" target="_blank"><i class="fa fa-instagram" aria-hidden="true" style="font-size:20px"></i></a></li>
          <li><a href="https://twitter.com/shugibugii" target="_blank"><i class="fa fa-twitter" aria-hidden="true" style="font-size:20px"></i></a></li>
        </ul>
      </div>
    </div>
  </nav>

  <main>
    <div id="pozadina"></div>
    <div id="opis" class="row">
      <div class="container-fluid text-right hed-1 col-sm-6" id="profilna">
        <img id='naslovna' src="./images/random.jpg" class="img-circle img-responsive">

      </div>
      <div id="oMeniWrap" class="container-fluid text-left hed-1 col-sm-6">
      <div id="oMeni" class="">
        <p><span class="glyphicon glyphicon-education"></span> IT Student.</p>
        <p><span  class="glyphicon glyphicon-wrench gly-spin"></span> WEB Design.</p>
        <p><span class="glyphicon glyphicon-heart-empty"></span> Waterpolo player.</p>
        <p><span class="glyphicon glyphicon-fire"></span> Car enthusiast.</p>
      </div>
      </div>
    </div>
    <div id="container">

<!-- o meni -->
    <div id="home" class="container-fluid hed-2">
      <h1 style="text-align:center">HOME</h1><br>
      <h2>Ćao svima!</h2><br>
      <p>Moje ime je Miodrag Gavrilović. Za razliku od nekih koji u ovom uvodnom delu stave nešto tipa
      "ne znam šta bih mogao o sebi da kažem", ja baš imam dosta toga o sebi da vam napišem.</p>
      <a id="prikazi_vise" href="#produzi" data-toggle="collapse">Prikaži više..</a>
      <br><br>
      <p id="produzi" class="collapse">
        <br>Dolazim iz Valjeva, imam 22 godine i studiram Matematički fakultet, Univerziteta u Beogradu, odsek
        Informatika.<br> Prve tri godine srednje škole sam završio u Valjevskoj gimnaziji, a četvrtu
        godinu sam završio u Matematičkoj gimnaziji u Beogradu. Pored toga sam završio Osnovnu muzičku
        školu i kao glavni instrument sam svirao violinu. Uporedo sa violinom uživam u sviranju gitare.
        <br><br>U slobodno vreme treniram vaterpolo. Najveći uspeh na tom polju mi je prvi tim Crvene Zvezde u sezoni 2013/2014 kada
        sam imao priliku da treniram sa samom elitom ovog sporta. Zbog obaveza na fakultetu morao sam da odustanem od profesionalnog sporta.
        <br><br>
        Obožavam kinesku hranu. Njihova kuhinja je nešto posebno. Takođe sam veliki entuzijasta kada su
        u pitanju automobili. Volim i da putujem.
        <br><br>
      </p>
    </div>
<!-- deo o studijama-->
      <div id="studije" class="container-fluid hed-3 slideanim">
        <h1 style="text-align:center">STUDIES</h1><br>
        <div class="row">
          <div class="col-sm-8">
            <p>Student sam treće godine Matematičkog fakulteta, Univerziteta u Beogradu.
            <br><br>Smer: Informatika.</p>
          </div>
          <div class="col-sm-4" id="edu">
            <span class="glyphicon glyphicon-education logo"></span>
          </div>
        </div>
      </div>
      <!-- deo o projektima -->
            <div id="projekti" class="container-fluid hed-4 slideanim">
              <h1 style="text-align:center">PROJECTS</h1><br>
              <div class="row">
                <div class="col-sm-4" style="text-align:center">
                  <img src="./images/design.jpg" style="height:200px; width:200px; margin-left:auto; margin-right:auto">
                </div>

                <div class="col-sm-8">
                  <p>Kao što vidite uživam u veb dizajnu i veb programiranju.</p>
                  <p>Trenutno radim na nekoliko projekata. Jedan od
                  tih projekata je i ova veb stranica. Ostavite komentar ispod o Vašem utisku!</p>
                </div>
              </div>
            </div>
<!-- kontakt -->
      <form method="post" action="email.php">
      <div id="kontakt" class="container-fluid hed-5 slideanim">
        <h1 style="text-align:center">CONTACT</h1><br><br>
        <div class="row">
          <div class="col-sm-6">
            <p>Kontaktirajte me!</p>
            <p><span class="glyphicon glyphicon-envelope"></span> gavrilovicmiodrag4@gmail.com</p>
            <p class="facebook"><span class="fa fa-facebook-square"></span> /shugibugii</p>
            <p class="instagram"><span class="fa fa-instagram"></span> @shugibugii</p>
            <p class="twitter"><span class="fa fa-twitter"></span> @shugibugii</p>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <input class="form-control" id="ime" name="Ime" placeholder="Ime*" type="text" required></input>
            </div>
            <div class="form-group">
              <input class="form-control" id="mejl" name="mejl" placeholder="email*" type="email" required></input>
            </div>
            <textarea class="form-control" id="komentar" placeholder="Komentar.." name="komentar" rows="6"></textarea><br>
            <div class="row">
              <div class="col-sm-12" form-group>
                <button class="btn btn-default pull-right" type="submit">Pošalji</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
      </div>
    <a id="toTop" title="Vrati se na početak" href="#pocetna">
      <span class="glyphicon glyphicon-circle-arrow-up"></span>
    </a>
  </main>

  <footer>
    <div class="text-center" style="color:white">
      <p><span class="glyphicon glyphicon-copyright-mark"></span> Miodrag Gavrilović, 2018</p>
    </div>
  </footer>
  <?php
  $to      = 'gavrilovicmiodrag4@gmail.com';
  $subject = 'the subject';
  $message = 'hello';
  $headers = 'From: webmaster@example.com' . "\r\n" .
      'Reply-To: webmaster@example.com' . "\r\n" .
      'X-Mailer: PHP/' . phpversion();

  mail($to, $subject, $message, $headers);
  ?> 
</body>

</html>
