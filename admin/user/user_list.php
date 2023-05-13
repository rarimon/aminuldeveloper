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
                    <h4>User List</h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Depertment</th>
                                <th scope="col">Gender</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($select_result as $index => $user) { ?>
                                <tr>
                                    <th scope="row"><?php echo $index + 1 ?></th>
                                    <td><?php echo $user['name']; ?></td>
                                    <td><?php echo $user['email']; ?></td>
                                    <td><?php echo $user['phone']; ?></td>
                                    <td><?php echo $user['depertment']; ?></td>
                                    <td><?php echo $user['gender']; ?></td>
                                    <td>
                                        <a href="http://" class="btn btn-danger">Delete</a>
                                        <a href="http://" class="btn btn-dark">View</a>
                                        <a href="http://" class="btn btn-primary">Edit</a>
                                    </td>

                                </tr>
                            <?php } ?>

                        </tbody>
                    </table>
                </div>
            </div>

        </div><!-- sl-page-title -->

    </div><!-- sl-pagebody -->
</div><!-- sl-mainpanel -->
<!-- ########## END: MAIN PANEL ########## -->







<?php require('../../dashboard_inc/footer.php'); ?>