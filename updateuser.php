<?php

    if(isset($_POST["submit"])) {

        $username = $_POST['name'];
        $email = $_POST['email'];
        // $password = $_POST['password'];
        $id = $_POST['hidden'];



       include "connectionData.php";

       $sql = "UPDATE crud_info SET name='$username', email='$email' WHERE id=$id";

       $result = mysqli_query($connection, $sql);

       if(!$result) {
            die("Not inserted" . mysqli_error());
       } 

       header('Location: index.php?update');
    }



?>