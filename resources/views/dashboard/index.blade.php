@extends('dashboard.master')

@section('dashboard')
<div class="card mb-4">
    <!-- Card header -->
    <div class="card-header">
        <h3 class="h4 mb-0">Mes articles </h3>
    </div>
    <!-- Table -->
    <div class="table-responsive">
        <table class="table mb-0 table-hover table-centered text-nowrap">
            <!-- Table Head -->
            <thead class="table-light">
                <tr>
                    <th scope="col">COURSES</th>
                    <th scope="col">SALES</th>
                    <th scope="col">AMOUNT</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <!-- Table Body -->
            <tbody>
                <tr>
                    <td>
                        <a href="#">
                            <div class="d-flex align-items-center">
                                <img src="../assets/images/course/course-laravel.jpg" alt="course"
                                    class="rounded img-4by3-lg">
                                <h5 class="ms-3 text-primary-hover mb-0">
                                    Building Scalable APIs with GraphQL
                                </h5>
                            </div>
                        </a>
                    </td>
                    <td>34</td>
                    <td>$3,145.23</td>
                    <td>
                        <span class="dropdown dropstart">
                            <a class="btn-icon btn btn-ghost btn-sm rounded-circle" href="#"
                                role="button" id="courseDropdown1" data-bs-toggle="dropdown"
                                data-bs-offset="-20,20" aria-expanded="false">
                                <i class="fe fe-more-vertical"></i>
                            </a>
                            <span class="dropdown-menu" aria-labelledby="courseDropdown1">
                                <span class="dropdown-header">Setting </span>
                                <a class="dropdown-item" href="#"><i
                                        class="fe fe-edit dropdown-item-icon"></i>Edit</a>
                                <a class="dropdown-item" href="#"><i
                                        class="fe fe-trash dropdown-item-icon"></i>Remove</a>
                            </span>
                        </span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="#">
                            <div class="d-flex align-items-center">
                                <img src="../assets/images/course/course-sass.jpg" alt="course"
                                    class="rounded img-4by3-lg">
                                <h5 class="ms-3 text-primary-hover mb-0">
                                    HTML5 Web Front End Development
                                </h5>
                            </div>
                        </a>
                    </td>
                    <td>30</td>
                    <td>$2,611.82</td>
                    <td>
                        <span class="dropdown dropstart">
                            <a class="btn-icon btn btn-ghost btn-sm rounded-circle" href="#"
                                role="button" id="courseDropdown2" data-bs-toggle="dropdown"
                                data-bs-offset="-20,20" aria-expanded="false">
                                <i class="fe fe-more-vertical"></i>
                            </a>
                            <span class="dropdown-menu" aria-labelledby="courseDropdown2">
                                <span class="dropdown-header">Setting </span>
                                <a class="dropdown-item" href="#"><i
                                        class="fe fe-edit dropdown-item-icon"></i>Edit</a>
                                <a class="dropdown-item" href="#"><i
                                        class="fe fe-trash dropdown-item-icon"></i>Remove</a>
                            </span>
                        </span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="#">
                            <div class="d-flex align-items-center">
                                <img src="../assets/images/course/course-vue.jpg" alt="course"
                                    class="rounded img-4by3-lg">
                                <h5 class="ms-3 text-primary-hover mb-0">
                                    Learn JavaScript Courses from Scratch
                                </h5>
                            </div>
                        </a>
                    </td>
                    <td>26</td>
                    <td>$2,372.19</td>
                    <td>
                        <span class="dropdown dropstart">
                            <a class="btn-icon btn btn-ghost btn-sm rounded-circle" href="#"
                                role="button" id="courseDropdown3" data-bs-toggle="dropdown"
                                data-bs-offset="-20,20" aria-expanded="false">
                                <i class="fe fe-more-vertical"></i>
                            </a>
                            <span class="dropdown-menu" aria-labelledby="courseDropdown3">
                                <span class="dropdown-header">Setting </span>
                                <a class="dropdown-item" href="#"><i
                                        class="fe fe-edit dropdown-item-icon"></i>Edit</a>
                                <a class="dropdown-item" href="#"><i
                                        class="fe fe-trash dropdown-item-icon"></i>Remove</a>
                            </span>
                        </span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="#">
                            <div class="d-flex align-items-center">
                                <img src="../assets/images/course/course-react.jpg" alt="course"
                                    class="rounded img-4by3-lg">
                                <h5 class="ms-3 text-primary-hover mb-0">
                                    Get Started: React Js Courses
                                </h5>
                            </div>
                        </a>
                    </td>
                    <td>20</td>
                    <td>$1,145.23</td>
                    <td>
                        <span class="dropdown dropstart">
                            <a class="btn-icon btn btn-ghost btn-sm rounded-circle" href="#"
                                role="button" id="courseDropdown4" data-bs-toggle="dropdown"
                                data-bs-offset="-20,20" aria-expanded="false">
                                <i class="fe fe-more-vertical"></i>
                            </a>
                            <span class="dropdown-menu" aria-labelledby="courseDropdown4">
                                <span class="dropdown-header">Setting </span>
                                <a class="dropdown-item" href="#"><i
                                        class="fe fe-edit dropdown-item-icon"></i>Edit</a>
                                <a class="dropdown-item" href="#"><i
                                        class="fe fe-trash dropdown-item-icon"></i>Remove</a>
                            </span>
                        </span>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<div class="card mb-4">
    <!-- Card header -->
    <div class="card-header">
        <h3 class="h4 mb-0">Mes Disuctions  </h3>
    </div>
    <!-- Table -->
    <div class="table-responsive">
        <table class="table mb-0 table-hover table-centered text-nowrap">
            <!-- Table Head -->
            <thead class="table-light">
                <tr>
                    <th scope="col">COURSES</th>
                    <th scope="col">SALES</th>
                    <th scope="col">AMOUNT</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <!-- Table Body -->
            <tbody>
                <tr>
                    <td>
                        <a href="#">
                            <div class="d-flex align-items-center">
                                <img src="../assets/images/course/course-laravel.jpg" alt="course"
                                    class="rounded img-4by3-lg">
                                <h5 class="ms-3 text-primary-hover mb-0">
                                    Building Scalable APIs with GraphQL
                                </h5>
                            </div>
                        </a>
                    </td>
                    <td>34</td>
                    <td>$3,145.23</td>
                    <td>
                        <span class="dropdown dropstart">
                            <a class="btn-icon btn btn-ghost btn-sm rounded-circle" href="#"
                                role="button" id="courseDropdown1" data-bs-toggle="dropdown"
                                data-bs-offset="-20,20" aria-expanded="false">
                                <i class="fe fe-more-vertical"></i>
                            </a>
                            <span class="dropdown-menu" aria-labelledby="courseDropdown1">
                                <span class="dropdown-header">Setting </span>
                                <a class="dropdown-item" href="#"><i
                                        class="fe fe-edit dropdown-item-icon"></i>Edit</a>
                                <a class="dropdown-item" href="#"><i
                                        class="fe fe-trash dropdown-item-icon"></i>Remove</a>
                            </span>
                        </span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="#">
                            <div class="d-flex align-items-center">
                                <img src="../assets/images/course/course-sass.jpg" alt="course"
                                    class="rounded img-4by3-lg">
                                <h5 class="ms-3 text-primary-hover mb-0">
                                    HTML5 Web Front End Development
                                </h5>
                            </div>
                        </a>
                    </td>
                    <td>30</td>
                    <td>$2,611.82</td>
                    <td>
                        <span class="dropdown dropstart">
                            <a class="btn-icon btn btn-ghost btn-sm rounded-circle" href="#"
                                role="button" id="courseDropdown2" data-bs-toggle="dropdown"
                                data-bs-offset="-20,20" aria-expanded="false">
                                <i class="fe fe-more-vertical"></i>
                            </a>
                            <span class="dropdown-menu" aria-labelledby="courseDropdown2">
                                <span class="dropdown-header">Setting </span>
                                <a class="dropdown-item" href="#"><i
                                        class="fe fe-edit dropdown-item-icon"></i>Edit</a>
                                <a class="dropdown-item" href="#"><i
                                        class="fe fe-trash dropdown-item-icon"></i>Remove</a>
                            </span>
                        </span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="#">
                            <div class="d-flex align-items-center">
                                <img src="../assets/images/course/course-vue.jpg" alt="course"
                                    class="rounded img-4by3-lg">
                                <h5 class="ms-3 text-primary-hover mb-0">
                                    Learn JavaScript Courses from Scratch
                                </h5>
                            </div>
                        </a>
                    </td>
                    <td>26</td>
                    <td>$2,372.19</td>
                    <td>
                        <span class="dropdown dropstart">
                            <a class="btn-icon btn btn-ghost btn-sm rounded-circle" href="#"
                                role="button" id="courseDropdown3" data-bs-toggle="dropdown"
                                data-bs-offset="-20,20" aria-expanded="false">
                                <i class="fe fe-more-vertical"></i>
                            </a>
                            <span class="dropdown-menu" aria-labelledby="courseDropdown3">
                                <span class="dropdown-header">Setting </span>
                                <a class="dropdown-item" href="#"><i
                                        class="fe fe-edit dropdown-item-icon"></i>Edit</a>
                                <a class="dropdown-item" href="#"><i
                                        class="fe fe-trash dropdown-item-icon"></i>Remove</a>
                            </span>
                        </span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="#">
                            <div class="d-flex align-items-center">
                                <img src="../assets/images/course/course-react.jpg" alt="course"
                                    class="rounded img-4by3-lg">
                                <h5 class="ms-3 text-primary-hover mb-0">
                                    Get Started: React Js Courses
                                </h5>
                            </div>
                        </a>
                    </td>
                    <td>20</td>
                    <td>$1,145.23</td>
                    <td>
                        <span class="dropdown dropstart">
                            <a class="btn-icon btn btn-ghost btn-sm rounded-circle" href="#"
                                role="button" id="courseDropdown4" data-bs-toggle="dropdown"
                                data-bs-offset="-20,20" aria-expanded="false">
                                <i class="fe fe-more-vertical"></i>
                            </a>
                            <span class="dropdown-menu" aria-labelledby="courseDropdown4">
                                <span class="dropdown-header">Setting </span>
                                <a class="dropdown-item" href="#"><i
                                        class="fe fe-edit dropdown-item-icon"></i>Edit</a>
                                <a class="dropdown-item" href="#"><i
                                        class="fe fe-trash dropdown-item-icon"></i>Remove</a>
                            </span>
                        </span>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@endsection
