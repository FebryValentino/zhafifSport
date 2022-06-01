<!-- Begin Page Content -->
<div class="container">
    <div class="row">
        <div class="row mt-4 mb-3">
            <div class="col-11">
                <h2 class="mb-3">Product Report</h2>
            </div>
            <div class="col-lg-12">
                <a href="<?= base_url('product/report_print'); ?>" class="btn btn-primary mb-3"><i class="fas fa-print"></i> Print</a>
                <a href="<?= base_url('product/report_pdf'); ?>" class="btn btn-warning mb-3"><i class="far fa-file-pdf"></i> Download Pdf</a>
                <a href="<?= base_url('product/report_excel'); ?>" class="btn btn-success mb-3"><i class="far fa-file-excel"></i> Export to Excel</a>
            </div>
        </div>
    </div>
    <table class="table table-hover">
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
    <!-- /.container-fluid -->
</div>