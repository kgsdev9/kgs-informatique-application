@extends('master.master')
@section('content')
<main>
	<!-- Page header -->
	<section class="pt-lg-8 pb-8 bg-white">
		<div class="container pb-lg-8">
			<div class="row">
				<div class="col-xl-6 col-lg-7 col-md-12">
					<div>
						<h1 class="text-dark display-4 fw-semibold">{{$detailApp->title}}</h1>
						<p class="text-dark mb-6 lead">
							{{$detailApp->description}}
						</p>

					</div>
				</div>
                <div class="col-xl-6">
                    <div class=" col-md-12 col-12 ">
                        <!-- Card -->
                        <div class="card mb-3 mb-4">
                            <div class="p-1">
                                <div class="d-flex justify-content-center align-items-center rounded border-white border rounded-3 bg-cover" style="background-image: url(../assets/images/course/course-javascript.jpg); height: 210px">
                                    <a class="glightbox icon-shape rounded-circle btn-play icon-xl" href="#">
                                        <i class="fe fe-play"></i>
                                    </a>
                                </div>
                            </div>
                            <!-- Card body -->
                            <div class="card-body">

                                <div class="d-grid">
                                    <a href="{{$detailApp->url}}" class="btn btn-primary mb-2">Consulter la demo </a>
                                    <a href="{{$detailApp->url}}" class="btn btn-outline-primary">Voir la demo en ligne</a>
                                </div>
                            </div>
                        </div>
                        <!-- Card -->
                        <div class="card mb-4">
                            <div>
                                <!-- Card header -->
                                <div class="card-header">
                                    <h4 class="mb-0">Pack inclus </h4>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item bg-transparent">
                                        <i class="fe fe-play-circle align-middle me-2 text-primary"></i>
                                       Une demonstration complete avant de l'acheter
                                    </li>
                                    <li class="list-group-item bg-transparent">
                                        <i class="fe fe-award me-2 align-middle text-success"></i>
                                        Application sans bug
                                    </li>
                                    <li class="list-group-item bg-transparent">
                                        <i class="fe fe-calendar align-middle me-2 text-info"></i>
                                        Notification automatique
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Card -->
                        <div class="card">
                            <!-- Card body -->
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="position-relative">
                                        <img src="{{asset('kgs.jpg')}}" alt="avatar" class="rounded-circle avatar-xl">
                                        <a href="#" class="position-absolute mt-2 ms-n3" data-bs-toggle="tooltip" data-placement="top" aria-label="Verifed" data-bs-original-title="Verifed">
                                            <img src="{{asset('assets/images/svg/checked-mark.svg')}}" alt="checked-mark" height="30" width="30">
                                        </a>
                                    </div>
                                    <div class="ms-4">
                                        <h4 class="mb-0">KGS INFORMATIQUE</h4>
                                        <p class="mb-1 fs-6">Développeur d'application web/mobile</p>
                                        <p class="fs-6 mb-1 d-flex align-items-center">
                                            <span class="text-warning">4.5</span>
                                            <span class="mx-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                </path></svg>
                                            </span>
                                           des talents à votre service
                                        </p>
                                    </div>
                                </div>

                                <p>Je suis un concepteur d'innovation axé sur l'UX/UI basé à Cote d'ivoire
                                   </p>
                                <a href="#" class="btn btn-outline-secondary btn-sm">
                                    Contacter moi </a>
                            </div>
                        </div>
                    </div>
                </div>
			</div>
		</div>
	</section>
	<!-- Page content -->


	<section class="pb-8">
		<div class="container">

			<!-- Card -->
			<div class="pt-8 pb-3">
				<div class="row d-md-flex align-items-center mb-4">
					<div class="col-12">
						<h2 class="mb-0">Ces applications pourraient vous interesser </h2>
					</div>
				</div>
				<div class="row">
                    @foreach ($otherApplication as $ressource)
					<div class="col-lg-3 col-md-6 col-12">
						<!-- Card -->
						<div class="card mb-4 card-hover">
							<a href="{{route('view.app', $ressource->slug)}}"><img src="{{Storage::url($ressource->image)}}" alt="course" class="card-img-top"></a>
							<!-- Card body -->
							<div class="card-body">
								<h4 class="mb-2 text-truncate-line-2"><a href="{{route('view.app', $ressource->slug)}}" class="text-inherit">{{$ressource->title}}</a></h4>
								<p>{{Str::limit($ressource->description,50)}}</p>

							</div>
							<!-- Card footer -->
							<div class="card-footer">
								<div class="row align-items-center g-0">
									<div class="col-auto">
                                        <a href="http://localhost:8000/application/app/application-de-collecte-de-fond-depargne-pour-une-microfinance" class="text-inherit">
                                            <i class="fe fe-shopping-cart text-primary align-middle me-2"></i>
                                           Consulter
                                        </a>
                                    </div>
								</div>
							</div>
						</div>
					</div>
                    @endforeach


				</div>
			</div>
		</div>
	</section>
</main>
@endsection
