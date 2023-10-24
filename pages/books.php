<?php
include("../include/connect.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

  <!-- css links -->
  <link rel="stylesheet" href="../css/index.css">
  <link rel="stylesheet" href="../css/books.css">
  <title>Book Now</title>
</head>

<body>
  <main class="book-appoint">
    <section class="img-section">
      <img class="img-gif" src="../images/GIF/book.gif" alt="gif Image">
    </section>
    <section class="form-section">
      <div class="header">
        <h3 class="d-flex justify-content-center">Neoeye Optical Clinic</h3>
        <h1 class="d-flex justify-content-center">
          BOOK APPOINTMENT
        </h1>
      </div>
      <hr>
      <form method="POST">
        <?php
        if (isset($_POST['submit'])) {
          $fname = $_POST['name'];
          $email = $_POST['email'];
          $time = $_POST['time'];
          $date = $_POST['date'];
          $gender = $_POST['gender'];
          $pnumber = $_POST['number'];
          $address = $_POST['address'];
          $mednote = $_POST['note'];

          if (empty($fname) or empty($email) or empty($time) or empty($date) or empty($gender) or empty($pnumber) or empty($address) or empty($mednote)) {
            echo '<p class="alert alert-danger" style="display: block; margin: 0; padding: 6px;">Please Fill the Form</p>';
          } else {
            $sql = "INSERT INTO `book`(`name`, `email`, `time`, `date`, `gender`, `number`, `address`, `notes`) VALUES ('" . $fname . "','" . $email . "','" . $time . "','" . $date . "','" . $gender . "','" . $pnumber . "','" . $address . "','" . $mednote . "')";

            $connect->query($sql) or die($connect->error);

            echo header("Location: ../index.php");
          }
        }
        ?>
        <input type="text" class="fullname" name="name" placeholder="Fullname">
        <input type="email" class="email" name="email" placeholder="Email">
        <div class="data-time">
          <input type="time" name="time" class="time">
          <input type="date" name="date" class="date">
        </div>
        <div class="gender">
          <p class="text-gen">Gender:</p>
          <select id="gender" name="gender">
            <option value="male">Male</option>
            <option value="female">Female</option>
          </select>
        </div>
        <input type="number" class="number" name="number" placeholder="Phone Number">
        <textarea class="address" name="address" placeholder="Address"></textarea>
        <textarea class="note" name="note" placeholder="Medical Note"></textarea>
        <div class="btn-logs">
          <input class="btn login-btn" type="submit" name="submit" value="SET">
          <a class="btn cancel-btn" href="../index.php" role="button">CANCEL</a>
        </div>
      </form>
    </section>
  </main>
</body>

</html>