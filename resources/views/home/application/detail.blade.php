@extends('master.master')
@section('content')
<main>


<section class="bg-light-subtle bg-opacity-10  pb-xl-0 py-5 ">
    <div class="container">
        <div class="row g-xl-7 gy-5">
            <div class="col-lg-6 col-12">
                <div class="me-xl-7">
                    <div class="mb-5">
                        <h1 class="mb-3">{{$detailApp->title}}</h1>
                        <p>{{$detailApp->description}}</p>
                    </div>
                    <div class="mb-5">
                        <a href="{{$detailApp->url}}" class="btn btn-outline-dark">
                            Une démonstration complete
                            <span class="ms-1">
                               <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-right-circle-fill" viewBox="0 0 16 16">
                                  <path d="M0 8a8 8 0 1 0 16 0A8 8 0 0 0 0 8zm5.904 2.803a.5.5 0 1 1-.707-.707L9.293 6H6.525a.5.5 0 1 1 0-1H10.5a.5.5 0 0 1 .5.5v3.975a.5.5 0 0 1-1 0V6.707l-4.096 4.096z"></path>
                               </svg>
                            </span>
                         </a>

                         

                    </div>

                </div>
            </div>
            <div class="col-lg-6 col-12 ">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" style="height:500px;" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
                          </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
 </main>
@endsection
