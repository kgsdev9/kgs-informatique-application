@extends('master.master')

@section('content')
<main>
    <div class="pattern-square"></div>
    <!--Pageheader start-->
    <section class="py-5 py-lg-8">
       <div class="container">
          <div class="row">
             <div class="col-xl-4 offset-xl-4 col-md-12 col-12">
                <div class="text-center">

                   <h1 class="mb-1">Se connecter</h1>
                   <p class="mb-0">
                      Vous n'avez pas de compte
                      <a href="{{route('register')}}" class="text-primary">Inscription</a>
                   </p>
                </div>
             </div>
          </div>
       </div>
    </section>
    <!--Pageheader end-->
    <!--Sign up start-->
    <section>
       <div class="container">
          <div class="row justify-content-center">
             <div class="col-xl-5 col-lg-6 col-md-8 col-12">
                <div class="card shadow-sm mb-6">
                   <div class="card-body">
                    <form method="POST" action="{{ route('login') }}" class="needs-validation mb-6" novalidate="">
                        @csrf
                         <div class="mb-3">
                            <label for="signinEmailInput" class="form-label">
                               Email
                               <span class="text-danger">*</span>
                            </label>
                            <input id="signinEmailInput" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                         </div>
                         <div class="mb-3">
                            <label for="formSignUpPassword" class="form-label">Password</label>
                            <div class="password-field position-relative">
                                <input id="formSignUpPassword" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                            </div>
                         </div>

                         <div class="mb-4 d-flex align-items-center justify-content-between">
                            <div class="form-check">
                               <input class="form-check-input" type="checkbox" id="rememberMeCheckbox">
                               <label class="form-check-label" for="rememberMeCheckbox">Se souvenir de moi </label>
                            </div>

                            <div><a href="{{route('password.request')}}" class="text-primary">Mot de passe oublié</a></div>
                         </div>

                         <div class="d-grid">
                            <button class="btn btn-primary" type="submit">Connexion</button>
                         </div>
                      </form>


                      <div class="d-grid mt-3">
                         <a href="auth/github/redirect" class="btn btn-google">
                            <span class="me-3">
                               <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-google" viewBox="0 0 16 16">
                                  <path d="M15.545 6.558a9.42 9.42 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.689 7.689 0 0 1 5.352 2.082l-2.284 2.284A4.347 4.347 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.792 4.792 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.702 3.702 0 0 0 1.599-2.431H8v-3.08h7.545z"></path>
                               </svg>
                            </span>
                            Continuer avec Github
                         </a>
                      </div>

                   </div>
                </div>
             </div>
          </div>

       </div>
    </section>
    <!--Sign up end-->

 </main>

@endsection
