<div>
    <main class="bg-light-subtle">

        <section class="py-5 py-lg-8">
           <div class="container">
              <div class="row">
                 <div class="col-lg-8 offset-lg-2 col-md-12 col-12">
                    <div class="text-center mb-8">
                       <h1>Tous les sujets du forums .</h1>
                       <p class="mb-0">Vérifier que le sujet a été deja traité avant de créer un nouveau sujet.</p>
                    </div>
                 </div>
              </div>
              <div class="row ">
                <div class="row mb-5">
                    <div class="col-lg-5 col-md-7 col-12">
                       <div class="row g-2 g-sm-3 align-items-center">
                          <div class="col-lg-6 col-md-6 col-12">
                             <a href="{{route('forum.create')}}" class="btn btn-outline-dark">Créer une nouvelle sujet</a>
                          </div>
                          <div class="col-lg-6 col-md-6 col-12">
                             <label for="categoryList" class="form-label visually-hidden">Selectionner une catégorie</label>
                             <select class="form-select" wire:change="filterTag($event.target.value)">
                                <option value="">Choisir un tag</option>
                                @foreach ($allTags as $key  => $tag)
                                <option value="{{$key}}">{{$tag->name}}</option>
                                @endforeach
                             </select>
                          </div>
                       </div>
                    </div>
                 </div>

                 <div class="col-lg-12 col-12 mt-4">
                    <div class="row gy-4 mb-lg-8 mb-6">
                        @foreach ($allTopics as $topic)
                        <div class="col-md-4">
                            <div class="bg-white d-flex position-relative gap-3 rounded-3 shadow-sm overflow-hidden">
                                <div class="w-100">
                                    <div class="p-3">
                                        <h5 class="mb-2 text-black d-flex align-items-center">
                                            <span class="h5 m-0 fw-bold text-primary">{{$topic->title}}</span>
                                            <span class="badge bg-danger ms-auto small">{{$topic->status == 0 ?'non resolu' : 'resolu'}}</span>
                                        </h5>
                                        <p>{{$topic->description}}.</p>
                                    </div>
                                    <div class="border-top d-flex align-items-center w-100">
                                        <small class="me-auto px-3">
                                            <i class="icofont-pin me-1"></i>
                                            {{$topic->tag->name}}
                                        </small>
                                        <a href="{{route('show.topic', $topic->slug)}}" class="btn btn-primary btn-sm shadow-sm rounded-0"><span>Consulter</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                 </div>
              </div>
           </div>
        </section>
     </main>
</div>
