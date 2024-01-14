@extends('master.master')
@section('title', 'Nos applications')
@section('content')
<main>
    <section class="mb-xl-9 my-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-md-12 col-12">
                   <div class="text-center mb-7">
                      <h2>Liste des applications</h2>
                      <p class="mb-0">Consulter nos solutions informatiques et digitaliser votre entreprise  .</p>
                   </div>
                </div>
             </div>
           <div class="row g-5">
            @foreach ($allApplication as $application)
              <div class="col-lg-4 col-md-6">
                 <div class="card border-0 shadow-sm h-80 card-lift">
                    <figure>
                       <a href="#">
                          <img src="{{Storage::url($application->image)}}"" alt="event" class="card-img-top">
                       </a>
                    </figure>
                    <div class="card-body h-100 d-flex align-items-start flex-column border rounded-bottom-3 border-top-0">
                       <div class="mb-5">
                          <h4 class="my-2"><a href="#" class="text-reset">{{$application->title}}</a></h4>
                         <p>{{Str::limit($application->description,40)}}</p>
                       </div>
                       <div class="d-flex justify-content-between w-100 mt-auto">
                          <small>{{$application->created_at}}</small>
                          <a href="{{route('view.app', $application->slug)}}" class="btn btn-outline-dark">
                            Consulter
                            <span class="ms-1">
                               <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-right-circle-fill" viewBox="0 0 16 16">
                                  <path d="M0 8a8 8 0 1 0 16 0A8 8 0 0 0 0 8zm5.904 2.803a.5.5 0 1 1-.707-.707L9.293 6H6.525a.5.5 0 1 1 0-1H10.5a.5.5 0 0 1 .5.5v3.975a.5.5 0 0 1-1 0V6.707l-4.096 4.096z"></path>
                               </svg>
                            </span>
                         </a>


                       </div>
                    </div>
                 </div>
              </div>

              @endforeach
           </div>
        </div>
     </section>



</main>
@endsection
