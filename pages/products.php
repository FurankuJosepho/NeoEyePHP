<?php
// This is forda connection on the databases
$connect = mysqli_connect("localhost", "root", "", "neoeye");
?>
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
    <link rel="stylesheet" href="../css/products.css?v=2">
    <title>Products</title>
</head>

<body>
    <nav class="navbar navbar-expand-md sticky-top">
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
                        <a href="products.php" class="nav-link text-white Products">Products</a>
                    </li>
                    <li class="nav-item">
                        <a href="about.php" class="nav-link text-white">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a href="book.php" class="nav-link text-white Booking">Book Now</a>
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

    <div class="container-fluid">
        <div class="leftRight">
            <div class="left">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <h5>PRICE RANGE</h5>
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <input type="checkbox">
                                <label for="checkbox">₱ 0.00 - ₱ 500.00</label><br />
                                <input type="checkbox">
                                <label for="checkbox">₱ 501.00 - ₱ 1,000.00</label><br />
                                <input type="checkbox">
                                <label for="checkbox">₱ 1,001.00 - ₱ 2,000.00</label><br />
                                <input type="checkbox">
                                <label for="checkbox">₱ 2,000.00 and Above</label><br />
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <h5>LENS MATERIALS</h5>
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <input type="checkbox">
                                <label for="checkbox">Anti-Radiation</label><br />
                                <input type="checkbox">
                                <label for="checkbox">Multicoated</label><br />
                                <input type="checkbox">
                                <label for="checkbox">Tinted</label><br />
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <h5>FRAMES MATERIALS</h5>
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <input type="checkbox">
                                <label for="checkbox">Acetate</label><br />
                                <input type="checkbox">
                                <label for="checkbox">Metal</label><br />
                                <input type="checkbox">
                                <label for="checkbox">Plastic</label><br />
                                <input type="checkbox">
                                <label for="checkbox">Stainless Steel</label><br />
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="right cardContainer">
                <?php
                $query = "SELECT * FROM `products`";
                $result = mysqli_query($connect, $query);

                while ($prods = mysqli_fetch_array($result)) {
                    ?>
                    <div class="card">
                        <img src="img/<?php echo $prods['image'] ?>" alt="">
                        <div class="card-body">
                            <div class="card-title">
                                <h4>
                                    <?php echo $prods['name'] ?>
                                </h4>
                                <p>
                                    <?php
                                    echo "₱";
                                    echo $prods['price'] ?>
                                </p>
                                <button class="btn btn-primary">Buy</button>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>

            <div class="bottom">
                <div class="card">
                    <div class="card-body">
                        <h5>SHIPPING FEE</h5>
                        <p>Deliveries around Metro Manila will cost ₱100 and ₱200 if it's outside Manila.</p>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <h5>DEDICATED SUPPORT</h5>
                        <p>You may message your queries through our chatbot</p>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <h5>GIFT VOUCHER</h5>
                        <p>Exclusive offers and discounts on the website may vary from events and monthly promotions</p>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <h5>SECURE PAYMENT</h5>
                        <p>We assure our customers that the provided payments methods are safe. We guarantee protection
                            for your bank accounts and information.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>