<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from eduport.webestica.com/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 30 Aug 2022 00:44:21 GMT -->
<head>
	<title>StudyMate - instructor details</title>

	<!-- Meta Tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="Webestica.com">
	<meta name="description" content="Eduport- LMS, Education and Course Theme">

	<!-- Favicon -->
	<link rel="shortcut icon" href="assets/images/favicon.ico">

	<!-- Google Font -->
	<link rel="preconnect" href="https://fonts.googleapis.com/">
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;700&amp;family=Roboto:wght@400;500;700&amp;display=swap">

	<!-- Plugins CSS -->
	<link rel="stylesheet" type="text/css" href="assets/vendor/font-awesome/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap-icons/bootstrap-icons.css">
	<link rel="stylesheet" type="text/css" href="assets/vendor/tiny-slider/tiny-slider.css">
	<link rel="stylesheet" type="text/css" href="assets/vendor/glightbox/css/glightbox.css">

	<!-- Theme CSS -->
	<link id="style-switch" rel="stylesheet" type="text/css" href="assets/css/style.css">

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-7N7LGGGWT1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'G-7N7LGGGWT1');
	</script>

</head>

<body>

<!-- Header START -->

<header class="navbar-light navbar-sticky header-static">
	<!-- Logo Nav START -->
	<nav class="navbar navbar-expand-xl">
		<div class="container">
			<!-- Logo START -->
			<a class="navbar-brand" href="/home">
				<img class="light-mode-item navbar-brand-item" src="assets/images/light.jpeg" alt="logo">
				<img class="dark-mode-item navbar-brand-item" src="assets/images/dark.png" alt="logo">
			</a>
			<!-- Logo END -->

			<!-- Responsive navbar toggler -->
			<button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-animation">
					<span></span>
					<span></span>
					<span></span>
				</span>
			</button>

			<!-- Main navbar START -->

			<!-- Main navbar END -->

			<!-- Profile START -->

			<!-- Profile START -->
		</div>
	</nav>
	<!-- Logo Nav END -->
</header>


<!-- Header END -->

<!-- **************** MAIN CONTENT START **************** -->

<main>

<!-- =======================
Main part START -->
<section>
	<div class="container">
		<div class="row g-5 justify-content-between">
			<!-- Admission form START -->
			<div class="col-md-8 mx-auto">
				{{-- <!-- Title -->
				<h2 class="mb-3">Apply for Admission</h2>
				<p>You can apply online by filling up below form or <a href="#">Download a pdf</a> and submit. Any question related admission process, please contact our admission office at <a href="#">+123 456 789</a> or <a href="#">example@email.com</a>.</p>
				<p class="mb-1">Before you proceed with the form please read below topics:</p>
				<ul class="ps-3">
					<li>Application fee is $49</li>
					<li>Fees are non-refundable</li>
					<li>Field required with <span class="text-danger">*</span> are required to complete the admission form</li>
				</ul> --}}
				<!-- Form START -->
				<form class="row g-3" action="{{ route('update_user_details') }}" method="POST">
					@csrf
					<h5 class="mb-0">Personal information of lecturers</h5>

					<!-- First name -->
					<div class="col-12">
						<div class="row g-xl-0 align-items-center">
							<div class="col-lg-4">
								<h6 class="mb-lg-0">Lecturer first name <span class="text-danger">*</span></h6>
							</div>
							<div class="col-lg-8">
								<input name="fname" type="text" class="form-control" id="firstName">
							</div>
						</div>
					</div>

					<!-- Middle name -->
					<div class="col-12">
						<div class="row g-xl-0 align-items-center">
							<div class="col-lg-4">
								<h6 class="mb-lg-0">Lecturer middle name <span class="text-danger">*</span></h6>
							</div>
							<div class="col-lg-8">
								<input name="m_name" type="text" class="form-control" id="middleName">
							</div>
						</div>
					</div>

					<!-- Last name -->
					<div class="col-12">
						<div class="row g-xl-0 align-items-center">
							<div class="col-lg-4">
								<h6 class="mb-lg-0">Lecturer last name <span class="text-danger">*</span></h6>
							</div>
							<div class="col-lg-8">
								<input name="lname" type="text" class="form-control" id="lastName">
							</div>
						</div>
					</div>



					<!-- Divider -->
					<hr class="my-5">

					<!-- Education -->
					<h5 class="mt-0">Education</h5>

					<!-- School or college name -->
					<div class="col-12">
						<div class="row g-xl-0 align-items-center">
							<div class="col-lg-4">
								<h6 class="mb-lg-0">Name of Institution <span class="text-danger">*</span></h6>
							</div>
							<div class="col-lg-8">
								<input name="institution" type="text" class="form-control" id="collegeName">
							</div>
						</div>
					</div>

					 <!-- Year of student -->

					<!-- <div class="col-12">
						<div class="row g-xl-0 align-items-center">
							<div class="col-lg-4">
								<h6 class="mb-lg-0">Year of student <span class="text-danger">*</span></h6>
							</div>
							<div class="col-lg-8">
								<select name="year" class="form-select js-choice z-index-9 border-0 bg-light" aria-label=".form-select-sm">
									<option value=""></option>
									<option value="1">first</option>
									<option value="2">second</option>
									<option value="3">third</option>
									<option value="4">fourth</option>

								</select>
							</div>
						</div>
					</div> -->



                    <!--Lecturer title-->

                    <div class="col-12">
						<div class="row g-xl-0 align-items-center">
							<div class="col-lg-4">
								<h6 class="mb-lg-0">Lecturer title <span class="text-danger">*</span></h6>
							</div>
							<div class="col-lg-8">
								<select name="year" class="form-select js-choice z-index-9 border-0 bg-light" aria-label=".form-select-sm">
									<option value=""></option>
									<option value="1">Professor</option>
									<option value="2">Phd</option>
									<option value="3">Mr</option>
									<option value="4">Mrs</option>

								</select>
							</div>
						</div>
					</div>


                     <!--lecturer courses-->
					<div class="col-12">
						<div class="row g-xl-0 align-items-center">
							<div class="col-lg-4">
								<h6 class="mb-lg-0">Study Field <span class="text-danger">*</span></h6>
							</div>
							<div class="col-lg-8">
								<input name="study_field" type="text" class="form-control" id="board">
							</div>
						</div>
					</div>

					{{-- <!-- Class grad -->
					<div class="col-12">
						<div class="row g-xl-0 align-items-center">
							<div class="col-lg-4">
								<h6 class="mb-lg-0">Class grad <span class="text-danger">*</span></h6>
							</div>
							<div class="col-lg-8">
								<select class="form-select js-choice z-index-9" aria-label=".form-select-sm">
									<option value="">Select grad</option>
									<option>Distinction</option>
									<option>First class</option>
									<option>Second class</option>
									<option>Third class</option>
								</select>
							</div>
						</div>
					</div>

					<!-- School or college address -->
					<div class="col-12">
						<div class="row g-xl-0">
							<div class="col-lg-4">
								<h6 class="mb-lg-0">School or college address <span class="text-danger">*</span></h6>
							</div>
							<div class="col-lg-8">
								<textarea class="form-control" rows="3" placeholder=""></textarea>
							</div>
						</div>
					</div> --}}

					<!-- Button -->
					<div class="col-12 text-sm-end">
						<button class="btn btn-primary mb-0" type="submit">Submit</button>
					</div>
				</form>
				<!-- Form END -->
			</div>
			<!-- Admission form END -->
		</div>
	</div>
</section>
<!-- =======================
Main part END -->

</main>




<!-- **************** MAIN CONTENT END **************** -->

<!-- =======================
Footer START -->
<footer class="pt-5">
	<div class="container">
		<!-- Row START -->
		<div class="row g-4">

			<!-- Widget 1 START -->
			<div class="col-lg-3">
				<!-- logo -->
				{{-- <a class="me-0" href="index.html">
					<img class="light-mode-item h-40px" src="assets/images/logo.svg" alt="logo">
					<img class="dark-mode-item h-40px" src="assets/images/logo-light.svg" alt="logo">
				</a> --}}
				<p class="namefoot">Cs Study Mate</p>
				<p class="my-3">Computer Science Studymate is a web application which serves as a social networking platform for all computer science students across the country to share ideas and experiences.....</p>

			</div>
			<!-- Widget 1 END -->

			<!-- Widget 2 START -->
			<div class="col-lg-6">
				<div class="row g-4">


                    <div class="col-6 col-md-4">
                        <h5 class="mb-2 mb-md-4">Contact</h5>
                        <!-- Time -->
                        <p class="mb-2">
                            Tel:<span class="h6 fw-light ms-2">+233 55 545 7963</span>
                            {{-- <span class="d-block small">(9:AM to 8:PM IST)</span> --}}
                        </p>

                        <p class="mb-0">Email:<span class="h6 fw-light ms-2">studymate@gmail.com</span></p>


                    </div>

				</div>
			</div>
			<!-- Widget 2 END -->


		</div><!-- Row END -->

		<!-- Divider -->
		<hr class="mt-4 mb-0">

		<!-- Bottom footer -->
		<div class="py-3">
			<div class="container px-0">
				<div class="d-lg-flex justify-content-between align-items-center py-3 text-center text-md-left">
					<!-- copyright text -->
					<div class="text-primary-hover"> Copyrights <a href="#" class="text-body">©2022 CsStudyMate</a>. All rights reserved. </div>
					<!-- copyright links-->
					<div class="justify-content-center mt-3 mt-lg-0">
						<ul class="nav list-inline justify-content-center mb-0">
							<li class="list-inline-item">
								<!-- Language selector -->
								{{-- <div class="dropup mt-0 text-center text-sm-end">
									<a class="dropdown-toggle nav-link" href="#" role="button" id="languageSwitcher" data-bs-toggle="dropdown" aria-expanded="false">
										<i class="fas fa-globe me-2"></i>Language
									</a>
									<ul class="dropdown-menu min-w-auto" aria-labelledby="languageSwitcher">
										<li><a class="dropdown-item me-4" href="#"><img class="fa-fw me-2" src="assets/images/flags/uk.svg" alt="">English</a></li>
										<li><a class="dropdown-item me-4" href="#"><img class="fa-fw me-2" src="assets/images/flags/gr.svg" alt="">German </a></li>
										<li><a class="dropdown-item me-4" href="#"><img class="fa-fw me-2" src="assets/images/flags/sp.svg" alt="">French</a></li>
									</ul>
								</div> --}}
							{{-- </li>
							<li class="list-inline-item"><a class="nav-link" href="#">Terms of use</a></li>
							<li class="list-inline-item"><a class="nav-link pe-0" href="#">Privacy policy</a></li> --}}
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>
<!-- =======================
Footer END -->

<!-- Back to top -->
<div class="back-top"><i class="bi bi-arrow-up-short position-absolute top-50 start-50 translate-middle"></i></div>

<!-- Bootstrap JS -->
<script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

<!-- Vendors -->
<script src="assets/vendor/tiny-slider/tiny-slider.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.js"></script>
<script src="assets/vendor/purecounterjs/dist/purecounter_vanilla.js"></script>

<!-- Template Functions -->
<script src="assets/js/functions.js"></script>

</body>

<!-- Mirrored from eduport.webestica.com/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 30 Aug 2022 00:44:57 GMT -->
</html>
