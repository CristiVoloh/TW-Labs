<?php

    require_once 'server.php';
    require_once 'functions.php';

    $name = "";
    $secondName = "";
    $email = "";
    $password = "";
    $cpassword = "";

    
        if(isset($_POST['register'])){ // Checks if button Register has been clicked
 
            $name = $_POST['name']; // Gets the Name input from the user into a var
            $secondName = $_POST['name']; // Gets the Second Name input from the user into a var
            $email = $_POST['email']; // Gets the Email input from the user into a var
            $password = $_POST['password']; // Gets the Password input from the user into a var
            $cpassword = $_POST['cpassword']; // Gets the Control Password input from the user into a var

            if(checkName($name)){ // Checks if Name is valid
                $name = test_input($_POST["name"]); // Process the input
                $secondName = test_input($_POST['secondName']); // Process the input
            } else {
                $error = "error";
                echo json_encode(array("status" => "name_fail"));
                die();
            }

            if(checkEmail($email)){
                $email = test_input($_POST["email"]); // Process the input
            } else {
                $error = "error";
                echo json_encode(array("status" => "email_fail"));
                die();
            }

            if(checkPassword($password)){
                $password = test_input($_POST["password"]); // Process the input
                $password = md5($password);
            } else {
                $error = "error";
                echo json_encode(array("status" => "password_fail"));
                die();
            }

            if(checkCPassword($cpassword, $password)){
                $cpassword = test_input($_POST["cpassword"]); // Process the input
            } else {
                $error = "error";
                echo json_encode(array("status" => "cpassword_fail"));
                die();
            }

            if(!isset($error)){ // Checks if var $error has been set (if an error appeared)
                $sql = "SELECT * FROM users WHERE email='$email'"; // SQL query to check if entity with the given email exists
                $result = mysqli_query($db, $sql); // Executing the query

                if(!mysqli_num_rows($result) > 0){ // The result. If bigger than 0, the user exists and `if` goes to `else`
                    $sql = "INSERT INTO users (name, email, password)
                                VALUES ('$name $secondName', '$email', '$password')"; // Query for inserting the new user
                    $result = mysqli_query($db, $sql); // Inserting the new user

                    if($result) { // If successfuly inserted
                        echo json_encode(array("status" => "success"));
                    } else { 
                        echo json_encode(array("status" => "db_insert_error"));
                        die();
                    }
        
                } else {
                    echo json_encode(array("status" => "user_exists"));
                    die();
                }
            } else {
                echo json_encode(array("status" => "error"));
                die();
            }
        }

?>