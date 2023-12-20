<!-- cookies are saved on the client side -->
<?php 
    // Set a cookie with a name, value, and expiration time (in seconds)
    setcookie("user_name", "Rohit bhure", time()+3600, "/");

    // Retrieve and display the value of the cookie
    if(isset($_COOKIE["user_name"])){
        $username = $_COOKIE["user_name"];
        echo "Welcome back, $username!";
    }else{
        echo "Cookie not set."
    }
?>

<!-- sessions are saved on the server side -->
<?php
    // Start a session
    session_start();

    // Set a session variable
    $_SESSION["user_name"] = "Rohit bhure";

    // Retrieve and display the value of the session variable
    if(isset($_SESSION["user_name"])){
        $username = $_SESSION["user_name"];
        echo "Welcome back $username!";
    }else{
        echo "Session varible not set";
    }
    // Session Destroy (optional)
    session_destroy();
?>

