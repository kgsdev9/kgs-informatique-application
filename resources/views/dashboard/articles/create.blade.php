@extends('dashboard.master')

@section('master')
<main>

    <!-- =======================
    Main contain START -->
    <section class="py-4">
        <div class="container">
        <div class="row pb-4">
                <div class="col-12">
            <!-- Title -->
                        <h1 class="mb-0 h2">Créer un article </h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <!-- Chart START -->
                    <div class="card border">
                        <!-- Card body -->
                        <div class="card-body">
                <!-- Form START -->
                <form method="POST" action="{{route('article.store')}}">
                    @csrf
                  <!-- Main form -->
                  <div class="row">
                    <div class="col-12">
                      <!-- Post name -->
                      <div class="mb-3">
                        <label class="form-label">Titre de l'article </label>
                        <input required="" id="con-name" name="title" type="text" class="form-control" placeholder="Créer un article">
                        <small>Votre titre doit pousser la communauté à réagir </small>
                      </div>
                    </div>

                    <div class="col-12">
                        <!-- Post name -->
                        <div class="mb-3">
                          <label class="form-label">Catégories</label>
                        <select name="tag_id[]"  id="select2-multiple" class="select2-multiple form-control" multiple>
                            @foreach ($allTags as $tag)
                            <option value="{{$tag->id}}">{{$tag->name}}</option>
                            @endforeach

                        </select>

                        </div>
                      </div>


                  <!-- Short description -->
                  <div class="col-12">
                    <div class="mb-3">
                        <label class="form-label">Short description </label>
                        <textarea class="form-control" name="description" rows="3" placeholder="Description de l'article"></textarea>
                    </div>
                  </div>




                    <!-- Create post button -->
                    <div class="col-md-12 text-start">
                      <button class="btn btn-primary w-100" type="submit">Publier l'article </button>
                    </div>
                  </div>
                </form>
                <!-- Form END -->
                        </div>
                    </div>
                    <!-- Chart END -->
                </div>
        </div>
        </div>
    </section>
    <!-- =======================
    Main contain END -->

    </main>



@endsection

