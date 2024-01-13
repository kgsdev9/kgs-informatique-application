@extends('master.master')
@section('content')
<section class="pattern-square bg-info bg-opacity-10">
    <div class="container position-relative z-1 py-xl-9 py-6">
       <div class="row">
          <div class="col-lg-10 offset-lg-1 col-md-12">
             <div class="row align-items-center g-5">
                <div class="col-lg-6 col-12 order-2">
                   <div class="me-xl-7">
                      <div class="mb-5">
                         <h2 class="h1 mb-4">Une experience utilisateur unique</h2>
                         <p class="mb-0 me-xl-7">nulle ne rentre ici si l'objectif principal n'est pas de promouvoir et d'aiderr notre communauté à grandir !</p>
                      </div>
                      <div class="mb-5">
                         <ul class="list-unstyled">
                            <li class="mb-2 d-flex">
                               <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                                  <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"></path>
                               </svg>
                               <span class="ms-1">Posez vos problematique nous vous aiderons à solutionner.</span>
                            </li>
                            <li class="mb-2 d-flex">
                               <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                                  <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"></path>
                               </svg>
                               <span class="ms-1">Lisez des articles et progresser dans l'univers informatique.</span>
                            </li>
                            <li class="mb-2 d-flex">
                               <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                                  <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"></path>
                               </svg>
                               <span class="ms-1">Béneficiez des codes open source des projets?</span>
                            </li>
                         </ul>
                      </div>

                   </div>
                </div>
                <div class="col-lg-6 col-12 order-lg-2">
                   <div class="card shadow-sm">
                      <div class="card-body">
                         <form class="row needs-validation g-3" novalidate=""  method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="col-lg-12">
                               <div class="mb-3">
                                  <h3 class="mb-0">Inscription</h3>
                               </div>
                            </div>
                            <div class="col-md-6 col-12">
                               <label  class="form-label">
                                 Nom d'utilisateur
                                  <span class="text-danger">*</span>
                               </label>
                               <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            </div>

                            <div class="col-md-6">
                               <label for="scheduleEmailInput" class="form-label">
                                  Email
                                  <span class="text-danger">*</span>
                               </label>
                               <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                            </div>

                            <div class="col-md-12">
                                <label  class="form-label">
                                   Mot de passe
                                   <span class="text-danger">*</span>
                                </label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                             </div>

                             <div class="col-md-12">
                                <label  class="form-label">
                                   Confirmer le mot de passe
                                   <span class="text-danger">*</span>
                                </label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

                             </div>

                            <div class="d-grid">
                               <button class="btn btn-primary" type="submit">Inscription </button>
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
                         </form>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </section>
@endsection
