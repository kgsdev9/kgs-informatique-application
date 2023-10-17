@extends('master.master')

@section('content')



<section class="py-4 bg-white dark:bg-gray-900 lg:pt-12 lg:pb-16">
	<div class="px-4 mx-auto max-w-8xl lg:px-4 lg:text-center">
		<a class="inline-flex items-center justify-between px-1 py-1 pr-4 mb-5 text-sm text-gray-700 bg-gray-100 rounded-full dark:bg-gray-800 dark:text-white hover:bg-gray-200" role="alert" href="/icons/">
			<span class="text-xs bg-blue-700 dark:bg-blue-600 rounded-full text-white px-4 py-1.5 mr-3">KGS</span>
			<span class="mr-2 text-sm font-bold">La perfection se trouve dans la pratique </span>
			<svg class="w-2.5 h-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
				<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"></path>
			</svg>
		</a>
        <h1 class="text-4xl font-bold tracking-tight font-heading text-skin-primary sm:leading-none lg:text-6xl">
           KGS INFORMATIQUE
            </h1>

		<p class="mb-10 text-lg font-normal text-gray-500 dark:text-gray-400 lg:text-center lg:text-xl xl:px-60 mt-2">
            La plus grande communauté d'informaticien et  développeur de cote d'ivoire,
            fondé par Guy stephane Kahouo, Développeur D'application Backend Senior

		</p>
		<div class="flex flex-col mb-8 md:flex-row lg:justify-center">
			<a href="#" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Nos Articles </a>
			<a href="#components" class="py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">

				<span class="ml-2">Nous Réjoindre </span>
			</a>


		</div>
		<iframe  width="300" height="300"  allowfullscreen="" title="YouTube video player" src="https://www.youtube.com/embed/KF9Awj74dMw" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" class="relative w-full max-w-4xl mx-auto mt-12 border border-gray-300 shadow-2xl rounded-3xl lg:mt-20 dark:border-gray-700 yt-video"></iframe>

	</div>
</section>




<section class="pt-6 pb-8 bg-white lg:pb-24 dark:bg-gray-900">


        <div class="max-w-7xl mx-auto px-4 py-10 lg:py-12 xl:pb-14">
            <p class="text-center text-lg font-medium leading-8 text-skin-inverted-muted">
                Nous partagéons les memes valeurs comme d'autres communautés comme
            </p>
            <div class="mt-5 flex items-center justify-center flex-wrap gap-8">


                    <div class="flex items-center justify-center px-2">
                        <a href="https://laravelshopper.io" target="_blank" class="flex items-center">
                        <img class="h-12 logo-white" src="{{asset('GDD COCODY.png')}}" alt="Laravel Shopper">

                        </a>
                        </div>

                        <div class="flex items-center justify-center px-2">
                            <a href="https://laravelshopper.io" target="_blank" class="flex items-center">

                            <img class="h-12 logo-dark" src="{{asset('django-girl.png')}}"  alt="Laravel Shopper">
                            </a>
                            </div>


                            <div class="flex items-center justify-center px-2">
                                <a href="https://laravelshopper.io" target="_blank" class="flex items-center">

                                <img class="h-12 logo-dark" src="{{asset('eub.png')}}"  alt="Laravel Shopper">
                                </a>
                                </div>






            </div>
            <div class="mt-6 text-center lg:mt-10">
            <a class="text-sm leading-5 text-flag-green hover:text-green-600 hover:underline" href="#">
            En savoir plus ?
            </a>
            </div>
            </div>


</section>



<section class="bg-gray-50 dark:bg-gray-800 border-t border-b border-gray-100 dark:border-gray-700">
    <div class="max-w-screen-xl px-4 py-8 mx-auto lg:py-16">
        <h2 class="mb-6 text-3xl font-bold leading-tight tracking-tight text-gray-900 lg:text-center dark:text-white md:text-4xl">Les téchnologies que nous abordéront</h2>


        <p class="mb-10 text-lg font-normal text-gray-500 dark:text-gray-400 lg:text-center lg:text-xl lg:px-64 lg:mb-16">
            je vous propose un ensemble de technologie et  d'ensemble de bonne pratique  et une approche totalement differente  de ces librairies et framrwork jugées complexe

        </p>
        <div class="space-y-4 sm:grid sm:grid-cols-2 lg:grid-cols-4 sm:gap-4 xl:gap-8 sm:space-y-0 md:mt-12">
            @foreach ($allCategories as $value)

            <a href="#" class="block px-8 py-12 text-center bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-700 dark:border-gray-600 hover:shadow-lg dark:hover:shadow-lg-light">

                <h3 class="font-semibold text-xl text-gray-900 dark:text-white mt-3.5">{{$value->name}}</h3>

            </a>

            @endforeach


        </div>
    </div>
</section>





<br>

<aside class="py-10 sm:py-16  lg:py-20">
	<div class="px-4 mx-auto max-w-8xl">
		<h2 class="mb-4 text-2xl md:text-4xl font-bold tracking-tight text-gray-900 md:font-bold lg:leading-none dark:text-white md:text-center lg:mb-7">Partager c'est aider les autres et s'aider soi-meme </h2>
		<p class="mb-4 text-base text-gray-500 md:mb-6 dark:text-gray-400 md:text-center md:text-xl lg:px-20 xl:px-56">
			La transformation digital ne peut s'effectuer sans
donner des reperes à cette nouvelle génération.
		</p>
		<div class="mb-4">

		</div>

	</div>
</aside>



<br>

<section class="bg-gray-50 dark:bg-gray-800 " id="pro">
	<div class="mx-auto w-full max-w-8xl px-4 py-8 lg:py-24">
		<div class="grid items-center grid-cols-1 gap-6 lg:grid-cols-2 xl:gap-32">
			<div class="mb-5 lg:mb-0">
				<h2 class="text-3xl font-bold leading-tight text-gray-900 dark:text-white lg:text-4xl mb-4">Nous partagéons des connaissances dans le domaine de l'informatique  </h2>
				<p class="text-lg text-gray-500 dark:text-gray-400 mb-4 md:mb-6">
					Fondé dans l'optique d'aider, et de promouvoir la l'entraide entre informaticien
				</p>
				<ul class="mb-6 list-inside list-none space-y-4 font-medium text-gray-900 dark:text-white lg:mb-8">
					<li class="flex items-center gap-2">
						<svg class="h-5 w-5 shrink-0 rounded-full bg-blue-100 p-1 text-blue-700 dark:text-blue-600 dark:bg-gray-700" viewBox="0 0 14 10" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M4.99992 8.29289L4.64637 7.93934L1.35697 4.64995C1.26295 4.56044 1.13776 4.51096 1.00786 4.51209C0.876764 4.51323 0.751358 4.56582 0.658654 4.65852C0.56595 4.75122 0.513365 4.87663 0.512226 5.00773C0.511097 5.13763 0.560568 5.26282 0.650079 5.35684L4.64642 9.35318C4.64644 9.3532 4.64645 9.35322 4.64647 9.35323C4.74023 9.44693 4.86736 9.49957 4.99992 9.49957C5.13248 9.49957 5.25961 9.44693 5.35337 9.35323L4.99992 8.29289ZM4.99992 8.29289L5.35347 7.93934L12.6464 0.646393C12.6464 0.646376 12.6465 0.646358 12.6465 0.64634C12.7402 0.552638 12.8674 0.5 12.9999 0.5C13.1325 0.5 13.2597 0.552658 13.3534 0.646393C13.4471 0.740146 13.4997 0.867253 13.4997 0.999786C13.4997 1.13234 13.4471 1.25947 13.3534 1.35323C13.3533 1.35325 13.3533 1.35327 13.3533 1.35329L5.35342 9.35318L4.99992 8.29289Z" stroke="currentColor"></path>
						</svg>
						Nous partegons des conseils profesionneles en informatique
					</li>
					<li class="flex items-center gap-2">
						<svg class="h-5 w-5 shrink-0 rounded-full bg-blue-100 p-1 text-blue-700 dark:text-blue-600 dark:bg-gray-700" viewBox="0 0 14 10" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M4.99992 8.29289L4.64637 7.93934L1.35697 4.64995C1.26295 4.56044 1.13776 4.51096 1.00786 4.51209C0.876764 4.51323 0.751358 4.56582 0.658654 4.65852C0.56595 4.75122 0.513365 4.87663 0.512226 5.00773C0.511097 5.13763 0.560568 5.26282 0.650079 5.35684L4.64642 9.35318C4.64644 9.3532 4.64645 9.35322 4.64647 9.35323C4.74023 9.44693 4.86736 9.49957 4.99992 9.49957C5.13248 9.49957 5.25961 9.44693 5.35337 9.35323L4.99992 8.29289ZM4.99992 8.29289L5.35347 7.93934L12.6464 0.646393C12.6464 0.646376 12.6465 0.646358 12.6465 0.64634C12.7402 0.552638 12.8674 0.5 12.9999 0.5C13.1325 0.5 13.2597 0.552658 13.3534 0.646393C13.4471 0.740146 13.4997 0.867253 13.4997 0.999786C13.4997 1.13234 13.4471 1.25947 13.3534 1.35323C13.3533 1.35325 13.3533 1.35327 13.3533 1.35329L5.35342 9.35318L4.99992 8.29289Z" stroke="currentColor"></path>
						</svg>
                        Des téchniques et des solutions aux problemes que la communauté rencontre
					</li>
					<li class="flex items-center gap-2">
						<svg class="h-5 w-5 shrink-0 rounded-full bg-blue-100 p-1 text-blue-700 dark:text-blue-600 dark:bg-gray-700" viewBox="0 0 14 10" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M4.99992 8.29289L4.64637 7.93934L1.35697 4.64995C1.26295 4.56044 1.13776 4.51096 1.00786 4.51209C0.876764 4.51323 0.751358 4.56582 0.658654 4.65852C0.56595 4.75122 0.513365 4.87663 0.512226 5.00773C0.511097 5.13763 0.560568 5.26282 0.650079 5.35684L4.64642 9.35318C4.64644 9.3532 4.64645 9.35322 4.64647 9.35323C4.74023 9.44693 4.86736 9.49957 4.99992 9.49957C5.13248 9.49957 5.25961 9.44693 5.35337 9.35323L4.99992 8.29289ZM4.99992 8.29289L5.35347 7.93934L12.6464 0.646393C12.6464 0.646376 12.6465 0.646358 12.6465 0.64634C12.7402 0.552638 12.8674 0.5 12.9999 0.5C13.1325 0.5 13.2597 0.552658 13.3534 0.646393C13.4471 0.740146 13.4997 0.867253 13.4997 0.999786C13.4997 1.13234 13.4471 1.25947 13.3534 1.35323C13.3533 1.35325 13.3533 1.35327 13.3533 1.35329L5.35342 9.35318L4.99992 8.29289Z" stroke="currentColor"></path>
						</svg>
						Nous nous aidons à grandir dans le monde de l'informatique
					</li>
					<li class="flex items-center gap-2">
						<svg class="h-5 w-5 shrink-0 rounded-full bg-blue-100 p-1 text-blue-700 dark:text-blue-600 dark:bg-gray-700" viewBox="0 0 14 10" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M4.99992 8.29289L4.64637 7.93934L1.35697 4.64995C1.26295 4.56044 1.13776 4.51096 1.00786 4.51209C0.876764 4.51323 0.751358 4.56582 0.658654 4.65852C0.56595 4.75122 0.513365 4.87663 0.512226 5.00773C0.511097 5.13763 0.560568 5.26282 0.650079 5.35684L4.64642 9.35318C4.64644 9.3532 4.64645 9.35322 4.64647 9.35323C4.74023 9.44693 4.86736 9.49957 4.99992 9.49957C5.13248 9.49957 5.25961 9.44693 5.35337 9.35323L4.99992 8.29289ZM4.99992 8.29289L5.35347 7.93934L12.6464 0.646393C12.6464 0.646376 12.6465 0.646358 12.6465 0.64634C12.7402 0.552638 12.8674 0.5 12.9999 0.5C13.1325 0.5 13.2597 0.552658 13.3534 0.646393C13.4471 0.740146 13.4997 0.867253 13.4997 0.999786C13.4997 1.13234 13.4471 1.25947 13.3534 1.35323C13.3533 1.35325 13.3533 1.35327 13.3533 1.35329L5.35342 9.35318L4.99992 8.29289Z" stroke="currentColor"></path>
						</svg>
						Acces gratuit pour tous
					</li>
				</ul>
				<div class="items-center lg:flex">
					<a class="block w-full sm:w-auto sm:inline-block mb-3 sm:mb-0 text-white bg-blue-700 dark:bg-blue-600 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-base px-5 py-2.5 text-center inline-block mr-4" href="#">Forum</a>
					<a class="block w-full sm:w-auto sm:inline-block text-gray-600 bg-white hover:bg-gray-100 hover:text-blue-600 border border-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:bg-gray-900 dark:hover:text-white border dark:border-gray-700 font-medium rounded-lg text-base px-6 py-2.5 text-center inline-flex justify-center items-center" href="">Discution </a>
				</div>
			</div>
			<div class="max-w-full isolate flex flex-col items-start gap-4 self-stretch">
				<div class="grid sm:grid-cols-2 gap-6">
                    @foreach ($articlesTake as $article)
                    <a class="rounded-lg border border-gray-300 bg-white px-4 py-3.5 text-base font-medium text-gray-500 placeholder:py-3.5 hover:bg-gray-100 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:border-gray-600 dark:bg-gray-900 dark:text-gray-400 dark:hover:border-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-700 sm:gap-6" href="">
						<div class="flex items-center justify-between mb-4">
							<img src="/images/technologies/figma.svg" class="w-8 h-8 rounded-lg" alt="Figma logo">
							<span class="bg-gray-100 text-gray-500 text-xs font-semibold mr-2 px-2 py-0.5 rounded dark:bg-gray-700 dark:text-gray-400 hidden sm:flex">PHP</span>
						</div>
						<h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">{{Str::limit($article->title, 50)}}</h3>
                        {{Str::limit($article->description, 56)}}
					</a>

                    @endforeach

				</div>
			</div>
		</div>
	</div>
</section>



@endsection
