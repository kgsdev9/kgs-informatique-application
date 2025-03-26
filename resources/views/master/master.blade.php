
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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/4.0.13/css/froala_editor.pkgd.min.css">

        <link rel="stylesheet" href="{{asset('assets/css/theme.min.css')}}">
      <title>@yield('title')</title>
      @livewireStyles
      @stack('css')
   </head>
   <body>
      <!-- Navbar -->
      <header>
         <nav class="navbar navbar-expand-lg navbar-light w-100 transparent">
            <div class="container px-3">
               <a class="navbar-brand" href="/">
                 <strong></strong> Kgs Informatique
               </a>
               <button class="navbar-toggler offcanvas-nav-btn" type="button">
                  <i class="bi bi-list"></i>
               </button>
               <div class="offcanvas offcanvas-start offcanvas-nav" style="width: 20rem">
                  <div class="offcanvas-header">
                    <a class="navbar-brand" href="/">
                        Kgs Informatique
                       </a>
                     <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                  </div>
                  <div class="offcanvas-body pt-0 align-items-center">
                     <ul class="navbar-nav mx-auto align-items-lg-center">

                        <li class="nav-item ">
                           <a class="nav-link" href="{{route('home.blog')}}" >
                            <svg width="20px" height="15px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M22 7.662l1-1V18h-7v4.745L11.255 18H1V2h16.763l-1 1H2v14h9.668L15 20.331V17h7zm1.657-5.192a.965.965 0 0 1 .03 1.385l-9.325 9.324-4.097 1.755a.371.371 0 0 1-.487-.487l1.755-4.097 9.31-9.309a.98.98 0 0 1 1.385 0zm-10.1 9.965l-1.28-1.28-.961 2.24zm7.243-7.11l-1.414-1.413-6.469 6.47 1.414 1.413zm1.865-2.445l-.804-.838a.42.42 0 0 0-.6-.006l-1.168 1.168 1.414 1.415 1.152-1.152a.42.42 0 0 0 .006-.587z"></path><path fill="none" d="M0 0h24v24H0z"></path></g></svg>
                            Articles</a>

                        </li>
                        <li class="nav-item dropdown ">
                           <a class="nav-link  " href="{{route('home.app')}}">
                            <svg width="20px" height="15px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title></title> <g fill="none" fill-rule="evenodd" id="页面-1" stroke="none" stroke-width="1"> <g id="导航图标" transform="translate(-325.000000, -80.000000)"> <g id="编组" transform="translate(325.000000, 80.000000)"> <polygon fill="#FFFFFF" fill-opacity="0.01" fill-rule="nonzero" id="路径" points="24 0 0 0 0 24 24 24"></polygon> <polygon id="路径" points="22 7 12 2 2 7 2 17 12 22 22 17" stroke="#212121" stroke-linejoin="round" stroke-width="1.5"></polygon> <line id="路径" stroke="#212121" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" x1="2" x2="12" y1="7" y2="12"></line> <line id="路径" stroke="#212121" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" x1="12" x2="12" y1="22" y2="12"></line> <line id="路径" stroke="#212121" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" x1="22" x2="12" y1="7" y2="12"></line> <line id="路径" stroke="#212121" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" x1="17" x2="7" y1="4.5" y2="9.5"></line> </g> </g> </g> </g></svg>
                            Réalisations</a>

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
                     <div class="col-lg-6 col-12">
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
                                    <a href="/" class="text-decoration-none text-reset">Accueil</a>
                                 </li>
                                 <li class="mb-2">
                                    <a href="{{route('home.blog')}}" class="text-decoration-none text-reset">Articles</a>
                                 </li>
                                 <li class="mb-2">
                                    <a href="{{route('all.courses')}}" class="text-decoration-none text-reset">Formations</a>
                                 </li>
                                 <li class="mb-2">
                                    <a href="{{route('home.forums')}}" class="text-decoration-none text-reset">Forums</a>
                                 </li>

                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-6 col-12">
                        <div class="mb-3 pb-2 d-flex justify-content-between border-bottom border-bottom-lg-0 position-relative">
                           <h5>Poltique et sécurité</h5>
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
                                 <a href="#" class="text-decoration-none text-reset">LÉGAL</a>
                              </li>
                              <li class="mb-2">
                                 <a href="#" class="text-decoration-none text-reset">Conditions d’utilisation</a>
                              </li>

                              <li class="mb-2">
                                <a href="#" class="text-decoration-none text-reset">  Confidentialité</a>
                             </li>

                             <li class="mb-2">
                                <a href="#" class="text-decoration-none text-reset">Code de conduite</a>
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
                  <a class="mb-4 mb-lg-0 d-block text-inverse text-dark" href="/">
                        KGS INFORMATIQUE </a>
               </div>
               <div class="col-md-9 col-lg-6">
                  <div class="small mb-3 mb-lg-0 text-lg-center">


                     <span ><a href="#" class="text-dark"> Cette plateforme est la marque déposée de kgs informatique</a></span>
                  </div>
               </div>
               <div class="col-md-3">
                  <div class="text-md-end d-flex align-items-center justify-content-md-end">

                     <div class="ms-3 d-flex gap-2">

                        <a href="#!" class="btn btn-facebook btn-icon">
                           <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                              <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"></path>
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
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/4.0.13/js/froala_editor.pkgd.min.js"></script>
      <script>
        $(document).ready(function() {
            var editor = new FroalaEditor('#request');
        });
    </script>
          @livewireScripts
   </body>
</html>
