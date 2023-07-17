<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>WHOLESALE-MART</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/7b39153ed3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./Public/styles/sidebar.css">
</head>

<body>
    <?php include 'navbar.php'; ?>
    <div class="s-layout">
        <!-- Sidebar -->
        <div class="s-layout__sidebar">
            <a class="s-sidebar__trigger" href="#0">
                <i class="fa fa-bars"></i>
            </a>

            <nav class="s-sidebar__nav">
                <a href="./index.php" class="main_title">WHOLESALE-MART</a>
                <ul>
                    <li>
                        <a class="s-sidebar__nav-link" href="./dealers.php">
                            <i class="fa fa-home"></i><em>Dealers</em>
                        </a>
                    </li>
                    <li>
                        <a class="s-sidebar__nav-link" href="#0">
                            <i class="fa fa-product-hunt" aria-hidden="true"></i><em>Dashboard</em>
                        </a>
                    </li>
                    <li>
                        <a class="s-sidebar__nav-link" href="./product.php">
                            <i class="fa fa-camera"></i><em>Product</em>
                        </a>
                    </li>
                    <li>
                        <a class="s-sidebar__nav-link" href="./addproduct.php">
                            <i class="fa fa-camera"></i><em>Add Product</em>
                        </a>
                    </li>
                    <li>
                        <a class="s-sidebar__nav-link" href="./Controller/logout.php">
                            <i class="fa fa-camera"></i><em>Log Out</em>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</body>

</html>