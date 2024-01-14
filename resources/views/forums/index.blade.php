@extends('master.master')
@section('content')
<main class="bg-light-subtle">

    <section class="py-5 py-lg-8">
       <div class="container">


          <div class="row">
             <div class="col-lg-8 offset-lg-2 col-md-12 col-12">
                <div class="text-center mb-8">
                   <h1>Tous les sujets du forums .</h1>
                   <p class="mb-0">Vérifier que le sujet a été deja traité avant de créer un nouveau sujet.</p>
                </div>
             </div>
          </div>

          <div class="row ">
            <div class="row mb-5">
                <div class="col-lg-5 col-md-7 col-12">
                   <div class="row g-2 g-sm-3 align-items-center">
                      <div class="col-lg-6 col-md-6 col-12">
                         <form>
                            <label for="searchInput" class="form-label visually-hidden">Search Blog</label>
                            <input type="search" class="form-control" id="searchInput" placeholder="Rechercher un sujet">
                         </form>
                      </div>
                      <div class="col-lg-6 col-md-6 col-12">
                         <label for="categoryList" class="form-label visually-hidden">Selectionner une catégorie</label>
                         <select class="form-select" >
                            <option value="Startup">Javascript</option>
                         </select>
                      </div>
                   </div>
                </div>
             </div>
             <div class="col-md-12">
                <h3 class="mb-0"> <a href="" class="btn btn-outline-dark">Créer une nouvelle sujet</a> </h3>
             </div>

             <div class="col-lg-12 col-12 mt-4">
                <div class="row gy-4 mb-lg-8 mb-6">

                    <div class="col-md-4">
                        <div class="bg-white d-flex position-relative gap-3 rounded-3 shadow-sm overflow-hidden">
                            <div class="w-100">
                                <div class="p-3">
                                    <h5 class="mb-2 text-black d-flex align-items-center">
                                        <span class="h5 m-0 fw-bold text-primary">UI/UX Designer</span>
                                        <span class="badge bg-success ms-auto small">Open</span>
                                    </h5>
                                    <div class="fs-7 mb-0 d-flex small align-items-center">
                                        <i class="icofont-briefcase me-1"></i>
                                         Job Type: Halftime
                                        <div class="mx-2"></div>
                                        <i class="icofont-badge me-1"></i>
                                         Experience: 2 - 3 Years
                                    </div>
                                </div>
                                <div class="border-top d-flex align-items-center w-100">
                                    <small class="me-auto px-3">
                                        <i class="icofont-pin me-1"></i>
                                         Remote - US (San Francisco, CA)
                                    </small>
                                    <a href="#job-form" class="btn btn-primary btn-sm shadow-sm rounded-0"><span>APPLY NOW</span></a>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="col-md-4">
                        <div class="bg-white d-flex position-relative gap-3 rounded-3 shadow-sm overflow-hidden">
                            <div class="w-100">
                                <div class="p-3">
                                    <h5 class="mb-2 text-black d-flex align-items-center">
                                        <span class="h5 m-0 fw-bold text-primary">UI/UX Designer</span>
                                        <span class="badge bg-success ms-auto small">Open</span>
                                    </h5>
                                    <div class="fs-7 mb-0 d-flex small align-items-center">
                                        <i class="icofont-briefcase me-1"></i>
                                         Job Type: Halftime
                                        <div class="mx-2"></div>
                                        <i class="icofont-badge me-1"></i>
                                         Experience: 2 - 3 Years
                                    </div>
                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Enim iure exercitationem cum eligendi voluptate aut. Dicta quisquam asperiores sint cumque sit sunt debitis ea distinctio, eius vel autem repellat! Quibusdam.</p>
                                </div>
                                <div class="border-top d-flex align-items-center w-100">
                                    <small class="me-auto px-3">
                                        <i class="icofont-pin me-1"></i>
                                         Remote - US (San Francisco, CA)
                                    </small>
                                    <a href="#job-form" class="btn btn-primary btn-sm shadow-sm rounded-0"><span>APPLY NOW</span></a>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="col-md-4">
                        <div class="bg-white d-flex position-relative gap-3 rounded-3 shadow-sm overflow-hidden">
                            <div class="w-100">
                                <div class="p-3">
                                    <h5 class="mb-2 text-black d-flex align-items-center">
                                        <span class="h5 m-0 fw-bold text-primary">UI/UX Designer</span>
                                        <span class="badge bg-success ms-auto small">Open</span>
                                    </h5>
                                    <div class="fs-7 mb-0 d-flex small align-items-center">
                                        <i class="icofont-briefcase me-1"></i>
                                         Job Type: Halftime
                                        <div class="mx-2"></div>
                                        <i class="icofont-badge me-1"></i>
                                         Experience: 2 - 3 Years
                                    </div>
                                </div>
                                <div class="border-top d-flex align-items-center w-100">
                                    <small class="me-auto px-3">
                                        <i class="icofont-pin me-1"></i>
                                         Remote - US (San Francisco, CA)
                                    </small>
                                    <a href="#job-form" class="btn btn-primary btn-sm shadow-sm rounded-0"><span>APPLY NOW</span></a>
                                </div>
                            </div>
                        </div>
                    </div>




                    <div class="col-md-4">
                        <div class="bg-white d-flex position-relative gap-3 rounded-3 shadow-sm overflow-hidden">
                            <div class="w-100">
                                <div class="p-3">
                                    <h5 class="mb-2 text-black d-flex align-items-center">
                                        <span class="h5 m-0 fw-bold text-primary">UI/UX Designer</span>
                                        <span class="badge bg-success ms-auto small">Open</span>
                                    </h5>
                                    <div class="fs-7 mb-0 d-flex small align-items-center">
                                        <i class="icofont-briefcase me-1"></i>
                                         Job Type: Halftime
                                        <div class="mx-2"></div>
                                        <i class="icofont-badge me-1"></i>
                                         Experience: 2 - 3 Years
                                    </div>
                                </div>
                                <div class="border-top d-flex align-items-center w-100">
                                    <small class="me-auto px-3">
                                        <i class="icofont-pin me-1"></i>
                                         Remote - US (San Francisco, CA)
                                    </small>
                                    <a href="#job-form" class="btn btn-primary btn-sm shadow-sm rounded-0"><span>APPLY NOW</span></a>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="col-md-4">
                        <div class="bg-white d-flex position-relative gap-3 rounded-3 shadow-sm overflow-hidden">
                            <div class="w-100">
                                <div class="p-3">
                                    <h5 class="mb-2 text-black d-flex align-items-center">
                                        <span class="h5 m-0 fw-bold text-primary">UI/UX Designer</span>
                                        <span class="badge bg-success ms-auto small">Open</span>
                                    </h5>
                                    <div class="fs-7 mb-0 d-flex small align-items-center">
                                        <i class="icofont-briefcase me-1"></i>
                                         Job Type: Halftime
                                        <div class="mx-2"></div>
                                        <i class="icofont-badge me-1"></i>
                                         Experience: 2 - 3 Years
                                    </div>
                                </div>
                                <div class="border-top d-flex align-items-center w-100">
                                    <small class="me-auto px-3">
                                        <i class="icofont-pin me-1"></i>
                                         Remote - US (San Francisco, CA)
                                    </small>
                                    <a href="#job-form" class="btn btn-primary btn-sm shadow-sm rounded-0"><span>APPLY NOW</span></a>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="col-md-4">
                        <div class="bg-white d-flex position-relative gap-3 rounded-3 shadow-sm overflow-hidden">
                            <div class="w-100">
                                <div class="p-3">
                                    <h5 class="mb-2 text-black d-flex align-items-center">
                                        <span class="h5 m-0 fw-bold text-primary">UI/UX Designer</span>
                                        <span class="badge bg-success ms-auto small">Open</span>
                                    </h5>
                                    <div class="fs-7 mb-0 d-flex small align-items-center">
                                        <i class="icofont-briefcase me-1"></i>
                                         Job Type: Halftime
                                        <div class="mx-2"></div>
                                        <i class="icofont-badge me-1"></i>
                                         Experience: 2 - 3 Years
                                    </div>
                                </div>
                                <div class="border-top d-flex align-items-center w-100">
                                    <small class="me-auto px-3">
                                        <i class="icofont-pin me-1"></i>
                                         Remote - US (San Francisco, CA)
                                    </small>
                                    <a href="#job-form" class="btn btn-primary btn-sm shadow-sm rounded-0"><span>APPLY NOW</span></a>
                                </div>
                            </div>
                        </div>
                    </div>




                    <div class="col-md-4">
                        <div class="bg-white d-flex position-relative gap-3 rounded-3 shadow-sm overflow-hidden">
                            <div class="w-100">
                                <div class="p-3">
                                    <h5 class="mb-2 text-black d-flex align-items-center">
                                        <span class="h5 m-0 fw-bold text-primary">UI/UX Designer</span>
                                        <span class="badge bg-success ms-auto small">Open</span>
                                    </h5>
                                    <div class="fs-7 mb-0 d-flex small align-items-center">
                                        <i class="icofont-briefcase me-1"></i>
                                         Job Type: Halftime
                                        <div class="mx-2"></div>
                                        <i class="icofont-badge me-1"></i>
                                         Experience: 2 - 3 Years
                                    </div>
                                </div>
                                <div class="border-top d-flex align-items-center w-100">
                                    <small class="me-auto px-3">
                                        <i class="icofont-pin me-1"></i>
                                         Remote - US (San Francisco, CA)
                                    </small>
                                    <a href="#job-form" class="btn btn-primary btn-sm shadow-sm rounded-0"><span>APPLY NOW</span></a>
                                </div>
                            </div>
                        </div>
                    </div>




                </div>






             </div>
          </div>
       </div>
    </section>
    <!--Featured end-->
 </main>
@endsection
