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
                                    <h3 class="h4 mb-0">Mes Tags</h3>
                                </div>
                                <div class="col-lg-9">
                                    <a href="{{route('category.create')}}" class="btn btn-primary">Nouveau tag</a>
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
                                        <th>Slug</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <!-- Table Body -->
                                <tbody>
                                    @foreach ($category as $tag)
                                    <tr>
                                        <td>
                                            <a href="#">
                                                <div class="d-flex align-items-center">
                                                    <img src="{{Storage::url($tag->image)}}" alt="course" class="avatar-md">
                                                    <h5 class="ms-3 text-primary-hover mb-0">{{Str::limit($tag->name,30)}}</h5>
                                                </div>
                                            </a>
                                        </td>
                                        <td>
                                            {{$tag->slug}}
                                        </td>
                                        <td>
                                            <a class="btn btn-warning" href="{{route('category.edit', $tag->id)}}">Editer</a>

                                            <form action="{{route('category.destroy', $tag->id)}}" method="POST">
                                                @csrf
                                                @method('delete')
                                                  <button type="submit" class="btn btn-danger">Supprimer</button>
                                             </form>

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

