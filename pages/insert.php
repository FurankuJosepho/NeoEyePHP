<?php
$connect = mysqli_connect("localhost", "root", "", "neoeye");
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
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
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert</title>
</head>
<body>
<form method="POST" enctype="multipart/form-data">
        <input type="text" name="name" placeholder="Prod Name">
        <input type="text" name="price" placeholder="Prod Price">
        <input type="file" name="images">
        <input type="submit" name="submit" value="Upload">
    </form>
</body>
</html>