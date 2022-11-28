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

      <h3>NAVY BLUE <br> STUDIO COZY </h3>
    </div>
    <div class="mosaic">

      <p class="size"> Apartment size: 48 m² <br></p>
      <p class="opisi">
        This air-conditioned apartment provides
        a seating area with a sofa and a flat-screen cable
        and satellite TV. There is a fully equipped
        kitchenette. The private bathroom is fitted with
        a shower, hairdryer and free toiletries.
        The apartment is set on the 2nd floor,
        which can be reached via stairs.

      </p>
      <div class="read-more"><a class=" pulse waves-effect waves-light  btn btn-large " href="https://booking.rentl.io/en/12861/b4a72a86-3755-4663-9d0a-ff666f638d5f">BOOK NOW</a></div>
    </div>
  </div>
  <hr class="full-divider">
  <!--GALLERY-->
  <div class="container">
    <div class="naslov_ap-gallery">
      <h3>GALLERY</h3>
    </div>
  </div>
  <div class="container">
<div class="row">

<?php 
 $dir = $_SERVER['DOCUMENT_ROOT'];

   include($dir . '/apartments_stajeva/cms/database.php');
   echo get_photo_thumbs($conn, 0);

?>


</div>
</div>




  <div class="see-more"><a class="waves-effect waves-light  btn btn-large rd_more">SEE MORE</a></div>

    <div id="mymodal-gal" class="modal-gal">
        
        <div class="modal-gal-content">
            <span class="close cursor" onclick="closeModal()">&times;</span>
            
              <?php
                get_photos($conn, 0);
              ?>

          
          <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
          <a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
</div> 

  <!-- FOOTER -->
  <?php 
      $dir = $_SERVER['DOCUMENT_ROOT'];
      include ( $dir .  "/apartments_stajeva/to_include/footer.php");    
    ?>

  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  
  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script type="text/javascript"  src="/apartments_stajeva/javascript/main.js"></script>
  <script type="text/javascript"  src="/apartments_stajeva/javascript/apartments.js"></script>
</body>

</html>