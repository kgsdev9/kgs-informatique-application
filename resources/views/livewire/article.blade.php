<div>
    <main class="grow">
        <main class="pt-6 pb-8 bg-white lg:pb-16 dark:bg-gray-900">
            <div class="flex justify-between px-4 mx-auto max-w-8xl">
                <div class="hidden mb-6 xl:block lg:w-80">
                    <div class="sticky top-36">
                        <aside>
                            <div class="p-6 mb-6 font-medium text-gray-500 bg-white rounded-lg border border-gray-200 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400">
                                <h1 class="mb-2 font-bold text-gray-900 uppercase dark:text-white">KGS INFORMATIQUE
                                    <button wire:click="test">Do Something</button>

                                </h1>
                                <p class="text-sm text-gray-500 dark:text-gray-400">

                                    Articles de blog, articles et didacticiels sur le développement et la conception Web.
                                </p>
                            </div>
                            <div class="p-6 mb-6 font-medium text-gray-500 bg-white rounded-lg border border-gray-200 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400">
                                <h4 class="mb-4 font-bold text-gray-900 uppercase dark:text-white">Resources</h4>


                                @foreach ($categories as $value)
                                <div>


                                    <input type="radio" wire:model="category" value="{{$value->id}}">
                                    <span>{{$value->name}}</span>
                                </div>


                                 @endforeach
                            </div>
                            <div class="p-6 mb-6 text-gray-500 bg-white rounded-lg border border-gray-200 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400">
                                <h4 class="mb-4 font-bold text-gray-900 uppercase dark:text-white">Become an author</h4>
                                <p class="mb-2 text-sm text-gray-500 dark:text-gray-400">
                                    Do you want to contribute by writing guest posts on this blog?
                                </p>
                                <p class="mb-4 text-sm text-gray-500 dark:text-gray-400">
                                    Please contact us and send us a resume of previous articles that you have written.
                                </p>
                                <a class="text-white block text-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 w-full" href="/contact/">Get in touch</a>
                            </div>
                        </aside>
                    </div>
                </div>
                <div class="w-full max-w-2xl mx-auto">
                    <div class="flex items-center justify-between py-4 border-t border-b border-gray-200 dark:border-gray-700 not-format">
                        <h1 class="text-sm font-bold text-gray-900 lg:mb-0 dark:text-white">6 posts in total</h1>
                    </div>
                    <div class="divide-y divide-gray-200 dark:divide-gray-700">

                        @foreach ($allArticles as $value)


                        <article class="py-6">
                            <div class="flex items-center justify-between mb-3 text-gray-500">
                                <div>
                                    <a class="bg-blue-100 text-blue-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 hover:bg-blue-200 dark:hover:bg-blue-300 dark:text-blue-800 mb-2" href="{{route('article.detail', $value->id)}}">
                                        #{{$value->categoryarticle->name}}

                                    </a>
                                </div>
                                <span class="text-sm"> <time datetime="1677146503000"> {{$value->created_at->diffForHumans()}}</time></span>
                            </div>
                            <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white hover:underline"><a href="/blog/state-of-flowbite-2022/">{{$value->title}}</a></h2>
                            <p class="mb-5 text-gray-500 dark:text-gray-400">
                                {{$value->description}}
                            </p>
                            <div class="flex items-center justify-between">
                                <a class="flex items-center space-x-2" href="/blog/author/zoltan/">
                                    <img class="rounded-full w-7 h-7" src="{{asset('kgs.jpg')}}" alt="Zoltán Szőgyényi profile picture">
                                    <span class="font-medium dark:text-white">KGS INFORMATIQUE</span>
                                </a>
                                <a class="inline-flex items-center font-medium text-blue-600 hover:underline dark:text-blue-500" href="/blog/state-of-flowbite-2022/">
                                    Lire la suite
                                    <svg class="w-4 h-4 ml-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                    </svg>
                                </a>
                            </div>
                        </article>
                        @endforeach

                        <div class="d-flex">
                            {!! $allArticles->links('pagination::tailwind') !!}
                        </div>


                    </div>
                </div>
                <aside class="hidden lg:block lg:w-80" aria-labelledby="sidebar-label">
                    <div class="sticky top-36">
                        <h3 id="sidebar-label" class="sr-only">Sidebar</h3>
                        <div class="lg:ml-auto">
                            <script id="_carbonads_js" src="//cdn.carbonads.com/carbon.js?serve=CK7D4KQE&amp;placement=flowbitedesign"></script>
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
                            <h4 class="mb-4 font-bold text-gray-900 uppercase dark:text-white">Community authors</h4>
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
                                <li>
                                    <a class="flex items-start" href="/blog/author/harikrishna/">
                                        <div class="mr-3 shrink-0">
                                            <img class="w-6 h-6 mt-1 rounded-full" src="https://publisher.flowbite.com/content/images/2022/11/Author-Headshot.jpg" alt="Harikrishna Kundariya profile picture">
                                        </div>
                                        <div class="mr-3">
                                            <span class="block font-medium text-gray-900 dark:text-white">Harikrishna Kundariya</span>
                                            <span class="text-sm">Marketer, developer, IoT, ChatBot &amp; Blockchain savvy, CEO of eSparkBiz.</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="flex items-start" href="/blog/author/rich/">
                                        <div class="mr-3 shrink-0">
                                            <img class="w-6 h-6 mt-1 rounded-full" src="https://publisher.flowbite.com/content/images/2023/01/1605304654466.jpg" alt="Rich Klein profile picture">
                                        </div>
                                        <div class="mr-3">
                                            <span class="block font-medium text-gray-900 dark:text-white">Rich Klein</span>
                                            <span class="text-sm">Technical writer, web developer, and customer success specialist.</span>
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
