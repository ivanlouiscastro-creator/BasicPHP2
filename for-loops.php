<?php
$price = 1.99;
?>

<h2>Prices for Multiple Packs</h2>
<link rel="stylesheet" href="styles.css">
<p>
<?php
for ($i = 1; $i <= 10; $i++) {
    echo $i;
    echo ' packs cost $';
    echo $price * $i;
    echo '<br>';
}
?>
</p>