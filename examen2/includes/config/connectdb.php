<?php
    function connectdb() : mysqli{
        $db = mysqli_connect("localhost", "root", "", "bienesraices2");
        /*
        if($db){
            echo "Connected";
        }
        else{
            echo "Connection failed";
        }
        */
        return $db;
    }
?>