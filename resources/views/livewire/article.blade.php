<div>

    <main>
        <div ></div>
        <!--Pageheader start-->
        <section class="py-5 py-lg-8">
           <div class="container">
              <div class="row">
                 <div class="col-lg-12 col-md-12 col-12">
                    <div class="text-center">
                       <h1 class="mb-3">Tous les articles récemment publiés.</h1>
                       <p class="mb-0">Blog sidebar layout we write stuff from time to time that might be interesting 🤷‍</p>
                    </div>
                 </div>
              </div>
           </div>
        </section>
        <!--Pageheader end-->

        <section class="bg-light py-5 py-lg-8 bg-opacity-50">
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
                  <article class="col-lg-4 col-md-6 col-12">

                    <div class="card border-0 shadow-sm h-80 card-lift">
                        <figure>
                           <a href="{{route('article.detail', $article->slug)}}">
                              <img src="{{Storage::url($article->image)}}" alt="event" class="card-img-top">
                           </a>
                        </figure>

                        <div class="card-body h-100 d-flex align-items-start flex-column border rounded-bottom-3 border-top-0">
                           <div class="mb-5">
                            @foreach ($article->articletags as $tag)
                              <small class="text-uppercase fw-semibold ls-md">  {{$tag->name}}</small>
                              @endforeach
                              <h4 class="my-2"><a href="{{route('article.detail', $article->slug)}}" class="text-reset">{{$article->title}}</a></h4>
                             <p>{{Str::limit($article->mini_description, 100)}}</p>
                           </div>
                           <div class="d-flex justify-content-between w-100 mt-auto">
                              <small>{{$article->created_at}}</small>
                              <a href="{{route('article.detail', $article->slug)}}" class="btn btn-outline-dark">Consulter</a>
                           </div>
                        </div>
                     </div>



                  </article>
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



        <!--Blog sidebar end-->


     </main>


</div>
