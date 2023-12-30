@extends('master.master')

@section('content')
<main>
    <!-- Page Content -->
    <section class="py-8 position-relative bg-cover" style="background-image: url(../../assets/images/background/gradient-bg.png)">
        <!-- Image -->
        <div class="container">
            <div class="row align-items-center mb-6">
                <div class="col-12 col-lg-7 order-md-2">
                    <div class="mb-2 mb-md-0">
                        <img src="../../assets/images/background/graphics.svg" alt="graphics" class="img-fluid mw-md-130">
                    </div>
                </div>
                <div class="col-12 col-lg-5 order-md-1">
                    <!-- Heading -->
                    <h1 class="display-2 mb-5 fw-bold">Une Communauté une vision nouvelle</h1>
                    <!-- list -->
                    <ul class="list-unstyled fs-3 text-dark mb-6 fw-medium">
                        <li class="mb-1 d-flex">
                            <span class="me-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-check-circle-fill text-success mb-1" viewBox="0 0 16 16">
                                    <path
                                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z">
                                </svg>
                            </span>
                            <span>Le sens du partage, l'innovation</span>
                        </li>
                        <li class="mb-1 d-flex">
                            <span class="me-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-check-circle-fill text-success mb-1" viewBox="0 0 16 16">
                                    <path
                                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z">
                                </svg>
                            </span>
                            <span>Répondre aux problematique complexe</span>
                        </li>
                        <li class="mb-1 d-flex">
                            <span class="me-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-check-circle-fill text-success mb-1" viewBox="0 0 16 16">
                                    <path
                                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z">
                                </svg>
                            </span>
                            <span>Aider les developpeurs dans leurs prgoressions</span>
                        </li>
                    </ul>
                    <!-- Buttons -->
                    <div class="mb-8 mb-lg-0">
                        <a href="#" class="btn btn-success me-3 mb-2 mb-lg-0">Nos Réalisations</a>

                        <a href="#" class="text-nowrap btn-link">Consulter nos articles</a>
                    </div>
                </div>
            </div>
            <!-- Hero Section -->
            <!-- row -->
            <div class="row mt-8">
                <div class="offset-xl-1 col-xl-10 col-md-12 col-12">
                    <!-- Heading -->
                    <div class="text-center mb-6 px-md-8 fw-semibold">
                        <span class="ls-md">NOUS COMMUNAUTÉ PARTENAIRE DE KGS INFORMATIQUE </span>
                    </div>
                    <!-- row -->
                    <div class="row text-center">
                        <!-- col -->
                        <div class="col">
                            <div class="mb-4 mb-lg-0">
                                <img src="../../assets/images/brand/gray-logo-airbnb.svg" alt="logo">
                            </div>
                        </div>
                        <!-- col -->
                        <div class="col">
                            <div class="mb-4 mb-lg-0">
                                <img src="../../assets/images/brand/gray-logo-discord.svg" alt="logo">
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-4 mb-lg-0">
                                <img src="../../assets/images/brand/gray-logo-intercom.svg" alt="logo">
                            </div>
                        </div>
                        <!-- col -->
                        <div class="col">
                            <div class="mb-4 mb-lg-0">
                                <img src="../../assets/images/brand/gray-logo-stripe.svg" alt="logo">
                            </div>
                        </div>
                        <!-- col -->
                        <div class="col">
                            <div class="mb-4 mb-lg-0">
                                <img src="../../assets/images/brand/gray-logo-netflix.svg" alt="logo">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Client logo -->

    <section class="bg-white py-8">
        <!-- container -->

        <div class="container">
            <div class="row">
                <!-- col -->

                <div class="offset-xl-1 col-xl-10 col-md-12 col-12">
                    <div class="row text-center">
                        <div class="col-md-12 px-lg-8 mb-8 mt-6">
                            <!-- text -->

                            <span class="text-uppercase text-primary fw-semibold ls-md">Explorer nos catégories</span>
                            <!-- heading -->

                            <h2 class="h1 fw-bold mt-3"></h2>
                            <!-- text -->

                            <p class="mb-0 fs-4">Consulter les  differentes téchnologies pour voir des sujets traités!</p>
                        </div>
                    </div>
                    <section class="container">
                        <div class="row">
                            @foreach ($allCategories as $category)
                            <div class="col-xl-4 col-lg-6 col-md-6 col-12">
                                <!-- Card -->
                                <div class="card mb-4 card-hover">
                                    <div class="d-flex justify-content-between align-items-center p-4">
                                        <div class="d-flex">
                                            <a href="course-path-single.html">
                                                <!-- Img -->
                                                <img src="../assets/images/path/path-bootstrap.svg" alt="bootstrap" class="avatar-md">
                                            </a>
                                            <div class="ms-3">
                                                <h4 class="mb-1">
                                                    <a href="course-path-single.html" class="text-inherit">{{$category->name}}</a>
                                                </h4>
                                                <p class="mb-0 fs-6">
                                                    <span class="me-2">
                                                        <span class="text-dark fw-medium">12</span>
                                                        Courses
                                                    </span>
                                                    <span>
                                                        <span class="text-dark fw-medium">34</span>
                                                        Hours
                                                    </span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>

    <section class="py-8 bg-gray-200" style="background: url(../../assets/images/background/course-graphics.svg) no-repeat; background-size: cover; background-position: top center">
        <div class="container my-lg-8">
            <!-- row -->
            <div class="row justify-content-center text-center">
                <div class="col-md-9 col-12">
                    <!-- heading -->
                    <h2 class="display-4">Rejoindre kgs informatique c'est participer </h2>
                    <p class="lead px-lg-8 mb-6">aux forums, réagir avec notre communauté .</p>
                    <!-- button -->
                    <div class="d-grid d-md-block">
                        <a href="../sign-up.html" class="btn btn-primary mb-2 mb-md-0">Consulter le forum</a>
                        <a href="../sign-up.html" class="btn btn-info">Articles</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="py-8">
        <div class="container">
            <div class="row">
                <div class="offset-xl-2 col-xl-8 offset-lg-1 col-lg-10 col-md-12 col-12">
                    <div class="text-center mb-5">
                        <h2 class="h1 fw-bold mt-3">les articles recemments publiés</h2>

                    </div>
                    <!-- Form -->

                </div>
            </div>
        </div>
    </div>

    <section class="pb-8">
        <div class="container">
            <div class="row">

                @foreach ($articlesTake as $article)


                <div class="col-xl-4 col-lg-4 col-md-6 col-12">
                    <!-- Card -->
                    <div class="card mb-4 shadow-lg card-lift">

                        <!-- Card body -->
                        <div class="card-body">
                            <a href="#" class="fs-5 fw-semibold d-block mb-3 text-danger">Tutorial</a>
                            <h3>
                                <a href="blog-single.html" class="text-inherit">{{$article->title}}</a>
                            </h3>
                            <p>{{$article->mini_description}}</p>
                            <!-- Media content -->
                            <div class="row align-items-center g-0 mt-4">
                                <div class="col-auto">
                                    <img src="../assets/images/avatar/avatar-7.jpg" alt="avatar" class="rounded-circle avatar-sm me-2 ">
                                </div>
                                <div class="col lh-1">
                                    <h5 class="mb-1">{{$article->owner->name}}</h5>
                                    <p class="fs-6 mb-0">{{$article->created_at}}</p>
                                </div>
                                <div class="col-auto">
                                   <button class="btn btn-dark">Consulter</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                <!-- Button -->
                <div class="col-xl-12 col-lg-12 col-md-12 col-12 text-center mt-6">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-12 text-center mt-4">
                        <a href="#" class="btn btn-primary">
                            Charger plus
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

@endsection
