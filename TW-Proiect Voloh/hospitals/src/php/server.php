<?php
                    // 'host name', 'login', 'password', 'db name'.
    $db = mysqli_connect('localhost', 'root', '','registration');

    if(!$db){
        die('<script>alert(\'Connection failed.\')</script>');
    }

?>