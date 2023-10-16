@extends('master.master')

@section('content')


<section class="py-4 bg-white dark:bg-gray-900 lg:pt-12 lg:pb-16">
	<div class="px-4 mx-auto max-w-8xl lg:px-4 lg:text-center">
		<a class="inline-flex items-center justify-between px-1 py-1 pr-4 mb-5 text-sm text-gray-700 bg-gray-100 rounded-full dark:bg-gray-800 dark:text-white hover:bg-gray-200" role="alert" href="/icons/">
			<span class="text-xs bg-blue-700 dark:bg-blue-600 rounded-full text-white px-4 py-1.5 mr-3">Guy Stephane</span>
			<span class="mr-2 text-sm font-bold">Fondé par Kahouo guy stephane </span>
			<svg class="w-2.5 h-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
				<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"></path>
			</svg>
		</a>
        <h1 class="text-4xl font-bold tracking-tight font-heading text-skin-primary sm:leading-none lg:text-6xl">
           KGS INFORMATIQUE
            </h1>

		<p class="mb-10 text-lg font-normal text-gray-500 dark:text-gray-400 lg:text-center lg:text-xl xl:px-60 mt-2">
            La plus grande communauté d'information et de développeur de cote d'ivoire,
            nous croyons aux partages, à la connaissance réeele fondée sur principe
		</p>
		<div class="flex flex-col mb-8 md:flex-row lg:justify-center">
			<a href="#" class="text-white bg-blue-700 hover:bg-blue-800 dark:bg-blue-600 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-base px-6 py-2.5 text-center md:mr-5 mb-3 md:mb-0 inline-flex items-center justify-center">Nos Articles </a>
			<a href="#components" class="text-gray-600 bg-white-100 hover:bg-gray-100 hover:text-blue-600 border border-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white dark:border-gray-700 font-medium rounded-lg text-base px-6 py-2.5 text-center inline-flex justify-center items-center">
				<svg class="w-3.5 h-3.5 mr-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
					<path d="M6.143 0H1.857A1.857 1.857 0 0 0 0 1.857v4.286C0 7.169.831 8 1.857 8h4.286A1.857 1.857 0 0 0 8 6.143V1.857A1.857 1.857 0 0 0 6.143 0Zm10 0h-4.286A1.857 1.857 0 0 0 10 1.857v4.286C10 7.169 10.831 8 11.857 8h4.286A1.857 1.857 0 0 0 18 6.143V1.857A1.857 1.857 0 0 0 16.143 0Zm-10 10H1.857A1.857 1.857 0 0 0 0 11.857v4.286C0 17.169.831 18 1.857 18h4.286A1.857 1.857 0 0 0 8 16.143v-4.286A1.857 1.857 0 0 0 6.143 10Zm10 0h-4.286A1.857 1.857 0 0 0 10 11.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 18 16.143v-4.286A1.857 1.857 0 0 0 16.143 10Z"></path>
				</svg>
				<span class="ml-2">Nous Réjoindre </span>
			</a>
		</div>

		<iframe allowfullscreen="" title="YouTube video player" src="https://www.youtube.com/embed/KF9Awj74dMw" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" class="relative w-full max-w-4xl mx-auto mt-12 border border-gray-300 shadow-2xl rounded-3xl lg:mt-20 dark:border-gray-700 yt-video"></iframe>
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
					<a class="rounded-lg border border-gray-300 bg-white px-4 py-3.5 text-base font-medium text-gray-500 placeholder:py-3.5 hover:bg-gray-100 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:border-gray-600 dark:bg-gray-900 dark:text-gray-400 dark:hover:border-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-700 sm:gap-6" href="">
						<div class="flex items-center justify-between mb-4">
							<img src="/images/technologies/figma.svg" class="w-8 h-8 rounded-lg" alt="Figma logo">
							<span class="bg-gray-100 text-gray-500 text-xs font-semibold mr-2 px-2 py-0.5 rounded dark:bg-gray-700 dark:text-gray-400 hidden sm:flex">v2.6.0</span>
						</div>
						<h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">Flowbite Design System</h3>
						One of the most advanced Figma design systems on the market featuring variants, auto-layout, responsive components, dark mode, and more.
					</a>
					<a class="rounded-lg border border-gray-300 bg-white px-4 py-3.5 text-base font-medium text-gray-500 placeholder:py-3.5 hover:bg-gray-100 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:border-gray-600 dark:bg-gray-900 dark:text-gray-400 dark:hover:border-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-700 sm:gap-6" href="/blocks/">
						<div class="flex items-center justify-between mb-4">
							<img src="/images/logo.svg" class="w-8 h-8 rounded-lg" alt="Flowbite logo">
							<span class="bg-gray-100 text-gray-500 text-xs font-semibold mr-2 px-2 py-0.5 rounded dark:bg-gray-700 dark:text-gray-400 hidden sm:flex">Tailwind CSS &amp; React</span>
						</div>
						<h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">Flowbite Blocks</h3>
						Get access to over 330+ advanced UI components and website sections to build website and applications faster.
					</a>
					<a class="rounded-lg border border-gray-300 bg-white px-4 py-3.5 text-base font-medium text-gray-500 placeholder:py-3.5 hover:bg-gray-100 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:border-gray-600 dark:bg-gray-900 dark:text-gray-400 dark:hover:border-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-700 sm:gap-6" href="/react-admin-dashboard-pro/preview/">
						<div class="flex items-center justify-between mb-4">
							<svg class="h-8 w-8 text-teal-400" viewBox="175.7 78 490.6 436.9" width="2194" xmlns="http://www.w3.org/2000/svg">
								<g fill="#61dafb">
									<path d="m666.3 296.5c0-32.5-40.7-63.3-103.1-82.4 14.4-63.6 8-114.2-20.2-130.4-6.5-3.8-14.1-5.6-22.4-5.6v22.3c4.6 0 8.3.9 11.4 2.6 13.6 7.8 19.5 37.5 14.9 75.7-1.1 9.4-2.9 19.3-5.1 29.4-19.6-4.8-41-8.5-63.5-10.9-13.5-18.5-27.5-35.3-41.6-50 32.6-30.3 63.2-46.9 84-46.9v-22.3c-27.5 0-63.5 19.6-99.9 53.6-36.4-33.8-72.4-53.2-99.9-53.2v22.3c20.7 0 51.4 16.5 84 46.6-14 14.7-28 31.4-41.3 49.9-22.6 2.4-44 6.1-63.6 11-2.3-10-4-19.7-5.2-29-4.7-38.2 1.1-67.9 14.6-75.8 3-1.8 6.9-2.6 11.5-2.6v-22.3c-8.4 0-16 1.8-22.6 5.6-28.1 16.2-34.4 66.7-19.9 130.1-62.2 19.2-102.7 49.9-102.7 82.3 0 32.5 40.7 63.3 103.1 82.4-14.4 63.6-8 114.2 20.2 130.4 6.5 3.8 14.1 5.6 22.5 5.6 27.5 0 63.5-19.6 99.9-53.6 36.4 33.8 72.4 53.2 99.9 53.2 8.4 0 16-1.8 22.6-5.6 28.1-16.2 34.4-66.7 19.9-130.1 62-19.1 102.5-49.9 102.5-82.3zm-130.2-66.7c-3.7 12.9-8.3 26.2-13.5 39.5-4.1-8-8.4-16-13.1-24-4.6-8-9.5-15.8-14.4-23.4 14.2 2.1 27.9 4.7 41 7.9zm-45.8 106.5c-7.8 13.5-15.8 26.3-24.1 38.2-14.9 1.3-30 2-45.2 2-15.1 0-30.2-.7-45-1.9-8.3-11.9-16.4-24.6-24.2-38-7.6-13.1-14.5-26.4-20.8-39.8 6.2-13.4 13.2-26.8 20.7-39.9 7.8-13.5 15.8-26.3 24.1-38.2 14.9-1.3 30-2 45.2-2 15.1 0 30.2.7 45 1.9 8.3 11.9 16.4 24.6 24.2 38 7.6 13.1 14.5 26.4 20.8 39.8-6.3 13.4-13.2 26.8-20.7 39.9zm32.3-13c5.4 13.4 10 26.8 13.8 39.8-13.1 3.2-26.9 5.9-41.2 8 4.9-7.7 9.8-15.6 14.4-23.7 4.6-8 8.9-16.1 13-24.1zm-101.4 106.7c-9.3-9.6-18.6-20.3-27.8-32 9 .4 18.2.7 27.5.7 9.4 0 18.7-.2 27.8-.7-9 11.7-18.3 22.4-27.5 32zm-74.4-58.9c-14.2-2.1-27.9-4.7-41-7.9 3.7-12.9 8.3-26.2 13.5-39.5 4.1 8 8.4 16 13.1 24s9.5 15.8 14.4 23.4zm73.9-208.1c9.3 9.6 18.6 20.3 27.8 32-9-.4-18.2-.7-27.5-.7-9.4 0-18.7.2-27.8.7 9-11.7 18.3-22.4 27.5-32zm-74 58.9c-4.9 7.7-9.8 15.6-14.4 23.7-4.6 8-8.9 16-13 24-5.4-13.4-10-26.8-13.8-39.8 13.1-3.1 26.9-5.8 41.2-7.9zm-90.5 125.2c-35.4-15.1-58.3-34.9-58.3-50.6s22.9-35.6 58.3-50.6c8.6-3.7 18-7 27.7-10.1 5.7 19.6 13.2 40 22.5 60.9-9.2 20.8-16.6 41.1-22.2 60.6-9.9-3.1-19.3-6.5-28-10.2zm53.8 142.9c-13.6-7.8-19.5-37.5-14.9-75.7 1.1-9.4 2.9-19.3 5.1-29.4 19.6 4.8 41 8.5 63.5 10.9 13.5 18.5 27.5 35.3 41.6 50-32.6 30.3-63.2 46.9-84 46.9-4.5-.1-8.3-1-11.3-2.7zm237.2-76.2c4.7 38.2-1.1 67.9-14.6 75.8-3 1.8-6.9 2.6-11.5 2.6-20.7 0-51.4-16.5-84-46.6 14-14.7 28-31.4 41.3-49.9 22.6-2.4 44-6.1 63.6-11 2.3 10.1 4.1 19.8 5.2 29.1zm38.5-66.7c-8.6 3.7-18 7-27.7 10.1-5.7-19.6-13.2-40-22.5-60.9 9.2-20.8 16.6-41.1 22.2-60.6 9.9 3.1 19.3 6.5 28.1 10.2 35.4 15.1 58.3 34.9 58.3 50.6-.1 15.7-23 35.6-58.4 50.6z"></path>
									<circle cx="420.9" cy="296.5" r="45.7"></circle>
								</g>
							</svg>
							<span class="bg-gray-100 text-gray-500 text-xs font-semibold mr-2 px-2 py-0.5 rounded dark:bg-gray-700 dark:text-gray-400 hidden sm:flex">v1.0.0</span>
						</div>
						<h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">React Admin Dashboard</h3>
						Over 20+ pages built with React and TypeScript components with support for Tailwind CSS classes to build web applications.
					</a>
					<a class="rounded-lg border border-gray-300 bg-white px-4 py-3.5 text-base font-medium text-gray-500 placeholder:py-3.5 hover:bg-gray-100 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:border-gray-600 dark:bg-gray-900 dark:text-gray-400 dark:hover:border-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-700 sm:gap-6" href="/icons/">
						<div class="flex items-center justify-between mb-4">
							<svg class="w-7 h-7 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 20">
								<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.147 15.085a7.159 7.159 0 0 1-6.189 3.307A6.713 6.713 0 0 1 3.1 15.444c-2.679-4.513.287-8.737.888-9.548A4.373 4.373 0 0 0 5 1.608c1.287.953 6.445 3.218 5.537 10.5 1.5-1.122 2.706-3.01 2.853-6.14 1.433 1.049 3.993 5.395 1.757 9.117Z"></path>
							</svg>
							<span class="bg-gray-100 text-gray-500 text-xs font-semibold mr-2 px-2 py-0.5 rounded dark:bg-gray-700 dark:text-gray-400 hidden sm:flex">React &amp; Figma</span>
						</div>
						<h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">Flowbite Icons</h3>
						Get access to over 430+ custom designe SVG icons in outline and solid styles with support for Flowbite, React, and Figma.
					</a>
				</div>
			</div>
		</div>
	</div>
</section>



@endsection
