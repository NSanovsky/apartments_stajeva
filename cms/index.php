<?php
session_start();
define("ADMIN_PSW", "pass123");

if (isset($_POST["psw"])){
    if ($_POST["psw"] === ADMIN_PSW){
        $_SESSION["auth"] = true;
        $_SESSION["login"] = true;
    }else{
        $_SESSION["auth"] = false;
    }
}

if (!$_SESSION["auth"]){
    header("Location:/apartments_stajeva/cms/login/");
    die();
}else{
    if(isset($_GET["login"])){
        print_r($_GET);
        $_SESSION["login"] = false;
        header("Location:/apartments_stajeva/cms/login/");
        die();
    }
    include "apartmani.php";
    include "database.php";
}
?>

<html>
    <head>
        <title>APARTMENTS STAJEVA - CMS</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>    
        <link rel="stylesheet" type="text/css" href="/apartments_stajeva/cms/style.css">
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,800" rel="stylesheet"> 
    </head>
    <body>

        <div class="wrap">
            <a id="logout" class="btn blue darken-2" href="?login='false'">Logout</a>
           
            

            <div class="form-wrap" >
                <form action="upload.php" method="post" enctype="multipart/form-data">
                        <select name="apartman_id" id="ap_id">
                        <?php
                                foreach($apartmani as $apartman){
                                    ?>
                                        <option value="<?= $apartman["id"]; ?> " onclick = "console.log('1'); getPhotosById(getActiveId());">
                                            <?= ucwords($apartman["title"]); ?>
                                        </option>
                                    <?php
                                }
                            ?>
                        </select>
                    
                    <div class="file-field input-field">
                        
                        <div class="btn blue darken-2">
                            <span>File</span>
                            <input type="file" name="fileToUpload" id="fileToUpload">
                        </div>

                        <div class="file-path-wrapper">
                            <input class="file-path validate" type="text">
                        </div>
                    </div>
                    <button class="btn blue darken-2" type="submit" value="Upload Image" name="submit">Upload image </button>
                </form>

            </div>
                 
        
        

        <button onclick="deleteImages();" id="deletePhotos" class="waves-effect waves-light btn upload_button red darken-2">Delete</button>

        <div class="images">

        </div> 

        </div>

        <script>

        var toDelete = [];


        function imgToDelete(){
            
            document.querySelector(".images").addEventListener("click", function(event){
                var id;
                var index;

                if(event.target.classList.contains("cms-img")){
                    id = event.target.id;
                    index = toDelete.indexOf(id);
                    if(index == -1){
                        toDelete.push(id);
                    }else{
                        toDelete.splice(index, 1);
                    }
                    event.target.classList.toggle("shadow");
                }
            });

        }

        function deleteImages(){
            var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        toDelete = [];
                        document.querySelector(".images").innerHTML = this.responseText;
                    }
                };
                xmlhttp.open("POST", "mainControl.php", true);
                xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xmlhttp.send("toDelete=" + toDelete + "&ap_id=" + getActiveId());
        }

            function getActiveId(){
                return document.getElementById("ap_id").value;
            }

            function getPhotosById(id){
                console.log(id);
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.querySelector(".images").innerHTML = this.responseText;
                    }
                };
                xmlhttp.open("GET", "mainControl.php?ap_id=" + id, true);
                xmlhttp.send(); 
            }

            getPhotosById(getActiveId());
            imgToDelete();
    
        </script>

    </body>
</html>