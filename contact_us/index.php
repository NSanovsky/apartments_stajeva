<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"> 
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">  
  <?php
      $dir = $_SERVER['DOCUMENT_ROOT'];
      include ( $dir .  "/apartments_stajeva/to_include/fonts.php");    

  ?>

    <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <link rel="stylesheet" type="text/css" href="/apartments_stajeva/style.css">
  <title>Apartments Stajeva Dubrovnik - Contact Us</title>
</head>
<body>
  
  <div class="container-header">
      

  <?php 
      $dir = $_SERVER['DOCUMENT_ROOT'];
      include ( $dir .  "/apartments_stajeva/to_include/dropdown.php");    
    ?>
    
  <div class="naslov_ap">      
       <h3> CONTACT US</h3>
    </div>


    <form action="/apartments_stajeva/mail/mailer.php" method="POST">
        <div class="container-contactus">
       
            <div class="input-field">
            <i class="material-icons prefix ">account_circle</i>
            <input  id="name" type="text" class="validate" name="name">
            <label for="name">Your Name</label>
            </div>
                         
           
        <div class="input-field">
                <i class="material-icons prefix ">email</i>
                <input id="email" type="email" class="validate" name="email">
                <label for="email">Your Email</label>       
        </div>
        <div class="input-field ">
                <i class="material-icons prefix">mode_edit</i>
                <textarea id="textarea1" class="materialize-textarea" name="message"></textarea>
                <label for="textarea1">Your Message</label>
        </div>
        
  <button class="btn waves-effect  waves-light send cyan" type="submit" name="action">Submit
        <i class="material-icons right">send</i>
      </button>

    </div>
    </form>

  
</div>





  <!-- FOOTER -->
  <?php 
      $dir = $_SERVER['DOCUMENT_ROOT'];
      include ( $dir .  "/apartments_stajeva/to_include/footer.php");    
  ?>

<script src = "https://code.jquery.com/jquery-2.1.1.min.js"></script> 
<script  src="js/materialize.min.js"></script>
<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script type="text/javascript"  src="/apartments_stajeva/javascript/main.js"></script>      
<script> $('nav').addClass('bg-nav-cyan');
</script>


 
</body>
</html>
      

