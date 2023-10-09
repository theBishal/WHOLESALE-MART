<?php
require_once('../Model/db.php');
session_start();

require_once('../auth/check_auth.php');
require_once('../auth/check_retailer.php');

$user_id = $_SESSION['user_id'];
$check_query = "SELECT * FROM orders WHERE user_id = '$user_id'";
$result = mysqli_query($conn, $check_query);

?>
<!DOCTYPE html>
<html lang="en">

<?php include '../component/retailer/head.php'; ?>

<body>
    <!-- ======= Header ======= -->
    <?php include '../component/retailer/header.php'; ?>
    <!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <?php include '../component/retailer/sidebar.php'; ?>
    <!-- End Sidebar-->

    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Product List</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Order History</li>
                </ol>
            </nav>
        </div>
        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th scope="col">Order Id</th>
                                        <th scope="col">Order Date</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Total Amount</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                                        <tr>
                                            <td><?= $row['order_id']; ?></td>
                                            <td><?= $row['order_date'] ?></td>
                                            <td><?= $row['status']; ?></td>
                                            <td><?= $row['total_amount']; ?></td>
                                            <td><a href="./view_order.php?id=<?= $row['order_id'] ?>  ">View Order</a></td>


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



    <!-- ======= Footer ======= -->
    <?php include '../component/retailer/footer.php'; ?>
</body>

</html>