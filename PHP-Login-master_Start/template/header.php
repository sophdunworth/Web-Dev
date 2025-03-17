<?php 
session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../css/stylesheet.css">
    <title><?php echo $pageTitle ?? "Website"; ?></title> 
</head>
<body>

<header>
    <h1>Welcome to Our Website</h1>
    <nav>
        <a href="home.php">Home</a>
        <a href="services.php">Services</a>

        <?php if (isset($_SESSION['Active']) && $_SESSION['Active'] == true): ?>
            <a href="index.php">Dashboard</a>
            <a href="logout.php">Logout</a>
        <?php else: ?>
            <a href="login.php">Login</a>
        <?php endif; ?>
    </nav>
</header>
