<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/booking.css">
    <title>Book Now</title>
</head>

<body>
    <nav class="navbar navbar-expand-md">
        <div class="container-fluid">
            <a href="../index.php" class="navbar-brand text-white">
                Neo Eye Optical Clinic
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="bi bi-list"></i>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="products.php" class="nav-link text-white">Products</a>
                    </li>
                    <li class="nav-item">
                        <a href="about.php" class="nav-link text-white">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a href="book.php" class="nav-link text-white bookNow">Book Now</a>
                    </li>
                    <li class="nav-item">
                        <a href="login.php" class="nav-link text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor"
                                class="bi bi-person-circle" viewBox="0 0 16 16">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                <path fill-rule="evenodd"
                                    d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                            </svg>
                        </a>
                    </li>
                </ul>
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
            <div class="row">
                <div class="col  d-flex justify-content-end">
                    <button class="btn">Book Now</button>
                </div>
                <div class="col">
                    <button class="btn">Cancel</button>
                </div>
            </div>
        </form>
    </section>
</body>

</html>