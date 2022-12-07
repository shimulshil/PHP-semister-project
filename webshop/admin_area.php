<!DOCTYPE html>
<html>
<head>
    <title>Admin page</title>
    <!-- Bootstrap icons-->
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/image.css" rel="stylesheet" />
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
                <!--<li class="nav-item"><a class="nav-link" href="#!">Logout</a></li>-->
            </ul>
            <div class="input-group navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4"">
            <form action="search_admin.php" method="post">
                <input type="text" placeholder="Search" name="search">
                <button type="submit" name="submit">Search</button>
            </form>
        </div>
        <!--<div class="input-group"> //Normal search button without functionalities
            <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search"
                   aria-describedby="search-addon" />
            <button type="button" class="btn btn-outline-primary">search</button>
        </div>-->
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
            <li class="nav-item"><a class="nav-link" href="index.php">Logout</a></li>
        </ul>
    </div>
    </div>
</nav>
<div class="container">
    <h3 style="margin-top:15px;">Add a new product</h3>
    <form action="add_product.php" method="post">
        <input type="submit" style="margin-top:5px;" class="btn btn-success" value="Add" />

    </form>
    <hr>
    <div class="container">
        <h3>Product Details</h3>
        <div style="margin-top: 18px" class="table-responsive">
            <table class="table table-bordered">
                <tr>
                    <th width="20%">Product Name</th>
                    <th width="10%">Product Category</th>
                    <th width="40%">Description</th>
                    <th width="10%">Price</th>
                    <th width="10%">Edit</th>
                    <th width="10%">Delete</th>
                </tr>
                <?php

                include "database.php"; // Using database connection file here

                $records = mysqli_query($db,"select * from product_table"); // fetch data from database

                while($data = mysqli_fetch_array($records))
                {
                    ?>
                    <tr>
                        <td><?php echo $data['name']; ?></td>
                        <td><?php echo $data['category']; ?></td>
                        <td><?php echo $data['description']; ?></td>
                        <td><?php echo $data['image']; ?></td>
                        <td><?php echo $data['price']; ?></td>
                        <td><a class="btn btn-success" href="edit.php?id=<?php echo $data['id']; ?>">Edit</a></td>
                        <td><a class="btn btn-danger" href="delete_product.php?id=<?php echo $data['id']; ?>">Delete</a></td>
                    </tr>
                    <?php
                }
                ?>
            </table>
        </div>
    </div>
</div>
</body>
</html>

