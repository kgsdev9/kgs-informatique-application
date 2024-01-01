@extends('master.master')
@section('content')
<div>
    <section class="py-7 py-lg-8">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-8 col-md-12 col-12 mb-2">
                    <div class="text-center mb-4">
                        <h1 class="display-3 fw-bold mb-4">{{ $ressource->title}}</h1>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-8 col-md-12 col-12 mb-2">
                    <div>
                        <div class="mb-4">
                            <h2 class="lead text-white">{!! $ressource->description !!}</h2>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
</div>
@endsection

