@extends('master.master')
@section('content')
<main>
    <!-- Page Content -->
    <section>
        <!-- row -->
        <div class="container mb-lg-8 mt-6">
            <div class="row">
                <!-- col -->
                <div class="col-12">
                    <div class="mb-6">
                        <h2 class="mb-1 h1 text-center">Consulter nos applications</h2>
                        <p class="text-center">Consulter nos differentes applications en fonction de vos besoins    </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <!-- Tab content -->
                            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
                                @foreach ($allApplication as $application)
                                <div class="col">
                                    <!-- Card -->
                                    <div class="card card-hover">
                                        <a href="{{route('view.app', $application->slug)}}"><img src="{{Storage::url($application->image)}}" alt="course" class="card-img-top"></a>
                                        <!-- Card Body -->
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between align-items-center mb-3">
                                                <span class="badge bg-info-soft">Etat: Disponible</span>

                                            </div>
                                            <h4 class="mb-2 text-truncate-line-2"><a href="#" class="text-inherit">{{$application->title}}</a></h4>

                                            <small>By: kgs informatique</small>

                                        </div>
                                        <!-- Card Footer -->
                                        <div class="card-footer">
                                            <div class="row align-items-center g-0">
                                                <div class="col">
                                                    <h5 class="mb-0">340000 FCFA </h5>
                                                </div>

                                                <div class="col-auto">
                                                    <a href="{{route('view.app', $application->slug)}}" class="text-inherit">
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
                </div>

    </section>
</main>
@endsection
