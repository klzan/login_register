<?php 
   // include auth.php file on all secure pages 
   include('auth.php');
   ?> 
     
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Home</title> 
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="form"> 
        <p>Welcome <?php echo $_SESSION['username']; ?>!</p> 
        <p>This is homepage and secure area.</p> 
        <p><a href="dashboard.php">Dashboard</a></p> 
        <a href="login.php">Logout</a> 
    </div>
</body>
</html>