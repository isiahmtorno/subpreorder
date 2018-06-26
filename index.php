<?php include('elements/header.php'); ?>
    
        <!-- Start Content -->
    <div class="section gray">
        <div class="container">
            <div class="container">



                <form id="frmAddOrders">
                    <div class="pre" style='color:#000000; background:#ffffff;'>
                    <div class="row">
                        
                        <div class="col-md-4">
                            <input type="text" name="fullname" placeholder="Enter Your Fullname" class="form-control" required>
                        </div>
                        <div class="col-md-8 text-right">
                            <button type="submit" class="btn btn-primary">Submit your Order</button>
                        </div>
                        
                    </div>
                </div>
                <div class="card-group">

                <?php
                $sql = "SELECT * FROM sys_category";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while($rec = $result->fetch_assoc()) {

                    $sql1 = "SELECT * FROM sys_products WHERE category_id = '".$rec['id']."'";
                    $result1 = $conn->query($sql1);

                    if ($result1->num_rows > 0) {?>

                        <div class="card">
                            <div class="card-body">
                                <div class="form-check">
                                    <h4 class="card-title"><?php echo $rec['name']; ?></h4>
                                    <?php while($rec1 = $result1->fetch_assoc()) {?>
                                        <div>
                                        <label>
                                            <input type="checkbox" name="orders[]" value="<?php echo $rec1['name']; ?>"> <span class="label-text"><?php echo $rec1['name']; ?></span>
                                        </label>
                                        </div>
                                    <?php }?>
                                </div>
                            </div>
                        </div>

                <?php 
                    }else{?>

                        <div class="card">
                            <div class="card-body">
                                <div class="form-check">
                                    <h4 class="card-title"><?php echo $rec['name']; ?></h4>
                                </div>
                            </div>
                        </div>

                <?php
                    }
                    }
                }?>

                </div>
            </form>
            </div>

            <div class="modal" id="myModal">
                <div class="modal-dialog">
                    <div class="modal-content">
                  
                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title"></h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    
                    <!-- Modal body -->
                    <div class="modal-body">
                        <table class="table" id="tblOrders">
                            <thead>
                                <tr>
                                    <th>Your Orders</th>
                                    <th>Price</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <td>TOTAL</td>
                                    <td>Php 0.00</td>
                                </tr>
                            </tfoot>
                            <tbody id="orders">
                            </tbody>
                        </table>
                    </div>
                    
                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                    </div>
                    
                  </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Content -->

    <div class="clearfix"></div> 

<?php include('elements/footer.php');?>