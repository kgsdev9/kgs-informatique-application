@extends('master.master')
@section('content')
<section class="py-6">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- Tab content -->
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade active show" id="pills-course" role="tabpanel" aria-labelledby="pills-course-tab">
                        <!-- Tab pane -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="mb-5">
                                    <h2 class="mb-1">Tutoriel  {{$tag->name}}</h2>

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            @foreach ($articleTag as $article)
                            <div class="col-lg-3 col-md-6 col-12">
                                <!-- Card -->
                                <div class="card mb-4 card-hover">
                                    <!-- Card body -->
                                    <div class="card-body">
                                        <h3 class="h4 mb-2 text-truncate-line-2"><a href="#" class="text-inherit">{{$article->title}}</a></h3>
                                        <!-- List inline -->


                                    </div>
                                    <!-- Card footer -->
                                    <div class="card-footer">
                                        <div class="row align-items-center g-0">
                                            <div class="col ms-2">
                                             <a href="{{route('article.show', $article->id)}}">Consulter</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach


                        </div>
                        <hr class="my-5 ">
                        <!-- Content -->





                    </div>
                    <div class="tab-pane fade" id="pills-about" role="tabpanel" aria-labelledby="pills-about-tab">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-12">
                                <!-- Card -->
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="mb-0">About Path</h4>
                                    </div>
                                    <!-- Card body -->
                                    <div class="card-body">
                                        <h2>Header Level 2</h2>
                                        <p>
                                            Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring
                                            Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins. Lorem ipsum dolor sit amet
                                            consectetur adipisicing elit. Possimus obcaecati sint dolore officiis unde veritatis dignissimos iusto fugit officia? Atque ullam, saepe tempora
                                            eum voluptates cum labore nisi mollitia quidem!
                                        </p>
                                        <p class="mb-4">
                                            Vestibulum nec porta tortor. Phasellus metus quam, semper ut tincidunt sit amet, viverra quis neque. Nullam mattis mollis massa nec pulvinar.
                                            Vivamus ut velit orci. Aenean nec pretium augue. In eu tellus quis urna vestibulum pulvinar. Etiam in elementum lectus, id dignissim mauris.
                                            Quisque tempus posuere aliquet.
                                        </p>
                                        <h3 class="mb-3">Header Level 3</h3>
                                        <!-- Img -->
                                        <img src="../assets/images/blog/blogpost-1.jpg" alt="blogpost" class="img-fluid mb-5 w-100 ">
                                        <h4 class="mb-5">Header Level 4</h4>
                                        <!-- Blockquote -->
                                        <blockquote class="blockquote-left">
                                            <p class="mb-4 font-italic ms-4">
                                                Blockquote. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna. Cras in mi at felis aliquet congue. Ut a est eget ligula
                                                molestie gravida. Curabitur massa. Donec eleifend, libero at sagittis mollis, tellus est malesuada tellus, at luctus turpis elit sit amet
                                                quam. Vivamus pretium ornare est
                                            </p>
                                            <footer class="blockquote-footer ms-4">Andrew Watkins</footer>
                                        </blockquote>
                                        <ol>
                                            <li>Lorem ipsum dolor sit amet</li>
                                            <li>Consectetur adipiscing elit</li>
                                            <li>Integer molestie lorem at massa</li>
                                            <li>Facilisis in pretium nisl aliquet</li>
                                        </ol>
                                        <h5 class="mb-3 mt-4">Header Level 5</h5>
                                        <ul>
                                            <li>Phasellus iaculis neque</li>
                                            <li>Purus sodales ultricies</li>
                                            <li>Vestibulum laoreet porttitor sem</li>
                                            <li>Ac tristique libero volutpat at</li>
                                        </ul>
                                        <h6 class="mb-3 mt-4">Header Level 6</h6>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident, maiores laboriosam necessitatibus eveniet suscipit ad accusamus nisi
                                            dolores dolorum deserunt atque dicta libero doloribus veritatis enim tempora! Laboriosam quasi quod sint incidunt neque? Perferendis tempore
                                            neque molestias reiciendis consequuntur hic explicabo exercitationem ipsum a esse? Sit soluta reiciendis sint molestiae!
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Tab Pane -->
                    <div class="tab-pane fade" id="pills-author" role="tabpanel" aria-labelledby="pills-author-tab">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <!-- Card -->
                                <div class="card mb-4">
                                    <!-- Card body -->
                                    <div class="card-body">
                                        <div class="d-lg-flex">
                                            <div class="position-relative">
                                                <img src="../assets/images/avatar/avatar-1.jpg" alt="avatar" class="rounded-circle avatar-xl mb-3 mb-lg-0 ">
                                                <a href="#" class="position-absolute mt-2 ms-n3" data-bs-toggle="tooltip" data-placement="top" aria-label="Verifed" data-bs-original-title="Verifed">
                                                    <img src="../assets/images/svg/checked-mark.svg" alt="checked" height="30" width="30 ">
                                                </a>
                                            </div>
                                            <div class="ms-lg-4">
                                                <h4 class="mb-0">Jenny Wilson</h4>
                                                <p class="mb-0 fs-6">Front-end Developer, Designer</p>
                                                <p class="fs-6 mb-1 d-flex align-items-center">
                                                    <span class="text-warning">4.5</span>
                                                    <span class="mx-1">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                        </svg>
                                                    </span>
                                                    Instructor Rating
                                                </p>
                                                <p class="fs-6">
                                                    <span class="me-2">
                                                        <span class="text-dark fw-medium">42</span>
                                                        Courses
                                                    </span>
                                                    <span class="ms-2">
                                                        <span class="text-dark fw-medium">1,10,124</span>
                                                        Students
                                                    </span>
                                                </p>
                                                <p>
                                                    I start my development and digital career studying digital design. After taking a couple of programming classes I realize that code is
                                                    what I wanted to be doing.
                                                </p>
                                                <a href="#" class="btn btn-outline-secondary btn-sm">View Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <!-- Card -->
                                <div class="card mb-4">
                                    <!-- Card body -->
                                    <div class="card-body">
                                        <div class="d-lg-flex">
                                            <div class="position-relative">
                                                <img src="../assets/images/avatar/avatar-2.jpg" alt="avatar" class="rounded-circle avatar-xl mb-3 mb-lg-0 ">
                                                <a href="#" class="position-absolute mt-2 ms-n3" data-bs-toggle="tooltip" data-placement="top" aria-label="Verifed" data-bs-original-title="Verifed">
                                                    <img src="../assets/images/svg/checked-mark.svg" alt="checked" height="30" width="30 ">
                                                </a>
                                            </div>
                                            <div class="ms-lg-4">
                                                <h4 class="mb-0">Paulina Rush</h4>
                                                <p class="mb-0 fs-6">Front-end Developer, Designer</p>
                                                <p class="fs-6 mb-1 d-flex align-items-center">
                                                    <span class="text-warning">4.5</span>
                                                    <span class="mx-1">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                        </svg>
                                                    </span>
                                                    Instructor Rating
                                                </p>
                                                <p class="fs-6">
                                                    <span class="me-2">
                                                        <span class="text-dark fw-medium">8</span>
                                                        Courses
                                                    </span>
                                                    <span class="ms-2">
                                                        <span class="text-dark fw-medium">12,124</span>
                                                        Students
                                                    </span>
                                                </p>
                                                <p>
                                                    Writing JS, CSS, and HTML professionally since 2004. Open source contributor to projects like jQuery, jQueryUI, ESLint, Webpack, npm,
                                                    JSCS, Esprima and more.
                                                </p>
                                                <a href="#" class="btn btn-outline-secondary btn-sm">View Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <!-- Card -->
                                <div class="card mb-4">
                                    <!-- Card body -->
                                    <div class="card-body">
                                        <div class="d-lg-flex">
                                            <div class="position-relative">
                                                <img src="../assets/images/avatar/avatar-3.jpg" alt="avatar" class="rounded-circle avatar-xl mb-3 mb-lg-0 ">
                                                <a href="#" class="position-absolute mt-2 ms-n3" data-bs-toggle="tooltip" data-placement="top" aria-label="Verifed" data-bs-original-title="Verifed">
                                                    <img src="../assets/images/svg/checked-mark.svg" alt="checked" height="30" width="30 ">
                                                </a>
                                            </div>
                                            <div class="ms-lg-4">
                                                <h4 class="mb-0">Avneet Brooks</h4>
                                                <p class="mb-0 fs-6">Front-end Developer, Designer</p>
                                                <p class="fs-6 mb-1 d-flex align-items-center">
                                                    <span class="text-warning">4.5</span>
                                                    <span class="mx-1">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                        </svg>
                                                    </span>
                                                    Instructor Rating
                                                </p>
                                                <p class="fs-6">
                                                    <span class="me-2">
                                                        <span class="text-dark fw-medium">23</span>
                                                        Courses
                                                    </span>
                                                    <span class="ms-2">
                                                        <span class="text-dark fw-medium">23,000</span>
                                                        Students
                                                    </span>
                                                </p>
                                                <p>Software developer and active open sorcerer. She speaks multiple languages and is often overheard saying "Bonjour" in HTML.</p>
                                                <a href="#" class="btn btn-outline-secondary btn-sm">View Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <!-- Card -->
                                <div class="card">
                                    <!-- Card body -->
                                    <div class="card-body">
                                        <div class="d-lg-flex">
                                            <div class="position-relative">
                                                <img src="../assets/images/avatar/avatar-5.jpg" alt="avatar" class="rounded-circle avatar-xl mb-3 mb-lg-0 ">
                                                <a href="#" class="position-absolute mt-2 ms-n3" data-bs-toggle="tooltip" data-placement="top" aria-label="Verifed" data-bs-original-title="Verifed">
                                                    <img src="../assets/images/svg/checked-mark.svg" alt="checked" height="30" width="30 ">
                                                </a>
                                            </div>
                                            <div class="ms-lg-4">
                                                <h4 class="mb-0">Bree Head</h4>
                                                <p class="mb-0 fs-6">Front-end Developer, Designer</p>
                                                <p class="fs-6 mb-1 d-flex align-items-center">
                                                    <span class="text-warning">4.5</span>
                                                    <span class="mx-1">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                        </svg>
                                                    </span>
                                                    Instructor Rating
                                                </p>
                                                <p class="fs-6">
                                                    <span class="me-2">
                                                        <span class="text-dark fw-medium">22</span>
                                                        Courses
                                                    </span>
                                                    <span class="ms-2">
                                                        <span class="text-dark fw-medium">40,224</span>
                                                        Students
                                                    </span>
                                                </p>
                                                <p>
                                                    Bree Head developer, architect, occasional designer, and frequent speaker. He’s passionate about building tools, systems, and create
                                                    high-performance teams and apps.
                                                </p>
                                                <a href="#" class="btn btn-outline-secondary btn-sm">View Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
