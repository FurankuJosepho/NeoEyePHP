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
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

 <!-- fontawesome -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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
   <form method="#">
    <input type="text" class="fullname" placeholder="Fullname">
    <input type="email" class="email" placeholder="Email">
    <div class="data-time">
     <input type="time" class="time">
     <input type="date" class="date">
    </div>
    <div class="gender">
     <p class="text-gen">Gender:</p>
     <input type="radio" class="form-check-input radio" id="radioMale" name="gender">
     <label for="radioMale" class="form-check-label label">Male</label>
     <input type="radio" class="form-check-input radio" id="radioFemale" name="gender">
     <label for="radioFemale" class="form-check-label label">Female</label>
    </div>
    <input type="number" class="number" placeholder="Phone Number">
    <textarea class="address" placeholder="Address"></textarea>
    <textarea class="note" placeholder="Medical Note"></textarea>
    <div class="btn-logs">
     <input class="btn login-btn" type="submit" name="Login" value="SET">
     <a class="btn cancel-btn" href="../index.php" role="button">CANCEL</a>
    </div>
   </form>
  </section>
 </main>
</body>

</html>