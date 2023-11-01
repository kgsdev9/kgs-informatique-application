@extends('master.master')
 @section('content')

 <main class="grow">
    <main class="pt-6 pb-8 bg-white lg:pb-16 dark:bg-gray-900">
        <div class="flex justify-between px-4 mx-auto max-w-8xl">
            <div class="hidden mb-6 xl:block lg:w-80">
                <div class="sticky top-36">
                    <aside>

                        <div class="p-6 mb-6 font-medium text-gray-500 bg-white rounded-lg border border-gray-200 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400">
                            <h4 class="mb-4 font-bold text-gray-900 uppercase dark:text-white">Votre Espace de publication   </h4>

                            <aside class="sticky top-16 divide-y divide-skin-base">
                                <div class="py-8">
                                    <div class="group px-2 py-1.5 flex items-center text-base font-medium text-skin-inverted-muted/80 hover:text-skin-inverted rounded-md font-sans">
                                        <a  href="{{URL('/dashboard')}}" class="group px-2 py-1.5 flex items-center text-base font-medium text-skin-inverted-muted/80 hover:text-skin-inverted rounded-md font-sans">
                                            <svg class="w-5 h-5" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30">
                                             <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="text-blue-600">
                                                <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path>
                                            </svg>
                                                 </svg>
                                                      <span class="truncate ml-1.5">Dashboard</span>
                                            </a>
                                    </div>

                                    <div class="group px-2 py-1.5 flex items-center text-base font-medium text-skin-inverted-muted/80 hover:text-skin-inverted rounded-md font-sans">
                                        <a  href="{{route('article.index')}}" class="group px-2 py-1.5 flex items-center text-base font-medium text-skin-inverted-muted/80 hover:text-skin-inverted rounded-md font-sans">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="text-pink-500" style="height:30px">
                                                <path fill-rule="evenodd" d="M2 5a2 2 0 012-2h8a2 2 0 012 2v10a2 2 0 002 2H4a2 2 0 01-2-2V5zm3 1h6v4H5V6zm6 6H5v2h6v-2z" clip-rule="evenodd"></path>
                                                <path d="M15 7h1a2 2 0 012 2v5.5a1.5 1.5 0 01-3 0V7z"></path>
                                            </svg>
                                         <span class="truncate ml-1.5">Mes Articles </span>
                                            </a>
                                    </div>
                                </div>
                            </aside>


                        </div>

                    </aside>
                </div>
            </div>
            <div class="w-full max-w-2xl mx-auto">
                <div class="pb-5 border-b border-skin-base">
                    <h1 class="text-3xl leading-8 font-extrabold text-skin-inverted font-heading">Liste de vos publications  </h1>
                    <a href="{{route('article.create')}}" class="">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="md:block hidden"> Créer une nouvelle publication  </span>
                    </a>

                </div>

                <div class="divide-y divide-gray-200 dark:divide-gray-700 mt-5">
                    @foreach ($allArticleForUser as $article)
                    <div class="flex md:space-x-6 space-x-4 md:py-5 py-3 relative">

                        <div class="flex-1 space-y-2">

                            <a href="#" class="md:text-xl font-semibold line-clamp-2">{{$article->title}}</a>
                            <p class="leading-6 pr-4 line-clamp-2 md:block hidden"> {{$article->mini_description}} </p>
                            <a href="#" class="font-semibold block text-sm">{{$article->owner->name}}</a>

                           <div class="flex items-center justify-between">
                                <div class="flex space-x-3 items-center text-sm md:pt-3">
                                    <div>
                                        <a href="{{route('article.show', $article->id)}}" class="md:flex items-center justify-center h-9 px-8 rounded-md border hidden">Consulter</a>
                                    </div>
                                    <div class="md:block hidden">·</div>
                                    <div>
                                        <a href="{{route('article.edit', $article->id)}}" class="md:flex items-center justify-center h-9 px-8 rounded-md border hidden">Edition </a>
                                    </div>
                                </div>
                                <form action="{{route('article.destroy', $article->id)}}" method="POST">
                                 @csrf
                                 @method('DELETE')
                                 <button class="md:flex items-center justify-center h-9 px-8 rounded-md border hidden" onclick="return confirm('Voulez-vous vraiment supprimer le post')" type="submit">Supprimer</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>


                <div class="flex items-center justify-center mt-6">
                <nav aria-label="Page navigation example">
                    <ul class="inline-flex -space-x-px text-sm">

                    </ul>
                </nav>
                </div>
            </div>
            <aside class="hidden lg:block lg:w-80" aria-labelledby="sidebar-label">
                <div class="sticky top-36">
                    <h3 id="sidebar-label" class="sr-only">Sidebar</h3>
                    <div class="lg:ml-auto">

                    </div>
                    <div class="p-6 pb-4 mt-6 mb-6 font-medium text-gray-500 bg-white border border-gray-200 rounded-lg dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400">
                        <h4 class="mb-4 font-bold text-gray-900 uppercase dark:text-white">Categorie </h4>
                        <div class="flex flex-wrap">
                            <a class="bg-blue-100 text-blue-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 hover:bg-blue-200 dark:hover:bg-blue-300 dark:text-blue-800 mb-2" href="#">#Alpine.js</a>
                            <a class="bg-blue-100 text-blue-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 hover:bg-blue-200 dark:hover:bg-blue-300 dark:text-blue-800 mb-2" href="#">#Angular</a>
                            <a class="bg-blue-100 text-blue-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 hover:bg-blue-200 dark:hover:bg-blue-300 dark:text-blue-800 mb-2" href="#">#Flowbite</a>
                            <a class="bg-blue-100 text-blue-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 hover:bg-blue-200 dark:hover:bg-blue-300 dark:text-blue-800 mb-2" href="#">#Laravel</a>
                            <a class="bg-blue-100 text-blue-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 hover:bg-blue-200 dark:hover:bg-blue-300 dark:text-blue-800 mb-2" href="#">#Next.js</a>
                            <a class="bg-blue-100 text-blue-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 hover:bg-blue-200 dark:hover:bg-blue-300 dark:text-blue-800 mb-2" href="#">#Tailwind CSS</a>
                        </div>
                    </div>
                    <div class="p-6 mb-6 font-medium text-gray-500 bg-white border border-gray-200 rounded-lg dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400">
                        <h4 class="mb-4 font-bold text-gray-900 uppercase dark:text-white">Disuction populaire</h4>
                        <ul class="space-y-4 text-gray-500 dark:text-gray-400">
                            <li>
                                <a class="flex items-start" href="#">
                                    <div class="mr-3 shrink-0">
                                        <img class="w-6 h-6 mt-1 rounded-full" src="http://localhost:8000/logo-j2code_povnzd.png" alt="#">
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




@endsection

