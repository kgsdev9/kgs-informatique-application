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
                                <svg class="w-4 h-4 mx-2 fill-current" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"></path></svg>
                              
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
