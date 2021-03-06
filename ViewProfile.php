<?php
require 'includes/init.php';
if (isset($_SESSION['id']) && isset($_SESSION['email'])) {
    $user_data = $user_obj->find_user_by_id($_SESSION['id']);
    if ($user_data ===  false) {
        header('Location: logout.php');
        exit;
    }
    // FETCH ALL USERS WHERE ID IS NOT EQUAL TO MY ID
    $all_users = $user_obj->all_users($_SESSION['id']);
} else {
    header('Location: logout.php');
    exit;
}
// REQUEST NOTIFICATION NUMBER
$get_req_num = $frnd_obj->request_notification($_SESSION['id'], false);
// TOTAL FRIENDS
$get_frnd_num = $frnd_obj->get_all_friends($_SESSION['id'], false);
?>
<?php
include 'header.php';
?>
<link rel="stylesheet" href="css/ViewProfile.css">
<!--Logo-->
<div class="container">
    <div class="row">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <img src="img/logo.png" alt="" class="img-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto mb-2 mb-1g-0">
                        <nav class="navbar navbar-light ">
                            <form class="container-fluid justify-content-start">
                                <button class="btn me-2" type="button" href="#"><a href="Index.php" style="text-decoration: none; color:grey;">Logout</a></button>
                            </form>
                        </nav>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="col-md-4 mt-1">
            <div class="card texr-center sidebar">
                <div class="card-body">
                    <img src="img/avatar-user.png" alt="" class="rounded-circle" width="150">
                    <div class="mt-3">
                        <h3><?php echo  $user_data->username; ?></h3>
                        <a href="Home-user.php">Home</a>
                        <hr>
                        <a href="Contact.php">Contact</a>
                        <hr>
                        <a href="Edit.php">Edit</a>
                    </div>

                </div>

            </div>
        </div>
        <div class="col-md-8 mt-1">
            <div class="card mb-3 content">
                <h1 class="m-3 pt-3">About</h1>
                <div class="card-body">
                        <div class="row">
                            <div class="col-md-3">
                               <h6>Full name</h6>
                            </div>
                            <div class="col-md-9 ">
                               <?php echo  $user_data->username; ?>
                            
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-3">
                                <h6>Sex</h6>
                            </div>
                            <div class="col-md-9 ">

                                Male
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-3">
                                <h6>Job</h6>
                            </div>
                            <div class="col-md-9 ">

                                Student
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-3">
                                <h6>Email</h6>
                            </div>
                            <div class="col-md-9 ">
                                <?php echo  $user_data->user_email; ?>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-3">
                                <h6>Phone</h6>
                            </div>
                            <div class="col-md-9">
                                0984745565
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-3">
                                <h6>Address</h6>
                            </div>
                            <div class="col-md-9 ">
                                H?? N???i
                            </div>
                        </div>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>