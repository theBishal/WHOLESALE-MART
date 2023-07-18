<?php
require_once("./Model/db.php");
session_start();

$query = 'select * from product';
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
    <style>
        .container_deck {
            display: flex;
            justify-content: space-between;
            align-items: center;

        }

        .card-text {
            display: inline;
        }
    </style>
</head>

<body>
    <?php include 'sidebar.php' ?>

    <div class="container container_deck">
        <div class="row">


            <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                <div class="col-lg-3 mb-3">

                    <div class="card card_position" style="width: 15rem;">
                        <img src="./Public/images/herot.png" class="card-img-top" alt="...">

                        <div class="card-body">
                            <h5 class="card-title"><?php echo $row['product_name']; ?></h5>
                            <p class="card-text"><?php echo $row['product_description']; ?></p>
                            <p class="card-text"></p>
                            <span class="card-text">In stock: <p class="card-text"><?php echo $row['stock']; ?>
                                </p></span>
                            <hr>
                            <a href="#" class="btn btn-primary">Add to cart</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>

    </div>




</body>

</html>