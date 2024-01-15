

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
                          <h4 class="mb-1">Modifier l'article  article {{$ressource->title}} </h4>
                          @if ($errors->any())
                          <div class="alert alert-danger">
                              <ul>
                                  @foreach ($errors->all() as $error)
                                      <li>{{ $error }}</li>
                                  @endforeach
                              </ul>
                          </div>
                      @endif
                       </div>
                       <form method="post" action="{{route('articles.update', $ressource->id)}}">
                        @method('PATCH')
                        @csrf
                          <div class="col-lg-12 col-md-12">
                             <label for="profileFirstNameInput" class="form-label">Title de l'article</label>
                             <input id="title" name="title"  class="form-control" type="text" placeholder="Title de l'article" value="{{$ressource->title}}">
                             <div class="invalid-feedback">Please enter firstname.</div>
                          </div>
                          <div class="col-lg-12 col-md-12">
                             <label for="profileLastNameInput" class="form-label">Tag</label>
                             <select  id="select-role"  name="tag_id[]" multiple placeholder="Select des tags..." autocomplete="off"  class="badge bg-light-subtle border border-light-subtle text-light-emphasis rounded-pill ms-1" multiple >
                                @foreach ($allTags as $tag)
                                <option value="{{ $tag->id }}" @selected($ressource->articletags->contains($tag->id))
                                    @class([
                                    'btn btn-primary' => $ressource->articletags->contains($tag->id)
                                    ])>
                                    {{ $tag->name }}
                                </option>
                                @endforeach
                            </select>
                          </div>

                          <div class="col-lg-12 col-md-2">
                             <label for="profileBirthdayInput" class="form-label">Expliquer le contexte de l'article en quelue lignes</label>
                             <textarea name="mini_description" cols="30" rows="2" class="form-control">{{ $ressource->mini_description}}</textarea>

                          </div>

                          <div class="col-lg-12 col-md-2">
                            <label for="profileBirthdayInput" class="form-label">Image</label>
                            <input type="file" name="image" class="form-control">

                         </div>

                          <div class="col-lg-12">
                             <label for="profileAddressInput" class="form-label">Démontrer </label>
                           <textarea name="description" id="request" cols="30" rows="2">{{$ressource->description}}</textarea>
                          </div>

                          <div class="col-12 mt-4">
                             <button class="btn btn-primary me-2" type="submit">Enregistrer</button>
                          </div>
                       </form>
                    </div>
                 </div>
             </div>
       </div>
    </section>
 </main>

@endsection
@push('scripts')
 <script src="https://cdn.jsdelivr.net/npm/tom-select/dist/js/tom-select.complete.min.js"></script>
    <script>
      new TomSelect('#select-role', {
        maxItems: 3,
      });
    </script>

@endpush










