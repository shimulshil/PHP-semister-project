<?php

include "database.php"; // Using database connection file here

$id = $_GET['id']; // get id through query string

$qry = mysqli_query($db,"select * from product_table where id='$id'"); // select query

$data = mysqli_fetch_array($qry); // fetch data

if(isset($_POST['update'])) // when click on Update button
{
    $name = $_POST['name'];
    $category = $_POST['category'];
    $description = $_POST['description'];
    $image = $_POST['image'];
    $price = $_POST['price'];


    $edit = mysqli_query($db,"update product_table set name='$name', category='$category', description='$description', image='$name', price='$price' where id='$id'");

    if($edit)
    {
        mysqli_close($db); // Close connection
        header("location:admin_area.php"); // redirects to all records page
        exit;
    }
    else
    {
        echo mysqli_error();
    }
}
?>

<h3>Update Data</h3>

<form method="POST">
    <input type="text" name="name" value="<?php echo $data['name'] ?>" placeholder="Enter Full Name" Required>
    <input type="text" name="category" value="<?php echo $data['category'] ?>" placeholder="Enter Age" Required>
    <input type="text" name="description" value="<?php echo $data['description'] ?>" placeholder="Enter Full Name" Required>
    <input type="text" name="image" value="<?php echo $data['image'] ?>" placeholder="Enter Age" Required>
    <input type="text" name="price" value="<?php echo $data['price'] ?>" placeholder="Enter Full Name" Required>
    <input type="submit" name="update" value="Update">
</form>