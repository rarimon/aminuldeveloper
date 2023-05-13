<?php
session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-10 m-auto">
                <div class="card">
                    <div class="card-header">
                        Registation Page
                    </div>
                    <?php if (isset($_SESSION['success'])) { ?>
                        <div class="alert alert-success">
                            <?php echo $_SESSION['success']; ?>
                        </div>
                    <?php }
                    unset($_SESSION['success']); ?>
                    <div class="card-body">

                        <form action="post.php" method="POST">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Full Name</label>
                                <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp">

                            </div>
                            <div class="mb-3">
                                <?php if (isset($_SESSION['name'])) { ?>
                                    <div class="alert alert-danger">
                                        <?php echo  $_SESSION['name']; ?>
                                    </div>
                                <?php }
                                unset($_SESSION['name']); ?>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Email</label>
                                <input type="text" name="email" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="mb-3">
                                <?php if (isset($_SESSION['email'])) { ?>
                                    <div class="alert alert-danger">
                                        <?php echo  $_SESSION['email']; ?>
                                    </div>
                                <?php }
                                unset($_SESSION['email']); ?>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Phone</label>
                                <input type="text" name="phone" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="mb-3">
                                <?php if (isset($_SESSION['phone'])) { ?>
                                    <div class="alert alert-danger">
                                        <?php echo  $_SESSION['phone']; ?>
                                    </div>
                                <?php }
                                unset($_SESSION['phone']); ?>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Depertment</label>
                                <select name="depertment" id="" class="form-control">
                                    <option value="">--Select Depertment</option>
                                    <option value="computer">Computer</option>
                                    <option value="computer">Computer</option>
                                    <option value="computer">Computer</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <?php if (isset($_SESSION['depertment'])) { ?>
                                    <div class="alert alert-danger">
                                        <?php echo  $_SESSION['depertment']; ?>
                                    </div>
                                <?php }
                                unset($_SESSION['depertment']); ?>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Gender</label>
                                <div class="form-check">
                                    <input class="form-check-input" value="male" type="radio" name="gender" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Male
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" value="female" type="radio" name="gender" id="flexRadioDefault2">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        Female
                                    </label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <?php if (isset($_SESSION['gender'])) { ?>
                                    <div class="alert alert-danger">
                                        <?php echo  $_SESSION['gender']; ?>
                                    </div>
                                <?php }
                                unset($_SESSION['gender']); ?>
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="mb-3">
                                <?php if (isset($_SESSION['password'])) { ?>
                                    <div class="alert alert-danger">
                                        <?php echo  $_SESSION['password']; ?>
                                    </div>
                                <?php }
                                unset($_SESSION['password']); ?>
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>