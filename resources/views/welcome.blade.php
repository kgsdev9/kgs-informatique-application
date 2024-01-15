@extends('master.master')
@section('title', 'Bienvenue - Sur |  KGS INFORMATIQUE')
@section('content')
<main >
    <!--hero section start-->
    <section class=" bg-primary pb-10 pt-4" data-cue="fadeIn">
       <div class="container">
          <div class="row">
             <div class="col-lg-8 offset-lg-2 col-md-12 position-relaive">
                <div class="text-white-stable text-center position-relaive my-lg-8 my-6" data-cue="zoomIn">
                   <span class="fw-medium fs-4">Bienvenue sur KGS informatique</span>
                   <h1 class="text-white-stable display-3 mt-3 mb-3">La marque des pro c'est l'adaptation </h1>
                   <p class="mb-0 pb-8 px-lg-7 text-opacity-75 lead">
                     Développeur  web/mobile  avec plus de 03 ans d'experience je vous partage mes conaissances et mes réalisations.
                   </p>
                   <a href="#openPosition" class="btn btn-outline-light me-2">Réalisations</a>
                   <a href="#!" class="btn btn-outline-warning">Articles</a>
                </div>
             </div>
          </div>
       </div>
    </section>
    <section class="container py-lg-8 py-5" data-cue="fadeIn" data-show="true" style="animation-name: fadeIn; animation-duration: 600ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;">
        <div class="row justify-content-center mb-8">
           <div class="col-xl-6 col-lg-10 col-12">
              <div class="text-center d-flex flex-column gap-4">

                 <div class="d-flex flex-column gap-3 mx-lg-8 mt-6">
                    <h1 class="mb-0">Commencer l'aventure avec kgs informatique</h1>
                    <p class="mb-0">Les réalisations parlent en notre faveur .</p>
                 </div>
              </div>
           </div>
        </div>
        <div class="row gy-4 gy-md-6">
           <div class="col-lg-4 col-md-6 col-12 flex-column d-flex gap-4 gap-md-6 mt-lg-8" data-cue="slideInLeft" data-show="true" style="animation-name: slideInLeft; animation-duration: 600ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;">
              <div class="card bg-light card-lift">
                 <div class="card-body text-body">
                    <p class="mb-0">“j'ai connu Stéphane dans une groupe informatique en 2020 nommé Programmons comme les pros je suivais ces posts sur la programmation j'ai vraiment aimé ces réalisations. tout simplement merci”</p>
                    <div class="mt-4 d-flex align-items-center">
                       <img src="{{asset('homeavatar.png')}}" alt="" class="avatar avatar-lg rounded-circle border p-1 bg-white">
                       <div class="ms-3 lh-1">
                          <h5 class="mb-0">ERIC NOEL KOUAKOU</h5>
                          <small>Développeur web </small>
                       </div>
                    </div>
                 </div>
                 <a href="#" class="stretched-link"></a>
              </div>
              <div class="card bg-light card-lift">
                 <div class="card-body text-body">
                    <p class="mb-0">“Une personne m'a récommandé stephane pour concevoir le site web de notre entreprise digitale en ligne je ne regrette pas .”</p>
                    <div class="mt-4 d-flex align-items-center">
                       <img src="{{asset('homeavatar.png')}}" alt="" class="avatar avatar-lg rounded-circle border p-1 bg-white">
                       <div class="ms-3 lh-1">
                          <h5 class="mb-0">NEGOCE BUSSNESS ENTREPRISE</h5>
                          <small>ENTREPRISE</small>
                       </div>
                    </div>
                 </div>
                 <a href="#" class="stretched-link"></a>
              </div>
           </div>
           <div class="col-lg-4 col-md-6 col-12 flex-column d-flex gap-4 gap-md-6" data-cue="zoomIn" data-show="true" style="animation-name: zoomIn; animation-duration: 600ms; animation-timing-function: ease; animation-delay: 0ms; animation-direction: normal; animation-fill-mode: both;">
              <div class="card bg-light card-lift">
                 <div class="card-body text-body">
                    <p class="mb-0">“J'ai sollicité Guy Stéphane pour concevoir une application de gestion de tontine , aujourd'hui je gere mes tontines de facon professionelle sans trop me prendre la téte .</p>
                    <div class="mt-4 d-flex align-items-center">
                       <img src="{{asset('femmeavatar.jpg')}}" alt="" class="avatar avatar-lg rounded-circle border p-1 bg-white">
                       <div class="ms-3 lh-1">
                          <h5 class="mb-0">Andrea N'cho Stéphanie</h5>
                          <small>Administratrice d'une tontine en ligne </small>
                       </div>
                    </div>
                 </div>
                 <a href="#" class="stretched-link"></a>
              </div>
              <div class="card bg-light card-lift">
                 <div class="card-body text-body">
                    <p class="mb-0">“J'ai eu a collaborer avec Guy Stephane pendant plus de 04 mois j'ai été vraiment satisfait par ses talents. ca été une experience vraiment enrichissante ”</p>
                    <div class="mt-4 d-flex align-items-center">
                       <img src="{{asset('homeavatar.png')}}" alt="" class="avatar avatar-lg rounded-circle border p-1 bg-white">
                       <div class="ms-3 lh-1">
                          <h5 class="mb-0">LANDRY ABRO</h5>
                          <small>CEO PROXIMITI</small>
                       </div>
                    </div>
                 </div>
                 <a href="#" class="stretched-link"></a>
              </div>
           </div>
           <div class="col-lg-4 col-md-12 col-12 flex-column flex-md-row flex-lg-column d-flex gap-4 gap-md-6 mt-lg-8" data-cue="slideInRight" data-show="true" style="animation-name: slideInRight; animation-duration: 600ms; animation-timing-function: ease; animation-delay: 200ms; animation-direction: normal; animation-fill-mode: both;">
              <div class="card bg-light card-lift">
                 <div class="card-body text-body">
                    <p class="mb-0">“J'etais a la recherche d'un developpeur pour concevoir le site de mon etablissement et des applications de gestion en interne aujourd'hui j'ai tout digitalité je suis vraiment satisifait Merci Fils Stephane”</p>
                    <div class="mt-4 d-flex align-items-center">
                       <img src="{{asset('homeavatar.png')}}" alt="" class="avatar avatar-lg rounded-circle border p-1 bg-white">
                       <div class="ms-3 lh-1">
                          <h5 class="mb-0">HERVE BRICE TIE</h5>
                          <small>FONDATEUR INSTITUT ROOSEVELT </small>
                       </div>
                    </div>
                 </div>
                 <a href="#" class="stretched-link"></a>
              </div>
              <div class="card bg-light card-lift">
                 <div class="card-body text-body">
                    <p class="mb-0">“Merci mon fils pour ton apport et ton soutien technique et tes efforts congugués aujoud'hui, merci pour le partage de tes connaissances. Bonne carriere à toi ”</p>
                    <div class="mt-4 d-flex align-items-center">
                       <img src="{{asset('homeavatar.png')}}" alt="" class="avatar avatar-lg rounded-circle border p-1 bg-white">
                       <div class="ms-3 lh-1">
                          <h5 class="mb-0">Jean N'dri Charles </h5>
                          <small>Développeur Sénior HKMS GROUP SERVICE SARL  </small>
                       </div>
                    </div>
                 </div>
                 <a href="#" class="stretched-link"></a>
              </div>
           </div>

        </div>
     </section>



     <section class="mb-xl-9 my-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-md-12 col-12">
                   <div class="text-center mb-7">
                      <h2>Articles récemments publiés .</h2>
                      <p class="mb-0">Aidons nous mutuellement à progresser et faire comprendre les les concepts selon notre expetise .</p>
                   </div>
                </div>
             </div>
           <div class="row g-5">
            @foreach ($articlesTake as $article)
            <div class="col-lg-4 col-md-6">
                <div class="bg-white d-flex position-relative gap-3 rounded-3 shadow-sm overflow-hidden">
                    <div class="w-100">
                        <div class="p-3">
                            <h5 class="mb-2 text-black d-flex align-items-center">

                                <h3>{{$article->title}}</h3>
                                @foreach ($article->articletags as $tag)
                                <span class="badge bg-success ms-auto small">{{$tag->name}}</span>
                                @endforeach
                            </h5>

                            <p class="mt-5">{{Str::limit($article->mini_description, 225)}}.</p>
                        </div>
                        <div class="border-top d-flex align-items-center w-100">
                            <small class="me-auto px-3">

                                    {{$article->created_at}}
                            </small>
                            <a href="{{route('blog.show', $article->slug)}}" class="btn btn-primary btn-sm shadow-sm rounded-0"><span>Lire plus </span></a>
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
