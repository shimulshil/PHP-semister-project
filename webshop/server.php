<?php
session_start();
include 'database.php';// connect to the database

// initializing variables
$username = "";
$adminname = "";
$email    = "";
$errors = array();

// REGISTER USER
if (isset($_POST['reg_user'])) {
    // receive all input values from the form
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $phone = mysqli_real_escape_string($db, $_POST['phone']);
    $address = mysqli_real_escape_string($db, $_POST['address']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
    $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

    // form validation: ensure that the form is correctly filled ..
    //Name validation only Alphabets.................
    //if ( !preg_match('/^[A-Za-z\d._-]$/', $username)) // Only the First Name
    //if ( !preg_match('/^[a-zA-ZÆØÅæøå ]*$/', $username))// Its working for fullName validation with space
    if ( !preg_match('/^[a-zA-Z ]+$/', $username)) // Its working for fullName validation with space
    { array_push($errors, "Name should be Alphabets"); }

    //Address Validation differents format...............
    //preg_match('/^\\d+ [a-zA-Z ]+, \\d+ [a-zA-Z ]+, [a-zA-Z ]+$/', $input)
    //15 Gordon St, 3121 Cremorne, Australia ......................
    //if ( !preg_match('/^[a-zA-ZÆØÅæøå ]+ \\d+, \\d+ [a-zA-ZÆØÅæøå ]+, [a-zA-ZÆØÅæøå ]+$/', $address))
    //Rebæk Søpark 25, 2650 Hvidovre, Denmark..............
    if ( !preg_match('/^[a-zA-ZÆØÅæøå ]+ \\d+, [0-9][a-zA-Z]+ \\d+ [a-zA-ZÆØÅæøå ]+, [a-zA-ZÆØÅæøå ]+$/', $address))
    //Rebæk Søpark 25, 3TV 2650 Hvidovre, Denmark
    { array_push($errors, "Address like Amabrogade 25, 3TV 2300 Copenhagen, Denmark"); }

    //Email Validation as a general format.....................
    if ( !preg_match('/^[a-z\d._-]+@([a-z\d-]+\.)+[a-z]{2,6}$/', $email))
    { array_push($errors, "Wrong Email address format"); }

    //Phone number validation only 8 Digit number...............
    //if(!preg_match("/^[0-9]{3}-[0-9]{4}-[0-9]{4}$/", $phone))
    if(!preg_match("/^[0-9]{8}$/", $phone))
    { array_push($errors, "Phone number should be 8 digit"); }

    // form validation: ensure that the form filled is fulfill with  text or number..
    // by adding (array_push()) corresponding error unto $errors array
    if (empty($username)) { array_push($errors, "Username is required"); }
    if (empty($phone)) { array_push($errors, "Phone number is required"); }
    if (empty($address)) { array_push($errors, "Address is required"); }
    if (empty($email)) { array_push($errors, "Email is required"); }
    if (empty($password_1)) { array_push($errors, "Password is required"); }
    if ($password_1 != $password_2) {
        array_push($errors, "The two passwords do not match");
    }

    // first check the database to make sure
    // a user does not already exist with the same username and/or email
    $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);

    if ($user) { // if user exists
        if ($user['username'] === $username) {
            array_push($errors, "Username already exists");
        }

        if ($user['email'] === $email) {
            array_push($errors, "email already exists");
        }
    }

    // Finally, register user if there are no errors in the form
    if (count($errors) == 0) {
        //$password = md5($password_1);//encrypt the password before saving in the database
        $password = $password_1;//Display password before saving in the database


        $query = "INSERT INTO users (username, phone, address, email, password) 
  			  VALUES('$username', '$phone','$address','$email', '$password')";
        mysqli_query($db, $query);
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "You are now logged in";
        header('location: product.php');
    }
}

// ...
// ...

// LOGIN USER
if (isset($_POST['login_user'])) {
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    if (empty($email)) {
        array_push($errors, "Email address is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }

    if (count($errors) == 0) {
       // $password = md5($password);
        $query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
        $results = mysqli_query($db, $query);
        if (mysqli_num_rows($results) == 1) {
            $_SESSION['email'] = $email;
            $_SESSION['success'] = "You are now logged in";
            header('location: product.php');
        }else {
            array_push($errors, "Wrong username or password ");
        }
    }
}

// LOGIN Admin
if (isset($_POST['login_admin'])) {
    $adminname = mysqli_real_escape_string($db, $_POST['adminname']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    if (empty($adminname)) {
        array_push($errors, "Adminname is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }

    if (count($errors) == 0) {
        // $password = md5($password);
        $query = "SELECT * FROM admin WHERE adminname='$adminname' AND password='$password'";
        $results = mysqli_query($db, $query);
        if (mysqli_num_rows($results) == 1) {
            $_SESSION['adminname'] = $adminname;
            $_SESSION['success'] = "You are now logged in";
            header('location: admin_area.php');
        }else {
            array_push($errors, "Wrong username or password ");
        }
    }
}

?>
