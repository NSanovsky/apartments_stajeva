<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="UTF-8">
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/"
    crossorigin="anonymous">
  <!-- Compiled and minified CSS -->
  <?php
      $dir = $_SERVER['DOCUMENT_ROOT'];
      include ( $dir .  "/apartments_stajeva/to_include/fonts.php");    

  ?>  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <!--Let browser know website is optimized for mobile-->

  <link rel="stylesheet" type="text/css" href="/apartments_stajeva/style.css">
  <title>Apartments Stajeva Dubrovnik</title>
</head>

<body>
  <!-- SLIDER -->
  <div class="slider  container-header">
    <!-- DROPDOWNS -->

   <?php 
      include('to_include/dropdown.php');
   ?>

    <!-- SLIDERS -->
    <ul class="slides">

      <li>
        <img class="slike_slider" src="slider_images/ap2.jpg" alt="">
        <div class="caption center-align ">
          <h1 class="big-title"> APARTMENTS STAJEVA </h1>
          <div class="razmak"></div>
          <h1 class="big-subtitle"> DUBROVNIK </h1>
        </div>
      </li>

      <li>
        <img class="slike_slider" src="slider_images/ap1.jpg" alt="">
        <div class="caption center-align">
          <h1 class="big-title"> APARTMENTS STAJEVA </h1>
          <div class="razmak"></div>
          <h1 class="big-subtitle"> DUBROVNIK </h1>
        </div>  
      </li>

      <li>
        <img class="slike_slider" src="slider_mages/ap3.jpg" alt="">
        <div class="caption center-align">
          <h1 class="big-title"> APARTMENTS STAJEVA </h1>
          <div class="razmak"></div>
          <h1 class="big-subtitle"> DUBROVNIK </h1>
        </div>
      </li>

    </ul>
    <!-- /SLIDERS -->

    <!-- ARROW DOWN-->
    <div class="center-con">
      <div class="round">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>

  </div>
  <!-- /SLIDER -->

  <!-- DESCRIPTION DIVS -->
  <!-- ABOUT US -->
  <div class="container" id="ab">
    <div class="description-titles"> APARTMENTS STAJEVA<br> DUBROVNIK</div>
    <div class="mosaic">
      <p class="opisi"> Located within the UNESCO-protected Dubrovnik Old Town, Apartments Stajeva provides
        air-conditioned accommodation with a view of the city. Free WiFi access is available throughout the property.
        The Dubrovnik Cathedral is only 50 m away. Stajeva Apartments are 10m from City Walls, 100 m away from the
        Stradun Promenade, where various shops, restaurants and bars can be found.
        <p class="hide-text">The Dubrovnik Old Harbour, with a tourist boat leading to the scenic Lokrum Island is 80m
          away.The accommodation is equipped with a flat-screen TV with satellite channels.
          There is a seating and/or dining area in all units. There is also a kitchen, fitted with a microwave and
          toaster.
          A refrigerator and coffee machine are also featured. Also coffee, tea and sugar. There is a private bathroom
          with towels, free toiletries and a hair dryer in each unit. Bed linen and iron is provided.
          <br></p>
        <p class="hide-text">The nearest airport is Dubrovnik Airport, 15 km from the property and Port Gruž are 3 km away.
          Old Town is a great choice for travelers interested in architecture, food and history.
          All our guests has 10% discount in our family style restaurant Konoba Jezuite.
        </p>
        <p class="hide-text">Looking forward to your visit…FEEL LIKE HOME</p>

        <p class="hide-text"> This is our guests' favorite part of Dubrovnik, according to independent review.
        </p>
        <div class="read-more"><a class="waves-effect waves-light  btn btn-large rd_more">READ MORE</a></div>
    </div>
  </div>


  <!-- PARALLAX-1 -->
  <div class="parallax-container par">
    <div class="parallax par"><img src="parallax/banner3.jpg" alt="Apartments Stajeva Dubrovnik"></div>
  </div>


  <!-- APARTMENT CARDS -->
  <div class="description-titles"> APARTMENTS </div>
  <div class="container-row">
    <div class="ap-card">
      <img src="ap_thum/ap1_thum.jpg" alt="Apartments Stajeva Dubrovnik" style="width:100%">
      <div class="container">
        <div class="card-title-wrap">
          <h4 class="ap-titles">TORQUISE LAVANDER COZY 2 BEDROOM APP</h4>
        </div>
        <ul class="ap-descriptions">
          <li>&#8227; Apartment size: 45 m²</li>
          <li>&#8227; 2nd floor </li>
          <li>&#8227; Living room: 1 sofa bed <br>
            &nbsp; Bedroom 1: 2 single beds <br>
            &nbsp; Bedroom 2: 1 large double bed</li>
          <li>&#8227; Air-conditioned apartment</li>
          <li>&#8227; Flat-screen cable and satellite TV</li>
          <li>&#8227; Fully equipped kitchenette</li>
          <li>&#8227; Private bathroom with a hairdryer and free toiletries</li>
        </ul>
        
      </div>
       <div class="read-more"><a class="waves-effect waves-light  btn btn-small rd_more_ap1" href="apartments/torquise_lavander_2_bedroom_app/">READ MORE</a></div>
    </div>
    <div class="ap-card">
      <img src="ap_thum/ap2_thum.jpg" alt="Apartments Stajeva Dubrovnik" style="width:100%">
      <div class="container">
        <div class="card-title-wrap">
          <h4 class="ap-titles">NAVY BLUE STUDIO COZY</h4>
        </div>
        <ul class="ap-descriptions">
          <li>&#8227; Apartment size: 48 m²</li>
          <li>&#8227; 3rd floor</li>
          <li>&#8227; 1 single bed and 1 large double &nbsp;bed</li>
          <li>&#8227; Air-conditioned studio</li>
          <li>&#8227; Flat-screen cable and satellite TV</li>
          <li>&#8227; Fully equipped kitchenette</li>
          <li>&#8227; Private bathroom with a hairdryer and free toiletries</li>

        </ul>
       
      </div>
      <div class="read-more"><a class="waves-effect waves-light  btn btn-small rd_more_ap2" href="navy_blue_studio_cozy.html">READ MORE</a></div>
    </div>

  </div>

  <!-- PARALLAX 2-->
  <div class="parallax-container par">
    <div class="parallax"><img src="parallax/banner.jpg" alt="Apartments Stajeva Dubrovnik"></div>
  </div>

  <div class="container-carousel">
   
      <div class="fascilities">
        <h3 class="description-titles darkcy-text">FACILITIES</h3>

        <div class="row fascilities-span ap-descriptions">

          <div class="col s12 m12 l6"><i class="material-icons tiny">wifi</i>&#160; FREE WIFI</div>
          
          <div class="col s12 m12 l6"><i class="material-icons tiny">ac_unit</i>&#160; AIR CONDITIONING</div>
          

          <div class="col s12 m12 l6"><i class="material-icons tiny">kitchen</i>&#160; KITCHEN</div>
          <div class="col s12 m12 l6"><i class="material-icons tiny">satellite</i>&#160; SATELLITE</div>

          <div class="col s12 m12 l6"><i class="material-icons tiny">tv</i>&#160; TV</div>
          <div class="col s12 m12 l6"><i class="material-icons tiny">power</i>&#160; POWER</div>

          <div class="col s12 m12 l6"><i class="material-icons tiny">smoke_free</i>&#160; NON-SMOKING ROOMS</div>
          <div class="col s12 m12 l6"><i class="fas fa-shower"></i>&#160; SHOWER</div>

          <div class="col s12 m12 l6"><i class="material-icons tiny">local_florist</i>&#160; GARDEN</div>
          <div class="col s12 m12 l6"><i class="material-icons tiny">local_parking</i>&#160; LOCAL PARKING</div>

          <div class="col s12 m12 l6"><i class="material-icons tiny">casino</i>&#160; BOARD GAMES</div>
          <div class="col s12 m12 l6"><i class="fas fa-suitcase"></i>&#160; LUGGAGE STORAGE</div>
        </div>
      </div>
   
  </div>
  <?php 
      $dir = $_SERVER['DOCUMENT_ROOT'];
      include ( $dir .  "/apartments_stajeva/to_include/footer.php");    
    ?>
  
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  
  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
 
  <script type="text/javascript"  src="javascript/main.js"></script>
  <script>
   document.addEventListener('DOMContentLoaded', function (){
      var slider = document.querySelectorAll('.slider');
      var slider_instances = M.Slider.init(slider, {
        duration: 800,
        height: 550,
        indicators: false,

      });
      var car = document.querySelectorAll('.carousel');
      var car_instances = M.Carousel.init(car, {
        duration: 200,
        numVisible: 6,


      });
      var parallax = document.querySelectorAll('.parallax');
      var parallax_instances = M.Parallax.init(parallax, {

      });
    });


    $(document).ready(function () {
      $(window).scroll(function () {
        if ($(window).scrollTop() > 80) {
          $('nav').addClass('bg-nav-cyan');
        }
        else {
          $('nav').removeClass('bg-nav-cyan');
        }
      });
    });

    $(".round").click(function () {
      $('html,body').animate({
        scrollTop: $(".mosaic").offset().top - 250
      },
        'slow');
    });


    $(".hide-text").fadeOut(1);
    $(".rd_more").click(function () {
      $(".hide-text").slideToggle(700);
      $(".rd_more").animate({ 'opacity': 0 }, 700, function () {
        $(".rd_more").text($(".rd_more").text() === "READ MORE" ? "READ LESS" : "READ MORE").animate({ 'opacity': 1 }, 700);
      });
    });
 

  </script>
 


</body>

</html>