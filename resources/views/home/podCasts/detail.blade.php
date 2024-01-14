@extends('master.master')
@section('title', $ressource->slug)
@section('content')
<main>

    <section class="mb-xl-9 mt-6">
       <div class="container">
          <div class="row">
             <div class="col-md-12">
                <div class="mb-6">
                   <h1 class="mb-0">Transforming digital experience</h1>
                </div>
             </div>
          </div>

          <div class="row">
             <div class="col-lg-7 col-md-12">
                <figure>
                   <img src="{{asset('podcast.png')}}" class="img-fluid rounded-3 shadow-sm" alt="{{$ressource->title}}">
                </figure>

                <p class="mt-6">{{$ressource->description}}.</p>
             </div>


             <div class="col-lg-4 offset-lg-1 col-md-12">
                <div class="d-flex pt-4 pt-lg-0 pb-5">
                   <div class="icon-md icon-shape rounded-circle bg-body-tertiary bg-opacity-50 border mb-3 flex-shrink-0">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                         <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"></path>
                      </svg>
                   </div>

                   <div class="ms-3">
                      <h5>LIeu </h5>
                      <p class="mb-0">Abidjan rue cocody Nan Informatique</p>
                   </div>
                </div>

                <div class="d-flex border-1 border-top-dashed border-secondary border-opacity-25 py-5">
                   <div class="icon-md icon-shape rounded-circle bg-body-tertiary bg-opacity-50 border mb-3 flex-shrink-0">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-window-dock" viewBox="0 0 16 16">
                         <path d="M3.5 11a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Zm3.5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1Zm4.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Z"></path>
                         <path d="M14 1a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h12ZM2 14h12a1 1 0 0 0 1-1V5H1v8a1 1 0 0 0 1 1ZM2 2a1 1 0 0 0-1 1v1h14V3a1 1 0 0 0-1-1H2Z"></path>
                      </svg>
                   </div>
                   <div class="ms-3">
                      <h5>Date de création</h5>
                      <p class="mb-0">{{$ressource->created_at}}</p>
                   </div>
                </div>

             </div>
          </div>
       </div>
    </section>

 </main>

@endsection
