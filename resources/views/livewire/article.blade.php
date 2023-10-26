<div>
    <main class="grow">
        <main class="pt-6 pb-8 bg-white lg:pb-16 dark:bg-gray-900">
            <div class="flex justify-between px-4 mx-auto max-w-8xl">
                <div class="hidden mb-6 xl:block lg:w-80">
                    <div class="sticky top-36">
                        <aside>

                            <div class="p-6 mb-6 font-medium text-gray-500 bg-white rounded-lg border border-gray-200 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400">
                                <h4 class="mb-4 font-bold text-gray-900 uppercase dark:text-white">Resources</h4>

                                <aside class="sticky top-16 divide-y divide-skin-base">
                                    <div class="pb-8">
                                        <h4 class="text-skin-inverted text-base leading-6 font-medium">Affichage des articles</h4>
                                        <div class="mt-5 flex items-center space-x-3">
                                            <button class="button inline-flex justify-center py-2 px-4 border border-skin-base rounded-md shadow-sm bg-skin-button text-sm text-skin-base hover:bg-skin-button-hover focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-body focus:ring-green-500 border-skin-base shadow-none focus:ring-1 relative bg-skin-button-hover" type="button" wire:click="changeViewMode('list')">
                                                <span class="flex absolute h-3 w-3 top-0 right-0 -mt-1 -mr-1"><span class="relative inline-flex rounded-full h-3 w-3 bg-red-500"></span></span>
                                                <svg class="h-5 w-5 mr-2 text-skin-base/60" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 12h16.5m-16.5 3.75h16.5M3.75 19.5h16.5M5.625 4.5h12.75a1.875 1.875 0 010 3.75H5.625a1.875 1.875 0 010-3.75z"></path>
                                                </svg>
                                                Liste
                                            </button>
                                            <button class="button inline-flex justify-center py-2 px-4 border border-skin-base rounded-md shadow-sm bg-skin-button text-sm text-skin-base hover:bg-skin-button-hover focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-body focus:ring-green-500 border-skin-base shadow-none focus:ring-1 bg-transparent" type="button" wire:click="changeViewMode('card')">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-5 w-5 mr-2 text-skin-base/60">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 6.878V6a2.25 2.25 0 012.25-2.25h7.5A2.25 2.25 0 0118 6v.878m-12 0c.235-.083.487-.128.75-.128h10.5c.263 0 .515.045.75.128m-12 0A2.25 2.25 0 004.5 9v.878m13.5-3A2.25 2.25 0 0119.5 9v.878m0 0a2.246 2.246 0 00-.75-.128H5.25c-.263 0-.515.045-.75.128m15 0A2.25 2.25 0 0121 12v6a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 18v-6c0-.98.626-1.813 1.5-2.122"></path>
                                                </svg>
                                                Carte
                                            </button>
                                        </div>
                                    </div>
                                    <div class="py-8">
                                        <h4 class="text-skin-inverted text-base leading-6 font-medium">Tous les tags</h4>
                                        <div  class="mt-5 space-y-1">
                                            @foreach ($tags as $tag)


                                            <div class="group px-2 py-1.5 flex items-center text-base font-medium text-skin-inverted-muted/80 hover:text-skin-inverted rounded-md font-sans">
                                                <button wire:click="toggleTag({{$tag->id}})" type="button" class="group px-2 py-1.5 flex items-center text-base font-medium text-skin-inverted-muted/80 hover:text-skin-inverted rounded-md font-sans">
                                                    <svg class="w-5 h-5" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30">
                                                     <path d="M24 26H6c-2.2 0-4-1.8-4-4V8c0-2.2 1.8-4 4-4h18c2.2 0 4 1.8 4 4v14c0 2.2-1.8 4-4 4Z" fill="#A576FF" stroke="#A576FF" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                                      <path d="M5.5 8a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1ZM9.5 8a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1ZM13.5 8a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1Z" fill="#E3FAFF" stroke="#E3FAFF" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                                                         </svg>
                                                              <span class="truncate ml-1.5">{{$tag->name}}</span>
                                                                   </button>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </aside>


                            </div>
                            <div class="p-6 mb-6 text-gray-500 bg-white rounded-lg border border-gray-200 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400">
                                <h4 class="mb-4 font-bold text-gray-900 uppercase dark:text-white">Prendre contact </h4>
                                <p class="mb-2 text-sm text-gray-500 dark:text-gray-400">
                                    Prendre contact avec nous
                                </p>
                                <p class="mb-4 text-sm text-gray-500 dark:text-gray-400">
                                    kgs informatique l'avenir et le futur dans le présent
                                </p>
                                <a class="text-white block text-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 w-full" href="/contact/">C'est parti </a>
                            </div>
                        </aside>
                    </div>
                </div>
                <div class="w-full max-w-2xl mx-auto">
                    <div class="pb-5 border-b border-skin-base">
                        <h1 class="text-3xl leading-8 font-extrabold text-skin-inverted font-heading">Récentes publications</h1>
                        <p class="mt-2 max-w-4xl text-skin-base leading-5">
                            Tous les articles récemment publiés.
                        </p>
                    </div>

                    <div class="divide-y divide-gray-200 dark:divide-gray-700">

                        @foreach ($articles as $value)
                        <article class="py-6">
                            <div class="flex items-center justify-between mb-3 text-gray-500">
                                <div>
                                    <a class="bg-blue-100 text-blue-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 hover:bg-blue-200 dark:hover:bg-blue-300 dark:text-blue-800 mb-2" href="{{route('article.detail', $value->id)}}">
                                        @foreach ($value->articletags as $reponse)
                                            {{$reponse->name}}
                                        @endforeach
                                    </a>
                                </div>
                                <span class="text-sm"> <time > {{$value->created_at->diffForHumans()}}</time></span>
                            </div>
                            <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white hover:underline"><a href="{{route('article.show', $value->id)}}">{{$value->title}}</a></h2>
                            <p class="mb-5 text-gray-500 dark:text-gray-400">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae officiis veniam tempora tempore doloribus, consequuntur blanditiis nisi et, exercitationem natus est sint sed commodi, non laudantium provident. Nemo, consequatur quam.
                            </p>
                            <div class="flex items-center justify-between">
                                <a class="flex items-center space-x-2" href="{{route('article.show', $value->id)}}">
                                    <img class="rounded-full w-7 h-7" src="{{asset('kgs.jpg')}}" alt="Zoltán Szőgyényi profile picture">
                                    <span class="font-medium dark:text-white">KGS INFORMATIQUE</span>
                                </a>
                                <a class="inline-flex items-center font-medium text-blue-600 hover:underline dark:text-blue-500" href="{{route('article.show', $value->id)}}">
                                    Lire la suite
                                    <svg class="w-4 h-4 ml-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                    </svg>
                                </a>
                            </div>
                        </article>
                        @endforeach
                    </div>


                    <div class="flex items-center justify-center mt-6">


                    <nav aria-label="Page navigation example">
                        <ul class="inline-flex -space-x-px text-sm">
                            {{-- {{$posts->links()}} --}}
                        </ul>
                    </nav>


                    </div>

                </div>
                <aside class="hidden lg:block lg:w-80" aria-labelledby="sidebar-label">
                    <div class="sticky top-36">
                        <h3 id="sidebar-label" class="sr-only">Sidebar</h3>
                        <div class="lg:ml-auto">
                            {{-- <script id="_carbonads_js" src="//cdn.carbonads.com/carbon.js?serve=CK7D4KQE&amp;placement=flowbitedesign"></script> --}}
                        </div>
                        <div class="p-6 pb-4 mt-6 mb-6 font-medium text-gray-500 bg-white border border-gray-200 rounded-lg dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400">
                            <h4 class="mb-4 font-bold text-gray-900 uppercase dark:text-white">Recommended topics</h4>
                            <div class="flex flex-wrap">
                                <a class="bg-blue-100 text-blue-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 hover:bg-blue-200 dark:hover:bg-blue-300 dark:text-blue-800 mb-2" href="/blog/tag/alpine-js/">#Alpine.js</a>
                                <a class="bg-blue-100 text-blue-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 hover:bg-blue-200 dark:hover:bg-blue-300 dark:text-blue-800 mb-2" href="/blog/tag/angular/">#Angular</a>
                                <a class="bg-blue-100 text-blue-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 hover:bg-blue-200 dark:hover:bg-blue-300 dark:text-blue-800 mb-2" href="/blog/tag/flowbite/">#Flowbite</a>
                                <a class="bg-blue-100 text-blue-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 hover:bg-blue-200 dark:hover:bg-blue-300 dark:text-blue-800 mb-2" href="/blog/tag/laravel/">#Laravel</a>
                                <a class="bg-blue-100 text-blue-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 hover:bg-blue-200 dark:hover:bg-blue-300 dark:text-blue-800 mb-2" href="/blog/tag/next-js/">#Next.js</a>
                                <a class="bg-blue-100 text-blue-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 hover:bg-blue-200 dark:hover:bg-blue-300 dark:text-blue-800 mb-2" href="/blog/tag/tailwind-css/">#Tailwind CSS</a>
                            </div>
                        </div>
                        <div class="p-6 mb-6 font-medium text-gray-500 bg-white border border-gray-200 rounded-lg dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400">
                            <h4 class="mb-4 font-bold text-gray-900 uppercase dark:text-white">Disuction populaire</h4>
                            <ul class="space-y-4 text-gray-500 dark:text-gray-400">
                                <li>
                                    <a class="flex items-start" href="/blog/author/david/">
                                        <div class="mr-3 shrink-0">
                                            <img class="w-6 h-6 mt-1 rounded-full" src="https://publisher.flowbite.com/content/images/2022/12/david-dumont-profile-picture.jpeg" alt="David Dumont profile picture">
                                        </div>
                                        <div class="mr-3">
                                            <span class="block font-medium text-gray-900 dark:text-white">KGS Informatique</span>
                                            <span class="text-sm">Fondateur de la plateforme kgs informatique .</span>
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

</div>
