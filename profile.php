<?php 
    session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
    
    <div class="profile">
        <h2><?= $_SESSION['user']['name']?></h2>
        <a href="#"><?= $_SESSION['user']['email']?></a>
    </div>

</body>
</html>