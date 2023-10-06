<?php
require_once('../Model/db.php');
session_start();

require_once('../auth/check_auth.php');
require_once('../auth/check_dealer.php');
$sql = "SELECT * FROM user WHERE id = '" . $_SESSION['user_id'] . "'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);


?>
<!DOCTYPE html>
<html lang="en">

<?php include '../component/dealer/head.php'; ?>

<body>
    <!-- ======= Header ======= -->
    <?php include '../component/dealer/header.php'; ?>
    <!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <?php include '../component/dealer/sidebar.php'; ?>
    <!-- End Sidebar-->

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Profile</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">Users</li>
                    <li class="breadcrumb-item active">Profile</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section profile">
            <div class="row">
                <div class="col-xl-4">

                    <div class="card">
                        <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

                            <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
                            <h2><?= $row['f_name']; ?> <?= $row['l_name']; ?></h2>
                            <h3><b><?= $row['store_name'] ?></b></h3>
                            <h3><?= $row['acc_type']; ?></h3>
                            <div class="social-links mt-2">
                                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-xl-8">

                    <div class="card">
                        <div class="card-body pt-3">
                            <!-- Bordered Tabs -->
                            <ul class="nav nav-tabs nav-tabs-bordered">

                                <li class="nav-item">
                                    <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
                                </li>

                                <li class="nav-item">
                                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button>
                                </li>

                            </ul>
                            <div class="tab-content pt-2">

                                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                                    <h5 class="card-title">Profile Details</h5>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label ">Full Name</div>
                                        <div class="col-lg-9 col-md-8"><?= $row['f_name']; ?> <?= $row['l_name']; ?> </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Email</div>
                                        <div class="col-lg-9 col-md-8"><?= $row['email'] ?></div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Phone no</div>
                                        <div class="col-lg-9 col-md-8"><?= $row['phone_no'] ?></div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Address</div>
                                        <div class="col-lg-9 col-md-8"><?= $row['address'] ?></div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Store Name</div>
                                        <div class="col-lg-9 col-md-8"><?= $row['store_name'] ?></div>
                                    </div>

                                </div>

                                <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                                    <!-- Profile Edit Form -->
                                    <form action="./edit_profile.php?" method="post">
                                        <div class="row mb-3">
                                            <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
                                            <div class="col-md-8 col-lg-9">
                                                <img src="assets/img/profile-img.jpg" alt="Profile">
                                                <div class="pt-2">
                                                    <a href="#" class="btn btn-primary btn-sm" title="Upload new profile image"><i class="bi bi-upload"></i></a>
                                                    <a href="#" class="btn btn-danger btn-sm" title="Remove my profile image"><i class="bi bi-trash"></i></a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="f_name" class="col-md-4 col-lg-3 col-form-label">First Name</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="f_name" type="text" class="form-control" id="f_name" value="<?= $row['f_name']; ?> ">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="l_name" class="col-md-4 col-lg-3 col-form-label">Last Name</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="l_name type=" text" class="form-control" id="l_name" value="<?= $row['l_name']; ?>">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="about" class="col-md-4 col-lg-3 col-form-label">Email</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="email" type="email" class="form-control" id="Email" value="<?= $row['email'] ?>">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="company" class="col-md-4 col-lg-3 col-form-label">Phone no</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="phone" type="text" class="form-control" id="Phone" value="<?= $row['phone_no'] ?>">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="Address" class="col-md-4 col-lg-3 col-form-label">Address</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="address" type="text" class="form-control" id="Address" value="<?= $row['address'] ?>">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="Store" class="col-md-4 col-lg-3 col-form-label">Store Name</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="Store" type="text" class="form-control" id="Store" value="<?= $row['store_name'] ?>">
                                            </div>
                                        </div>

                                        <div class="text-center">
                                            <button name="submit " type="submit" class="btn btn-primary">Save Change</button>

                                        </div>
                                    </form><!-- End Profile Edit Form -->

                                </div>





                            </div><!-- End Bordered Tabs -->

                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <?php include '../component/dealer/footer.php'; ?>
</body>

</html>