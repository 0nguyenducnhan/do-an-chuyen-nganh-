<?php


if (count($_POST) > 0) {
    $username = $_POST["username"];
    $passwd = $_POST["passwd"];
    if ($username == "lamnhungoc@gmail.com" && $passwd == "12345") {
        session_start();
        $_SESSION["user_name"] = $username;
        
       header("Location: index.php");
       
    }
}
?>

