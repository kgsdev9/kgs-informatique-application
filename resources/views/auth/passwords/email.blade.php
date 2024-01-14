@extends('master.master')

@section('content')
<main>
    <!--Pageheader start-->
    <section class="py-5 py-lg-8">
       <div class="container">
          <div class="row">
             <div class="col-xl-4 offset-xl-4 col-md-12 col-12">
                <div class="text-center">

                   <h3 class="mb-1">Rénitiliaser votre mot de passe</h3>

                </div>
             </div>
          </div>
       </div>
    </section>

    <section>
       <div class="container">
          <div class="row justify-content-center">
             <div class="col-lg-6 col-md-8 col-12">
                <div class="card shadow-sm">
                   <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                      @endif
                      <form method="POST" action="{{ route('password.email') }}"  class="needs-validation mb-5" novalidate="">
                        @csrf
                        <div class="mb-3">
                            <label for="forgetEmailInput" class="form-label">
                               Email
                               <span class="text-danger">*</span>
                            </label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                         </div>
                         <div class="d-grid">
                            <button class="btn btn-primary" type="submit">Rénitialiser</button>
                         </div>
                      </form>
                      <div class="text-center">
                         <a href="{{route('login')}}" class="icon-link icon-link-hover">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                               <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"></path>
                            </svg>
                            <span>Retourner</span>
                         </a>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </section>

 </main>

@endsection
