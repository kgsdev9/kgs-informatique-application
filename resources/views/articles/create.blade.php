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
                        <label class="form-label">Créer un article </label>
                        <input required="" id="con-name" name="name" type="text" class="form-control" placeholder="Title de l'article">
                        <small>Moving heaven divide two sea female great midst spirit</small>
                      </div>
                    </div>

                  <textarea class="form-control" name="description">

                  </textarea>

                    <!-- Create post button -->
                    <div class="col-md-12 text-start">
                      <button class="btn btn-primary w-100" type="submit">Publier</button>
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
