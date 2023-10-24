<?php
session_start();
include("../include/connect.php");

if (isset($_POST["Login"])) {
    $name = $_POST['name'];
    $pass = $_POST['pass'];

    $err = array();

    if (empty($name)) {
        $err['admin'] = 'Please Enter Your Username';
    } elseif (empty($pass)) {
        $err['admin'] = 'Please Enter Your Password';
    }



    if (count($err) == 0) {
        $sql = "SELECT * FROM `admin` WHERE `name`= '$name' AND `password`= '$pass'";
        $result = mysqli_query($connect, $sql);

        if (mysqli_num_rows($result) == 1) {
            echo "Welcome Admin";

            $_SESSION['admin'] = $name;
            header('Location:../pages/admin.php');
        } else {
            echo '<div class="alert alert-danger" style="display: block;">Invalid Name or Password please check</div>';
        }
    }
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- favicon -->
    <link rel="icon" type="image/x-icon" href="../images/PNG/Neoeye Optical Clinic Logo.png">

    <!-- bootstrap link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- swiper js link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

    <!-- css link -->
    <link rel="stylesheet" href="../css/login.css?v=1">
    <link rel="stylesheet" href="../css/index.css">
    <title>Login Admin</title>
</head>

<body>
    <main class="adminlogin">
        <section class="img-section">
            <img class="img-gif" src="../images/GIF/admin.gif" alt="anything related in clinic">
        </section>
        <section class="form-section">
            <img class="img-logo" src="../images/PNG/Neoeye Optical Clinic Logo.png" alt="Neoeye Optical Clinic Logo">
            <h5>Neoeye Optical Clinic</h5>
            <h1>WELCOME ADMIN</h1>
            <form method="POST">
                <?php
                if (isset($err['admin'])) {
                    $show = $err['admin'];
                    echo '<div class="alert alert-danger" style="display: block;">' . $show . '</div>';
                } else {
                    $show = "";
                    echo '<div class="alert alert-danger" style="display: none;"></div>';
                }
                ?>
                <input class="username" type="text" name="name" placeholder="Username">
                <input class="password" type="password" name="pass" placeholder="Password">
                <div class="btn-logs">
                    <input class="btn login-btn" type="submit" name="Login" value="LOGIN">
                    <a class="btn cancel-btn" href="../index.php" role="button">CANCEL</a>
                </div>
                <a class="link" href="../maintenance.php">Forgot password?</a>
            </form>
        </section>
    </main>
</body>

</html>