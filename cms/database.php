<?php

    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbName = "stajevaap";

 

    $conn = new mysqli($host, $user, $pass, $dbName);

    if($conn->connect_error){
        die("Connection failed! ". $conn->conect_error);
    }

    
    function insert_photo($conn, $ap_id, $path, $t_path){
        $sql = "INSERT INTO slika (apartman_id, path, thumb_path) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("iss", $ap_id, $path, $t_path);
        $stmt->execute();
    }

    function get_thumbs ($conn, $ap_id){
        $res = "";
        $sql = "SELECT thumb_path, id FROM slika WHERE apartman_id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $ap_id);
        $stmt->execute();
        $stmt->bind_result($thumb_path, $id);
        while ($stmt->fetch()){
            $res .= "<img class='cms-img' id='". $id ."' width='250px' height='150px' src='/apartments_stajeva/cms/". $thumb_path . "' >";
        }

        return $res;
    }

    function getAllThumbs($conn){
        $sql = "SELECT thumb_path FROM slika";
        $result = $conn->query($sql);
        while ($row = $result->fetch_assoc()){
            ?>
                <img width="250px" height="150px" src="/apartments_stajeva/cms/<?=  $row["thumb_path"] ?>" alt="">
            <?php
        }
    }

    function deleteByIds($conn, $ids, $ap_id){
        foreach($ids as $id){
            deleteById($conn, $id);
        }
        return get_thumbs ($conn, $ap_id);
    }


    function deleteById($conn, $id){
        $sql = "DELETE  FROM slika WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
    }

    function get_photo_thumbs($conn, $ap_id){
        $i = 1;
        $res = "";
        $sql = "SELECT thumb_path, id FROM slika WHERE apartman_id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $ap_id);
        $stmt->execute();
        $stmt->bind_result($thumb_path, $id);
    
        while ($stmt->fetch()){
            ?>
           <div class = 'col s6 m4 l3 gal'><img src = '/apartments_stajeva/cms/<?= $thumb_path ?>' onclick='openModal();currentSlide(<?= $i ?>)' class='responsive-img hover-shadow'alt='Dubrovnik Apartments Torquise Lavander'></div> 
            <?php
            $i++;
            if($i == 33){
                ?>
                <div class='hid'>
                <?php
            }
            
        }
        if($i>32) {
            ?>
           </div>
           <?php
        }
       
    }


    function get_photos($conn, $ap_id){
        $i = 1;
        $res = "";
        $sql = "SELECT path, id FROM slika WHERE apartman_id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $ap_id);
        $stmt->execute();
        $stmt->bind_result($path, $id);
        $stmt->store_result();
        $numberofrows = $stmt->num_rows;
        while ($stmt->fetch()){
            ?>         
            <div class='mySlides'>  
            <div class='numbertext'><?=$i?>/<?=$numberofrows?></div>
                <img src='/apartments_stajeva/cms/<?=$path?>' alt='Dubrovnik Apartments Torquise Lavander'>
            </div>
            <?php
            $i++;
            if($i == 32){
            ?>
               <div class='hid'>
            <?php
            }
        }

        if($i>32) {
            ?>
            </div>
            <?php
        }   
     }

?>
