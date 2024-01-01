@extends('master.master')
 @section('content')

 <main>
    <section class="pt-5 pb-5">
        <div class="container">
            <!-- User info -->
            <div class="row align-items-center">
                <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                    <!-- Bg -->
                    <div class="rounded-top" style="background: url(../assets/images/background/profile-bg.jpg) no-repeat; background-size: cover; height: 100px"></div>
                    <div class="card px-4 pt-2 pb-4 shadow-sm rounded-top-0 rounded-bottom-0 rounded-bottom-md-2">
                        <div class="d-flex align-items-end justify-content-between">
                            <div class="d-flex align-items-center">
                                <div class="me-2 position-relative d-flex justify-content-end align-items-end mt-n5">
                                    <img src="../assets/images/avatar/avatar-1.jpg" class="avatar-xl rounded-circle border border-4 border-white position-relative" alt="avatar">
                                    <a href="#" class="position-absolute top-0 end-0" data-bs-toggle="tooltip" data-placement="top" aria-label="Verified" data-bs-original-title="Verified">
                                        <img src="../assets/images/svg/checked-mark.svg" alt="checked" height="30" width="30">
                                    </a>
                                </div>
                                <div class="lh-1">
                                    <h2 class="mb-0">Bienvenue {{Auth::user()->name}}</h2>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <!-- Content -->

            <div class="row mt-0 mt-md-4">
                <div class="col-lg-3 col-md-4 col-12">
                    <!-- User profile -->
                   @include('dashboard.slidebar')
                </div>
                <div class="col-lg-9 col-md-8 col-12">
                    @include('dashboard.statistique')
                    
                </div>
            </div>
        </div>
    </section>
</main>




@endsection

