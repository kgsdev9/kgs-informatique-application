@extends('master.master')

@section('content')

<div>
    <section class="py-7 py-lg-8">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-8 col-md-12 col-12 mb-2">
                    <div class="text-center mb-4">
                        <a href="#" class="fs-5 fw-semibold d-block mb-4 text-primary">Courses</a>
                        <h1 class="display-3 fw-bold mb-4">Getting Started The Web Development JavaScript in 2020</h1>
                        <span class="mb-3 d-inline-block">4 min read</span>
                    </div>
                    <!-- Media -->

                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-8 col-md-12 col-12 mb-2">
                    <!-- Descriptions -->
                    <div>
                        <div class="mb-4">
                            <h1 class="lead">{!! $ressource->description !!}</h1>
                        </div>
                    </div>


                    <!-- Subscribe to Newsletter -->
                    <div class="py-lg-8 py-6">
                        <div class="text-center mb-6">
                            <h2 class="display-4 fw-bold">Sign up for our Newsletter</h2>
                            <p class="mb-0 lead">Join our newsletter and get resources, curated content, and design inspiration delivered straight to your inbox.</p>
                        </div>
                        <!-- Form -->
                        <form class="row px-md-8 mx-md-8 gx-2 needs-validation" novalidate="">
                            <div class="col">
                                <input type="email" class="form-control" placeholder="Email Address" required="">
                                <div class="invalid-feedback">Please enter valid Email Address</div>
                            </div>
                            <div class="col-auto">
                                <button class="btn btn-primary" type="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container -->
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                    <div class="my-5">
                        <h2>Related Post</h2>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-12">
                    <!-- Card -->
                    <div class="card mb-4 shadow-lg card-lift">
                        <a href="blog-single.html"><img src="../assets/images/blog/blogpost-3.jpg" class="card-img-top" alt="blogpost "></a>
                        <!-- Card body -->
                        <div class="card-body">
                            <a href="#" class="fs-5 fw-semibold d-block mb-3 text-primary">Workshop</a>
                            <a href="blog-single.html">
                                <h3>The Best DevOps Tools for Your Application Lifecycle</h3>
                            </a>
                            <p>Inventore pariatur veritatis maxime fugiat sint dolorem officiis nemo quis!</p>
                            <!-- Media content -->

                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-12">
                    <!-- Card -->
                    <div class="card mb-4 shadow-lg card-lift">
                        <a href="blog-single.html"><img src="../assets/images/blog/blogpost-6.jpg" class="card-img-top" alt="blogpost "></a>
                        <!-- Card body -->
                        <div class="card-body">
                            <a href="#" class="fs-5 fw-semibold d-block mb-3 text-info">Courses</a>
                            <h3><a href="blog-single.html" class="text-inherit">How to become modern Stack Developer in 2020</a></h3>
                            <p>At beatae non sit dicta simili quepers lem piciatis facilis veritatis quam. corrupti?</p>
                            <div class="row align-items-center g-0 mt-4">
                                <div class="col-auto">
                                    <img src="../assets/images/avatar/avatar-2.jpg" alt="avatar" class="rounded-circle avatar-sm me-2 ">
                                </div>
                                <div class="col lh-1">
                                    <h5 class="mb-1">Sia Port</h5>
                                    <p class="fs-6 mb-0">September 10, 2020</p>
                                </div>
                                <div class="col-auto">
                                    <p class="fs-6 mb-0">10 Min Read</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-12">
                    <!-- Card -->
                    <div class="card mb-4 shadow-lg card-lift">
                        <a href="blog-single.html"><img src="../assets/images/blog/blogpost-5.jpg" class="card-img-top" alt="blogpost "></a>
                        <!-- Card body -->
                        <div class="card-body">
                            <a href="#" class="fs-5 fw-semibold d-block mb-3 text-warning">Warning</a>
                            <h3><a href="blog-single.html" class="text-inherit">How to Become a Data Scientist?</a></h3>
                            <p>Nulla voluptate in facere saepe est alias et iste, accusantium sint enim!</p>
                            <!-- Media content -->
                            <div class="row align-items-center g-0 mt-4">
                                <div class="col-auto">
                                    <img src="../assets/images/avatar/avatar-3.jpg" alt="avatar" class="rounded-circle avatar-sm me-2 ">
                                </div>
                                <div class="col lh-1">
                                    <h5 class="mb-1">Miron Sulla</h5>
                                    <p class="fs-6 mb-0">September 11, 2020</p>
                                </div>
                                <div class="col-auto">
                                    <p class="fs-6 mb-0">14 Min Read</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>


@endsection

