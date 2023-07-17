<?php
require_once("./Model/db.php");
session_start();
$query = 'select * from user where acc_type = "Dealer"';
$result = mysqli_query($conn, $query);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>WHOLESALE-MART</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/7b39153ed3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./Public/styles/dealers.css">
</head>

<body>
    <?php include 'sidebar.php'; ?>
    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
        <div class="card w-75">
            <div class="card-body">
                <img src="./Public/images/undraw_profile.svg" alt="logo" class="logo">
                <div class="item">
                    <i class="fa fa-user-circle" aria-hidden="true"></i>
                    <h5 class="card-title"><?php echo $row['f_name'];
                                            echo (" ");
                                            echo $row['l_name'];
                                            ?>
                    </h5>
                </div>
                <div class="item1">
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                    <h5 class="card-title"><?php echo $row['address']; ?></h5>
                </div>
                <div class="item2">
                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                    <h5 class="card-title"><?php echo $row['store_name']; ?></h5>
                </div>
                <div class="item3">
                    <a href="#" class="btn btn-primary">Contact</a>
                    <a href="#" class="btn btn-primary">View Product</a>
                    <a href="#" class="btn btn-primary">Request For Price</a>
                </div>
            </div>
        </div>
    <?php } ?>


</body>

</html>