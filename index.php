<?php
    include "heading.php";
?>


<form class="max-w-md mx-auto" action="create.php" method="post">
        <h2 class="text-center text-2xl font-bold mb-4 mt-4">CRUD PRACTICE</h2>
        <div class="mb-4">
            <label for="name" class="block mb-1">Name:</label>
            <input class="w-full px-4 py-2 rounded border border-gray-300" type="text" name="name" placeholder="name">
        </div>
        <div class="mb-4">
            <label for="email" class="block mb-1">Email:</label>
            <input class="w-full px-4 py-2 rounded border border-gray-300" type="email" name="email" placeholder="email">
        </div>

        <input type="submit" name="submit" class="bg-green-500 w-full text-white px-4 py-2 rounded cursor-pointer hover:bg-green-700"> 
</form>

<?php
    include "showdata.php";
?>


<?php
    include "footer.php";
?>