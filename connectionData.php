<?php

$connection = mysqli_connect("localhost", "root", "", "crud");

if(!$connection) {
    die("Not Connection". mysqli_error($connection));
}

?>