<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Login Page</title>
    <link href="css/style.css" rel="stylesheet" />
</head>
<body>
<div class="header">
    <h2>Admin Login</h2>
</div>

<form method="post" action="admin_login.php">
    <?php include('errors.php'); ?>
    <div class="input-group">
        <label>Admin_name</label>
        <input type="text" name="adminname" >
    </div>
    <div class="input-group">
        <label>Password</label>
        <input type="password" name="password">
    </div>
    <div class="input-group">
        <button type="submit" class="btn" name="login_admin">Login</button>
        <a style="text-decoration: none; font-size: medium" class="btn" href="index.php">Home</a>
    </div>
</form>
</body>
</html>


