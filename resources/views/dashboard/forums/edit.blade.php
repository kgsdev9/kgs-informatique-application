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
                          <h4 class="mb-1">Edition du  sujet {{$ressourceForum->title}} </h4>

                       </div>
                       <form class="row g-3 needs-validation" novalidate="" action="{{route('forum.update', $ressourceForum->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                          <div class="col-lg-12 col-md-12">
                            <label for="title" class="form-label">Libéllé </label>
                             <input id="title" name="title"  class="form-control" type="text" placeholder="Title de l'article" value="{{$ressourceForum->title}}">
                          </div>
                          <div class="col-lg-12 col-md-12">
                            <label for="formGroupEmailInput" class="form-label">Tag </label>
                            <select name="tag_id" id="" class="form-control">
                                <option value="">Selectionner un tag </option>
                                @foreach ($allTags as $tag)
                                    <option value="{{$tag->id}}"
                                        {{$tag->id ==  $ressourceForum->tag->id ? 'selected' : ''}}>{{$tag->name}}</option>
                                @endforeach
                            </select>
                         </div>

                         <div class="col-lg-12 col-md-12">
                            <label for="title" class="form-label"> Conténu  </label>
                            <textarea name="description" class="form-control" id="" cols="30" rows="10">{{$ressourceForum->description}}</textarea>
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

