<?php
// This is forda connection on the databases
$connect = mysqli_connect("localhost", "root", "", "neoeye");
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/products.css">
    <title>Products</title>
</head>

<body>
    <!-- navigation section -->
    <nav class="navbar navbar-expand-md sticky-top">
        <div class="container-fluid nav-container">
            <a href="../index.php" class="navbar-brand nav-link home-active">
                Neoeye Optical Clinic
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
                            <a href="books.php" class="nav-link book">Book Now</a>
                        </li>
                        <li class="nav-item">
                            <div class="dropdown">
                                <button class="nav-link path btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
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

    <div class="container-fluid-lg">
        <div class="leftRight">
            <div class="left">
                <form action="" method="GET">
                    <button class="btn my-2 btn-book" type="submit">Filter</button>
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <h5>PRICE RANGE</h5>
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <input type="checkbox" name="price_range" value="under_501" />
                                    <label for="checkbox">₱ 0.00 - ₱ 500.00</label><br />
                                    <input type="checkbox" name="price_range" value="502_to_1001" />
                                    <label for="checkbox">₱ 501.00 - ₱ 1,000.00</label><br />
                                    <input type="checkbox" name="price_range" value="over_1002" />
                                    <label for="checkbox">₱ 1,001.00 - ₱ 2,000.00</label><br />
                                    <input type="checkbox" name="price_range" value="over_2001" />
                                    <label for="checkbox">₱ 2,000.00 and Above</label><br />
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <h5>LENS MATERIALS</h5>
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <?php
                                    $material_query = "SELECT * FROM `lens`";
                                    $material_result = mysqli_query($connect, $material_query);

                                    if (mysqli_num_rows($material_result) > 0) {
                                        foreach ($material_result as $materials) {
                                            $matCheck = [];
                                            if (isset($_GET["materials"])) {
                                                $matCheck = $_GET['materials'];
                                            }
                                    ?>
                                            <input type="checkbox" name="materials[]" value="<?php echo $materials['id']; ?>" <?php
                                                                                                                                if (in_array($materials['id'], $matCheck)) {
                                                                                                                                    echo "This item is Selected";
                                                                                                                                }
                                                                                                                                ?> />
                                            <?php echo $materials['lensmat']; ?><br />
                                    <?php
                                        }
                                    } else {
                                        echo "No Lens";
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <h5>FRAMES MATERIALS</h5>
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <?php
                                    $frames_query = "SELECT * FROM `frames`";
                                    $frames_result = mysqli_query($connect, $frames_query);

                                    if (mysqli_num_rows($frames_result) > 0) {
                                        foreach ($frames_result as $frames) {
                                    ?>
                                            <input type="checkbox" name="frames[]" value="<?php echo $frames['id']; ?>">
                                            <?php echo $frames['framesmat']; ?><br />
                                    <?php
                                        }
                                    } else {
                                        echo "No Frames";
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="right cardContainer">
                <?php
                if (isset($_GET['price_range'])) {
                    $checkprice = $_GET['price_range'];
                    $query = "";

                    if ($checkprice == "under_501") {
                        $query = $connect->query("SELECT * FROM `products` WHERE `price` BETWEEN 0 AND 500");
                    } elseif ($checkprice == "502_to_1001") {
                        $query = $connect->query("SELECT * FROM `products` WHERE `price` BETWEEN 501 AND 1000");
                    } elseif ($checkprice == "over_1002") {
                        $query = $connect->query("SELECT * FROM `products` WHERE `price` BETWEEN 1001 AND 2000");
                    } elseif ($checkprice == "over_2001") {
                        $query = $connect->query("SELECT * FROM `products` WHERE `price` BETWEEN 2000 AND 5000");
                    } else {
                        $query = $connect->query("SELECT * FROM `products`");
                    }

                    if ($query->num_rows > 0) {
                        while ($prods = $query->fetch_assoc()) {
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
                                        <button class="btn btn-buy">Reserve</button>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                    } else {
                        echo 'No item';
                    }
                } elseif (isset($_GET["materials"])) {
                    $materialcheck = [];
                    $materialcheck = $_GET["materials"];
                    // Lens Materials for each of the items in the filter sectioning
                    foreach ($materialcheck as $checkmat) {
                        $query = "SELECT * FROM `products` WHERE `lens_id` IN ($checkmat)";
                        $result = mysqli_query($connect, $query);

                        if (mysqli_num_rows($result) > 0) {
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
                                            <button class="btn btn-buy">Reserve</button>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            }
                        } else {
                            echo 'No item';
                        }
                    }
                } elseif (isset($_GET["frames"])) {
                    $framescheck = $_GET["frames"]; // Access the "frames" parameter
                    $framescheck = is_array($framescheck) ? $framescheck : [$framescheck]; // Ensure it's an array
                    // Frames Materials for each of the items in the filter section
                    foreach ($framescheck as $checkframes) {
                        $query = "SELECT * FROM `products` WHERE `frames_id` = $checkframes"; // Use '=' instead of 'IN' for single frame ID
                        $result = mysqli_query($connect, $query);

                        if (mysqli_num_rows($result) > 0) {
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
                                                echo "₱" . $prods['price']; // Concatenate currency symbol and price
                                                ?>
                                            </p>
                                            <button class="btn btn-buy">Reserve</button>
                                        </div>
                                    </div>
                                </div>
                        <?php
                            }
                        } else {
                            echo 'No item';
                        }
                    }
                } else {
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
                                    <button class="btn btn-buy">Reserve</button>
                                </div>
                            </div>
                        </div>
                <?php
                    }
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

    <!-- footer section -->
    <footer>
        <article class="footer-row">
            <div class="info-container">
                <img class="logo" src="../images/PNG/Neoeye Optical Clinic - W.png" alt="NeoEye Logo" />
            </div>
            <div class="info-container">
                <i class="fa-solid fa-location-dot location"></i>
                <p class="address">
                    NeoVision Optical Building,
                    <br />
                    Malinao St., Malabo Mata,
                    <br />
                    Pulang-lupa, Phil.
                </p>
            </div>
            <div class="info-container">
                <i class="fa-solid fa-phone phone"></i>
                <p class="pNumber">(632) 8988-7000</p>
            </div>
            <div class="info-container">
                <i class="fa-solid fa-envelope envelope"></i>
                <p class="eMail">neoeye@gmail.com</p>
            </div>

            <div class="footer-con">
                <h4 class="connect">connect</h4>
                <div class="social-container">
                    <i class="fa-brands fa-facebook"></i>
                    <i class="fa-brands fa-instagram"></i>
                </div>
            </div>
        </article>
        <p class="copyright">&copy; 2023. all rights reserved.</p>
    </footer>
</body>

</html>