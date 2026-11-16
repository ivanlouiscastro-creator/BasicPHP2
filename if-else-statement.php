<?php
$stock = 5;

if ($stock > 0) {
    $message = 'In stock';
} else {
    $message = 'Sold out';
}
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