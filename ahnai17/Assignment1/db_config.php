<?php
   
    function ConnectToDB(){
    $db_user='root';
    $db_pass='C/|gkRgkYbJ8';
    $db_name='gallery';
    $db_server='127.0.0.1:3306';
        try {
        /* @var $conn PDO */
        /** @var type $db_server */
        $conn = new PDO("mysql:host=$db_server;dbname=$db_name", $db_user, $db_pass,
    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    } catch (PDOException $e){
        echo "Error: " . $e->getMessage();
        echo   "<script>
                    alert('failed to create account'); 
                    window.history.go(-1);
                </script>";
    }
    return $conn;
    }
