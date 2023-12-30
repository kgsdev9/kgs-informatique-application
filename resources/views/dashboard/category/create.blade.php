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
                     <form action="{{route('category.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="title" class="form-label">Tag</label>
                                <input id="title" name="name"  class="form-control" type="text" placeholder="Title de l'article" value="{{old('name')}}">

                            </div>
                            <div class="mb-3">
                                <label for="title" class="form-label">Image du tag </label>
                                <input id="title" name="image"  class="form-control" type="file" placeholder="Title de l'article" >
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

