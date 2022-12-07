<!DOCTYPE html>
<html>
<head>
    <title>Admin page</title>
    <!-- Bootstrap icons-->
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/image.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
</head>
<body>
<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container px-4 px-lg-5">
        <h2 class="navbar-brand">WebShop</h2>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" aria-current="page" href="admin_area.php">Admin Page</a></li>
                <li class="nav-item"><a class="nav-link" href="index.php">Logout</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container" style="background:white">
    <h4 style="font-style: italic"><br> <br>Add a Product:</h4>

        <form method="post">
            <div class="input-group">
                <label>Product Name:</label>
                <input type="text" name="product_name">
            </div>
            <div class="input-group">
                <label>Category:</label>
                <input type="text" name="category">
            </div>
            <div class="input-group">
                <label>Description:</label>
                <input type="text" name="description">
            </div>
            <div class="input-group">
                <label>Image:</label>
                <input type="text" name="image">
            </div>
            <div class="input-group">
                <label>Price:</label>
                <input type="text" name="price">
            </div>
            <div class="input-group">
                <button type="submit" class="btn" name="add">Add</button>
            </div>
        </form>

        <?php
        //$product_name = array();
        //$description = array();
        //$image   = array();
        //$price   = array();
        include 'database.php';
        // Taking all 3 values from the form data(input)
        $product_name = $_REQUEST['product_name'];
        $category = $_REQUEST['category'];
        $description = $_REQUEST['description'];
        $image = $_REQUEST['image'];
        $price = $_REQUEST['price'];

        // Performing insert query execution
        $sql = "INSERT INTO product_table(name, category, description, image, price) 
        values ('$product_name','$category','$description','$image','$price')";

        if(mysqli_query($db, $sql)){
            echo '<script>alert("Data stored in a database successfully.")</script>';
            echo '<script>window.location="add_product.php"</script>';

            // echo nl2br("\n$product_name\n $image\n $price"); // To Print the Added Product..
        }
        ?>
        </div>
    </body>
</html>



