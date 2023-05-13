<?php
session_start();
if (!isset($_SESSION['success'])) {
    header('location:../../login.php');
}

?>

<?php require('../../dashboard_inc/header.php'); ?>

<?php

require('../../db.php');

// select query

$select_user = "SELECT * FROM user";
$select_result = mysqli_query($db_connect, $select_user);

foreach ($select_result as $user) {
    echo  $user['name'];
}

?>



<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <!-- <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Starlight</a>
        <a class="breadcrumb-item" href="index.html">Pages</a>
        <span class="breadcrumb-item active">Blank Page</span>
    </nav> -->

    <div class="sl-pagebody">
        <div class="sl-page-title">
            <div class="card">
                <div class="card-header text-center">
                    <h4>Add Banner</h4>
                </div>
                <div class="card-body">
                    <form action="banner_post.php" method="post">
                        <div class="mb-3">
                            <label for="">Banner Title</label>
                            <input type="text" name="banner_title" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="">Description</label>
                            <textarea name="description" class="form-control" id="" cols="30" rows="10"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="">Button Text</label>
                            <input type="text" name="btn_text" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="">Banner Image</label>
                            <input type="file" name="banner_image" class="form-control">
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </form>
                </div>
            </div>

        </div><!-- sl-page-title -->

    </div><!-- sl-pagebody -->
</div><!-- sl-mainpanel -->
<!-- ########## END: MAIN PANEL ########## -->







<?php require('../../dashboard_inc/footer.php'); ?>