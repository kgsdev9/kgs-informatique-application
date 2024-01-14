@extends('master.master')
@section('title', $ressource->slug)
@section('content')
<main class="">

    <div class="py-xl-9 py-4 text-center">
       <div class="container">
          <div class="row">
             <article class="col-lg-8 offset-lg-2">
                <h1>{{$ressource->title}}</h1>
                <div class="d-flex align-items-center mt-lg-6 mt-4">
                   <div class="me-5">
                      <span class="fs-6">Publié par  {{$ressource->owner->name}}  <span> vue  </span> </span>
                   </div>
                </div>
                <p>
                    {!! $ressource->description !!}
                </p>
             </article>
          </div>
       </div>
    </div>
 </main>

@endsection
