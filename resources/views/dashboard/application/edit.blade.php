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
                    <h1>Modifier application  </h1>
                     <form action="{{route('applications.update', $ressource->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="title" class="form-label">Titre de l'application</label>
                                <input id="title" name="title"  class="form-control" type="text" placeholder="Title de l'article" value="{{$ressource->title}}">

                            </div>
                            <div class="mb-3">
                                <label for="title" class="form-label">Image de l'application </label>
                                <input id="title" name="image"  class="form-control" type="file" >
                            </div>

                            <div class="mb-3">
                                <label for="title" class="form-label">Lien de  l'application</label>
                                <input id="title" name="url"  class="form-control" type="text" placeholder="Lien de l'application" value="{{$ressource->url}}">

                            </div>

                            <div class="mb-3">
                                <label for="title" class="form-label">Description l'application</label>
                              <textarea name="description" class="form-control" id="" cols="30" rows="10">{{$ressource->description}}</textarea>

                            </div>
                          <button class="btn btn-dark">Enregister les modifications</button>
                        </div>
                </form>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection

