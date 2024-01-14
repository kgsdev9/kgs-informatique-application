
<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <link rel="stylesheet" href="assets/libs/swiper/swiper-bundle.min.css" />
      <!-- Favicon icon-->
      <link href="{{asset('assets/libs/simplebar/dist/simplebar.min.css')}}" rel="stylesheet" />
        <link rel="stylesheet" href="{{asset('assets/libs/bootstrap-icons/font/bootstrap-icons.min.css')}}">
      <!-- Scroll Cue -->
      <link href="https://cdn.jsdelivr.net/npm/tom-select/dist/css/tom-select.css" rel="stylesheet" />
        <link rel="stylesheet" href="{{asset('assets/libs/scrollcue/scrollCue.css')}}">
      <!-- Box icons -->

    <link rel="stylesheet" href="{{asset('assets/fonts/css/boxicons.min.css')}}">
    <link href='https://cdn.jsdelivr.net/npm/froala-editor@latest/css/froala_editor.pkgd.min.css' rel='stylesheet' type='text/css' />
      <!-- Theme CSS --><script type='text/javascript' src='https://cdn.jsdelivr.net/npm/froala-editor@latest/js/froala_editor.pkgd.min.js'></script>
      <script src="https://unpkg.com/htmx.org@1.9.10" integrity="sha384-D1Kt99CQMDuVetoL1lrYwg5t+9QdHe7NLX/SoJYkXDFfX37iInKRy5xLSi8nO7UC" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="{{asset('assets/css/theme.min.css')}}">

        <script src="https://cdn.tiny.cloud/1/ewnwdlukikfd20zuefy426z7slixkeng4g2wsxxikjsyfa5k/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
      <title>@yield('title')</title>
      @livewireStyles
   </head>
   <body>
      <!-- Navbar -->
      <header>
         <nav class="navbar navbar-expand-lg navbar-light w-100 transparent">
            <div class="container px-3">
               <a class="navbar-brand" href="/">
                <img src="#" alt />KGS INFO</a>
               <button class="navbar-toggler offcanvas-nav-btn" type="button">
                  <i class="bi bi-list"></i>
               </button>
               <div class="offcanvas offcanvas-start offcanvas-nav" style="width: 20rem">
                  <div class="offcanvas-header">
                     <a href="#" class="text-inverse"><img src="/" alt />KGS </a>
                     <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                  </div>
                  <div class="offcanvas-body pt-0 align-items-center">
                     <ul class="navbar-nav mx-auto align-items-lg-center">
                        <li class="nav-item dropdown">
                           <a class="nav-link" href="#">
                            <svg width="20px" height="15px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M9 20H7C5.89543 20 5 19.1046 5 18V10.9199C5 10.336 5.25513 9.78132 5.69842 9.40136L10.6984 5.11564C11.4474 4.47366 12.5526 4.47366 13.3016 5.11564L18.3016 9.40136C18.7449 9.78132 19 10.336 19 10.9199V18C19 19.1046 18.1046 20 17 20H15M9 20V14C9 13.4477 9.44772 13 10 13H14C14.5523 13 15 13.4477 15 14V20M9 20H15" stroke="#464455" stroke-linecap="round" stroke-linejoin="round"></path></g></svg>
                            Accueil</a>

                        </li>
                        <li class="nav-item ">
                           <a class="nav-link" href="{{URL('/articles')}}"  hx-boost="true">
                            <svg width="20px" height="15px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M22 7.662l1-1V18h-7v4.745L11.255 18H1V2h16.763l-1 1H2v14h9.668L15 20.331V17h7zm1.657-5.192a.965.965 0 0 1 .03 1.385l-9.325 9.324-4.097 1.755a.371.371 0 0 1-.487-.487l1.755-4.097 9.31-9.309a.98.98 0 0 1 1.385 0zm-10.1 9.965l-1.28-1.28-.961 2.24zm7.243-7.11l-1.414-1.413-6.469 6.47 1.414 1.413zm1.865-2.445l-.804-.838a.42.42 0 0 0-.6-.006l-1.168 1.168 1.414 1.415 1.152-1.152a.42.42 0 0 0 .006-.587z"></path><path fill="none" d="M0 0h24v24H0z"></path></g></svg>
                            Articles</a>

                        </li>
                        <li class="nav-item dropdown ">
                           <a class="nav-link  " href="{{route('home.app')}}">
                            <svg width="20px" height="15px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title></title> <g fill="none" fill-rule="evenodd" id="页面-1" stroke="none" stroke-width="1"> <g id="导航图标" transform="translate(-325.000000, -80.000000)"> <g id="编组" transform="translate(325.000000, 80.000000)"> <polygon fill="#FFFFFF" fill-opacity="0.01" fill-rule="nonzero" id="路径" points="24 0 0 0 0 24 24 24"></polygon> <polygon id="路径" points="22 7 12 2 2 7 2 17 12 22 22 17" stroke="#212121" stroke-linejoin="round" stroke-width="1.5"></polygon> <line id="路径" stroke="#212121" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" x1="2" x2="12" y1="7" y2="12"></line> <line id="路径" stroke="#212121" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" x1="12" x2="12" y1="22" y2="12"></line> <line id="路径" stroke="#212121" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" x1="22" x2="12" y1="7" y2="12"></line> <line id="路径" stroke="#212121" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" x1="17" x2="7" y1="4.5" y2="9.5"></line> </g> </g> </g> </g></svg>
                            Réalisations</a>

                        </li>

                        <li class="nav-item">
                            <a class="nav-link " href="{{route('home.forums')}}" role="button">
                                <svg fill="#000000" width="20px" height="15px" viewBox="0 0 16 16" id="forum-16px" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path id="Path_101" data-name="Path 101" d="M-7.5,16a.48.48,0,0,1-.158-.026L-10,15.193A5.971,5.971,0,0,1-13,16a6.006,6.006,0,0,1-6-6,6.006,6.006,0,0,1,6-6,6.006,6.006,0,0,1,6,6,5.976,5.976,0,0,1-.807,3l.782,2.345a.5.5,0,0,1-.121.512A.5.5,0,0,1-7.5,16ZM-13,5a5.006,5.006,0,0,0-5,5,5.006,5.006,0,0,0,5,5,4.984,4.984,0,0,0,2.668-.777.5.5,0,0,1,.426-.052l1.616.538-.539-1.615a.5.5,0,0,1,.052-.426A4.982,4.982,0,0,0-8,10,5.006,5.006,0,0,0-13,5Zm-9.342,7.974,3-1a.5.5,0,0,0,.317-.632.5.5,0,0,0-.633-.316l-2.051.683L-20.94,9.4a.5.5,0,0,0-.073-.454,4.96,4.96,0,0,1,.478-6.485A4.966,4.966,0,0,1-17,1a4.966,4.966,0,0,1,3.535,1.464.5.5,0,0,0,.707,0,.5.5,0,0,0,0-.707A5.959,5.959,0,0,0-17,0a5.959,5.959,0,0,0-4.242,1.757,5.948,5.948,0,0,0-.727,7.569l-1.006,3.016a.5.5,0,0,0,.121.512A.5.5,0,0,0-22.5,13,.48.48,0,0,0-22.342,12.974Z" transform="translate(23)"></path> </g></svg>
                                Forums</a>

                         </li>



                        <li class="nav-item">
                            <a class="nav-link " href="{{route('all.courses')}}">
                                <svg  width="20px" height="15px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title></title> <g fill="none" fill-rule="evenodd" id="页面-1" stroke="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"> <g id="导航图标" stroke="#212121" stroke-width="1.5" transform="translate(-28.000000, -272.000000)"> <g id="学术" transform="translate(28.000000, 272.000000)"> <g id="编组" transform="translate(1.000000, 4.000000)"> <polygon id="路径" points="0 2.75 11 0 22 2.75 11 5.5"></polygon> <path d="M4.95,4.4 L4.95,9.88383 C4.95,9.88383 7.7,11.55 11,11.55 C14.3,11.55 17.05,9.88383 17.05,9.88383 L17.05,4.4" id="路径"></path> <line id="路径" x1="1.65" x2="1.65" y1="3.3" y2="15.4"></line> <rect height="3.3" id="矩形" width="3.3" x="0" y="14.3"></rect> </g> </g> </g> </g> </g></svg>
                                Formations</a>

                         </li>

                         <li class="nav-item">

                            <a class="nav-link " href="/contact">
                                <svg width="20px" height="15px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title></title> <g fill="none" fill-rule="evenodd" id="页面-1" stroke="none" stroke-width="1"> <g id="导航图标" transform="translate(-251.000000, -207.000000)"> <g id="编组" transform="translate(251.000000, 207.000000)"> <rect fill="#FFFFFF" fill-opacity="0.01" fill-rule="nonzero" height="24" id="矩形" width="24" x="0" y="0"></rect> <path d="M18,16 C20.20915,16 22,14.20915 22,12 C22,9.79085 20.20915,8 18,8" id="路径"></path> <path d="M18,16 L18,16 C20.20915,16 22,14.20915 22,12 C22,9.79085 20.20915,8 18,8" id="路径" stroke="#212121" stroke-linejoin="round" stroke-width="1.5"></path> <path d="M6,8 C3.79086,8 2,9.79085 2,12 C2,14.20915 3.79086,16 6,16" id="路径"></path> <path d="M6,8 C3.79086,8 2,9.79085 2,12 C2,14.20915 3.79086,16 6,16 L6,16" id="路径" stroke="#212121" stroke-linejoin="round" stroke-width="1.5"></path> <path d="M6,16 L6,15.75 L6,14.5 L6,12 L6,8 C6,4.68629 8.6863,2 12,2 C15.3137,2 18,4.68629 18,8 L18,16 C18,19.3137 15.3137,22 12,22" id="路径" stroke="#212121" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path> </g> </g> </g> </g></svg>
                                Contact</a>

                         </li>


                         <li class="nav-item">
                            <a class="nav-link " href="{{route('podcasts.index')}}"> <svg width="20px" height="15px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M19 10V12C19 15.866 15.866 19 12 19M5 10V12C5 15.866 8.13401 19 12 19M12 19V22M8 22H16M12 15C10.3431 15 9 13.6569 9 12V5C9 3.34315 10.3431 2 12 2C13.6569 2 15 3.34315 15 5V12C15 13.6569 13.6569 15 12 15Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg> Podcasts</a>

                         </li>
                     </ul>
                     <div class="mt-3 mt-lg-0 d-flex align-items-center">
                        @guest
                        <a href="{{route('login')}}" class="btn btn-light mx-2">Connexion</a>
                        <a href="{{route('register')}}" class="btn btn-primary">Inscription</a>
                        @else
                         <a href="/dashboard" class="btn btn-light mx-2">
                            <svg width="20px" height="15px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M14.9999 15.2547C13.8661 14.4638 12.4872 14 10.9999 14C7.40399 14 4.44136 16.7114 4.04498 20.2013C4.01693 20.4483 4.0029 20.5718 4.05221 20.6911C4.09256 20.7886 4.1799 20.8864 4.2723 20.9375C4.38522 21 4.52346 21 4.79992 21H9.94465M13.9999 19.2857L15.7999 21L19.9999 17M14.9999 7C14.9999 9.20914 13.2091 11 10.9999 11C8.79078 11 6.99992 9.20914 6.99992 7C6.99992 4.79086 8.79078 3 10.9999 3C13.2091 3 14.9999 4.79086 14.9999 7Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                            Mon profile</a>
                            <div>
                                <a href="#" class="btn btn-outline-dark" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="bx bx-log-out"></i>  Deconnexion</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                   @csrf
                               </form>
                            </div>
                        @endguest
                     </div>
                  </div>
               </div>
            </div>
         </nav>
      </header>

      @yield('content')

      <!-- Footer -->
      <footer class="pt-7">
         <div class="container">
            <!-- Footer 4 column -->
            <div class="row">
               <div class="col-xxl-5 col-lg-5 col-md-7">
                  <div class="mb-7 mb-xl-0">
                     <div class="mb-4">
                        <a href="#" class="text-dark">
                            KGS INFORMATIQUE

                        </a>
                     </div>
                     <p class="mb-5">Kgs Informatique est une plateforme de partage de conténu informatique, d'astuces et de solutions informatique, notre objectif vise à promouvoir les solutions innovantes qui répond aux besoins de tous .</p>

                     <form class="needs-validation" novalidate>
                        <h5 class="mb-3">S'inscrire</h5>
                        <div class="row g-2">
                           <div class="col-lg-9 col-8">
                              <label for="subscribeEmail" class="visually-hidden">Email</label>
                              <input type="email" class="form-control" placeholder="kgsdev8@gmail.com" required />

                           </div>
                           <div class="col-lg-3 col-4">
                              <div>
                                 <button type="submit" class="btn btn-primary">S'abonner</button>
                              </div>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
               <div class="offset-xxl-1 col-xxl-6 col-lg-6 offset-md-1 col-md-4">
                  <div class="row" id="ft-links">
                     <div class="col-lg-4 col-12">
                        <div class="position-relative">
                           <div class="mb-3 pb-2 d-flex justify-content-between border-bottom border-bottom-lg-0">
                              <h5>Ressources</h5>
                              <a
                                 class="d-block d-lg-none stretched-link text-inherit"
                                 data-bs-toggle="collapse"
                                 href="#collapseLanding"
                                 role="button"
                                 aria-expanded="false"
                                 aria-controls="collapseLanding">
                                 <i class="bi bi-chevron-down"></i>
                              </a>
                           </div>
                           <div class="collapse d-lg-block" id="collapseLanding" data-bs-parent="#ft-links">
                              <ul class="list-unstyled mb-0 py-3 py-lg-0">
                                 <li class="mb-2">
                                    <a href="index.html" class="text-decoration-none text-reset">Accueil</a>
                                 </li>
                                 <li class="mb-2">
                                    <a href="#!" class="text-decoration-none text-reset">Articles</a>
                                 </li>
                                 <li class="mb-2">
                                    <a href="landing-finance.html" class="text-decoration-none text-reset">Formations</a>
                                 </li>
                                 <li class="mb-2">
                                    <a href="landing-jamstack-agancy.html" class="text-decoration-none text-reset">Forums</a>
                                 </li>
                                 <li class="mb-2">
                                    <a href="landing-conference.html" class="text-decoration-none text-reset">Conference</a>
                                 </li>
                                 <li class="mb-2">
                                    <a href="#!" class="text-decoration-none text-reset">Application</a>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-4 col-12">
                        <div class="mb-3 pb-2 d-flex justify-content-between border-bottom border-bottom-lg-0 position-relative">
                           <h5>Compte</h5>
                           <a
                              class="d-block d-lg-none stretched-link text-inherit"
                              data-bs-toggle="collapse"
                              href="#collapseAccounts"
                              role="button"
                              aria-expanded="false"
                              aria-controls="collapseAccounts">
                              <i class="bi bi-chevron-down"></i>
                           </a>
                        </div>
                        <div class="collapse d-lg-block" id="collapseAccounts" data-bs-parent="#ft-links">
                           <ul class="list-unstyled mb-0 py-3 py-lg-0">
                              <li class="mb-2">
                                 <a href="signup.html" class="text-decoration-none text-reset">Inscription</a>
                              </li>
                              <li class="mb-2">
                                 <a href="signin.html" class="text-decoration-none text-reset">Connexion</a>
                              </li>



                           </ul>
                        </div>
                     </div>
                     <div class="col-lg-4 col-12">
                        <div class="mb-3 pb-2 d-flex justify-content-between border-bottom border-bottom-lg-0 position-relative">
                           <h5>Contact</h5>
                           <a
                              class="d-block d-lg-none stretched-link text-inherit"
                              data-bs-toggle="collapse"
                              href="#collapseResources"
                              role="button"
                              aria-expanded="false"
                              aria-controls="collapseResources">
                              <i class="bi bi-chevron-down"></i>
                           </a>
                        </div>
                        <div class="collapse d-lg-block" id="collapseResources" data-bs-parent="#ft-links">
                           <ul class="list-unstyled mb-0 py-3 py-lg-0">
                              <li class="mb-2">
                                 <a href="docs/index.html" class="text-decoration-none text-reset">Whattssap</a>
                              </li>
                              <li class="mb-2">
                                 <a href="#!" class="text-decoration-none text-reset">Télephone</a>
                              </li>
                              <li class="mb-2">
                                 <a href="changelog.html" class="text-decoration-none text-reset">Discord</a>
                              </li>
                              <li class="mb-2">
                                 <a href="#!" class="text-decoration-none text-reset">Faqs</a>
                              </li>
                              <li class="mb-2">
                                 <a href="#!" class="text-decoration-none text-reset">Helps center</a>
                              </li>
                              <li class="mb-2">
                                 <a href="#!" class="text-decoration-none text-reset">Postcard</a>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="container mt-7 mb-3 text-center">
            <div class="row align-items-center">

               <div class="col-md-3">
                  <div class="text-md-end d-flex align-items-center justify-content-md-end">

                     <div class="ms-3 d-flex gap-2">
                        <a href="#!" class="text-reset btn btn-instagram btn-icon">
                           <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                              <path
                                 d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                           </svg>
                        </a>
                        <a href="#!" class="text-reset btn btn-facebook btn-icon">
                           <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                              <path
                                 d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                           </svg>
                        </a>
                        <a href="#!" class="text-reset btn btn-twitter btn-icon">
                           <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                              <path
                                 d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                           </svg>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- Scroll top -->
      <div class="btn-scroll-top">
         <svg class="progress-square svg-content" width="100%" height="100%" viewBox="0 0 40 40">
            <path d="M8 1H32C35.866 1 39 4.13401 39 8V32C39 35.866 35.866 39 32 39H8C4.13401 39 1 35.866 1 32V8C1 4.13401 4.13401 1 8 1Z" />
         </svg>
      </div>
      <!-- Libs JS -->
      <script src="{{asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
      <script src="{{asset('assets/libs/simplebar/dist/simplebar.min.js')}}"></script>
      <script src="{{asset('assets/libs/headhesive/dist/headhesive.min.js')}}"></script>
      <!-- Theme JS -->
      <script src="{{asset('assets/js/theme.min.js')}}"></script>
      <script src="{{asset('assets/libs/swiper/swiper-bundle.min.js')}}"></script>
      <script src="{{asset('assets/js/vendors/swiper.js')}}"></script>
      <script src="{{asset('assets/libs/scrollcue/scrollCue.min.js')}}"></script>
      <script src="{{asset('assets/js/vendors/scrollcue.js')}}"></script>
      @stack('scripts')
          @livewireScripts

          <script>
        new FroalaEditor('#request', {
        // Set custom buttons.
        toolbarButtons: {
            saveParam: 'content',
            saveURL: 'http://localhost:8000/article/create',
            saveMethod: 'POST',
                'moreText': {
                    'buttons': ['bold', 'italic', 'underline', 'strikeThrough', 'subscript', 'superscript', 'fontFamily', 'fontSize', 'textColor', 'backgroundColor', 'inlineClass', 'inlineStyle', 'clearFormatting']
                },
                'moreParagraph': {
                    'buttons': ['alignLeft', 'alignCenter', 'formatOLSimple', 'alignRight', 'alignJustify', 'formatOL', 'formatUL', 'paragraphFormat', 'paragraphStyle', 'lineHeight', 'outdent', 'indent', 'quote']
                },
                'moreRich': {
                    'buttons': ['insertLink', 'insertImage', 'insertVideo', 'insertTable', 'emoticons', 'fontAwesome', 'specialCharacters', 'embedly', 'insertFile', 'insertHR']
                },
                'moreMisc': {
                    'buttons': ['undo', 'redo', 'fullscreen', 'print', 'getPDF', 'spellChecker', 'selectAll', 'html', 'help']
                }
                },
        });


         </script>
   </body>
</html>
