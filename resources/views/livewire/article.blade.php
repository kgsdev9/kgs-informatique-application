<div>

    <main class="bg-light">

        <section class="py-5 py-lg-8">
           <div class="container">
              <div class="row">
                 <div class="col-lg-12 col-md-12 col-12">
                    <div class="text-center">
                       <h1 class="mb-3">Tous les articles récemment publiés.</h1>
                       <p class="mb-0">Ces articles font l'objet d'une vérification avant d'etre publié , le pourcentage de trouvé un bug est quasi nul 🤷‍</p>
                    </div>
                 </div>
              </div>
           </div>
        </section>
        <section class=" py-5 py-lg-8 bg-opacity-50">
            <div class="container">
               <div class="row">
                  <div class="text-center">
                     <div>
                        <h1 class="mb-0 text-center">Tous les tags</h1>
                     </div>
                  </div>
                <div class="mt-6 col-12 d-flex flex-wrap gap-2">
                    @foreach ($tags as $tag)
                    <a href="#" wire:click="toggleTag({{$tag->id}})"  class="filter-badge ">{{$tag->name}}</a>
                    @endforeach
                </div>

               </div>
            </div>
         </section>
        <section class="mb-xl-9 my-4">
            <div class="container">
               <div class="row gy-lg-7 gy-5">
                @foreach ($articles as $article)
                <div class="col-lg-4 col-md-6">
                    <div class="bg-white d-flex position-relative gap-3 rounded-3 shadow-sm overflow-hidden">
                        <div class="w-100">
                            <div class="p-3">
                                <h5 class="mb-2 text-black d-flex align-items-center">
                                    <h3 class="h5 m-0 fw-bold ">{{$article->title}}</h3>

                                    @foreach ($article->articletags as $tag)
                                    <span class="badge bg-success ms-auto small">{{$tag->name}}</span>
                                    @endforeach
                                </h5>

                                <p class="mt-5">{{Str::limit($article->mini_description, 225)}}.</p>
                            </div>
                            <div class="border-top d-flex align-items-center w-100">
                                <small class="me-auto px-3">

                                        {{$article->created_at}}
                                </small>
                                <a href="{{route('article.detail', $article->slug)}}" class="btn btn-primary btn-sm shadow-sm rounded-0"><span>Lire plus </span></a>
                            </div>
                        </div>
                    </div>
                </div>
                  @endforeach
                  <div class="col-lg-12 text-center">
                     <div class="mt-xl-7 mt-3">
                        <a class="btn btn-outline-primary" href="#!">
                           <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                           <span class="ms-2">Charger</span>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </section>
     </main>
</div>
