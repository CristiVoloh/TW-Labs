<?php

require_once 'server.php';
require_once 'functions.php';

    $name = "";
    $secondName = "";
    $email = "";
    $password = "";
    $cpassword = "";

    session_start();
    
        if(isset($_POST['login'])){ // Checks if button Register has been clicked
 
            $email = $_POST['email']; // Gets the Email input from the user into a var
            $password = $_POST['password']; // Gets the Password input from the user into a var
            $password = md5($password);

            if(checkEmail($email)){
                $email = test_input($_POST["email"]); // Process the input
            } else {
                $error = "error";
                echo json_encode(array("status" => "email_fail"));
                die();
            }

            if(!isset($error)){ // Checks if var $error has been set (if an error appeared)
                $sql = "SELECT * FROM users WHERE email='$email' AND password = '$password'";
                $result = mysqli_query($db, $sql);

                if($result->num_rows > 0) {
                    $row = mysqli_fetch_assoc($result);
                    $_SESSION['email'] = $row['email'];
                    $_SESSION['name'] = $row['name'];

                    $displayUser = "block"; // Displaying the User block (Avatar, name, image) in sidebar
                    $displayLinks = "none"; // Hiding 'login' and 'register' links
                    $displayLogout = "block"; // Displaying 'logout' button

                    $_SESSION['displayUser'] = $displayUser;
                    $_SESSION['displayLinks'] = $displayLinks;
                    $_SESSION['displayLogout'] = $displayLogout;

                    echo json_encode(array("status" => "success"));

                } else {
                    $error = "error";
                    echo json_encode(array("status" => "fail_user_doesnt_exist"));
                    die();
                }
            } else {
                $error = "error";
                echo json_encode(array("status" => "unknown_error"));
                die();
            } 
        }

?>