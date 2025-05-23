@extends('master.master')
 @section('content')
 <main>
    <section class="py-lg-7 py-5 bg-light-subtle">
       <div class="container">
          <div class="row">
            @include('dashboard.slidebar')
            <div class="col-lg-9 col-md-8">
                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body p-lg-5">
                       <div class="mb-5">
                          <h4 class="mb-1">Modifier {{$ressource->name}} </h4>
                       </div>
                       <form class="row g-3 needs-validation" novalidate="" action="{{route('category.update', $ressource->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('patch')
                          <div class="col-lg-6 col-md-12">
                            <label for="title" class="form-label">Tag</label>
                             <input id="title" name="name"  class="form-control" type="text" placeholder="Title de l'article" value="{{$ressource->name}}">
                          </div>
                          <div class="col-lg-6 col-md-12">
                            <label for="formGroupEmailInput" class="form-label">Image</label>
                            <input id="title" name="image"  class="form-control" type="file" >
                         </div>
                          <div class="col-12">
                             <button class="btn btn-primary" type="submit">Enregistrer</button>
                          </div>
                       </form>
                    </div>
                 </div>
             </div>
       </div>
    </section>
 </main>
@endsection

