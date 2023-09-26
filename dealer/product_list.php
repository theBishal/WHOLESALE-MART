<?php
require_once("../Model/db.php");
session_start();
$query = "SELECT * FROM product";
$result = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="en">

<?php include '../component/head.php'; ?>

<body>
    <!-- ======= Header ======= -->
    <?php include '../component/header.php'; ?>
    <!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <?php include '../component/sidebar.php'; ?>
    <!-- End Sidebar-->

    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Product List</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Product</a></li>
                    <li class="breadcrumb-item active">Product List</li>
                </ol>
            </nav>
        </div>
        <!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th scope="col">Name</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Product Image</th>
                                        <th scope="col">Stock</th>
                                        <th scope="col">Product Created</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                                        <tr>
                                            <td><?= $row['product_name']; ?></td>
                                            <td><?= $row['product_description']; ?></td>
                                            <td><?= $row['price']; ?></td>
                                            <td><img src="../public/media/productImage/<?= $row['product_image']; ?>" style="width:200px; height:100px;"></td>
                                            <td><span class="status <?php if ($row['stock'] <= 2) {
                                                                        echo "return";
                                                                    } else {
                                                                        echo "delivered";
                                                                    } ?>"><?php if ($row['stock'] == 0) {
                                                                                echo "Out of Stock";
                                                                            } else {
                                                                                echo $row['stock'];
                                                                            } ?></span></td>
                                            <td><?= $row['created']; ?></td>

                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                            <!-- End Table with stripped rows -->

                        </div>
                    </div>

                </div>
            </div>
        </section>
    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <?php include '../component/footer.php'; ?>
</body>

</html>
<?php
mysqli_close($conn);
?>