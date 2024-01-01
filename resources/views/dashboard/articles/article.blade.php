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
                     <form action="{{route('article.store')}}" method="POST">
                        @csrf
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="title" class="form-label">Title de l'article</label>
                                <input id="title" name="title"  class="form-control" type="text" placeholder="Title de l'article" value="{{old('title')}}">
                                <small>N'exeder par plus de 300 lignes .</small>
                            </div>

                                    <div class="mb-3">
                                        <label class="form-label">Bref resume de l'article </label>
                                        <textarea name="mini_description" cols="30" rows="2" class="form-control">{{old('mini_description')}}</textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Descriptions</label>
                                        <textarea  id="editor" cols="30" rows="10" name="description" class="form-control"></textarea>

                                    </div>

                                    <button class="btn btn-dark">Enregister</button>
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

