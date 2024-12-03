<?php
Utils\ensure_logged_in_as_admin();
?>

<div class="page-header">
    <div class="row align-items-center mb-3">
        <div class="col-sm mb-2 mb-sm-0">
            <h1 class="page-header-title">
                Customers
                <span class="badge badge-soft-dark ml-2">
                    <?php
                    if (isset($data)) {
                        echo mysqli_num_rows($data["customers"]);
                    }
                    ?>
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
                <th>ID</th>
                <th>FName</th>
                <th>LName</th>
                <th>Email</th>
                <th>Password</th>
                <th>Date of birth</th>
                <th>Create Time</th>
                <th>Update Time</th>
                <th>IsActive</th>
                <th>Type</th>
                <th colspan="2"></th>
            </tr>
            </thead>

            <tbody>
            <?php
            while ($row = mysqli_fetch_array($data["customers"])) {
                ?>
                <tr>
                    <td>
                        <?php
                        echo $row["UserID"];
                        ?>
                    </td>
                    <td>
                        <?php
                        echo $row["FName"];
                        ?>
                    </td>
                    <td>
                        <?php
                        echo $row["LName"];
                        ?>
                    </td>
                    <td>
                        <?php
                            echo $row["Email"];
                        ?>
                    </td>
                    <td>
                        <?php
                            echo $row["PasswordUser"];
                        ?>                        
                    </td>
                    <td>
                        <?php
                            echo $row["DateOfBirth"];
                        ?>                        
                    </td>
                    <td>
                        <?php
                            echo $row["CreatedTime"];
                        ?>                        
                    </td>
                    <td>
                        <?php
                            echo $row["UpdatedTime"];
                        ?>                        
                    </td>
                    <td>
                        <?php
                            echo $row["isActive"];
                        ?>                        
                    </td>
                    <td>
                        <?php
                            echo $row["UserType"];
                        ?>                        
                    </td>
                </tr>
                <?php
            }
            ?>

            </tbody>
        </table>
    </div>
</div>

