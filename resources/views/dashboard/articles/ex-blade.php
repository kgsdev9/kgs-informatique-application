<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" type="image/png" href="img/icon.png">
		<title>Edutree – Online Course & Education HTML5 Template</title>
		<meta name="description" content="Edutree" />
		<meta name="keywords" content="Edutree" />
		<link href="css/style.css" rel="stylesheet">
		<link href="vendor/slick/slick/slick.css" rel="stylesheet">
		<link href="vendor/slick/slick/slick-theme.css" rel="stylesheet">
		<link href="vendor/icofont/icofont.min.css" rel="stylesheet">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
	</head>
	<body class="bg-light">
		<nav class="navbar navbar-expand-lg navbar-dark bg-primary p-0 main-header-nav" id="nav-bar">
			<div class="container">
				<a href="index.html" class="brand d-flex align-items-center mb-0 text-decoration-none me-4 fw-bold h4 text-white"><img src="img/logo.png" alt class="img-fluid d-inline-block align-text-center me-2 rounded-pill border shadow" alt="Edutree" />Edutree</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mx-auto gap-2 mb-2 mb-lg-0">
						<li class="nav-item mx-2"><a class="nav-link px-0 py-4 active" href="index.html">Home</a></li>
						<li class="nav-item mx-2"><a class="nav-link px-0 py-4" href="about.html">About</a></li>
						<li class="nav-item mx-2 dropdown">
							<a class="nav-link dropdown-toggle px-0 py-4" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Courses</a>
							<ul class="dropdown-menu m-0 border-0 shadow-sm p-2">
								<li><a class="dropdown-item px-3 py-2 rounded" href="courses.html">All Courses</a></li>
								<li><a class="dropdown-item px-3 py-2 rounded" href="courses-detail.html">Courses Detail</a></li>
								<li><a class="dropdown-item px-3 py-2 rounded" href="successful.html">Order Successful</a></li>
							</ul>
						</li>
						<li class="nav-item mx-2 dropdown">
							<a class="nav-link dropdown-toggle px-0 py-4" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Instructor</a>
							<ul class="dropdown-menu m-0 border-0 shadow-sm p-2">
								<li><a class="dropdown-item px-3 py-2 rounded" href="dashboard.html">Profile</a></li>
								<li><a class="dropdown-item px-3 py-2 rounded" href="instructor-earnings.html">Earnings</a></li>
								<li><a class="dropdown-item px-3 py-2 rounded" href="instructor-my-courses.html">My Courses</a></li>
								<li><a class="dropdown-item px-3 py-2 rounded" href="instructor-orders.html">Orders</a></li>
								<li><a class="dropdown-item px-3 py-2 rounded" href="instructor-payouts.html">Payouts</a></li>
								<li><a class="dropdown-item px-3 py-2 rounded" href="instructor-reviews.html">Reviews</a></li>
								<li><a class="dropdown-item px-3 py-2 rounded" href="instructor-students.html">Students</a></li>
							</ul>
						</li>
						<li class="nav-item mx-2 dropdown">
							<a class="nav-link dropdown-toggle px-0 py-4" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Student</a>
							<ul class="dropdown-menu m-0 border-0 shadow-sm p-2">
								<li><a class="dropdown-item px-3 py-2 rounded" href="student-billing-info.html">Billing Info</a></li>
								<li><a class="dropdown-item px-3 py-2 rounded" href="student-delete-profile.html">Delete Profile</a></li>
								<li><a class="dropdown-item px-3 py-2 rounded" href="student-edit-profile.html">Edit Profile</a></li>
								<li><a class="dropdown-item px-3 py-2 rounded" href="student-invoice.html">Invoice</a></li>
								<li><a class="dropdown-item px-3 py-2 rounded" href="student-linked-accounts.html">Linked Accounts</a></li>
								<li><a class="dropdown-item px-3 py-2 rounded" href="student-notifications.html">Notifications</a></li>
								<li><a class="dropdown-item px-3 py-2 rounded" href="student-payment.html">Payment</a></li>
								<li><a class="dropdown-item px-3 py-2 rounded" href="student-profile-privacy.html">Profile Privacy</a></li>
								<li><a class="dropdown-item px-3 py-2 rounded" href="student-security.html">Security</a></li>
								<li><a class="dropdown-item px-3 py-2 rounded" href="student-social-profiles.html">Social Profiles</a></li>
								<li><a class="dropdown-item px-3 py-2 rounded" href="student-subscriptions.html">Subscriptions</a></li>
							</ul>
						</li>
						<li class="nav-item mx-2 dropdown">
							<a class="nav-link dropdown-toggle px-0 py-4" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Extra Pages</a>
							<ul class="dropdown-menu m-0 border-0 shadow-sm p-2">
								<li><a class="dropdown-item px-3 py-2 rounded" href="signin.html">Login</a></li>
								<li><a class="dropdown-item px-3 py-2 rounded" href="signup.html">Signup</a></li>
								<li><a class="dropdown-item px-3 py-2 rounded" href="forgot.html">Forgot</a></li>
								<li><a class="dropdown-item px-3 py-2 rounded" href="faq.html">FAQ</a></li>
								<li><a class="dropdown-item px-3 py-2 rounded" href="careers.html">Careers</a></li>
								<li><a class="dropdown-item px-3 py-2 rounded" href="testimonials.html">Testimonials</a></li>
								<li><a class="dropdown-item px-3 py-2 rounded" href="terms-and-conditions.html">Terms & Conditions</a></li>
								<li><a class="dropdown-item px-3 py-2 rounded" href="privacy-policy.html">Privacy Policy</a></li>
								<li><a class="dropdown-item px-3 py-2 rounded" href="404.html">Not Found 404</a></li>
							</ul>
						</li>
						<li class="nav-item mx-2"><a class="nav-link px-0 py-4" href="contact.html">Contact</a></li>
					</ul>
					<div class="d-flex gap-1 align-items-center main-header-nav-right">
						<a href="signin.html" class="btn text-decoration-none text-white rounded-pill border-0">Log In</a>
						<a href="signup.html" type="button" class="btn btn-success rounded-pill">Sign up</a>
					</div>
				</div>
			</div>
		</nav>
		<section class="pt-5 bg-primary">
			<div class="container py-5 px-5 text-center">
				<div class="row gx-5 justify-content-center">
					<div class="col-lg-8">
						<h1 class="text-white display-5 mb-2 fw-bold">Want to join Team Edutree</h1>
						<p class="lead text-white-50 m-0">
							Check out our openings below
						</p>
					</div>
				</div>
			</div>
			<div class="svg-border-rounded text-light">
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 144.54 17.34" preserveAspectRatio="none" fill="currentColor">
					<path d="M144.54,17.34H0V0H144.54ZM0,0S32.36,17.34,72.27,17.34,144.54,0,144.54,0"></path>
				</svg>
			</div>
		</section>
		<div class="container py-5">
			<div class="row py-5">
				<div class="col-lg-3">
					<div class="sidebar-fixed">
						<nav class="navbar sidebar-dash navbar-expand-md navbar-light shadow-sm mb-4 mb-lg-0 sidenav navbar navbar-expand-lg navbar-light">
							<a class="d-xl-none d-lg-none d-md-none text-inherit fw-bold fs-5 float-start py-1" href="dashboard.html">Menu</a>
							<button data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" class="p-0 focus-none border-0 navbar-toggler collapsed">
								<span class="navbar-toggler d-md-none icon-shape icon-sm rounded bg-primary p-0 text-white float-end"><span class="fe fe-menu"></span></span>
							</button>
							<div class="navbar-collapse collapse" id="navbarNav">
								<ul class="me-auto flex-column navbar-nav">
									<li class="navbar-header nav-item">Extra Pages</li>
									<li class="nav-item">
										<a class="nav-link" href="about.html"><i class="fe fe-user nav-icon"></i> About Us</a>
									</li>
									<li class="nav-item active">
										<a class="nav-link" href="careers.html"><i class="fe fe-briefcase nav-icon"></i> Careers</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="testimonials.html"><i class="fe fe-mail nav-icon"></i> Testimonials</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="contact.html"><i class="fe fe-phone nav-icon"></i> Contact Us</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="terms-and-conditions.html"><i class="fe fe-file nav-icon"></i> Terms & Conditions</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="privacy-policy.html"><i class="fe fe-lock nav-icon"></i> Privacy Policy</a>
									</li>
								</ul>
							</div>
						</nav>
					</div>
				</div>
				<div class="col-lg-9 job-page">
					<div class="row row-cols-1 row-cols-md-2 row-cols-lg-2 g-4">
						<div class="col">
							<div class="bg-white d-flex position-relative gap-3 rounded-3 shadow-sm overflow-hidden">
								<div class="w-100">
									<div class="p-3">
										<h5 class="mb-2 text-black d-flex align-items-center">
											<span class="h5 m-0 fw-bold text-primary">UI/UX Designer</span>
											<span class="badge bg-success ms-auto small">Open</span>
										</h5>
										<div class="fs-7 mb-0 d-flex small align-items-center">
											<i class="icofont-briefcase me-1"></i>
											 Job Type: Halftime
											<div class="mx-2"></div>
											<i class="icofont-badge me-1"></i>
											 Experience: 2 - 3 Years
										</div>
									</div>
									<div class="border-top d-flex align-items-center w-100">
										<small class="me-auto px-3">
											<i class="icofont-pin me-1"></i>
											 Remote - US (San Francisco, CA)
										</small>
										<a href="#job-form" class="btn btn-primary btn-sm shadow-sm rounded-0"><span>APPLY NOW</span></a>
									</div>
								</div>
							</div>
						</div>
						<div class="col">
							<div class="bg-white d-flex position-relative gap-3 rounded-3 shadow-sm overflow-hidden">
								<div class="w-100">
									<div class="p-3">
										<h5 class="mb-2 text-black d-flex align-items-center">
											<span class="h5 m-0 fw-bold text-primary">Full Stack Developer</span>
											<span class="badge bg-success ms-auto small">Open</span>
										</h5>
										<div class="fs-7 mb-0 d-flex small align-items-center">
											<i class="icofont-briefcase me-1"></i>
											 Job Type: Permanent
											<div class="mx-2"></div>
											<i class="icofont-badge me-1"></i>
											 Experience: 1 - 7 Years
										</div>
									</div>
									<div class="border-top d-flex align-items-center w-100">
										<small class="me-auto px-3">
											<i class="icofont-pin me-1"></i>
											 San Francisco, CA (HQ)
										</small>
										<a href="#job-form" class="btn btn-primary btn-sm shadow-sm rounded-0"><span>APPLY NOW</span></a>
									</div>
								</div>
							</div>
						</div>
						<div class="col">
							<div class="bg-white d-flex position-relative gap-3 rounded-3 shadow-sm overflow-hidden">
								<div class="w-100">
									<div class="p-3">
										<h5 class="mb-2 text-black d-flex align-items-center">
											<span class="h5 m-0 fw-bold text-primary">Technical Support Engineer</span>
											<span class="badge bg-danger ms-auto small">Closed</span>
										</h5>
										<div class="fs-7 mb-0 d-flex small align-items-center">
											<i class="icofont-briefcase me-1"></i>
											 Job Type: Permanent
											<div class="mx-2"></div>
											<i class="icofont-ui-calendar me-1"></i>
											 Deadline: Oct 31, 2022
										</div>
									</div>
									<div class="border-top d-flex align-items-center w-100">
										<small class="me-auto px-3">
											<i class="icofont-pin me-1"></i>
											 Dallas, TX
										</small>
										<a href="#job-form" class="btn btn-primary btn-sm shadow-sm rounded-0"><span>APPLY NOW</span></a>
									</div>
								</div>
							</div>
						</div>
						<div class="col">
							<div class="bg-white d-flex position-relative gap-3 rounded-3 shadow-sm overflow-hidden">
								<div class="w-100">
									<div class="p-3">
										<h5 class="mb-2 text-black d-flex align-items-center">
											<span class="h5 m-0 fw-bold text-primary">Senior Web Application</span>
											<span class="badge bg-success ms-auto small">Open</span>
										</h5>
										<div class="fs-7 mb-0 d-flex small align-items-center">
											<i class="icofont-briefcase me-1"></i>
											 Job Type: Permanent
											<div class="mx-2"></div>
											<i class="icofont-badge me-1"></i>
											 Experience: 5 - 7 Years
										</div>
									</div>
									<div class="border-top d-flex align-items-center w-100">
										<small class="me-auto px-3">
											<i class="icofont-pin me-1"></i>
											 Remote - US / Canada
										</small>
										<a href="#job-form" class="btn btn-primary btn-sm shadow-sm rounded-0"><span>APPLY NOW</span></a>
									</div>
								</div>
							</div>
						</div>
						<div class="col">
							<div class="bg-white d-flex position-relative gap-3 rounded-3 shadow-sm overflow-hidden">
								<div class="w-100">
									<div class="p-3">
										<h5 class="mb-2 text-black d-flex align-items-center">
											<span class="h5 m-0 fw-bold text-primary">UI/UX Designer</span>
											<span class="badge bg-success ms-auto small">Open</span>
										</h5>
										<div class="fs-7 mb-0 d-flex small align-items-center">
											<i class="icofont-briefcase me-1"></i>
											 Job Type: Halftime
											<div class="mx-2"></div>
											<i class="icofont-badge me-1"></i>
											 Experience: 2 - 3 Years
										</div>
									</div>
									<div class="border-top d-flex align-items-center w-100">
										<small class="me-auto px-3">
											<i class="icofont-pin me-1"></i>
											 Remote - US (San Francisco, CA)
										</small>
										<a href="#job-form" class="btn btn-primary btn-sm shadow-sm rounded-0"><span>APPLY NOW</span></a>
									</div>
								</div>
							</div>
						</div>
						<div class="col">
							<div class="bg-white d-flex position-relative gap-3 rounded-3 shadow-sm overflow-hidden">
								<div class="w-100">
									<div class="p-3">
										<h5 class="mb-2 text-black d-flex align-items-center">
											<span class="h5 m-0 fw-bold text-primary">Senior Web Application</span>
											<span class="badge bg-success ms-auto small">Open</span>
										</h5>
										<div class="fs-7 mb-0 d-flex small align-items-center">
											<i class="icofont-briefcase me-1"></i>
											 Job Type: Permanent
											<div class="mx-2"></div>
											<i class="icofont-badge me-1"></i>
											 Experience: 5 - 7 Years
										</div>
									</div>
									<div class="border-top d-flex align-items-center w-100">
										<small class="me-auto px-3">
											<i class="icofont-pin me-1"></i>
											 Remote - US / Canada
										</small>
										<a href="#job-form" class="btn btn-primary btn-sm shadow-sm rounded-0"><span>APPLY NOW</span></a>
									</div>
								</div>
							</div>
						</div>
						<div class="col">
							<div class="bg-white d-flex position-relative gap-3 rounded-3 shadow-sm overflow-hidden">
								<div class="w-100">
									<div class="p-3">
										<h5 class="mb-2 text-black d-flex align-items-center">
											<span class="h5 m-0 fw-bold text-primary">Full Stack Developer</span>
											<span class="badge bg-success ms-auto small">Open</span>
										</h5>
										<div class="fs-7 mb-0 d-flex small align-items-center">
											<i class="icofont-briefcase me-1"></i>
											 Job Type: Permanent
											<div class="mx-2"></div>
											<i class="icofont-badge me-1"></i>
											 Experience: 1 - 7 Years
										</div>
									</div>
									<div class="border-top d-flex align-items-center w-100">
										<small class="me-auto px-3">
											<i class="icofont-pin me-1"></i>
											 San Francisco, CA (HQ)
										</small>
										<a href="#job-form" class="btn btn-primary btn-sm shadow-sm rounded-0"><span>APPLY NOW</span></a>
									</div>
								</div>
							</div>
						</div>
						<div class="col">
							<div class="bg-white d-flex position-relative gap-3 rounded-3 shadow-sm overflow-hidden">
								<div class="w-100">
									<div class="p-3">
										<h5 class="mb-2 text-black d-flex align-items-center">
											<span class="h5 m-0 fw-bold text-primary">Technical Support Engineer</span>
											<span class="badge bg-danger ms-auto small">Closed</span>
										</h5>
										<div class="fs-7 mb-0 d-flex small align-items-center">
											<i class="icofont-briefcase me-1"></i>
											 Job Type: Permanent
											<div class="mx-2"></div>
											<i class="icofont-ui-calendar me-1"></i>
											 Deadline: Oct 31, 2022
										</div>
									</div>
									<div class="border-top d-flex align-items-center w-100">
										<small class="me-auto px-3">
											<i class="icofont-pin me-1"></i>
											 Dallas, TX
										</small>
										<a href="#job-form" class="btn btn-primary btn-sm shadow-sm rounded-0"><span>APPLY NOW</span></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div id="job-form" class="Edutree-card bg-white shadow-sm overflow-hidden rounded-3 mt-4">
						<div class="Edutree-card-header py-3 px-4 text-black border-bottom">
							<span class="fs-5 fw-bold">Apply for this job</span>
							<p class="mb-0 mt-1 text-muted">
								Please fill out the form below or email your resume
								<a href="#"><span class="__cf_email__" data-cfemail="2340425146465163664756575146460d404c4e">[email&#160;protected]</span></a>
							</p>
						</div>
						<div class="Edutree-card-body p-4">
							<div class="row">
								<div class="mb-3 col-lg-6">
									<label class="form-label small">Name <small class="text-danger">*</small></label>
									<input type="text" class="form-control" placeholder="Enter Your Name">
								</div>
								<div class="mb-3 col-lg-6">
									<label class="form-label small">Phone <small class="text-danger">*</small></label>
									<input type="number" class="form-control" placeholder="Enter Your Phone Number">
								</div>
							</div>
							<div class="row">
								<div class="mb-3 col-lg-6">
									<label class="form-label small">Email <small class="text-danger">*</small></label>
									<input type="number" class="form-control" placeholder="Enter Your Email">
								</div>
								<div class="mb-3 col-lg-6">
									<label class="form-label small">Linkedin URL <small class="text-danger">*</small></label>
									<input type="text" class="form-control" placeholder="Your Linkedin URL">
								</div>
							</div>
							<div class="row">
								<div class="mb-3 col-6">
									<label class="form-label small">CV Upload <small class="text-danger">*</small></label>
									<input class="form-control" type="file" id="formFile">
								</div>
								<div class="mb-3 col-6">
									<label class="form-label small">Select Job Role <small class="text-danger">*</small></label>
									<select class="form-select" aria-label="Default select example">
										<option value="Social Media Marketing">Select Job Role</option>
										<option value="Social Media Marketing">Social Media Marketing</option>
										<option value="Web Designer">Web Designer</option>
										<option value="Php Developer">Php Developer</option>
										<option value="Business Development Manager">Business Development Manager</option>
										<option value="Marketing Executive">Marketing Executive</option>
										<option value="Graphic Designer">Graphic Designer</option>
										<option value="Other">Other</option>
									</select>
								</div>
							</div>
							<div class="row">
								<div class="mb-0">
									<label class="form-label small">Message</label>
									<textarea class="form-control" rows="3"></textarea>
								</div>
							</div>
						</div>
						<div class="Edutree-card-footer border-top py-3 px-4 text-end">
							<a href="#" class="btn btn-primary">APPLY NOW</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="bg-white border-top border-bottom cities-footer">
			<div>
				<div class="container">
					<a class="w-100 text-body text-decoration-none py-3 d-block" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
						<div class="d-flex flex-wrap justify-content-between align-items-center py-1">
							<h6 class="m-0 h5 text-dark fw-bold">
								POPULAR CATEGORIES
							</h6>
							<small>
								SEE ALL CATEGORIES
								<i class="icofont-rounded-down border p-1 ms-2 rounded-3"></i>
							</small>
						</div>
					</a>
				</div>
			</div>
			<div class="collapse border-top" id="collapseExample">
				<div class="container py-4">
					<div class="row">
						<div class="col-6 col-lg-3 col-md-3">
							<a class="py-1 text-decoration-none d-block w-100 link-dark" href="courses.html">llustration courses</a>
						</div>
						<div class="col-6 col-lg-3 col-md-3">
							<a class="py-1 text-decoration-none d-block w-100 link-dark" href="courses.html">Craft courses</a>
						</div>
						<div class="col-6 col-lg-3 col-md-3">
							<a class="py-1 text-decoration-none d-block w-100 link-dark" href="courses.html">Marketing & Business courses</a>
						</div>
						<div class="col-6 col-lg-3 col-md-3">
							<a class="py-1 text-decoration-none d-block w-100 link-dark" href="courses.html">Photography & Video courses</a>
						</div>
						<div class="col-6 col-lg-3 col-md-3">
							<a class="py-1 text-decoration-none d-block w-100 link-dark" href="courses.html">Design courses</a>
						</div>
						<div class="col-6 col-lg-3 col-md-3">
							<a class="py-1 text-decoration-none d-block w-100 link-dark" href="courses.html">3D & Animation courses</a>
						</div>
						<div class="col-6 col-lg-3 col-md-3">
							<a class="py-1 text-decoration-none d-block w-100 link-dark" href="courses.html">Architecture & Spaces courses</a>
						</div>
						<div class="col-6 col-lg-3 col-md-3">
							<a class="py-1 text-decoration-none d-block w-100 link-dark" href="courses.html">Web & App Design courses</a>
						</div>
						<div class="col-6 col-lg-3 col-md-3">
							<a class="py-1 text-decoration-none d-block w-100 link-dark" href="courses.html">llustration courses</a>
						</div>
						<div class="col-6 col-lg-3 col-md-3">
							<a class="py-1 text-decoration-none d-block w-100 link-dark" href="courses.html">Craft courses</a>
						</div>
						<div class="col-6 col-lg-3 col-md-3">
							<a class="py-1 text-decoration-none d-block w-100 link-dark" href="courses.html">Marketing & Business courses</a>
						</div>
						<div class="col-6 col-lg-3 col-md-3">
							<a class="py-1 text-decoration-none d-block w-100 link-dark" href="courses.html">Photography & Video courses</a>
						</div>
						<div class="col-6 col-lg-3 col-md-3">
							<a class="py-1 text-decoration-none d-block w-100 link-dark" href="courses.html">Design courses</a>
						</div>
						<div class="col-6 col-lg-3 col-md-3">
							<a class="py-1 text-decoration-none d-block w-100 link-dark" href="courses.html">3D & Animation courses</a>
						</div>
						<div class="col-6 col-lg-3 col-md-3">
							<a class="py-1 text-decoration-none d-block w-100 link-dark" href="courses.html">Architecture & Spaces courses</a>
						</div>
						<div class="col-6 col-lg-3 col-md-3">
							<a class="py-1 text-decoration-none d-block w-100 link-dark" href="courses.html">Web & App Design courses</a>
						</div>
						<div class="col-6 col-lg-3 col-md-3">
							<a class="py-1 text-decoration-none d-block w-100 link-dark" href="courses.html">Writing courses</a>
						</div>
						<div class="col-6 col-lg-3 col-md-3">
							<a class="py-1 text-decoration-none d-block w-100 link-dark" href="courses.html">Calligraphy & Typography courses</a>
						</div>
						<div class="col-6 col-lg-3 col-md-3">
							<a class="py-1 text-decoration-none d-block w-100 link-dark" href="courses.html">Fashion courses</a>
						</div>
						<div class="col-6 col-lg-3 col-md-3">
							<a class="py-1 text-decoration-none d-block w-100 link-dark" href="courses.html">Music & Audio courses</a>
						</div>
						<div class="col-6 col-lg-3 col-md-3">
							<a class="py-1 text-decoration-none d-block w-100 link-dark" href="courses.html">Writing courses</a>
						</div>
						<div class="col-6 col-lg-3 col-md-3">
							<a class="py-1 text-decoration-none d-block w-100 link-dark" href="courses.html">Calligraphy & Typography courses</a>
						</div>
						<div class="col-6 col-lg-3 col-md-3">
							<a class="py-1 text-decoration-none d-block w-100 link-dark" href="courses.html">Fashion courses</a>
						</div>
						<div class="col-6 col-lg-3 col-md-3">
							<a class="py-1 text-decoration-none d-block w-100 link-dark" href="courses.html">Music & Audio courses</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="py-5 footer bg-white">
			<div>
				<div class="container py-3">
					<div class="row">
						<div class="col-md-12 col-lg-2 col-6 order-1 order-md-0">
							<a href="index.html" class="brand d-flex align-items-center mb-0 text-decoration-none me-4 fw-bold h5 text-black"><img src="img/logo.png" alt class="img-fluid d-inline-block align-text-center me-2 rounded-pill">Edutree</a>
							<div class="text-muted my-3 py-1">
								<small>
									All rights recerved
								</small>
								<span class="small">“Be open to new ideas and approaches. Develop your problem-solving skills.”</span>
							</div>
							<div class="d-flex gap-3 h5 m-0">
								<a href="#" class="link-dark"><i class="bi bi-linkedin"></i></a>
								<a href="#" class="link-dark"><i class="bi bi-facebook"></i></a>
								<a href="#" class="link-dark"><i class="bi bi-github"></i></a>
								<a href="#" class="link-dark"><i class="bi bi-instagram"></i></a>
							</div>
						</div>
						<div class="col-md-6 col-lg-2 col-6 offset-lg-1 mb-lg-0 mb-3">
							<h6 class="pb-2">
								Company
							</h6>
							<a class="py-1 text-decoration-none d-block w-100 link-dark" href="about.html">About</a>
							<a class="py-1 text-decoration-none d-block w-100 link-dark" href="courses.html">All Courses</a>
							<a class="py-1 text-decoration-none d-block w-100 link-dark" href="careers.html">Careers</a>
							<a class="py-1 text-decoration-none d-block w-100 link-dark" href="student-edit-profile.html">Account</a>
							<a class="py-1 text-decoration-none d-block w-100 link-dark" href="testimonials.html">Testimonials</a>
							<a class="py-1 text-decoration-none d-block w-100 link-dark" href="contact.html">Contact Us</a>
						</div>
						<div class="col-md-6 col-lg-2 col-6">
							<h6 class="pb-2">
								Categories
							</h6>
							<a class="py-1 text-decoration-none d-block w-100 link-dark" href="courses.html">Illustration courses</a>
							<a class="py-1 text-decoration-none d-block w-100 link-dark" href="courses.html">Craft courses</a>
							<a class="py-1 text-decoration-none d-block w-100 link-dark" href="courses.html">Marketing & Business</a>
							<a class="py-1 text-decoration-none d-block w-100 link-dark" href="courses.html">Photography & Video</a>
							<a class="py-1 text-decoration-none d-block w-100 link-dark" href="courses.html">Design courses</a>
							<a class="py-1 text-decoration-none d-block w-100 link-dark" href="courses.html">3D & Animation</a>
							<a class="py-1 text-decoration-none d-block w-100 link-dark" href="courses.html">Architecture & Spaces</a>
						</div>
						<div class="col-md-12 col-lg-2 col-12 mb-lg-0 mb-3">
							<h6 class="pb-2">
								Software
							</h6>
							<a class="py-1 text-decoration-none d-block w-100 link-dark" href="courses.html">Adobe Photoshop</a>
							<a class="py-1 text-decoration-none d-block w-100 link-dark" href="courses.html">Adobe Illustrator</a>
							<a class="py-1 text-decoration-none d-block w-100 link-dark" href="courses.html">Adobe After Effects</a>
							<a class="py-1 text-decoration-none d-block w-100 link-dark" href="courses.html">Procreate courses</a>
							<a class="py-1 text-decoration-none d-block w-100 link-dark" href="courses.html">Cinema 4D courses</a>
							<a class="py-1 text-decoration-none d-block w-100 link-dark" href="courses.html">Adobe Lightroom </a>
							<a class="py-1 text-decoration-none d-block w-100 link-dark" href="courses.html">Adobe InDesign </a>
						</div>
						<div class="col-md-12 col-lg-3 col-6 order-1 order-md-0">
							<h6 class="pb-2">
								Fancy a cool newsletter?
							</h6>
							<small class="text-muted">
								Be the first to get Edutree's latest news
							</small>
							<form>
								<div class="input-group my-3 shadow-sm border rounded-3 overflow-hidden p-1">
									<input type="text" class="form-control shadow-none border-0" placeholder="Enter your email">
									<a href class="input-group-text bg-white shadow-none border-0 text-primary btn" id="basic-addon2">Sign up</a>
								</div>
							</form>
							<p>
								<i class="bi bi-envelope"></i>
								 Get new clients, grow your business.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<footer class="footer bg-white border-top">
			<div class="container">
				<div class="row align-items-center justify-content-between py-4">
					<div class="col-auto">
						<div class="mb-4 mb-md-0">
							<a href="index.html" class="text-decoration-none link-dark fw-bold"><i class="icofont-home bg-primary text-white p-1 rounded-pill"></i></a>
							<a href="terms-and-conditions.html" class="text-decoration-none link-dark small mx-3">Terms & Conditions</a>
							<a href="privacy-policy.html" class="text-decoration-none link-dark small">Privacy Policy</a>
						</div>
					</div>
					<div class="col-auto">
						<div class="d-flex align-items-center gap-1">
							<a href="#" class="text-decoration-none link-dark pe-2">Download app</a>
							<a class="me-1" href="#"><img src="img/google.png" class="img-fluid app-icon" alt="#" loading="lazy"></a>
							<a href="#"><img src="img/apple.png" class="img-fluid app-icon" alt="#" loading="lazy"></a>
						</div>
					</div>
				</div>
				<hr class="m-0">
				<div class="row align-items-center justify-content-between flex-column flex-sm-row py-4">
					<div class="col-auto order-1 order-md-0">
						<span class="small">©2022 <b class="text-primary">Edutree</b>. All rights reserved</span>
					</div>
					<div class="col-auto order-0 order-md-1">
						<a href="#" class="text-decoration-none text-primary"><i class="bi bi-globe me-1"></i> Language</a>
					</div>
				</div>
			</div>
		</footer>
		<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
		<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v84a3a4012de94ce1a686ba8c167c359c1696973893317" integrity="sha512-euoFGowhlaLqXsPWQ48qSkBSCFs3DPRyiwVu3FjR96cMPx+Fr+gpWRhIafcHwqwCqWS42RZhIudOvEI+Ckf6MA==" data-cf-beacon='{"rayId":"8450d001bddfbaa5","r":1,"version":"2023.10.0","token":"dd471ab1978346bbb991feaa79e6ce5c"}' crossorigin="anonymous"></script>
	</body>
	<script src="vendor/jquery/jquery.min.js" type="4622322674f7aa88dc20241f-text/javascript"></script>
	<script src="vendor/bootstrap/js/bootstrap.bundle.min.js" type="4622322674f7aa88dc20241f-text/javascript"></script>
	<script src="vendor/slick/slick/slick.min.js" type="4622322674f7aa88dc20241f-text/javascript"></script>
	<script src="js/custom.js" type="4622322674f7aa88dc20241f-text/javascript"></script>
	<script src="/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="4622322674f7aa88dc20241f-|49" defer></script>
</html>
