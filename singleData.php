<?php 
 include "heading.php";
?>

<?php

    include "connectionData.php";

    $recv = $_REQUEST['edit_id'];

    $query = "SELECT * FROM crud_info WHERE id = '$recv'";

    $adanprodan = mysqli_query($connection, $query);
    

    while ($row = mysqli_fetch_assoc($adanprodan)) {
        $username = $row['name'];
        $email = $row['email'];
?>

<form class="max-w-md mx-auto" action="updateuser.php" method="post">
        <h2 class="text-center text-2xl font-bold mb-4 mt-4">Update Your Data</h2>
        <div class="mb-4">
            <label for="name" class="block mb-1">Name:</label>
            <input class="w-full px-4 py-2 rounded border border-gray-300" type="text" name="name" value="<?php echo $username ?>">
        </div>
        <div class="mb-4">
            <label for="email" class="block mb-1">Email:</label>
            <input class="w-full px-4 py-2 rounded border border-gray-300" type="email" name="email" value="<?php echo $email ?>">
        </div>

        <input type="submit" name="submit" value="Update" class="bg-green-500 w-full text-white px-4 py-2 rounded cursor-pointer hover:bg-green-700"> 
        <input  type="hidden" name="hidden" value="<?php echo $recv ?>">
</form>



<?php
    }
?>

<?php
    include "showdata.php";
    include "footer.php";
?>