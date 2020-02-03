<?php 
$pageTitle = 'Register Page';
include 'init.php';



?>

<div class="container py-5">
    <div class="row">
        <div class="col-md-12">
            <!-- <h2 class="text-center mb-3">Register Form</h2> -->
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card border-secondary">
                        <div class="card-header">
                            <h3 class="mb-0 my-2">Sign Up</h3>
                        </div>
                        <div class="card-body">
                            <!-- Start Register Form -->
                            <form class="form" role="form" autocomplete="off" action="<?= $_SERVER['PHP_SELF']?>" method="POST">
                               
                                <!-- Start User Name -->
                                <div class="form-group">
                                    <label for="inputName">Name</label>
                                    <input type="text" class="form-control" id="inputName" placeholder="user name" name="username" autocomplete="off" required>
                                </div>
                                <!-- End User Name -->

                                <!-- Start Email -->
                                <div class="form-group">
                                    <label for="inputEmail3">Email</label>
                                    <input type="email" class="form-control" id="inputEmail3" placeholder="email@example.com" name="email" required autocomplete="off">
                                </div>
                                <!-- End Email -->

                                <!-- Start Pass -->
                                <div class="form-group">
                                    <label for="inputPassword3">Password</label>
                                    <input type="password" class="form-control" id="inputPassword3" placeholder="password" title="At least 6 characters with letters and numbers" name="password" required autocomplete="new-password">
                                </div>
                                <!-- End Pass -->

                                <!-- start Pass Confirm -->
                                <div class="form-group">
                                    <label for="inputVerify3">Verify</label>
                                    <input type="password" class="form-control" id="inputVerify3" placeholder="password (again)" required autocomplete="new-password">
                                </div>
                                <!-- End Pass Confirm -->

                                <!-- Start Submit -->
                                <div class="form-group">
                                    <input type="submit" value="Register" name="submit" class="btn btn-success btn-lg float-right" />
                                    <!-- <button type="submit" class="btn btn-success btn-lg float-right">Register</button> -->
                                </div>
                                <!-- End Submit -->
                            </form>
                            <!-- End Register Form -->
                        </div>
                    </div>
                </div>
            </div>
            <!--/row-->

        </div>
        <!--/col-->
    </div>
    <!--/row-->
</div>
<!--/container-->

<?php 
 
 include $tpl . 'footer.php'; 

?>