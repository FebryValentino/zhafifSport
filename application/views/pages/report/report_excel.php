<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=$title.xls");
header("Pragma: no-cache");
header("Expires: 0");
?>

<h3>
    <center>Product Report</center>
</h3>
<br>
<table class="table-data">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Product Name</th>
            <th scope="col">Price</th>
            <th scope="col">Category</th>
            <th scope="col">Stock</th>

        </tr>
    </thead>
    <tbody>
        <?php
        $a = 1;
        foreach ($product as $b) { ?>
            <tr>
                <th scope="row"><?= $a++; ?></th>
                <td><?= $b['name']; ?></td>
                <td><?= $b['price']; ?></td>
                <td><?= $b['edition']; ?></td>
                <td><?= $b['Stok']; ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>