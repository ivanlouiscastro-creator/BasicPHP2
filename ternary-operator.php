<?php
$stock = 0;

$message = ($stock > 0) ? 'In stock' : 'Sold out';
?>

<!DOCTYPE html>
<html>
<head>
    <!-- Head content -->
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>The Candy Store</h1>
    <h2>Chocolate</h2>
    <p><?= $message ?></p>
</body>
</html>