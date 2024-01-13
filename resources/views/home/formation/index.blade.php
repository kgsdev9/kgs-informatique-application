@extends('master.master')
@section('content')
<main>
    <div class="pattern-square"></div>
    <!--Pageheader start-->
    <section class="py-5 py-lg-8">
       <div class="container">
          <div class="row">
             <div class="col-lg-6 offset-lg-3 col-12">
                <div class="text-center">
                   <h1 class="mb-3">Choisir une formation c'est choisir une specialitée </h1>
                   <p class="mb-0">L'univers informatique surtout la programmation est bondé par de nombreuse téchnologie pour vous aider à mieux aprehender les concepts nouveaux et les notions complextes suivez ces guides.</p>
                </div>
             </div>
          </div>
       </div>
    </section>
    <!--Pageheader end-->


    <section class="bg-white py-5 feature-list">
		<div class="container py-4">

			<div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 row-cols-xl-5 g-4">
                @foreach ($allTags as $tag)
                <div class="col">
					<div class="card h-100 shadow-sm rounded-3 overflow-hidden video-card-item border position-relative">


						<div class="card-body p-3">
							<h5 class="card-title mb-1 text-dark">
								{{$tag->name}}
							</h5>
							<p class="card-text text-muted small">
								Formation gratuite
							</p>
						</div>
						<div class="card-footer bg-white border-0 d-flex align-items-center justify-content-between p-3 border-top">
							<p class="text-muted small mb-0">
								 {{count($tag->courses)}}
							</p>
							<button type="button" class="btn btn-secondary btn-sm px-2 py-0">+ Consulter </button>
						</div>
						<a href="#" class="stretched-link"></a>
					</div>
				</div>
                @endforeach




			</div>
		</div>
	</div>
</section>

 </main>
@endsection
