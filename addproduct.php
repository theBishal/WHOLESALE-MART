<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>WHOLESALE-MART</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/7b39153ed3.js" crossorigin="anonymous"></script>
</head>

<body>
</body>
<?php include_once './sidebar.php'; ?>
<div class="container">

    <section class="panel panel-default">
        <div class="panel-heading">
            <h2 class="panel-title text-center">Add Product</h2>
        </div>
        <hr>
        <div class="panel-body">

            <form action="./Controller/addProduct.php" method="post" class="form-horizontal" role="form">

                <div class="form-group">
                    <label for="name" class="col-sm-3 control-label">Product Name:</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="product_name" id="name" placeholder="Add your product name">
                    </div>
                </div> <!-- form-group // -->

        </div> <!-- form-group // -->
        <div class="form-group">
            <label for="about" class="col-sm-3 control-label">Product Description</label>
            <div class="col-sm-9">
                <textarea class="form-control" name="product_description" placeholder="Write your product details"></textarea>
            </div>
        </div> <!-- form-group // -->
        <div class="form-group">
            <label for="qty" class="col-sm-3 control-label">Stock</label>
            <div class="col-sm-3">
                <input type="number" class="form-control" name="stock" id="qty" placeholder="Stock">
            </div>
        </div> <!-- form-group // -->
        <div class="form-group">
            <label for="name" class="col-sm-3 control-label">Status</label>
            <div class="col-sm-9">
                <label class="radio-inline">
                    <input type="radio" name="status" id="inlineRadio1" value="ava"> Available
                </label>
                <label class="radio-inline">
                    <input type="radio" name="status" id="inlineRadio2" value="unava"> Not Available
                </label>
            </div>
        </div> <!-- form-group // -->
        <div class="form-group">
            <label for="name" class="col-sm-3 control-label">Product Image</label>
            <div class="col-sm-3">
                <input type="file" name="product_image">
            </div>
        </div> <!-- form-group // -->

        <hr>
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-9">
                <button type="submit" class="btn btn-primary">Add Product</button>
            </div>
        </div> <!-- form-group // -->
        </form>

</div><!-- panel-body // -->
</section><!-- panel// -->


</div> <!-- container// -->


</html>