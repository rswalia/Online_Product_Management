<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div id="header">
        <h1>Welcome to my page!</h1>
    </div>
    <div class="container">
        <?php if(isset($_SESSION['valid'])) : ?>			
            <div class="content">
                <p>Welcome <?php echo $_SESSION['name'] ?>! <a href='logout.php'>Logout</a></p>
                <p><a href='view.php'>View and Add Products</a></p>
            </div>
        <?php else : ?>
            <div class="content">
                <p>You must be logged in to view this page.</p>
                <p><a href='login.php'>Login</a> | <a href='register.php'>Register</a></p>
            </div>
        <?php endif; ?>
    </div>
    <div id="footer">
        <p>Created by <a href="#" title="Pratham Arora">Pratham Arora</a></p>
    </div>
</body>
</html>
