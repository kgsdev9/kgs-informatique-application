

<div class="col-lg-3 col-md-4">
    <div class="d-flex align-items-center mb-4 justify-content-center justify-content-md-start">

       <div class="ms-3">
          <h5 class="mb-0">{{Auth::user()->name}}</h5>
          <small>Mon compte</small>
       </div>
    </div>
    <!-- Navbar -->
    <div class="mb-4 text-center text-md-start">
       <a href="#" class="text-reset">
          <span>
             <span>View site / profile</span>
          </span>
          <span class="ms-2">
             <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-box-arrow-up-right" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"></path>
                <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"></path>
             </svg>
          </span>
       </a>
    </div>
    <div class="d-md-none text-center d-grid">
       <button class="btn btn-light mb-3 d-flex align-items-center justify-content-between" type="button" data-bs-toggle="collapse" data-bs-target="#collapseAccountMenu" aria-expanded="false" aria-controls="collapseAccountMenu">
         Dashboard
          <i class="bi bi-chevron-down ms-2"></i>
       </button>
    </div>
    <div class="collapse d-md-block" id="collapseAccountMenu">
       <ul class="nav flex-column nav-account">
          <li class="nav-item">
             <a class="nav-link active" href="#">
                <i class="align-bottom bx bx-home"></i>
                <span class="ms-2">Accueil</span>
             </a>
          </li>
          <li class="nav-item">
             <a class="nav-link" href="#">
                <i class="align-bottom bx bx-user"></i>
                <span class="ms-2">Profile</span>
             </a>
          </li>
          <li class="nav-item">
             <a class="nav-link" aria-current="page" href="{{route('forum.index')}}">
                <i class="align-bottom bx bx-lock-alt"></i>
                <span class="ms-2">Forums</span>
             </a>
          </li>
          @can('administrator')


          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{route('category.index')}}">
               <i class="align-bottom bx bx-lock-alt"></i>
               <span class="ms-2">Tags</span>
            </a>
         </li>

         <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{route('applications.index')}}">
               <i class="align-bottom bx bx-lock-alt"></i>
               <span class="ms-2">Applications</span>
            </a>
         </li>

          <li class="nav-item">
             <a class="nav-link" href="{{route('articles.index')}}" >
                <i class="align-bottom bx bx-credit-card-front"></i>
                <span class="ms-2">Articles</span>
             </a>
          </li>
          <li class="nav-item">
             <a class="nav-link" href="#">
                <i class="align-bottom bx bx-user-plus"></i>
                <span class="ms-2">Mes users</span>
             </a>
          </li>

          <li class="nav-item">
             <a class="nav-link" href="{{route('conference.index')}}">
                <i class="align-bottom bx bx-time"></i>
                <span class="ms-2"> PodCasts</span>
             </a>
          </li>
          <li class="nav-item">
             <a class="nav-link" href="#">
                <i class="align-bottom bx bx-link"></i>
                <span class="ms-2">Compte</span>
             </a>
          </li>
          @endcan
          <li class="nav-item">
             <a class="nav-link" href="#">
                <i class="align-bottom bx bx-log-out"></i>
                <span class="ms-2">Deconnexion</span>
             </a>
          </li>
       </ul>
    </div>
 </div>


