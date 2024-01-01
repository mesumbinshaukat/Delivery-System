<?php
session_start();
include("../Db_Connection/connection.php");


if (isset($_POST['register_d'])) {

    $regex_email = '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';
    $d_email = $_POST["d_email"];
    $d_email = str_replace("<", "&lt", $d_email);
    $d_email = str_replace(">", "&gt", $d_email);

    if (preg_match($regex_email, $d_email) == 0) {
        $_SESSION['invalid_email'] = true;
        header("location:signup.php");
        exit();
    } elseif (preg_match($regex_email, $d_email) == 1) {
        $select_query = "SELECT `delivery_email` FROM `delivery_boy_registration` WHERE `delivery_email`='$d_email'";
        $run_query = mysqli_query($conn, $select_query);
        $fetch_data = mysqli_fetch_assoc($run_query);
        $fetch_email = $fetch_data["delivery_email"];
        if ($fetch_email == $d_email) {
            $_SESSION["email_exist"] = true;
            $_SESSION["registered_email"] = $d_email;
            header("location:signup.php");
            exit();
        } else {
            $d_name = $_POST["d_name"];
            $d_name = str_replace("<", "&lt", $d_name);
            $d_name = str_replace(">", "&gt", $d_name);
            $d_cnic_front_name = $_FILES["d_cnic_front"]["name"];
            $d_cnic_front_name_tmp_name = $_FILES["d_cnic_front"]["tmp_name"];
            $d_cnic_back_name = $_FILES["d_cnic_back"]["name"];
            $d_cnic_back_tmp_name = $_FILES["d_cnic_back"]["tmp_name"];
            $d_password = $_POST["d_password"];
            $d_password = str_replace("<", "&lt", $d_password);
            $d_password = str_replace(">", "&gt", $d_password);
            $passowrd_hash = password_hash($d_password, PASSWORD_DEFAULT);
            $d_city = $_POST["d_city"];
            $d_city = str_replace("<", "&lt", $d_city);
            $d_city = str_replace(">", "&gt", $d_city);
            $d_address = $_POST["d_address"];
            $d_address = str_replace("<", "&lt", $d_address);
            $d_address = str_replace(">", "&gt", $d_address);
            $d_picture_name = $_FILES["d_picture"]["name"];
            $d_picture_tmp_name = $_FILES["d_picture"]["tmp_name"];
            $d_number = $_POST["d_number"];
            $d_number = str_replace("<", "&lt", $d_number);
            $d_number = str_replace(">", "&gt", $d_number);

            $location_front_cnic = "../Dashboard/User_Images/D_Picture/Confidential/" . $d_cnic_front_name;
            move_uploaded_file($d_cnic_front_name_tmp_name, $location_front_cnic);

            $location_back_cnic = "../Dashboard/User_Images/D_Picture/Confidential/" . $d_cnic_back_name;
            move_uploaded_file($d_cnic_back_tmp_name, $location_back_cnic);

            $location_profile_pic = "../Dashboard/User_Images/D_Picture/User_Profile_Pics/" . $d_picture_name;
            move_uploaded_file($d_picture_tmp_name, $location_profile_pic);

            $query = mysqli_prepare($conn, "INSERT INTO `delivery_boy_registration`(`delivery_name`, `delivery_email`, `delivery_phone`, `delivery_cnic_front`, `delivery_cnic_back`, `delivery_password`, `delivery_city`, `delivery_address`, `delivery_profile_picture`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
            $query->bind_param("sssssssss", $d_name, $d_email, $d_number, $d_cnic_front_name, $d_cnic_back_name, $passowrd_hash, $d_city, $d_address, $d_picture_name);
            if ($query->execute()) {
                header("location:../index");
            }
            echo mysqli_error($conn);
        }
    }
} elseif (isset($_POST['register_s'])) {
    $regex_email = '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';
    $s_email = $_POST["s_email"];
    $s_email = str_replace("<", "&lt", $s_email);
    $s_email = str_replace(">", "&gt", $s_email);
    if (preg_match($regex_email, $s_email) == 0) {
        $_SESSION['invalid_email'] = true;
        header("location:signup.php");
        exit();
    } elseif (preg_match($regex_email, $s_email) == 1) {
        $select_query = "SELECT `store_email` FROM `store_registration` WHERE `store_email`='$s_email'";
        $run_query = mysqli_query($conn, $select_query);
        $fetch_data = mysqli_fetch_assoc($run_query);
        $fetch_email = $fetch_data["store_email"];
        if ($fetch_email == $s_email) {
            $_SESSION["email_exist"] = true;
            $_SESSION["registered_email"] = $s_email;
            header("location:signup.php");
            exit();
        }
        else{
            $s_u_name = $_POST["s_u_name"];
            $s_u_name = str_replace("<", "&lt", $s_u_name);
            $s_u_name = str_replace(">", "&gt", $s_u_name);
            $s_name = $_POST["s_name"];
            $s_name = str_replace("<", "&lt", $s_name);
            $s_name = str_replace(">", "&gt", $s_name);
            $s_cnic_front = $_FILES["s_cnic_front"]["name"];
            $s_cnic_front_tmp_name = $_FILES["s_cnic_front"]["tmp_name"];
            $s_cnic_back = $_FILES["s_cnic_back"]["name"];
            $s_cnic_back_tmp_name = $_FILES["s_cnic_back"]["tmp_name"];
            $s_logo = $_FILES["s_logo"]["name"];
            $s_logo_tmp_name = $_FILES["s_logo"]["tmp_name"];
            $s_password = $_POST["s_password"];
            $s_password = str_replace("<", "&lt", $s_password);
            $s_password = str_replace(">", "&gt", $s_password);
            $passowrd_hash = password_hash($s_password, PASSWORD_DEFAULT);
            $s_city = $_POST["s_city"];
            $s_city = str_replace("<", "&lt", $s_city);
            $s_city = str_replace(">", "&gt", $s_city);
            $s_address = $_POST["s_address"];
            $s_address = str_replace("<", "&lt", $s_address);
            $s_address = str_replace(">", "&gt", $s_address);
            $s_number = $_POST["s_number"];
            $s_number = str_replace("<", "&lt", $s_number);
            $s_number = str_replace(">", "&gt", $s_number);

            $location_front_cnic = "../Dashboard/User_Images/S_Picture/Confidential/" . $s_cnic_front;
            move_uploaded_file($s_cnic_front_tmp_name, $location_front_cnic);

            $location_back_cnic = "../Dashboard/User_Images/S_Picture/Confidential/" . $s_cnic_back;
            move_uploaded_file($s_cnic_back_tmp_name, $location_back_cnic);

            $location_logo_pic = "../Dashboard/User_Images/S_Picture/Logo/" . $s_logo;
            move_uploaded_file($s_logo_tmp_name, $location_logo_pic);

            $query = mysqli_prepare($conn, "INSERT INTO `store_registration`(`store_name`, `store_u_name`, `store_email`, `store_password`, `store_logo`, `store_cnic_front`, `store_cnic_back`, `store_phone`, `store_address`, `store_city`) VALUES (?,?,?,?,?,?,?,?,?,?)");
            $query->bind_param("ssssssssss", $s_name, $s_u_name, $s_email, $passowrd_hash, $s_logo, $s_cnic_front, $s_cnic_back, $s_number, $s_address, $s_city);
            if ($query->execute()) {
                header("location:../index");
            }
            echo mysqli_error($conn);
        }
        }
        
       
}
?>