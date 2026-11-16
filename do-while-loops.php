<?php
$packs = 5;
$price = 1.99;
?>

<h2>Prices for Multiple Packs</h2>
<link rel="stylesheet" href="styles.css">

<p>
<?php
do {
    echo $packs;
    echo ' packs cost $';
    echo $price * $packs;
    echo '<br>';

    $packs--;
} while ($packs > 0);
?>
</p>