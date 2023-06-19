<?php

    if(isset($_POST["submit"])) {

        $username = $_POST['name'];
        $email = $_POST['email'];
        // $password = $_POST['password'];


       include "connectionData.php";

       $sql = "INSERT INTO crud_info (name, email) VALUE ('$username', '$email')";

       $result = mysqli_query($connection, $sql);

       if(!$result) {
            die("Not inserted" . mysqli_error());
       } 

       header('Location: index.php');
    }



?>


    

