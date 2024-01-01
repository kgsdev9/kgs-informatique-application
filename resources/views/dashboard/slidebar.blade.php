<nav class="navbar navbar-expand-md shadow-sm mb-4 mb-lg-0 sidenav">
    <!-- Menu -->
    <a class="d-xl-none d-lg-none d-md-none text-inherit fw-bold" href="#">Menu</a>
    <!-- Button -->
    <button class="navbar-toggler d-md-none icon-shape icon-sm rounded bg-primary text-light" type="button" data-bs-toggle="collapse" data-bs-target="#sidenav" aria-controls="sidenav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="fe fe-menu"></span>
    </button>
    <!-- Collapse -->
    <div class="collapse navbar-collapse" id="sidenav">
        <div class="navbar-nav flex-column">
            <span class="navbar-header">Dashboard</span>
            <ul class="list-unstyled ms-n2 mb-4">
                <!-- Nav item -->
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('article.index')}}">
                        <i class="fe fe-home nav-icon"></i>
                        Articles
                    </a>
                </li>
                <!-- Nav item -->
                <li class="nav-item">
                    <a class="nav-link" href="">
                        <i class="fe fe-book nav-icon"></i>
                        Forums
                    </a>
                </li>
                <!-- Nav item -->
                <li class="nav-item">
                    <a class="nav-link" href="{{route('category.index')}}">
                        <i class="fe fe-star nav-icon"></i>
                       Categories
                    </a>
                </li>
                <!-- Nav item -->
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fe fe-pie-chart nav-icon"></i>
                       Formations
                    </a>
                </li>

                 <!-- Nav item -->
                 <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fe fe-help-circle nav-icon"></i>
                       Algorthme
                    </a>
                </li>

                <!-- Nav item -->
                <li class="nav-item">
                    <a class="nav-link" href="{{route('application.index')}}">
                        <i class="fe fe-help-circle nav-icon"></i>
                        Applications
                    </a>
                </li>
            </ul>
            <!-- Navbar header -->


        </div>
    </div>
</nav>
