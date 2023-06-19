<?php

    include "connectionData.php";

    $query = "SELECT * FROM crud_info";

    $adanprodan = mysqli_query($connection, $query);

    $count = mysqli_num_rows($adanprodan);


?>


<div class=" flex justify-center max-w-md mx-auto  mt-4">
  <table class="table-auto w-full">
    <thead class=" bg-green-700">
      <tr>
        <th class="px-4 py-2">USERNAME</th>
        <th class="px-4 py-2">EMAIL</th>
        <th class="px-4 py-2">ACTION</th>
      </tr>
    </thead>

<?php 

if ($count > 0) {
    while ($row =  mysqli_fetch_assoc($adanprodan)) {
        $id = $row['id'];
        $username = $row['name'];
        $email = $row['email'];

?>

<tbody   class="max-h-500 overflow-y-scroll">
      <tr>
        <td class="border px-4 py-2"><?php echo "$username" ?></td>
        <td class="border px-4 py-2"><?php echo "$email" ?></td>
        <td class="border px-4 py-2 flex ">
          <a class="mr-2 text-blue-500 hover:text-green-500" href="singleData.php?<?php echo "edit_id=$id"; ?>">Update</a> 
          <a class="text-blue-500 hover:text-green-500" href="delete.php?<?php echo "id=$id"; ?>">Delete</a>
        </td>
      </tr>
    </tbody>


<?php
    }
    
}else {
    echo "Your DataBasa empty";
}

?>


  </table>
</div>