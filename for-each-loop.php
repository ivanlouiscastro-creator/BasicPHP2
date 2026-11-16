<?php
$products = [
    'Toffee' => 2.99,
    'Mints' => 1.99,
    'Fudge' => 3.49,
];
?>
<link rel="stylesheet" href="styles.css">
<h2>Price List</h2>
<table>
    <tr>
        <th>Item</th>
        <th>Price</th>
    </tr>

    <?php foreach ($products as $item => $price) { ?>
        <tr>
            <td><?= $item ?></td>
            <td>$<?= $price ?></td>
        </tr>
    <?php } ?>

</table>