@extends('master.master')

@section('content')


<main class="grow">
	<main class="pt-6 pb-8 bg-white lg:pb-16 dark:bg-gray-900">
		<div class="flex justify-between px-4 mx-auto max-w-8xl">
			@include('dashboard.slide-bar')

			{{-- <div class="w-full max-w-2xl mx-auto">
				<div class="flex items-center justify-between py-4 border-t border-b border-gray-200 dark:border-gray-700 not-format">
					<span class="text-sm font-bold text-gray-900 lg:mb-0 dark:text-white">Publier un article</span>
                    <span class="text-sm font-bold text-gray-900 lg:mb-0 dark:text-white">Publier une discution</span>
                    <span class="text-sm font-bold text-gray-900 lg:mb-0 dark:text-white">Publier un sujet </span>
				</div>
				<div class="divide-y divide-gray-200 dark:divide-gray-700">
					<article class="py-6">
						<div class="flex items-center justify-between mb-3 text-gray-500">
							<div>
								<a class="bg-blue-100 text-blue-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 hover:bg-blue-200 dark:hover:bg-blue-300 dark:text-blue-800 mb-2" href="/blog/tag/flowbite/">#Flowbite</a>
							</div>
							<span class="text-sm">Published <time datetime="1677146503000">8 months ago</time></span>
						</div>
						<h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white hover:underline"><a href="/blog/state-of-flowbite-2022/">State of Flowbite: learn more about our results from 2022 and what we plan to build this year</a></h2>
						<p class="mb-5 text-gray-500 dark:text-gray-400">
							Learn more about the results, achievements and plans for the future by reading the "State of Flowbite 2022" including the open-source development of the Flowbite Library, the release of new UI components, features, and more.
						</p>
						<div class="flex items-center justify-between">
							<a class="flex items-center space-x-2" href="/blog/author/zoltan/">
								<img class="rounded-full w-7 h-7" src="https://www.gravatar.com/avatar/be85a3bc61ad70c85c9b3411dc07cb2d?s=250&amp;r=x&amp;d=mp" alt="Zoltán Szőgyényi profile picture">
								<span class="font-medium dark:text-white">Zoltán Szőgyényi</span>
							</a>
							<a class="inline-flex items-center font-medium text-blue-600 hover:underline dark:text-blue-500" href="/blog/state-of-flowbite-2022/">
								Read more
								<svg class="w-4 h-4 ml-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
								</svg>
							</a>
						</div>
					</article>
				</div>
			</div> --}}

			<aside class="hidden lg:block lg:w-80" aria-labelledby="sidebar-label">
				<div class="sticky top-36">
					<h3 id="sidebar-label" class="sr-only">Sidebar</h3>
					<div class="lg:ml-auto">
						<script src="//cdn.carbonads.com/carbon.js?serve=CK7D4KQE&amp;placement=flowbitedesign"></script>
					</div>

					<div class="p-6 mb-6 font-medium text-gray-500 bg-white border border-gray-200 rounded-lg dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400">
						<h4 class="mb-4 font-bold text-gray-900 uppercase dark:text-white">AUTEURS DE LA COMMUNAUTE</h4>
						<ul class="space-y-4 text-gray-500 dark:text-gray-400">
							<li>
								<a class="flex items-start" href="/blog/author/david/">
									<div class="mr-3 shrink-0">
										<img class="w-6 h-6 mt-1 rounded-full" src="https://publisher.flowbite.com/content/images/2022/12/david-dumont-profile-picture.jpeg" alt="David Dumont profile picture">
									</div>
									<div class="mr-3">
										<span class="block font-medium text-gray-900 dark:text-white">David Dumont</span>
										<span class="text-sm">Co-founder at Suncel: a CMS for Next.js apps and websites.</span>
									</div>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</aside>
		</div>
	</main>
</main>





@endsection
