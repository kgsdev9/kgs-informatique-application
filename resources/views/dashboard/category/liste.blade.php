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
                                <h4 class="mb-1">Liste des categories </h4>
                            </div>
                            <div class="col-lg-3">
                             <a class="btn btn-outline-dark" href="{{route('category.create')}}"><i class=" bx bx-user-plus"></i> Enregistrer</a>
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
                                     <div class="fs-6 text-dark fw-semibold">Action</div>
                                  </th>
                               </tr>
                            </thead>
                            <tbody>
                                @foreach ($category as $tag)
                               <tr>
                                  <td>
                                     <div class="d-flex align-items-center">
                                        <img src="{{Storage::url($tag->image)}}" alt="avatar" class="avatar avatar-lg rounded-circle">
                                        <div class="ms-3">
                                           <div class="fs-5 fw-semibold text-dark">{{Str::limit($tag->name,30)}}</div>
                                        </div>
                                     </div>
                                  </td>
                                  <td>
                                    <a href="{{route('category.edit', $tag->id)}}" class="btn btn-sm btn-dark me-2">Editer</a>
                                    <form action="{{route('category.destroy', $tag->id)}}" method="POST">
                                        @csrf
                                        @method('delete')
                                          <button type="submit" class="btn btn-sm btn-light">Supprimer</button>
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

