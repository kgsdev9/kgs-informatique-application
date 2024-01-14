@extends('master.master')
 @section('content')
 <main>
    <section class="py-lg-7 py-5 bg-light-subtle">
       <div class="container">
          <div class="row">
            @include('dashboard.slidebar')
            <div class="col-lg-9 col-md-8">
                <div class="card border-0 mb-4 shadow-sm">
                   <div class="card-body p-lg-5">
                      <div class="mb-5">
                        <div class="row">
                            <div class="col-lg-9">
                                <h4 class="mb-1">Liste des sujets crées  </h4>
                            </div>
                            <div class="col-lg-3">
                             <a class="btn btn-outline-dark" href="{{route('forum.create')}}"><i class=" bx bx-user-plus"></i> Enregistrer</a>
                            </div>
                        </div>
                      </div>
                      <div class="table-responsive">
                         <table class="table table-centered td table-centered th table-lg text-nowrap">
                            <thead>
                               <tr>
                                  <th scope="col">
                                     <div class="fs-6 text-dark fw-semibold">Libellé</div>
                                  </th>

                                  <th scope="col">
                                    <div class="fs-6 text-dark fw-semibold">Tag</div>
                                 </th>

                                 <th scope="col">
                                    <div class="fs-6 text-dark fw-semibold">Status</div>
                                 </th>

                                  <th scope="col">
                                     <div class="fs-6 text-dark fw-semibold">Action</div>
                                  </th>
                               </tr>
                            </thead>
                            <tbody>
                                @foreach ($allForums as $tag)
                               <tr>
                                  <td>
                                     <div class="d-flex align-items-center">
                                        <div class="ms-3">
                                           <div class="fs-5 fw-semibold text-dark">{{Str::limit($tag->title,100)}}</div>
                                        </div>
                                     </div>
                                  </td>

                                  <td>
                                    <div class="d-flex align-items-center">
                                       <div class="ms-3">
                                          <div class="fs-5 fw-semibold text-dark">{{ $tag->tag->name}}</div>
                                       </div>
                                    </div>
                                 </td>

                                 <td>
                                    @if($tag->status == 0)
                                    <a href="#" class="btn btn-sm btn-outline-danger">Non résolu</a>
                                    @else
                                    <a href="#" class="btn btn-sm btn-outline-success">Résolu</a>
                                    @endif
                                 </td>


                                  <td>
                                    <a href="{{route('forum.edit', $tag->id)}}" class="btn btn-sm btn-dark me-2">Editer</a>
                                    <form action="{{route('forum.destroy', $tag->id)}}" method="POST">
                                        @csrf
                                        @method('delete')
                                          <button type="submit" class="btn btn-sm btn-light" onclick="return confirm('Voulez-vous vraiment supprimer?')">Supprimer</button>
                                     </form>

                                     <a href="{{route('forum.show', $tag->id)}}">Consulter</a>
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

