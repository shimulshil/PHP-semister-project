<!--<form action="admin_area.php" method="post">
    <input type="submit" value="Admin Page">
</form>-->

<?php

$id = $_GET['id'];
include 'database.php';

//$db = mysqli_connect("localhost", "root", "root", "phpdb", "3307");

$q = "DELETE from product_table where id= '$id' ";

$r = mysqli_query($db, $q);

// Report on the results:
if (mysqli_affected_rows($db) == 1) {
    echo '<script>alert("Data deleted form database successfully.")</script>';
    echo '<script>window.location="admin_area.php"</script>';
    // header("Location:admin_area.php");// Direct open the page without Alert.
}


