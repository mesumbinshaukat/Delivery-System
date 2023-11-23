<?php
include("../Db_Connection/connection.php");
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./Css/style.css">

    <?php include("../CDN.php") ?>

</head>

<body>
    <?php if ($_SESSION['invalid_email'] ?? null == true) { ?>

    <script type="text/javascript">
    alert("Invalid Email Format.")
    </script>
    <?php session_destroy();
    } ?>
    <?php if ($_SESSION["email_exist"] ?? null == true) { ?>

    <div class="alert alert-danger" role="alert">
        A simple danger alert—check it out!
    </div>
    <?php

        session_destroy();
    } ?>

    <div class="container text-light mt-lg-5 p-5 w-50">

        <!-- HEADING -->
        <h1 class="gradient-text fw-bold text-center">Register</h1>

        <!-- FORM -->
        <form method="post" enctype="multipart/form-data">

            <!-- FIRSR STEP -->
            <div id="first_step" style="display: block;">


                <label for="Role" class="fs-5 mt-lg-5">Select Field</label>
                <select class="form-control" name="role" id="role">
                    <option value="1" id="delivery">Delivery Boy</option>
                    <option value="2" id="store">Online Store</option>
                </select>

            </div>
            <!-- BUTTON -->
            <div class="text-center mt-lg-3">
                <center>
                    <button type="button" onclick="next(document.getElementById('role').value)"
                        class="btn btn-success w-50" id="first_step_next_btn" style="display: block;">Next</button>

                </center>

            </div>
        </form>



        <!-- SECOND STEP FOR DELIVERY BOY REGISTRATION -->
        <form method="post" enctype="multipart/form-data" action="signup_db.php">

            <div id="second_step_d" style="display: none;">



                <div class="row">
                    <h3 class="text-center mt-lg-5 fw-bold text-decoration-underline">Delivery Boy Registration - Form
                    </h3>
                    <div class="col-lg-6">
                        <label for="d_name" class="fs-5 mt-lg-5">Full Name <span
                                class="text-danger fw-bold">*</span></label>
                        <input type="text" name="d_name" placeholder="Full Name" class="form-control" required>

                    </div>

                    <div class="col-lg-6">
                        <label for="d_email" class="fs-5 mt-lg-5">Email <span
                                class="text-danger fw-bold">*</span></label>
                        <input type="text" name="d_email" placeholder="Email" class="form-control" required>
                        <?php
                        if ($_SESSION["email_exist"] ?? null == true) {
                        ?>
                        <span class="text-warning fw-bold"><cite>*This Email Is Already Registered. Please Use Different
                                Email Address.</cite></span>
                        <?php } ?>
                    </div>

                    <div class="col-lg-6">
                        <label for="d_cnic_front" class="fs-5 mt-lg-5">CNIC Front Picture <span
                                class="text-danger fw-bold">*</span></label>
                        <input type="file" name="d_cnic_front" placeholder="CNIC Front" class="form-control" required>

                    </div>

                    <div class="col-lg-6">
                        <label for="d_cnic_back" class="fs-5 mt-lg-5">CNIC Back Picture <span
                                class="text-danger fw-bold">*</span></label>
                        <input type="file" name="d_cnic_back" placeholder="CNIC Back" class="form-control" required>

                    </div>
                    <div class="col-lg-6">
                        <label for="d_password" class="fs-5 mt-lg-5">Password <span
                                class="text-danger fw-bold">*</span></label>
                        <input type="password" name="d_password" placeholder="Password" class="form-control" required>

                    </div>
                    <div class="col-lg-6">
                        <label for="d_city" class="fs-5 mt-lg-5">City <span class="text-danger fw-bold">*</span></label>
                        <input type="text" name="d_city" placeholder="City" class="form-control" required>

                    </div>
                    <div class="col-lg-6">
                        <label for="d_address" class="fs-5 mt-lg-5">Address <span
                                class="text-danger fw-bold">*</span></label>
                        <input type="text" name="d_address" placeholder="Address" class="form-control" required>

                    </div>
                    <div class="col-lg-6">
                        <label for="d_picture" class="fs-5 mt-lg-5">Profile Picture <span
                                class="text-danger fw-bold">*</span></label>
                        <input type="file" name="d_picture" placeholder="Profile Picture" class="form-control" required>

                    </div>

                    <div class="col-lg-12">
                        <label for="d_number" class="fs-5 mt-lg-5">Phone Number <span
                                class="text-danger fw-bold">*</span></label>
                        <input type="number" name="d_number" placeholder="Phone Number Without +92" class="form-control"
                            required>

                    </div>


                </div>


                <div class="text-center mt-lg-3">
                    <center>
                        <input type="submit" id="submit_d" name="register_d" value="Register" class="btn btn-dark w-50"
                            style="display: none;">
                    </center>
                </div>



            </div>
        </form>

        <!-- SECOND STEP FOR STORE REGISTRATION -->
        <form method="post" enctype="multipart/form-data" action="signup_db.php">
            <div id="second_step_s" style="display: none;">


                <div class="row">
                    <h3 class="text-center mt-lg-5 fw-bold text-decoration-underline">Store Registration - Form</h3>
                    <div class="col-lg-6">
                        <label for="s_u_name" class="fs-5 mt-lg-5">Full Name <span
                                class="text-danger fw-bold">*</span></label>
                        <input type="text" name="s_u_name" placeholder="Full Name" class="form-control" required>

                    </div>
                    <div class="col-lg-6">
                        <label for="s_name" class="fs-5 mt-lg-5">Store Name <span
                                class="text-danger fw-bold">*</span></label>
                        <input type="text" name="s_name" placeholder="Store Name" class="form-control" required>

                    </div>

                    <div class="col-lg-6">
                        <label for="s_email" class="fs-5 mt-lg-5">Email <span
                                class="text-danger fw-bold">*</span></label>
                        <input type="email" name="s_email" placeholder="Email" class="form-control" required>
                        <span class="text-warning fw-bold"><cite>*This Email Is Already Registered. Please Use Different
                                Email Address.</cite></span>
                    </div>

                    <div class="col-lg-6">
                        <label for="s_cnic_front" class="fs-5 mt-lg-5">CNIC Front Picture <span
                                class="text-danger fw-bold">*</span></label>
                        <input type="file" name="s_cnic_front" placeholder="CNIC Front" class="form-control" required>

                    </div>

                    <div class="col-lg-6">
                        <label for="s_cnic_back" class="fs-5 mt-lg-5">CNIC Back Picture <span
                                class="text-danger fw-bold">*</span></label>
                        <input type="file" name="s_cnic_back" placeholder="CNIC Back" class="form-control" required>

                    </div>
                    <div class="col-lg-6">
                        <label for="s_password" class="fs-5 mt-lg-5">Password <span
                                class="text-danger fw-bold">*</span></label>
                        <input type="password" name="s_password" placeholder="Password" class="form-control" required>

                    </div>
                    <div class="col-lg-6">
                        <label for="s_city" class="fs-5 mt-lg-5">City <span class="text-danger fw-bold">*</span></label>
                        <input type="text" name="s_city" placeholder="City" class="form-control" required>

                    </div>
                    <div class="col-lg-6">
                        <label for="s_address" class="fs-5 mt-lg-5">Address <span
                                class="text-danger fw-bold">*</span></label>
                        <input type="text" name="s_address" placeholder="Address" class="form-control" required>

                    </div>
                    <div class="col-lg-6">
                        <label for="s_logo" class="fs-5 mt-lg-5">Logo <span class="text-danger fw-bold">*</span></label>
                        <input type="file" name="s_logo" placeholder="Logo" class="form-control" required>

                    </div>

                    <div class="col-lg-6">
                        <label for="s_number" class="fs-5 mt-lg-5">Phone Number <span
                                class="text-danger fw-bold">*</span></label>
                        <input type="number" name="s_number" placeholder="Phone Number Without +92" class="form-control"
                            required>

                    </div>


                </div>

                <div class="text-center mt-lg-3">
                    <center>
                        <input type="submit" id="submit_s" name="register_d" value="Register" class="btn btn-dark w-50"
                            style="display: none;">
                    </center>
                </div>


            </div>
        </form>
    </div>
    <script>
    next = (role) => {

        <?php
            $_SESSION["role"] = "role";
            // echo "alert(role)";
            ?>
        if (role != null || role != undefined) {
            document.getElementById("first_step").style.display = "none"
            document.getElementById("first_step_next_btn").style.display = "none"
            switch (role) {
                case "1":
                    document.getElementById("second_step_d").style.display = "block"
                    document.getElementById("submit_d").style.display = "block"
                    break;
                case "2":
                    document.getElementById("second_step_s").style.display = "block"
                    document.getElementById("submit_s").style.display = "block"
                    break;

            }
        }
    }
    </script>


</body>

</html>