<?php  include('admin/header2.php'); ?>
<?php  include('database.php'); ?>
<?php $orders = pg_query($conn, "SELECT * FROM orderproduct"); ?>
<!-- Begin Page Content --> 
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Order Table</h1>

<!-- DataTales Example -->

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>OderID</th>
                        <th>ProductID</th>
                        <th>BillID</th>
                        <th>Quantity</th>

                        
                    </tr>
                </thead>
                
                <tbody>
                <?php while ($row = pg_fetch_row($orders)) { ?>
                    <tr>
                        <td><?php echo $row['0']; ?></td>
                        <td><?php echo $row['1']; ?></td>
                        <td><?php echo $row['2']; ?></td>
                        <td><?php echo $row['3']; ?></td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<?php  include('admin/footer2.php'); ?>           