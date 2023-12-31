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
                    <div class="card mb-4">
                        <!-- Card header -->
                        <div class="card-header">
                            <div class="row">
                                <div class="col-lg-3">
                                    <h3 class="h4 mb-0">Mes recents articles</h3>
                                </div>
                                <div class="col-lg-9">
                                    <a href="{{route('article.create')}}" class="btn btn-primary">Nouvel article</a>
                                </div>
                            </div>

                        </div>
                        <!-- Table -->
                        <div class="table-responsive">
                            <table class="table mb-0 table-hover table-centered text-nowrap">
                                <!-- Table Head -->
                                <thead class="table-light">
                                    <tr>
                                        <th>Title</th>
                                        <th>Tag</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <!-- Table Body -->
                                <tbody>
                                    @foreach ($allArticleForUser as $article)
                                    <tr>
                                        <td>
                                            <a href="#">
                                                <div class="d-flex align-items-center">
                                                    <h5 class="ms-3 text-primary-hover mb-0">{{Str::limit($article->title,30)}}</h5>
                                                </div>
                                            </a>
                                        </td>
                                        @foreach ($article->articletags as $tag)
                                        <td>{{$tag->name}}</td>
                                        @endforeach
                                        <td>
                                            <span class="dropdown dropstart">
                                                <a class="btn-icon btn btn-ghost btn-sm rounded-circle" href="#" role="button" id="courseDropdown1" data-bs-toggle="dropdown" data-bs-offset="-20,20" aria-expanded="false">
                                                    <i class="fe fe-more-vertical"></i>
                                                </a>
                                                <span class="dropdown-menu" aria-labelledby="courseDropdown1">
                                                    <span class="dropdown-header">Setting</span>
                                                    <a class="dropdown-item" href="{{route('article.edit', $article->id)}}">
                                                        <i class="fe fe-edit dropdown-item-icon"></i>
                                                        Edition
                                                    </a>
                                                    <a class="dropdown-item" href="#">
                                                        <i class="fe fe-trash dropdown-item-icon"></i>
                                                        Supprimer
                                                    </a>
                                                </span>
                                            </span>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>


@endsection

