@extends('master.master')
 @section('content')

 <main>
    <!--Account home start-->
    <section class="py-lg-7 py-5 bg-light-subtle">
       <div class="container">
          <div class="row">

            @include('dashboard.slidebar')

             @include('dashboard.statistique')
          </div>
       </div>
    </section>
    <!--Account home end-->
 </main>




@endsection

