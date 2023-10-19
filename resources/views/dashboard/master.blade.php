
<!DOCTYPE html>
<html lang="en">

<head>	<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="Codescandy">

<script>
    // Render blocking JS:
    if (localStorage.theme) document.documentElement.setAttribute("data-theme", localStorage.theme);
    </script>

<!-- Favicon icon-->
<link rel="shortcut icon" type="image/x-icon" href="../assets/images/favicon/favicon.ico">

<script src="https://cdn.tiny.cloud/1/ewnwdlukikfd20zuefy426z7slixkeng4g2wsxxikjsyfa5k/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
<!-- Libs CSS -->
<link href="{{asset('dashboard/fonts/feather/feather.css')}}" rel="stylesheet" />
<link href="{{asset('dashboard/libs/bootstrap-icons/font/bootstrap-icons.css')}}" rel="stylesheet" />
<link href="{{asset('dashboard/libs/@mdi/font/css/materialdesignicons.min.css')}}" rel="stylesheet">
<link rel="stylesheet" href="{{asset('dashboard/libs/simplebar/dist/simplebar.min.css')}}">
<!-- Theme CSS -->
<link rel="stylesheet" href="{{asset('dashboard/css/theme.min.css')}}">
	<link rel="canonical" href="#">
	<title>MON DASHBOARD</title>
</head>

<body>
	<!-- Page Content -->

	<main>
		<section class="pt-5 pb-5">
			<div class="container">
				<!-- User info -->
				<div class="row align-items-center">
					<div class="col-xl-12 col-lg-12 col-md-12 col-12">
						<!-- Bg -->

						<div class="card px-4 pt-2 pb-4 shadow-sm rounded-top-0 rounded-bottom-0 rounded-bottom-md-2 ">
							<div class="d-flex align-items-end justify-content-between  ">

								<div>
									<a href="/" class="btn btn-primary d-none d-md-block">Retouner à l'accueil</a>

								</div>

                                <div>
									<a href="#" class="btn btn-primary d-none d-md-block">Créer une discution </a>

								</div>

                                <div>
									<a href="#" class="btn btn-primary d-none d-md-block">Créer un article</a>

								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Content -->

				<div class="row mt-0 mt-md-4">
					@include('dashboard.slide-bar')
					<div class="col-lg-9 col-md-8 col-12">
						<div class="row">
							<div class="col-lg-4 col-md-12 col-12">
								<!-- Card -->
								<div class="card mb-4">
									<div class="p-4">
										<span class="fs-6 text-uppercase fw-semibold">Revenue</span>
										<h2 class="mt-4 fw-bold mb-1 d-flex align-items-center h1 lh-1">
											$467.34
										</h2>
										<span class="d-flex justify-content-between align-items-center">
											<span>Earning this month</span>
											<span class="badge bg-sucess ms-2">$203.23</span>
										</span>
									</div>
								</div>
							</div>

							<div class="col-lg-4 col-md-12 col-12">
								<!-- Card -->
								<div class="card mb-4">
									<div class="p-4">
										<span class="fs-6 text-uppercase fw-semibold">students Enrollments</span>
										<h2 class="mt-4 fw-bold mb-1 d-flex align-items-center h1 lh-1">
											12,000
										</h2>
										<span class="d-flex justify-content-between align-items-center">
											<span>New this month</span>
											<span class="badge bg-info ms-2">120+</span>
										</span>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-12 col-12">
								<!-- Card -->
								<div class="card mb-4">
									<div class="p-4">
										<span class="fs-6 text-uppercase fw-semibold">Courses Rating</span>
										<h2 class="mt-4 fw-bold mb-1 d-flex align-items-center h1 lh-1">
											4.80
										</h2>
										<span class="d-flex justify-content-between align-items-center">
											<span>Rating this month</span>
											<span class="badge bg-warning ms-2">10+</span>
										</span>
									</div>
								</div>
							</div>
						</div>
						<!-- Card -->

						<!-- Card -->

						@yield('dashboard')
					</div>
				</div>
			</div>
		</section>
	</main>



	<!-- Scripts -->
	<!-- Libs JS -->

<script src="{{asset('dashboard/libs/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('dashboard/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>


<!-- Theme JS -->
<script src="{{asset('dashboard/libs/simplebar/dist/simplebar.min.js')}}"></script>
<script src="{{asset('dashboard/js/theme.min.js')}}"></script>

	<script src="{{asset('dashboard/libs/apexcharts/dist/apexcharts.min.js')}}"></script>
    <script src="{{asset('dashboard/js/vendors/chart.js')}}"></script>
</body>

<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
//   $(document).ready(function() {
//       $('.select2-multiple').select2({
//           placeholder: "Selectionner plusieurs spécialités",
//           allowClear: true
//       });

//   });

$(document).ready(function() {
    $('.select2-multiple').select2();
});
</script>

<script>
    tinymce.init({
      selector: 'textarea',
      plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
      toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
    });
  </script>

</html>
