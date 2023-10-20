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
	<link rel="stylesheet" href="../css/header.css?v=1">
	<link rel="stylesheet" href="../css/index.css">
	<link rel="stylesheet" href="../css/about.css">
	<link rel="stylesheet" href="../css/footer.css?v=1">
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
									<!-- Dropdown menu links -->
									<li><a class="dropdown-item" href="../php/adminlogin.php">Admin</a></li>
									<li><a class="dropdown-item" href="../php/userlogin.php">Login</a></li>
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
			<h1 class="neoeye-header">About NeoEye Optical</h1>
			<div class="neoeyes-container">
				<div class="neoeye-container">
					<p class="neoeye-para">
						Welcome to NeoEye Optical Clinic, a leading name in the
						Philippines' eye care landscape. Our dedicated team of experienced
						doctors is committed to providing top-tier eye care services to
						our valued patients. Our approach revolves around delivering
						personalized, patient-centered care that caters to the unique
						needs of every individual.
					</p>
					<p class="neoeye-para">
						At NeoEye, we merge our years of expertise with the latest in eye
						care technology to diagnose and treat a wide range of eye
						conditions. Whether you require a routine eye examination,
						precision contact lens fittings, or specialized treatment for an
						eye ailment, we're here to serve you with the utmost
						professionalism and knowledge. Our mission is not only to
						safeguard and improve your eye health but also to empower you
						through informed decision-making, as we believe that well-informed
						patients are more likely to achieve the best outcomes. NeoEye
						Optical Clinic isn't just a place for eye care – it's a sanctuary
						where expertise and compassion merge to enhance your vision and
						protect your ocular well-being. We invite you to experience the
						NeoEye difference.
					</p>
				</div>
				<img class="img-doctor" src="../images/JPG/about_us.jpg" alt="Doctor with stethoscope" />
			</div>
		</section>

		<!-- the why choose neoeye section -->
		<section class="neo">
			<div class='neo-containers'>
				<div class="neo-container">
					<h2 class="neo-text">Why NeoEye Optical?</h2>
					<p class="neo-para">
						We do optical care differently here. We'll give you service with a
						smile, while giving you something to smile about. We know that
						some people dread the dentist, but that's a thing of the past at
						On Point Dental. From our soothing setting, designed with you in
						mind, to our commitment to comfort, everything we do is about
						serving you!
					</p>
				</div>
				<div class="neo-container1">
					<div class="neo-item">
						<h3>Empathy</h3>
						<p>
							Our ability to understand and relate to emotions and concerns of
							our patients.
						</p>
					</div>
					<div class="neo-item">
						<h3>Esthetics</h3>
						<p>
							Our promise to deliver natural appearing results for a long
							lasting healthy smile.
						</p>
					</div>
					<div class="neo-item">
						<h3>Ethical</h3>
						<p>
							Our unbiased explanation of associated risk, benefits and costs
							of treatment.
						</p>
					</div>
					<div class="neo-item">
						<h3>Exceptional</h3>
						<p>
							Our commitment to the highest level of professionalism and
							competency.
						</p>
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
					<button class="info-btn">More Info</button>
				</div>
				<div class="experts-contain">
					<img class="expert-img" src="../images/PNG/Dr.Nimpha.png" alt="" />
					<h3 class="profession">Opthalmologist</h3>
					<h4 class="expert-name">Dr. Nimpha</h4>
					<button class="info-btn">More Info</button>
				</div>
				<div class="experts-contain">
					<img class="expert-img" src="../images/PNG/Dr.Tonio.png" alt="" />
					<h3 class="profession">Opthalmologist</h3>
					<h4 class="expert-name">Dr. Tonio</h4>
					<button class="info-btn">More Info</button>
				</div>
				<div class="experts-contain">
					<img class="expert-img" src="../images/PNG/Dr.Donatello.png" alt="" />
					<h3 class="profession">Opthalmologist</h3>
					<h4 class="expert-name">Dr. Donatello</h4>
					<button class="info-btn">More Info</button>
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