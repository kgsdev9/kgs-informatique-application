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
                    <h1>Nouvel article </h1>
                    <form method="post" action="{{route('article.update', $ressource->id)}}">
                        @method('PATCH')
                        @csrf
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="title" class="form-label">Title de l'article</label>
                                <input id="title" name="title"  class="form-control" type="text" placeholder="Title de l'article" value="{{ $ressource->title}}">
                                <small>N'exeder par plus de 300 lignes .</small>
                            </div>
                            <div class="mb-3">
                                <div class="form-group">
                                    <label class="form-label">Selectionner des tags</label>
                                    <select  id="select-role"  name="tag_id[]" multiple placeholder="Select des tags..." autocomplete="off"  class="block w-full rounded-sm cursor-pointer focus:outline-dark" multiple >
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
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Bref resume de l'article </label>
                                        <textarea name="mini_description" class="form-control" id="" cols="30" rows="10">{{ $ressource->mini_description}}</textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Description</label>
                                        <textarea  id="editor" cols="30" rows="10" name="description">{{$ressource->description}}</textarea>
                                    </div>
                                    <button class="btn btn-dark" type="submit">Enregister</button>
                        </div>
                </form>
                </div>
            </div>
        </div>
    </section>
</main>
@push('script')
 <script src="https://cdn.jsdelivr.net/npm/tom-select/dist/js/tom-select.complete.min.js"></script>
    <script>
      new TomSelect('#select-role', {
        maxItems: 3,
      });
    </script>

@endpush

@endsection

