<?php
Utils\ensure_logged_in_as_admin();
?>

<div class="page-header">
    <div class="row align-items-center mb-3">
        <div class="col-sm mb-2 mb-sm-0">
            <h1 class="page-header-title">
                Review<span class="badge badge-soft-dark ml-2"><?php
                    if (isset($data)) {
                        echo mysqli_num_rows($data["comments"]);
                    }
                    ?></span>
            </h1>
        </div>

    </div>
</div>

<div class="card">
    <div class="table-responsive">
        <table class="table table-borderless card-table">
            <thead class="thead-light">
            <tr>
                <th>VendeeID</th>
                <th>ReviewID</th>
                <th>Rating</th>
                <th>Content</th>
                <th>CreateDate</th>
                <th>ProductID</th>
            </tr>
            </thead>
            <tbody>
            <?php
            while ($row = mysqli_fetch_array($data["comments"])) {
                ?>
                <tr>
                    <td><?php echo $row["VendeeID"] ?></td>
                    <td><?php echo $row["ReviewID"] ?></td>
                    <td><?php echo $row["Rating"] ?></td>
                    <td><?php echo $row["Content"] ?></td>
                    <td><?php echo $row["CreateDate"] ?></td>
                    <td><?php echo $row["ProductID"] ?></td>
                    
                </tr>
                <?php
            }
            ?>

            </tbody>
        </table>
    </div>
</div>

