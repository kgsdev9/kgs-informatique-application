@extends('master.master')

@section('content')


<main class="grow">
	<main class="pt-6 pb-8 bg-white lg:pb-16 dark:bg-gray-900">
		<div class="flex justify-between px-4 mx-auto max-w-8xl">
			@include('dashboard.slide-bar')
			 <div class="w-full max-w-2xl mx-auto">
				<div class="flex items-center justify-between py-4 border-t border-b border-gray-200 dark:border-gray-700 not-format">
					<span class="text-sm font-bold text-gray-900 lg:mb-0 dark:text-white">Nouvel article </span>

				</div>
				<div class="divide-y divide-gray-200 dark:divide-gray-700">
                <form class="mt-4" method="POST" action="{{route('article.store')}}">
                    @csrf
                    <div class="mb-6">
                    <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Titre de l'article </label>
                    <input type="text" name="title" id="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Comment faire un refactoring professionelle" required>
                    </div>

                    <div class="mb-6">
                    <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Catégories de l'article </label>
                    <select data-te-select-init
                    data-te-select-placeholder="Example placeholder" multiple class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  name="tag_id[]">
                      @foreach ($allTags as $tag)
                      <option value="{{$tag->id}}">{{$tag->name}} {{$tag->id}} </option>
                      @endforeach

                    </select>
                    </div>
                    <div class="mb-6">
                    <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description de l'article </label>
                    <textarea id="message" name="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Ecrivez votre article..."> {{old('description')}}</textarea>
                    </div>
                    <div class="flex items-start mb-6">
                    <div class="flex items-center h-5">
                        <input id="remember" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800" >
                    </div>
                    <label for="remember" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Acceptez vous les conditions d'utilisations </label>
                    </div>
                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                </form>

				</div>
			</div>

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

