<?php
Utils\ensure_logged_in_as_admin();
?>

<style>
    #add-product-header {
        background-color: #F84E45;
        text-decoration: none;
        color: white;
        border: 1px solid white;
        padding: 10px;
        border-radius: 5px;
    }
</style>
<div class="page-header">
    <div class="row align-items-center mb-3">
        <div class="col-sm mb-2 mb-sm-0">
            <h1 class="page-header-title">
                Products
                <span class="badge badge-soft-dark ml-2">
                    <?php if (isset($data)) {
                        echo mysqli_num_rows($data["products"]);
                    } ?>
                </span>
            </h1>
        </div>
        <div class="col-sm-auto">
            <a href="<?php echo Utils\BASE_URL ?>/Product/new"
               class="btn btn-primary"
               id="add-product-header"
            >
                Add Product
            </a>
        </div>
    </div>
</div>

<div class="card">
    <div class="table-responsive">
        <table class="table table-borderless card-table">
            <thead class="thead-light">
            <tr>
                <th>ProductID</th>
                <th>Name Product</th>
                <th>Description Product</th>
                <th>ProviderID</th>
                \
                <th colspan="2"></th>
            </tr>
            </thead>

            <tbody>
            <?php
            $categories = array();
            while ($row = mysqli_fetch_array($data["categories"])) {
                $categories[] = $row;
            }
            while ($row = mysqli_fetch_array($data["products"])) {
                ?>
                <tr>
                    <td>
                        <?php echo $row["ProductID"] ?>
                    </td>
                    <td>
                        <?php echo $row["NameProduct"] ?>
                    </td>
                    
                    
                    <td>
                        <?php echo $row["DescriptionProduct"] ?>
                    </td>
                    <td>
                        <?php echo $row["ProviderID"] ?>
                    </td>
                    
                </tr>
                <?php
            }
            ?>

            </tbody>
        </table>
    </div>
</div>

