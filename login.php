<?php
    session_start();
    $REYERPASSWORD = 559093808;
    $HASHED = crc32($_POST["psw"]);
    
    if ($REYERPASSWORD == $HASHED) {
        $_SESSION["username"] = "success";
        header("Location: verify.php");
    } else {
        header("Location: login.html");
    }
?>
