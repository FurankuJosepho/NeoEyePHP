<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/booking.css?v=1">
    <title>Book Now</title>
</head>

<body>
    <!-- navigation section -->
    <nav class="navbar navbar-expand-md sticky-top">
        <div class="container-fluid nav-container">
            <a href="../index.php" class="navbar-brand nav-link home-active">
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
                            <a href="products.php" class="nav-link">Products</a>
                        </li>
                        <li class="nav-item">
                            <a href="about.php" class="nav-link">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a href="book.php" class="nav-link book">Book Now</a>
                        </li>
                        <li class="nav-item">
							<div class="dropdown">
								<button class="nav-link path btn dropdown-toggle" type="button"
									data-bs-toggle="dropdown" aria-expanded="false">
									<i class="fa-regular fa-circle-user path"></i>
								</button>
								<ul class="dropdown-menu">
									<li><a class="dropdown-item" href="../php/adminlogin.php">Admin</a></li>
									<li><a class="dropdown-item" href="../php/userlogin.php">Users</a></li>
								</ul>
							</div>
						</li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <!-- Body Section Pls put documentation in every section para hindi na sila mag hanap Bros paki lagay nlng comments -->
    <section class="container">
        <form action="" class="justify-content-center formContainer">
            <div class="row my-3">
                <h3 class="d-flex justify-content-center">
                    Book Your Appointment
                </h3>
                <hr>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <input type="text" class="form-control text-center" placeholder="Enter your Firstname">
                </div>
                <div class="col">
                    <input type="text" class="form-control text-center" placeholder="Enter your Lastname">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <input type="email" class="form-control text-center" placeholder="Enter your Email">
                </div>
                <div class="col">
                    <input type="date" class="form-control text-center">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col form-check d-flex justify-content-end me-5">
                    <input type="radio" class="form-check-input">
                    <label for="radioMale" class="form-check-label">Male</label>
                </div>
                <div class="col form-check ms-5">
                    <input type="radio" class="form-check-input">
                    <label for="radioFemale" class="form-check-label">Female</label>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <input type="number" class="form-control text-center" placeholder="Telephone Number">
                </div>
                <div class="col">
                    <input type="number" class="form-control text-center" placeholder="Phone Number">
                </div>
            </div>
            <div class="row mb-3">
                <input type="text" class="form-control text-center" placeholder="Enter your Address">
            </div>
            <div class="row mb-3">
                <div class="col">
                    <input type="text" class="form-control text-center" placeholder="City">
                </div>
                <div class="col">
                    <input type="text" class="form-control text-center" placeholder="State">
                </div>
                <div class="col">
                    <input type="number" class="form-control text-center" placeholder="Zip Code">
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col  d-flex justify-content-end">
                    <button class="btn btns">Book Now</button>
                </div>
                <div class="col">
                    <button class="btn btns">Cancel</button>
                </div>
            </div>
        </form>
    </section>
</body>

</html>