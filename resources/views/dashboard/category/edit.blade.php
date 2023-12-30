@extends('master.master')
 @section('content')

 <main>
    <section class="pt-5 pb-5">
        <div class="container">
            <div class="row mt-0 mt-md-4">
                <div class="col-lg-3 col-md-4 col-12">
                    <!-- User profile -->
                   @include('dashboard.slidebar')
                </div>
                <div class="col-lg-9 col-md-8 col-12">
                    <h1>Nouvel tag </h1>
                     <form action="{{route('category.update', $ressource->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('patch')
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="title" class="form-label">Tag</label>
                                <input id="title" name="name"  class="form-control" type="text" placeholder="Title de l'article" value="{{$ressource->name}}">

                            </div>
                            <div class="mb-3">
                                <label for="title" class="form-label">Image du tag </label>
                                <input id="title" name="image"  class="form-control" type="file" >
                            </div>
                          <button class="btn btn-dark">Enregister</button>
                        </div>
                </form>
                </div>
            </div>
        </div>
    </section>
</main>

@endsection

