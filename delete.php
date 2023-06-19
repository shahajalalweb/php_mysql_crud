<?php 

include "connectionData.php";

$recv = $_REQUEST['id'];

$query = "DELETE FROM `crud_info` WHERE id = $recv";

 $delete_query = mysqli_query($connection, $query);


 if ($delete_query) {
    header("location: index.php?deleted");
 }

?>