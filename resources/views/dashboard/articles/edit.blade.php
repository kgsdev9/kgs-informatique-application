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
                        <div class="p-6 mb-6 text-gray-500 bg-white rounded-lg border border-gray-200 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400">
                            <h4 class="mb-4 font-bold text-gray-900 uppercase dark:text-white">Prendre contact </h4>
                            <p class="mb-2 text-sm text-gray-500 dark:text-gray-400">
                                Prendre contact avec nous
                            </p>
                            <p class="mb-4 text-sm text-gray-500 dark:text-gray-400">
                                kgs informatique l'avenir et le futur dans le présent
                            </p>
                            <a class="text-white block text-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 w-full" href="#">C'est parti </a>
                        </div>
                    </aside>
                </div>
            </div>
            <div class="w-full max-w-2xl mx-auto">
                <div class="pb-5 border-b border-skin-base">
                    <h1 class="text-3xl leading-8 font-extrabold text-skin-inverted font-heading">Edition de la  publication</h1>

                </div>

                <div class="divide-y divide-gray-200 dark:divide-gray-700 mt-5">
                    <form method="post" action="{{route('article.update', $ressource->id)}}">
                        @method('PATCH')
                        @csrf
                        <div class="mb-6">
                        <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Titre de  la publication </label>
                        <input type="text" id="title" name="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Comment Créer un crud en python" value="{{ $ressource->title}}" required>
                        </div>

                        <div class="mb-6">
                            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Expliquer un peu l'objectif de votre publication </label>
                               <input type="text" name="mini_description" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ $ressource->mini_description}}">
                            </div>
                            <div class="mb-6">
                                <div class="w-1/3">

                                    <label for="tag" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Les tags de l'article </label>
                                    <div class="relative flex w-full">

                                      <select
                                        id="select-role"
                                        name="tag_id[]"
                                        multiple
                                        placeholder="Select des tags..."
                                        autocomplete="off"
                                        class="block w-full rounded-sm cursor-pointer focus:outline-none"
                                        multiple
                                        >
                                        @foreach ($allTags as $tag)
                                        <option value="{{ $tag->id }}" @selected($ressource->articletags->contains($tag->id))
                                            @class([
                                            'bg-purple-600 text-white' => $ressource->articletags->contains($tag->id)
                                            ])>
                                            {{ $tag->name }}
                                        </option>
                                        @endforeach

                                      </select>
                                    </div>
                                  </div>

                            </div>
                        <div class="mb-6">
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Expliquer , commenter et documenter votre publication  </label>
                            <textarea name="description" class="form-control" id="" cols="30" rows="10">{{ $ressource->description}}</textarea>

                        </div>

                        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Enregistrer et publier l'article </button>
                    </form>

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



@push('script')
 <script src="https://cdn.jsdelivr.net/npm/tom-select/dist/js/tom-select.complete.min.js"></script>
    <script>
      new TomSelect('#select-role', {
        maxItems: 3,
      });
    </script>

@endpush

@endsection
