@extends('master.master')
@section('title', $ressource->slug)
@section('content')
<main >

    <div class="py-xl-9 py-4 text-center">
       <div class="container">
          <div class="row">
             <article class="col-lg-8 offset-lg-2">
                <h1>{{$ressource->title}}</h1>
                <div class="row">
                   <div class="me-5">
                      <span class="fs-6">Publié par  {{$ressource->owner->name}} <span> vue  <svg width="20px" height="20px" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path fill="#000000" d="M512 160c320 0 512 352 512 352S832 864 512 864 0 512 0 512s192-352 512-352zm0 64c-225.28 0-384.128 208.064-436.8 288 52.608 79.872 211.456 288 436.8 288 225.28 0 384.128-208.064 436.8-288-52.608-79.872-211.456-288-436.8-288zm0 64a224 224 0 1 1 0 448 224 224 0 0 1 0-448zm0 64a160.192 160.192 0 0 0-160 160c0 88.192 71.744 160 160 160s160-71.808 160-160-71.744-160-160-160z"></path></g></svg> {{$ressource->view}}   </span> </span>
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
