<?php
session_start();
if (!isset($_SESSION["users"])) {
	header("Location: ../php/userlogin.php");
}
if (isset($_SESSION['users'])) {
	$user = $_SESSION['users'];

	function getProfilePicture($name)
	{
		$name_slice = explode(' ', $name);
		$name_slice = array_filter($name_slice);
		$initials = '';
		$initials = (isset($name_slice[0])) ? strtoupper($name_slice[0][0]) : '';
		return '<div class="profile-pic">' . $initials . '</div>';
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
	<link rel="stylesheet" href="../css/header.css?v=1">
	<link rel="stylesheet" href="../css/about.css">
	<link rel="stylesheet" href="../css/index.css">
	<link rel="stylesheet" href="../css/footer.css">
	<title>About Us</title>
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
							<a href="userproducts.php" class="nav-link product-active">Products</a>
						</li>
						<li class="nav-item">
							<a href="userabout.php" class="nav-link about-us-active">About Us</a>
						</li>
						<li class="nav-item">
							<a href="userbooks.php" class="nav-link book">Book Now</a>
						</li>
						<li class="nav-item">
							<div class="dropdown">
								<button class="nav-link path btn dropdown-toggle" type="button"
									data-bs-toggle="dropdown" aria-expanded="false">
									<?php
									echo getProfilePicture($user)
										?>
								</button>
								<ul class="dropdown-menu">
									<!-- Dropdown menu links -->
									<li><a class="dropdown-item" href="userprofile.php">Profile</a></li>
									<li><a class="dropdown-item" href="../php/userlogout.php">Logout</a></li>
								</ul>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</nav>

	<!-- main section -->
	<main class="main">
		<!-- Intro to about section -->
		<section class="neoeye">
			<div class="neoeyes-container">
				<div class="neoeye-container">
					<h1 class="neoeye-header">Neoeye Optical Clinic: Where Your Eyes Come First</h1>
					<p class="neoeye-para">
						Welcome to Neoeye Optical Clinic, a trusted name in the field of eye care in the Philippines. With a team of dedicated doctors, we are committed to providing high-quality eye care services to our valued patients.
					</p>
					<p class="neoeye-para">
						At our clinic we believe in delivering personalized care and attention to each individual. Our experienced doctors utilize the latest technology and techniques to diagnose and treat various eye conditions. whether you need a routine eye examination, contact lenses, or treatment for an eye disease, we are here to serve you with utmost professionalism and expertise.
					</p>
				</div>
				<img class="img-doctor" src="../images/PNG/about_us.png" alt="Doctor with stethoscope" />
			</div>
		</section>

		<!-- the why choose neoeye section -->
		<section class="neo">
			<h2 class="neo-text">Why Neoeye Optical Clinic?</h2>
			<div class='neo-containers'>
				<img class="img-girl" src="../images/PNG/girl_wearing_glasses.png" alt="Girl with glasses">
				<div class="neo-container">
					<p class="neo-para paragraph">
						We do optical care differently here. We'll give you service with a
						smile, while giving you something to smile about. We know that
						some people dread the dentist, but that's a thing of the past at
						On Point Dental. From our soothing setting, designed with you in
						mind, to our commitment to comfort, everything we do is about
						serving you!
					</p>
					<div class="neo-ethics">
						<div class="neo-ethic">
							<div class="neo-item">
								<h5>Empathy</h5>
								<p class="neo-para">
									Our ability to understand and relate to emotions and concerns of
									our patients.
								</p>
							</div>
							<div class="neo-item">
								<h5>Esthetics</h5>
								<p class="neo-para">
									Our promise to deliver natural appearing results for a long
									lasting healthy smile.
								</p>
							</div>
						</div>
						<div class="neo-ethic">
							<div class="neo-item">
								<h5>Ethical</h5>
								<p class="neo-para">
									Our unbiased explanation of associated risk, benefits and costs
									of treatment.
								</p>
							</div>
							<div class="neo-item">
								<h5>Exceptional</h5>
								<p class="neo-para">
									Our commitment to the highest level of professionalism and
									competency.
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- the experts section -->
		<section class="experts">
			<h2 class='expert-text'>Meet Our Experts</h2>
			<div class="expert-container">
				<div class="experts-contain">
					<img class="expert-img" src="../images/PNG/Dr.Jimbo.png" alt="" />
					<h3 class="profession">Opthalmologist</h3>
					<h4 class="expert-name">Dr. Jimbo</h4>
				</div>
				<div class="experts-contain">
					<img class="expert-img" src="../images/PNG/Dr.Nimpha.png" alt="" />
					<h3 class="profession">Opthalmologist</h3>
					<h4 class="expert-name">Dr. Nimpha</h4>
				</div>
				<div class="experts-contain">
					<img class="expert-img" src="../images/PNG/Dr.Tonio.png" alt="" />
					<h3 class="profession">Opthalmologist</h3>
					<h4 class="expert-name">Dr. Tonio</h4>
				</div>
				<div class="experts-contain">
					<img class="expert-img" src="../images/PNG/Dr.Donatello.png" alt="" />
					<h3 class="profession">Opthalmologist</h3>
					<h4 class="expert-name">Dr. Donatello</h4>
				</div>
			</div>
		</section>
	</main>


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