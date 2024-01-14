@extends('master.master')
@section('title', 'Contact développeur')
@section('content')
    <section class="my-lg-9 my-5">
        <div class="container">
           <div class="row">
              <div class="col-lg-10 offset-lg-1 col-md-12">
                 <div class="row g-lg-10 gy-5 align-items-center">
                    <div class="col-md-6" data-cue="zoomIn">
                       <div class="card bg-light">
                          <div class="card-body p-5">
                             <h3 class="mb-4">Contactez-moi pour en savoir plus  !</h3>

                             <form class="needs-validation" novalidate>
                                <div class="mb-3">
                                   <label for="YourNameInput" class="form-label">Votre nom</label>
                                   <input type="text" class="form-control" id="YourNameInput" placeholder="Name" required="" />

                                </div>
                                <div class="mb-3">
                                   <label for="yourEmailInput" class="form-label">Email</label>
                                   <input type="email" class="form-control" id="yourEmailInput" placeholder="Email" required="" />

                                </div>
                                <div class="mb-3">
                                   <label for="messageTextarea" class="form-label">Pourquoi voulez-vous me contacter</label>
                                   <textarea class="form-control" id="messageTextarea" placeholder="Expliquer la raison fondamentale." rows="4" required></textarea>

                                </div>
                                <button class="btn btn-primary" type="submit">Soumettre</button>
                             </form>
                          </div>
                       </div>
                    </div>
                    <div class="col-md-6" data-cue="zoomIn">
                       <div class="mb-7 text-center text-lg-start">
                          <div class="mb-3">
                             <img src="{{asset('avatar.jpeg')}}" alt="avatar" class="avatar avatar-xl rounded-circle" />
                          </div>

                          <h3 class="mb-0">KGS INFORMATIQUE (Mon petit non choco)</h3>
                          <small>Informaticien développeur</small>
                       </div>
                       <div class="d-flex mb-4">
                          <div>
                             <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                             </svg>
                          </div>
                          <div class="ms-2">
                             <h5 class="mb-0">Addresse:</h5>
                             <small>Abidjan Cote d'ivoire</small>
                          </div>
                       </div>
                       <div class="d-flex mb-4">
                          <div>
                             <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                                <path
                                   d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                             </svg>
                          </div>
                          <div class="ms-2">
                             <h5 class="mb-0">Numero Professionelle:</h5>
                             <small>
                                 +225 07 68 36 58 66
                                <span class="ms-3">07 59 90 59 19 </span>
                             </small>
                          </div>
                       </div>
                       <div class="d-flex mb-4">
                          <div>
                             <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-check" viewBox="0 0 16 16">
                                <path
                                   d="M2 2a2 2 0 0 0-2 2v8.01A2 2 0 0 0 2 14h5.5a.5.5 0 0 0 0-1H2a1 1 0 0 1-.966-.741l5.64-3.471L8 9.583l7-4.2V8.5a.5.5 0 0 0 1 0V4a2 2 0 0 0-2-2H2Zm3.708 6.208L1 11.105V5.383l4.708 2.825ZM1 4.217V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v.217l-7 4.2-7-4.2Z" />
                                <path
                                   d="M16 12.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Zm-1.993-1.679a.5.5 0 0 0-.686.172l-1.17 1.95-.547-.547a.5.5 0 0 0-.708.708l.774.773a.75.75 0 0 0 1.174-.144l1.335-2.226a.5.5 0 0 0-.172-.686Z" />
                             </svg>
                          </div>
                          <div class="ms-2">
                             <h5 class="mb-0">E-mail:</h5>

                             <small>
                                <a href="#!" class="text-reset">kgsdev8@gmail.com</a>

                             </small>
                          </div>
                       </div>
                       <div>
                          <a href="https://www.linkedin.com/in/guy-stephane-kahouo-7a6017265/" class="text-reset btn btn-linkedin btn-icon">
                             <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                                <path
                                   d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z" />
                             </svg>
                          </a>
                          <a href="#!" class="text-reset btn btn-youtube btn-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
                               <path
                                  d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z" />
                            </svg>
                         </a>

                       </div>
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </section>
     <!--Working together end-->

@endsection
