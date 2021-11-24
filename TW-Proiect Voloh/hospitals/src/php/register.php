<?php

    $name = "User";
    $email = "Email";
    $displayUser = "none";
    $displayLinks = "block";
    $displayLogout = "none";


    if(isset($_POST['register'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];

        $displayUser = "block";
        $displayLinks = "none";
        $displayLogout = "block";
    }

    function logout(){
        $displayUser = "none";
        $displayLinks = "block";
        $displayLogout = "none";
    }

?>