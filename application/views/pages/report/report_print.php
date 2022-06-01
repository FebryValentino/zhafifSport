<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
</head>

<body>
    <style type="text/css">
        .table-data {
            width: 100%;
            border-collapse: collapse;
        }

        .table-data tr th,
        .table-data tr td {
            border: 1px solid black;
            font-size: 11pt;
            font-family: Verdana;
            padding: 10px 10px 10px 10px;
        }

        h3 {
            font-family: Verdana;
        }
    </style>
    <h3>
        <center>Print Products Report</center>
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
    <script type="text/javascript">
        window.print();
    </script>
</body>
</body>

</html>