<?php
Utils\ensure_logged_in_as_admin();
?>

<div class="page-header">
    <div class="row align-items-center mb-3">
        <div class="col-sm mb-2 mb-sm-0">
            <h1 class="page-header-title">
                Orders
                <span class="badge badge-soft-dark ml-2">
                    <?php if (isset($data)) {
                        echo mysqli_num_rows($data["orders"]);
                    } ?>
                </span>
            </h1>
        </div>
    </div>
</div>

<div class="card">
    <div class="table-responsive">
        <table class="table table-borderless card-table">
            <thead class="thead-light">
            <tr>
                <th>OrderID</th>
                <th>Status</th>
                <th>PaymentMethod</th>
                <th>ShippingAddress</th>
                <th>OrderDate</th>
                <th>Contact</th>
                <th>CartID</th>
                <th>FreeshipID</th>
                
                
            </tr>
            </thead>
            <tbody>
            <?php
            while ($row = mysqli_fetch_array($data["orders"])) {
                ?>
                <tr>
                    <td><?php echo $row["OrderID"] ?></td>
                    <td><?php echo $row["Status"] ?></td>
                    <td><?php echo $row["PaymentMethod"] ?></td>
                    <td><?php echo $row["ShippingAddress"] ?></td>
                    <td><?php echo $row["OrderDate"] ?></td>
                    <td><?php echo $row["Contact"] ?></td>
                    <td><?php echo $row["CartID"] ?></td>
                    <td><?php echo $row["FreeshipID"] ?></td>
                </tr>
                <?php
            }
            ?>

            </tbody>
        </table>
    </div>
</div>

