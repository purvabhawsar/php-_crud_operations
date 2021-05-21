<?php
    session_start();
    
    $filename    = $_FILES["picture"]["tmp_name"];
    $destination = "" . $_FILES["picture"]["name"]; 
    move_uploaded_file($filename, $destination); 

    $_SESSION['user_name6'] = $destination;

    header('Location: index.php');
    ?>
