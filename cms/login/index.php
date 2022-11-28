<?php
session_start();

if(isset($_SESSION["auth"]) && isset($_SESSION["login"])){
  if(!$_SESSION["login"]){
    session_destroy();
  }
  else if($_SESSION["auth"]){
    header("Location:/apartments_stajeva/cms/");
    die();
  }else{
    echo "wrong pass!";
  }
}
?>
<link rel="stylesheet" type="text/css" href="/apartments_stajeva/cms/style.css">

<div class="form-wrap" >
<form  action="/apartments_stajeva/cms/" method="POST">
  
<div class="input-field col s12">
          <input id="psw" type="password" name="psw" class="validate"  pattern="[^'].{5,}">
          <label  for="psw">Enter password:</label>
</div>

    <button  type="submit" class="waves-effect waves-light btn">Log in</button>
</form>
</div>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

