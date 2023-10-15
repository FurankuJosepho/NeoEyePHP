<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
	<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
	<link rel="stylesheet" href="css/header.css">
	<link rel="stylesheet" href="css/home.css">
	<link rel="stylesheet" href="css/index.css">
	<link rel="stylesheet" href="css/footer.css">
	<title>Home</title>
</head>

<body>
	<nav class="navbar navbar-expand-md">
		<div class="container-fluid">
			<a href="index.php" class="navbar-brand text-white NavTitle">
				Neo Eye Optical Clinic
			</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<i class="bi bi-list"></i>
			</button>

			<div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a href="pages/products.php" class="nav-link text-white">Products</a>
					</li>
					<li class="nav-item">
						<a href="pages/about.php" class="nav-link text-white">About Us</a>
					</li>
					<li class="nav-item">
						<a href="pages/book.php" class="nav-link text-white bookNow">Book Now</a>
					</li>
					<li class="nav-item">
						<a href="pages/login.php" class="nav-link text-white">
							<svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
								<path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
								<path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
							</svg>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- main section -->
	<main class="main">
		<!-- Slider main container -->
		<div class="swiper">
			<!-- Additional required wrapper -->
			<div class="swiper-wrapper">
				<!-- Slides -->
				<div class="swiper-slide" data-swiper-autoplay="2000"><img src="../NeoEyePHP/images/JPG/slider1.jpg" alt="Slider 1"></div>
				<div class="swiper-slide"><img src="../NeoEyePHP/images/JPG/slider2.jpg" alt="Slider 2"></div>
			</div>
			<!-- If we need pagination -->
			<div class="swiper-pagination"></div>
			<!-- If we need navigation buttons -->
			<div class="swiper-button-prev"></div>
			<div class="swiper-button-next"></div>
		</div>

		<!-- info section -->
		<section class="paragraph-container">
			<p class="paragraph-item1">
				Introducing NeoEye Optical Clinic - the leading destination for
				exceptional eye care in the Philippines. Our team of highly skilled
				doctors is dedicated to providing top-notch vision solutions and
				personalized care to every patient who walks through our doors. With a
				commitment to excellence and the latest advancements in eye care
				technology, we strive to enhance your vision and improve your overall
				eye health.
			</p>
			<p class="paragraph-item2">
				Located in the heart of the Philippines, our clinic offers a
				comprehensive range of services, including eye examinations, contact
				lens fittings, and treatment for various eye conditions. Whether you
				need a routine check-up or specialized care, our experienced doctors
				will ensure that you receive the highest level of care tailored to
				your unique needs. Trust NeoEye Optical Clinic for exceptional eye
				care that goes beyond expectations.
			</p>
		</section>
		<!-- service section -->
		<section class="service-container">
			<div class="service-contain">
				<h2 class='service-text'>services</h2>
				<div class="cards-container">
					<div class="card-container">
						<img class="card-img" src="images/JPG/Consultation_Diagnostics.jpg" alt="Consultation and Diagnostics Service" />
						<div class='service'>
							<h3 class="sevice-item">consultation/diagnostics</h3>
							<p>A comprehensive medical examination that covers your overall health, including laboratory tests and consultations.</p>
						</div>
					</div>
					<div class="card-container">
						<img class="card-img" src="images/JPG/Eye Care Service.jpg" alt="Eye Care Service" />
						<div class='service'>
							<h3 class="sevice-item">eye care service</h3>
							<p>Protection from common diseases through vaccination, including guidance on the right vaccines for you and your family.</p>
						</div>
					</div>
					<div class="card-container">
						<img class="card-img" src="images/JPG/Eyewears.jpg" alt="Eyewears" />
						<div class='service'>
							<h3 class="sevice-item">eyewears</h3>
							<p>Customized treatment plans made for patients with long-term illnesses, including regular monitoring and check-ups.</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- testimonial section -->
		<section class="testimonial-container">
			<h2 class="testimonial-text">testimonial</h2>
			<div class="comment-container">
				<div class="comment-item">
					<p class="testi-para">NeoEye Optical Clinic is the best! The doctors are knowledgeable and friendly. They made me feel comfortable and answered all my questions. I highly recommend them for all your eye care needs. Thank you for the great service!</p>
					<h5>
						<span>-Lena</span>
					</h5>
				</div>
				<div class="comment-item">
					<p class="testi-para">Legit lens cleaner! Good quality, well-package and shipped immediately. I don't need to go to mall or to any branch for this. Thank you and God bless.</p>
					<h5>
						<span>-Frank</span>
					</h5>
				</div>
				<div class="comment-item">
					<p class="testi-para">Very affordable contact lens solution! Eto palagi ko binibili and hindi sya naka ka irritate sa mata</p>
					<h5>
						<span>-Ara</span>
					</h5>
				</div>
				<div class="comment-item">
					<p class="testi-para">Effective! I immediately tested the moment I've received it. I'm completely satisfied with its effectivity. Just follow the instructions. See the difference from the photos. Right lens-i wiped the anti-fog cloth, while the left lens, i didn't.</p>
					<h5>
						<span>-Ian</span>
					</h5>
				</div>
			</div>
		</section>
		<!-- footer section -->
		<footer class="footer">
			<article class="footer-row">
				<div class="footer-col colsan">
					<img class="logo" src="images/Logo.png" alt="NeoEye Logo" />
				</div>
				<div class="footer-col">
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
				</div>
				<div class="footer-col">
					<div class="service-container">
						<h4 class="customer-service">services</h4>
						<ul class="links">
							<li class="link">Consultation/Diagnostics</li>
							<li class="link">Eye care services</li>
							<li class="link">Eyewears</li>
						</ul>
					</div>
					<div class="aboutUs-container">
						<h4 class="about-us">about us</h4>
						<ul class="links">
							<li class="link">Mission and Vision</li>
							<li class="link">Board of Directors</li>
						</ul>
					</div>
				</div>
				<div class="footer-col">
					<h4 class="connect">connect</h4>
					<div class="social-container">
						<i class="fa-brands fa-facebook"></i>
						<i class="fa-brands fa-instagram"></i>
					</div>
				</div>
			</article>
			<p class="copyright">&copy; 2023. all rights reserved.</p>
		</footer>
	</main>
	<script>
		const swiper = new Swiper('.swiper', {
			speed: 400,
			spaceBetween: 10,
			slidesPerView: 1,
			pagination: {
				el: '.swiper-pagination',
				type: 'bullets',
				clickable: true
			},
			navigation: {
				nextE1: '.swiper-button-next',
				prevE1: '.swiper-button-prev'
			},
			autoplay: {
				delay: 3500
			}
		});
	</script>
</body>

</html>