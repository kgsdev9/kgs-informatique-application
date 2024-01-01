<div>
    <section class="py-8">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-xl-3">
                    <div class="card mb-6 mb-md-0 shadow-none">
                        <div class="card-header">
                            <h4 class="mb-0 fs-5">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-filter me-2" viewBox="0 0 16 16">
                                    <path d="M6 10.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z">
                                </path></svg>
                                Filtrage des articles
                            </h4>
                        </div>
                        <div class="card-body py-3">

                            <div class="card-body p-4">
                                <h3>Tous les tags</h3>
                                <div class="mt-3">
                                    @foreach ($tags as $tag)
                                    <img src="{{Storage::url($tag->image)}}" alt="" style="height:23px;">
                                  <button wire:click="toggleTag({{$tag->id}})"  class="btn btn-light btn-xs mb-2">{{$tag->name}}</button>
                                  @endforeach
                                </div>
                              </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-md-8 mb-6 mb-md-0">
                    <div class="row align-items-center mb-4">
                        <div class="col text-center">
                            <h2 class="">Récentes publications </h2>
                            <p>Tous les articles récemment publiés.</p>
                        </div>

                    </div>

                    <div class="row">

                        <section class="pb-8">
                            <div class="container">
                                <div class="row">
                                    @foreach ($articles as $value)
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-12">
                                        <!-- Card -->
                                        <div class="card mb-4 shadow-lg card-lift">

                                            <!-- Card body -->
                                            <div class="card-body">
                                                <ul class="mb-3 list-inline">
                                                    @foreach ($value->articletags as $reponse)
                                                    <li class="list-inline-item fs-5 fw-semibold text-danger">

                                                        {{$reponse->name}}
                                                    </li>
                                                    @endforeach
                                                </ul>

                                                <h3>
                                                    <a href="{{route('article.show', $value->id)}}" class="text-inherit">{{$value->title}}</a>
                                                </h3>
                                                <p>{{$value->mini_description}}</p>
                                                <!-- Media content -->
                                                <div class="row align-items-center g-0 mt-4">

                                                    <div class="col lh-1">
                                                        <h5 class="mb-1">{{$value->owner->name}}</h5>
                                                        <p class="fs-6 mb-0">{{$value->created_at}}</p>
                                                    </div>
                                                    <div class="col-auto">
                                                        <p class="fs-6 mb-0">4 Minute lecture</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    <!-- Button -->
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-12 text-center mt-6">
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-12 text-center mt-4">
                                            <!-- Inclusion d'un bouton a l'interieur pour la pagination -->

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>


                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
