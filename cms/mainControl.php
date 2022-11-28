<?php

    include "database.php";

    if(isset($_GET["ap_id"])){
        echo get_thumbs($conn, $_GET["ap_id"]);
    }

    if(isset($_POST["toDelete"])){
        $ids = explode(',', $_POST["toDelete"]);
        echo deleteByIds($conn, $ids, $_POST["ap_id"]);
    }
?>