@extends('dashboard.master')
@section('dashboard')
<main>

    <!-- =======================
    Main contain START -->
    <section class="py-4">
        <div class="container">
        <div class="row pb-4">
                <div class="col-12">
            <!-- Title -->
                        <h1 class="mb-0 h2">Créer un poste </h1>
                </div>
            </div>
            <div class="row">
                <form action="{{route('article.store')}}" method="POST">
                    @csrf
                <div class="col-12">
                    <!-- Chart START -->
                    <div class="card border">
                        <!-- Card body -->
                        <div class="card-body">

                <div class="card mb-3 ">
                    <div class="card-header border-bottom px-4 py-3">
                      <h4 class="mb-0">Basic Information</h4>
                    </div>
                    <!-- Card body -->
                    <div class="card-body">
                      <div class="mb-3">
                        <label for="courseTitle" class="form-label">Title de l'article</label>
                        <input id="courseTitle" class="form-control" type="text" placeholder="Titre de l'article">
                        <small>Write a 60 character course title.</small>
                      </div>
                      <div class="mb-3">
                        <label class="form-label">Catégories </label>

                        <select class="select2-multiple form-control" name="tag_id[]" multiple="multiple" required>
                            @foreach ($allTags as $value)
                            <option value="{{$value->id}}">{{$value->name}}</option>
                            @endforeach
                          </select>
                      </div>

                      <div class="mb-3">
                        <label class="form-label">Course Description</label>
                        <textarea name="desciption" id="basic-example" cols="30" rows="10"></textarea>
                      </div>
                    </div>
                  </div>
                        </div>
                    </div>
                    <!-- Chart END -->
                </div>
        </div>
        <button type="submit">Envoyer</button>
    </form>
        </div>
    </section>
    <!-- =======================
    Main contain END -->

    </main>



@endsection
