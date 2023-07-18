<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("location: ./register_login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>WHOLESALE-MART</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="./Public/styles/homepage.css">
    <script src="https://kit.fontawesome.com/7b39153ed3.js" crossorigin="anonymous"></script>
</head>

<body>
    <?php include 'sidebar.php' ?>
    <section id="hero">
        <div id="text_hero">
            <h3>Looking for best Deal??</h3>
            <h1>WHOLESALE-MART</h1>
            <p>WHOLESALE-MART serves as a centralized hub where dealers and retailers <br>
                can register and effortlessly connect with each other.</p>
            <hr class="border border-success">
            <a href="./dealers.php" class="btn btn-primary ">View Dealers</a>
        </div>



    </section>
</body>

</html>