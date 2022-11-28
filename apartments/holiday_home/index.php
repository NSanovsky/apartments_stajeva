<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <!--Import Google Icon Font-->

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/"
    crossorigin="anonymous">


  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <?php
      $dir = $_SERVER['DOCUMENT_ROOT'];
      include ( $dir .  "/apartments_stajeva/to_include/fonts.php");    

  ?>

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="/apartments_stajeva/style.css">
  <title>Apartments Stajeva Dubrovnik - Navy Blue Studio Cozy</title>
</head>

<body>

  <div class="container-header-ap">
  <?php 
      $dir = $_SERVER['DOCUMENT_ROOT'];
      include ( $dir .  "/apartments_stajeva/to_include/dropdown.php");    
    ?>

  </div>
  <div class="container">
    <div class="naslov_ap">
      <h3> COZY HOLIDAY HOME </h3>
    </div>
    <div class="mosaic">

     <p class="size"> Capacity:  6 + 2 persons <br></p>  
      <p class="opisi">
        Cool and cozy, stylish shabby chic holiday house consists out of 2 apartments - <strong><a href="torquise_lavander.html"> Torquise Lavander
         </a></strong> & <strong><a href="navy_blue_studio_cozy.html"> Navy Blue Studio Cozy </a> </strong>in the middle of the Old Town,
         designed and adapted to make our guests FEEL LIKE HOME.
         Every color and every detail has been carefully chosen.        
         The added value is definitely are location with a lot of sun which has a true city feeling!
         House comfortably fits up to 8 person if you take both apartments,
         it is centrally located on a quiet street very close to all amenities rocky beach,
         restaurants, bars, etc.

      </p>
      <div class="read-more"><a class=" pulse waves-effect waves-light  btn btn-large " href="https://booking.rentl.io/en/12862/db044b3e-8065-481d-ad0d-4599275fc751">BOOK NOW</a></div>
    </div>
  </div>
  <hr class="full-divider">
  <!--GALLERY-->
  


  <!-- FOOTER -->
  <?php 
      $dir = $_SERVER['DOCUMENT_ROOT'];
      include ( $dir .  "/apartments_stajeva/to_include/footer.php");    
  ?>

  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.min.js"></script>
  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script type="text/javascript"  src="/apartments_stajeva/javascript/main.js"></script>
  <script type="text/javascript"  src="/apartments_stajeva/javascript/apartments.js"></script>


</body>

</html>