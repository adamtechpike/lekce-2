<?php
$a = 5;
$b = 4;
$obdelnikobvod = $a+$b;
$obdelnikobsah = $a*$b;
//echo 'Obsah obdelníku o stranách ' . $a . 'cm a ' . $b . 'cm je ' . $obdelnikobsah . 'cm2';
$strana = 6;
$uhel = 60;
$vyska = sin(deg2rad($uhel))*$strana;
$trojuhelnikobsah = ($strana*$vyska)/2; 
$trojuhelnikobvod = 3*$a;
//echo 'Rovnostranný trojúhelník o straně délky ' . $strana . 'cm a úhlu ' . $uhel . ' stupňů je ' . round($trojuhelnikobsah) . 'cm2';
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Pythagoras I Starověká matematika</title>
    
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="jumbotron.css" rel="stylesheet">
  </head>

  <body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Starověká matematika</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="#">Archimedes</a>
      </li> 
      <li class="nav-item active">
        <a class="nav-link" href="/lekce-2/pythagoras.php">Pythagoras<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Euklides</a>
      </li>    
        <li class="nav-item">
        <a class="nav-link" href="#">Eratosthenes</a>
      </li>    
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Zde napiš, co hledáš" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Hledat</button>
    </form>
  </div>
</nav>

 <br>
    <main role="main">

     
      <div class="container">
        <!-- Example row of columns -->
        <div class="row">
          <div class="col-md-6">
            <h2>Obdelník</h2>
            <table class="table">
 
  <tbody>
    <tr>
      <td>Délka strany A:</td>
      <td>
        <?php
        echo $a . ' cm'
        ?>
      </td>
    </tr>
    <tr>
      <td>Délka strany B:</td>
      <td>
        <?php
        echo $b . ' cm'
        ?>
      </td>      
    </tr>
    <tr>
      <td>Obvod obdelníku</td>
      <td>
        <?php
        echo 'o= a+b = ' . $obdelnikobvod . ' cm';
        ?>
      </td>      
    </tr>
    <tr>
      <td>Obsah obdelníku</td>
      <td>
        <?php
        echo 'o= a*b = ' . $obdelnikobsah . ' cm2';
        ?>
      </td>      
    </tr>
   </tbody>
</table>
          </div>
          <div class="col-md-6">
            <h2>Rovnostranný trojúhelník</h2>
            <table class="table">
 
 <tbody>
    <tr>
      <td>Délka strany</td>
      <td>
        <?php
        echo $strana . ' cm'
        ?>
      </td>
    </tr>
    <tr>
      <td>Úhel</td>
      <td>
        <?php
        echo $uhel . ' stupňů'
        ?>
      </td>      
    </tr>
    <tr>
      <td>Obvod trojúhelníku</td>
      <td>
        <?php
        echo 'o= a+b+c = ' . $trojuhelnikobvod . ' cm';
        ?>
      </td>      
    </tr>
    <tr>
      <td>Výška trojúhelníku</td>
      <td>
        <?php
        echo 'v= a*sin α = ' . $vyska . ' cm';
        ?>
      </td>      
    </tr>
    <tr>
      <td>Obsah trojúhelníku</td>
      <td>
        <?php
        echo 'o= a*b ≐ ' . round($trojuhelnikobsah) . ' cm2';
        ?>
      </td>      
    </tr>
   </tbody>
</table>
        </div>

        <hr>

      </div> <!-- /container -->

  <div class="container">
        <div class="row">
          <div class="col-md-4">
          <h2>Vzpomínka na Pythagora</h2>
            <p>Pythagoras ze Samu byl legendární řecký filosof, matematik, astronom i kněz. Většina lidí jej zná z hodin matematiky a jeho slavné Pythagorovy věty "c2 =a2 + b2", která se však týká pouze pravoúhlých trojuhelníků. <b>Spojovat ho s výše uvedenými výpočty je tedy přinejmenším závádějící.</b> </p>
        </div> 
         
          <div class="col-md-8">
            <img src="https://i.kinja-img.com/gawker-media/image/upload/s--kaEBWPxU--/c_scale,f_auto,fl_progressive,q_80,w_800/yfodegftvgckj1bfvhfb.jpg" alt="Pythagoras v nejlepších letech" style="width:700px;height:300px;">   
        </div>
        
  </div> <!-- /container -->
   </main>
<div class="shadow-none p-3 mb-5 bg-light rounded"> <br> &copy; Programators fandí starověkým matematikům </br> <br></div>
    
   
   
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-slim.min.js"><\/script>')</script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>

