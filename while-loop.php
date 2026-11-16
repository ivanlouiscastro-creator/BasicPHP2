<?php
$counter = 1;
$packs = 5;
$price = 1.99;
?>

<h2>Prices for Multiple Packs</h2>
<link rel="stylesheet" href="styles.css">
<p>
<?php
while ($counter <= $packs) {
    echo $counter;
    echo ' packs cost $';
    echo $price * $counter;
    echo '<br>';

    $counter++;
}
?>
</p>