@extends('master.master')
@section('title', $topic->slug)
@section('content')

    <div class="container mt-4 text-center ">
        <div class="card border-0 shadow-sm mb-4 bg-light">
        <div class="card-body p-lg-5">
           <div class="mb-5">
              <h4 class="mb-1">{{$topic->title}}</h4>
              <p class="mb-0 fs-6">{{$topic->description}}!</p>
           </div>
        </div>
     </div>

     <div class="card-body p-lg-5">

        <form class="row g-3 needs-validation" novalidate="">
           <div class="col-lg-12 col-md-12">
              <label for="formGroupEmailInput" class="form-label">Votre message</label>
            <textarea name="content" class="form-control" id="" cols="30" rows="2"></textarea>
              <div class="invalid-feedback">Please enter an email.</div>
           </div>

           <div class="d-grid">
              <button class="btn btn-primary" type="submit">Répondre</button>
           </div>
        </form>
     </div>
    </div>




@endsection
