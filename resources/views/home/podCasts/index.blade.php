@extends('master.master')
@section('title', 'Discution')
@section('content')
<main>
    <div class="pattern-square"></div>
    <section class="py-5 py-lg-8">
       <div class="container">
          <div class="row">
             <div class="col-lg-6 offset-lg-3 col-12">
                <div class="text-center">
                   <h1 class="mb-3">Conférences, rencontres, événements et webinaires mondiaux</h1>
                   <p class="mb-0">Rencontrez nos équipes tech ou business pour parler de la liberté de créer du contenu infiniment composable.</p>
                </div>
             </div>
          </div>
       </div>
    </section>
    <section class="mb-xl-9 my-5">
       <div class="container">

          <div class="row g-5">
            @foreach ($allPodcasts as $conference)
             <div class="col-lg-4 col-md-6">
                <div class="card border-0 shadow-sm h-100 card-lift">
                   <figure>
                      <a href="{{route('podcast.show', $conference->slug)}}">
                         <img src="{{asset('podcast.png')}}" alt="event" class="card-img-top">
                      </a>
                   </figure>

                   <div class="card-body h-100 d-flex align-items-start flex-column border rounded-bottom-3 border-top-0">
                      <div class="mb-5">
                         <small class="text-uppercase fw-semibold ls-md">En ligne</small>
                         <h4 class="my-2"><a href="{{route('podcast.show', $conference->slug)}}" class="text-reset">{{$conference->title}}</a></h4>
                         <small>{{$conference->created_at}}</small>
                      </div>
                      <div class="d-flex justify-content-between w-100 mt-auto">
                         <small>Date de conference</small>
                         <small>Abidjan</small>
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
