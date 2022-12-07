<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
    <title>Registration system PHP and MySQL</title>
    <link href="css/style.css" rel="stylesheet" />
</head>
<body>
<div class="header">
    <h2>Register</h2>
</div>

<form method="post" action="register.php">
    <?php include('errors.php'); ?>
    <div class="input-group">
        <label>First Name</label>
        <input type="text" name="username" value="<?php $username; ?>">
    </div>
    <div class="input-group">
        <label>Phone Number</label>
        <input type="tel" name="phone" value="<?php $phone; ?>">
    </div>
    <div class="input-group">
        <label>Address</label>
        <input type="text" name="address" value="<?php $address; ?>">
    </div>
    <div class="input-group">
        <label>Email</label>
        <input type="email" name="email" value="<?php $email; ?>">
    </div>
    <div class="input-group">
        <label>Password</label>
        <input type="password" name="password_1">
    </div>
    <div class="input-group">
        <label>Confirm password</label>
        <input type="password" name="password_2">
    </div>
    <div class="input-group">
        <button type="submit" class="btn" name="reg_user">Register</button>
    </div>
    <p>
        Already a member? <a href="login.php">Sign in</a>
    </p>
</form>
</body>
</html>
