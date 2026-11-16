<?php
$name = 'Ivy';
$greeting = 'Hello';

if ($name !== '') {
    $greeting = 'Welcome back, ' . $name;
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
    <h2><?= $greeting ?></h2>
</body>
</html>