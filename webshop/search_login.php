<!DOCTYPE html>
<html>
<head>
    <title>Home page</title>
    <!-- Bootstrap icons-->
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/image.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
</head>
<body>
<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container px-4 px-lg-5">
        <h2><p class="navbar-brand">WebShop</p></h2>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.php">Home</a></li>
                <div class="dropdown">
                    <button class="btn dropdown-toggle px-3" type="button"
                            id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                        Product_Category
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton2">
                        <li><a class="dropdown-item" href="product.php">All Product</a></li>
                        <li><a class="dropdown-item" href="laptop_login.php">Laptop</a></li>
                        <li><a class="dropdown-item" href="mobile_login.php">Mobile</a></li>
                        <li><a class="dropdown-item" href="camera_login.php">Camera</a></li>
                        <li><a class="dropdown-item" href="headphone_login.php">Headphone</a></li>
                    </ul>
                </div>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                    <li class="nav-item"><a class="nav-link" href="index.php">Logout</a></li>
                </ul>
            </ul>

            <div class="input-group navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4"">
            <form action="search_login.php" method="post">
                <input type="text" placeholder="Search" name="search_login">
                <button type="submit" name="submit">Search</button>

            </form>
        </div>

    </div>
    </div>
</nav>
<header class="bg-dark py-5">
    <div class="container px-4 px-lg-5 my-5">
        <div class="text-center text-white">
            <h1 class="display-4 fw-bolder" style="font-style: italic">Products with New Technology</h1>
            <p class="lead fw-normal text-white-50 mb-0">We are waiting for new Electronic Product</p>
        </div>
    </div>
</header>

<!-- Header-->
<br />

<section class="py-6">
    <div class="container-lg">

        <div>
            <div class="row row-cols-lg-5">
                <?php
                $searchValue = $_POST['search_login'];
                include 'database.php';
                $query = "SELECT * FROM product_table WHERE name LIKE '%$searchValue%'";
                $result = mysqli_query($db, $query);
                while($row = mysqli_fetch_array($result)) //Returns data in a numeric array and/or in an associative array.
                {
                    ?>
                    <div class="col" style=" height: fit-content" > <!-- Make a product cart...with image, name and price*/-->
                        <form method="post" action="product.php?action=add&id=<?php echo $row["id"]; ?>">
                            <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">
                                <img src="<?php echo $row["image"]; ?>" class="img-responsive" /><br />
                                <h4 class="text-info"><?php echo $row["name"]; ?></h4>
                                <h4 class="text-danger">$ <?php echo $row["price"]; ?></h4>
                                <input type="text" name="quantity" class="form-control" value="1" />
                                <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" /><!-- To store the selected product name..-->
                                <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" /> <!--To store the selected product Price..-->
                                <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />
                            </div>
                        </form>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>

    </div>
</section>
<!-- Footer-->
<footer class="py-2">
    <div class="m-0 text-center text-white bg-dark">
        <div class="row row-cols-lg-3">
            <div><h5>Address</h5>
                <p>Paradisæblevej 13, 2650 Hvidovre<br><a class="text-white" style="text-decoration: none" href="tel:555-555-555"> Tlf: 555-555-555</a><br>
                    <a class="text-white" style="text-decoration: none" href="mailto:webshop@butikken.dk">Email: webshop@butikken.dk</a></p>
            </div>
            <div>
                <h5> Information</h5>
                <p>
                    <a class="text-white" style="text-decoration: none" href="#">customer service<br></a>
                    <a class="text-white" style="text-decoration: none" href="#">Privately og cookies<br></a>
                    <a class="text-white" style="text-decoration: none" href="#">Terms of trade and delivery<br></a>
                </p>
            </div>
            <div>
                <h5> Contact</h5>
                <p>
                    <a class="text-white" style="text-decoration: none" href="tel:555-555-555"> Tlf: 555-555-555</a><br>
                    <a class="text-white" style="text-decoration: none" href="mailto:webshop@butikken.dk">Email: webshop@butikken.dk</a>
                </p>
            </div>
        </div>
    </div>
    <div>
        <p class="m-0 text-center" style="background-color:#f1f1f1;">Copyright &copy; Your Website 2021</p>
    </div>
</footer>
<!-- Footer-->
<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>

