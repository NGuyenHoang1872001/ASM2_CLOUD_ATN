<?php  include('template/header.php'); ?>
<?php  include('database.php'); ?>

<?php
    if (isset($_GET['edit'])) {
		$id = $_GET['edit'];
		$record = pg_query($conn, "SELECT * FROM inventory WHERE inventoryid=$id");

		if ($record) {
			$inventory = pg_fetch_row($record);
			$office = $product['1'];
			$quantity = $product['2'];
            $product = $product['3'];
		}
	}
?>

<?php 
    if (isset($_POST['update'])) {
        $updatedOffice = $_POST['officeid'];
        $updatedQuantity2 = $_POST['qty'];
        $updatedProduct = $_POST['productid'];
        
        pg_query($conn, "UPDATE inventory SET officeid='$updatedOffice', qty='$updatedQuantity2', productid='$updatedProduct = $_POST['productid'];
        ' WHERE inventoryid=$id");
        // $_SESSION['message'] = "Address updated!"; 
        echo '<script>window.location.href = "Inventory.php";</script>';
        exit();
    }
?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Inventory Table</h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            
                        </div>
                        <div class="card-body">
                            <form method="post" action="">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Office</label>
                                    <select name='officeid'>
                                    <br>
                                    <option >Select Office</option>
                                    <?php
                                        $sqlie = "select * from office";
                                        $results = pg_query($conn,$sqlie);
                                        while ($rows = pg_fetch_row($results)){
                                            echo "<option value=".$rows['0']." >".$rows['1']."</option>";
                                        }
                                    ?>
                                    </select>
                                    
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">ProductID</label>
                                    <br>
                                    <select name='productid'>
                                    <option>Select Product</option>
                                    <?php
                                    $sqli = "select * from product";
                                    $result = pg_query($conn,$sqli);
                                    while ($row = pg_fetch_row($result)){
                                        echo "<option value=".$row['0']." >".$row['2']."</option>";
                                    }
                                    ?>
                                    </select>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Quantity</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter quanity" name="qty" value="<?php echo $quantity; ?>">
                                </div>

                                </div>
                                
                                <button type="submit" class="btn btn-primary" name="update">Submit</button>
                            </form>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

<?php  include('template/footer.php'); ?>    