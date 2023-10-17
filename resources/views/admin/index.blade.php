@extends('master.master')

@section('content')

<div class="z-0 flex-1 w-full py-10 max-w-7xl mx-auto px-4">
	<div>
		<h2 class="text-xl font-bold leading-7 text-skin-inverted sm:text-2xl sm:truncate">Tableau de bord</h2>
		<dl class="mt-5 grid grid-cols-1 sm:grid-cols-2 gap-5 lg:grid-cols-4">
			<div class="px-4 py-5 bg-skin-card-gray shadow-sm rounded-lg overflow-hidden sm:p-6">
				<dt class="text-sm font-medium text-skin-base truncate">
					Total Articles/Discussions
				</dt>
				<dd class="mt-1 text-3xl font-semibold text-skin-inverted">
					0
				</dd>
			</div>
			<div class="px-4 py-5 bg-skin-card-gray shadow-sm rounded-lg overflow-hidden sm:p-6">
				<dt class="text-sm font-medium text-skin-base truncate">
					Total Réponses
				</dt>
				<dd class="mt-1 text-3xl font-semibold text-skin-inverted">
					0
				</dd>
			</div>
			<div class="px-4 py-5 bg-skin-card-gray shadow-sm rounded-lg overflow-hidden sm:p-6">
				<dt class="text-sm font-medium text-skin-base truncate">
					Sujets Résolus
				</dt>
				<dd class="mt-1 text-3xl font-semibold text-skin-inverted">
					0
				</dd>
			</div>
			<div class="px-4 py-5 bg-skin-card-gray shadow-sm rounded-lg overflow-hidden sm:p-6">
				<dt class="text-sm font-medium text-skin-base truncate">
					Total Experience
				</dt>
				<dd class="mt-1 text-3xl font-semibold text-skin-inverted">
					0
				</dd>
			</div>
		</dl>
	</div>
</div>


@endsection
