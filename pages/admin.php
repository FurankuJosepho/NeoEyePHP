<?php
session_start();
include("../include/connect.php");
if(!isset($_SESSION['admin'])){
header("Location: ../php/adminlogin.php");
}
if (isset($_SESSION['admin'])) {
    $user = $_SESSION['admin'];
    echo '
    <nav class="navbar navbar-expand-md sticky-top">
        <div class="container-fluid nav-container">
            <a href="admin.php" class="navbar-brand nav-link home-active">
                Neoeye Optical Clinic
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="bi bi-list"></i>
            </button>
            <div class="page-container">
                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="../pages/admin.php" class="nav-link">Doctor ' . $user . '</a>
                        </li>
                        <li class="nav-item">
                            <a href="../php/adminlogout.php" class="nav-link">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    ';
    
}

$message = '';

if (isset($_POST["submit"])) {
    $folder = "img/" . basename($_FILES['images']['name']); // Use 'images' instead of 'image'
    $prodname = $_POST['name'];
    $prodprice = $_POST['price'];

    // Use $_FILES['images']['tmp_name'] for the uploaded file
    $prodimage = $_FILES['images']['tmp_name'];

    // You should use prepared statements to prevent SQL injection
    $sql = "INSERT INTO `products` (`name`, `price`, `image`) VALUES (?, ?, ?)";

    $stmt = mysqli_prepare($connect, $sql);
    mysqli_stmt_bind_param($stmt, "sss", $prodname, $prodprice, $folder);

    if (mysqli_stmt_execute($stmt)) {
        if (move_uploaded_file($_FILES['images']['tmp_name'], $folder)) {
            $message = 'Uploaded Success';
        } else {
            $message = 'Uploaded Not Success';
        }
    } else {
        $message = 'Error: ' . mysqli_error($connect);
    }

    mysqli_stmt_close($stmt);
    mysqli_close($connect);
}

$sql = "SELECT * FROM `book`";
$books = $connect->query($sql) or die($connect->error);

$row = $books->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- favicon -->
    <link rel="icon" type="image/x-icon" href="../images/PNG/Neoeye Optical Clinic Logo.png">

    <!-- bootstrap link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- swiper js link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

    <!-- css link -->
    <link rel="stylesheet" href="../css/header.css?v=1">
    <link rel="stylesheet" href="../css/index.css?v=1">
    <link rel="stylesheet" href="../css/admin.css?v=4">
    <title>Admin</title>
</head>

<body>
<h1 class="welcome">Welcome
        <?php
        echo " Doctor ";
        echo $user; ?>
    </h1>
    <form method="POST" enctype="multipart/form-data">
        <input class="productsimpt" type="text" name="name" placeholder="Product Name">
        <input class="productsimpt" type="text" name="price" placeholder="Product Price">
        <input type="file" name="images" id="prodimage">
        <label for="prodimage">Upload Image</label>
        <input type="submit" name="submit" value="Upload" class="submit">
    </form>
    <table>
        <thead class="th-container">
            <th>Fullname</th>
            <th>Email</th>
            <th>Time</th>
            <th>Date</th>
            <th>Gender</th>
            <th>Phone Number</th>
            <th>Address</th>
            <th>Medical Note</th>
        </thead>
        <tbody class="td-container">
            <?php do { ?>
                <tr>
                    <td>
                        <?php echo $row['name'] ?>
                    </td>
                    <td>
                        <?php echo $row['email'] ?>
                    </td>
                    <td>
                        <?php echo $row['time'] ?>
                    </td>
                    <td>
                        <?php echo $row['date'] ?>
                    </td>
                    <td>
                        <?php echo $row['gender'] ?>
                    </td>
                    <td>
                        <?php echo $row['number'] ?>
                    </td>
                    <td>
                        <?php echo $row['address'] ?>
                    </td>
                    <td>
                        <?php echo $row['notes'] ?>
                    </td>
                </tr>
            <?php } while ($row = mysqli_fetch_assoc($books)) ?>

        </tbody>
    </table>
</body>

</html>