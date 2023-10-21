<div>
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
                            <div class="mt-6 space-y-5 sm:mt-0 lg:col-span-8 xl:col-span-7">
                                <div class="lg:grid lg:grid-cols-3 lg:gap-10">
                                    <div class="hidden lg:flex items-center">
                                        <h3 class="text-skin-inverted text-xl font-heading">4 Sujets</h3>
                                    </div>
                                    <div class="lg:col-span-2">
                                        <nav class="relative z-0 rounded-lg shadow flex divide-x divide-skin-base" aria-label="Tabs">
                                            <a href="https://laravel.cm/forum/channels/authentification?sortBy=recent" aria-current="page" class="w-full text-skin-inverted rounded-l-lg group relative min-w-0 flex-1 overflow-hidden bg-skin-card p-4 sm:px-6 text-sm font-medium text-center hover:bg-skin-card-muted focus:z-10">
                                                <span>Récent</span>
                                                <span aria-hidden="true" class="bg-skin-primary absolute inset-x-0 bottom-0 h-0.5"></span>
                                            </a>
                                            <a href="https://laravel.cm/forum/channels/authentification?sortBy=resolved" aria-current="false" class="w-full text-skin-base hover:text-skin-inverted group relative min-w-0 flex-1 overflow-hidden bg-skin-card p-4 sm:px-6 text-sm font-medium text-center hover:bg-skin-card-muted focus:z-10">
                                                <span>Résolu</span>
                                                <span aria-hidden="true" class="bg-transparent absolute inset-x-0 bottom-0 h-0.5"></span>
                                            </a>
                                            <a href="https://laravel.cm/forum/channels/authentification?sortBy=unresolved" aria-current="false" class="w-full text-skin-base hover:text-skin-inverted rounded-r-lg group relative min-w-0 flex-1 overflow-hidden bg-skin-card p-4 sm:px-6 text-sm font-medium text-center hover:bg-skin-card-muted focus:z-10">
                                                <span>Non résolu</span>
                                                <span aria-hidden="true" class="bg-transparent absolute inset-x-0 bottom-0 h-0.5"></span>
                                            </a>
                                        </nav>
                                    </div>
                                </div>
                                <div class="my-10 lg:mb-32 space-y-6 sm:space-y-5">
                                    <div class="bg-skin-card px-4 py-6 rounded-lg shadow sm:p-6">
                                        <article aria-labelledby="question-title-43">
                                            <div>
                                                <div class="lg:flex lg:space-x-3">
                                                    <div class="flex-1 flex items-center space-x-3">
                                                        <div class="shrink-0">
                                                            <img class="object-cover rounded-full  h-8 w-8" src="https://ui-avatars.com/api/?name=Mbouhoum+Jo%C3%ABl&amp;color=065F46&amp;background=D1FAE5" alt="lafleurdev">
                                                        </div>
                                                        <div class="min-w-0 flex-1">
                                                            <p class="text-sm font-medium text-skin-inverted">
                                                                <a href="https://laravel.cm/user/lafleurdev" class="block group">
                                                                    <span class="group-hover:underline">Mbouhoum Joël</span>
                                                                    <span class="text-skin-muted">@lafleurdev</span>
                                                                </a>
                                                            </p>
                                                            <p class="text-sm text-skin-base">
                                                                <time-ago time="1694025414">
                                                                    il y a 2 mois
                                                                </time-ago>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="mt-2 lg:mt-0 shrink-0 self-center">
                                                        <div class="flex flex-wrap gap-2 mt-2 lg:mt-0 lg:gap-x-3">
                                                            <a href="https://laravel.cm/forum/channels/authentification" class="flex gap-2">
                                                                <span class="inline-flex items-center leading-none px-2.5 py-1 text-sm font-medium text-skin-inverted rounded-full border border-skin-input font-sans">
                                                                    <svg class="mr-1.5 h-2 w-2" fill="#31c48d" viewBox="0 0 8 8">
                                                                        <circle cx="4" cy="4" r="3"></circle>
                                                                    </svg>
                                                                    Authentification
                                                                </span>
                                                            </a>
                                                            <a href="https://laravel.cm/forum/channels/laravel" class="flex gap-2">
                                                                <span class="inline-flex items-center leading-none px-2.5 py-1 text-sm font-medium text-skin-inverted rounded-full border border-skin-input font-sans">
                                                                    <svg class="mr-1.5 h-2 w-2" fill="#ff2d20" viewBox="0 0 8 8">
                                                                        <circle cx="4" cy="4" r="3"></circle>
                                                                    </svg>
                                                                    Laravel
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h2 id="question-title-43" class="mt-4 text-base font-medium text-skin-inverted"><a href="https://laravel.cm/forum/acceder-a-la-page-daccueil-du-dashboard-apres-authentification" class="hover:underline">Accéder à la page d'accueil du dashboard après authentification </a></h2>
                                            </div>
                                            <div class="mt-2 text-sm text-skin-inverted-muted">
                                                <a href="https://laravel.cm/forum/acceder-a-la-page-daccueil-du-dashboard-apres-authentification">slt, svp j'ai un soucis, je ne parviens à accéder à la page d'accuiel du dashboard "admin.log...</a>
                                            </div>
                                            <div class="mt-6 flex justify-between space-x-8">
                                                <div class="flex items-center space-x-4">
                                                    <div wire:id="k791FWSpVJxL4OINQYJi" class="relative" x-data="{ showReactions: false }">
                                                        <button @click="showReactions = ! showReactions" class="flex items-center text-skin-base hover:underline text-sm leading-5 focus:outline-none focus:ring-0">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-5 w-5 ml-1.5">
                                                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.182 15.182a4.5 4.5 0 01-6.364 0M21 12a9 9 0 11-18 0 9 9 0 0118 0zM9.75 9.75c0 .414-.168.75-.375.75S9 10.164 9 9.75 9.168 9 9.375 9s.375.336.375.75zm-.375 0h.008v.015h-.008V9.75zm5.625 0c0 .414-.168.75-.375.75s-.375-.336-.375-.75.168-.75.375-.75.375.336.375.75zm-.375 0h.008v.015h-.008V9.75z"></path>
                                                            </svg>
                                                        </button>
                                                        <div @click.away="showReactions = false;" x-show="showReactions" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="origin-top absolute mt-4 w-56 rounded-md shadow-lg z-30 left-0" style="display: none;">
                                                            <div class="p-3 pt-4 bg-skin-card rounded-md shadow-lg">
                                                                <h5 class="ml-1 text-xs font-medium text-skin-base">
                                                                    Sélectionnez Une:
                                                                </h5>
                                                                <div class="mt-2 grid grid-cols-4 gap-2 reactions no-load">
                                                                    <button type="button" class="flex col-span-1 justify-center items-center rounded-md cursor-pointer h-8 w-8 hover:bg-skin-card-muted focus:outline-none" wire:click="userReacted('clap')"><img src="https://laravel.cm/images/reactions/clap.svg" class="w-5 h-5" alt="clap emoji"></button>
                                                                    <button type="button" class="flex col-span-1 justify-center items-center rounded-md cursor-pointer h-8 w-8 hover:bg-skin-card-muted focus:outline-none" wire:click="userReacted('fire')"><img src="https://laravel.cm/images/reactions/fire.svg" class="w-5 h-5" alt="fire emoji"></button>
                                                                    <button type="button" class="flex col-span-1 justify-center items-center rounded-md cursor-pointer h-8 w-8 hover:bg-skin-card-muted focus:outline-none" wire:click="userReacted('handshake')"><img src="https://laravel.cm/images/reactions/handshake.svg" class="w-5 h-5" alt="handshake emoji"></button>
                                                                    <button type="button" class="flex col-span-1 justify-center items-center rounded-md cursor-pointer h-8 w-8 hover:bg-skin-card-muted focus:outline-none" wire:click="userReacted('joy')"><img src="https://laravel.cm/images/reactions/joy.svg" class="w-5 h-5" alt="joy emoji"></button>
                                                                    <button type="button" class="flex col-span-1 justify-center items-center rounded-md cursor-pointer h-8 w-8 hover:bg-skin-card-muted focus:outline-none" wire:click="userReacted('love')"><img src="https://laravel.cm/images/reactions/love.svg" class="w-5 h-5" alt="love emoji"></button>
                                                                    <button type="button" class="flex col-span-1 justify-center items-center rounded-md cursor-pointer h-8 w-8 hover:bg-skin-card-muted focus:outline-none" wire:click="userReacted('money')"><img src="https://laravel.cm/images/reactions/money.svg" class="w-5 h-5" alt="money emoji"></button>
                                                                    <button type="button" class="flex col-span-1 justify-center items-center rounded-md cursor-pointer h-8 w-8 hover:bg-skin-card-muted focus:outline-none" wire:click="userReacted('party')"><img src="https://laravel.cm/images/reactions/party.svg" class="w-5 h-5" alt="party emoji"></button>
                                                                    <button type="button" class="flex col-span-1 justify-center items-center rounded-md cursor-pointer h-8 w-8 hover:bg-skin-card-muted focus:outline-none" wire:click="userReacted('pray')"><img src="https://laravel.cm/images/reactions/pray.svg" class="w-5 h-5" alt="pray"></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p class="inline-flex text-sm space-x-2 text-skin-base">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 01.865-.501 48.172 48.172 0 003.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z"></path>
                                                        </svg>
                                                        <span class="text-skin-inverted-muted">1</span>
                                                        <span class="sr-only">réponses</span>
                                                    </p>
                                                    <p class="inline-flex text-sm space-x-2 text-skin-base">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z"></path>
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                                        </svg>
                                                        <span class="text-skin-inverted-muted">48</span>
                                                        <span class="sr-only">vues</span>
                                                    </p>
                                                </div>
                                                <div class="flex text-sm">
                                                    <p class="inline-flex items-center space-x-3 text-sm"></p>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="bg-skin-card px-4 py-6 rounded-lg shadow sm:p-6">
                                        <article aria-labelledby="question-title-34">
                                            <div>
                                                <div class="lg:flex lg:space-x-3">
                                                    <div class="flex-1 flex items-center space-x-3">
                                                        <div class="shrink-0">
                                                            <img class="object-cover rounded-full  h-8 w-8" src="https://laravel.cm/media/40/newDiamond.png" alt="dani03">
                                                        </div>
                                                        <div class="min-w-0 flex-1">
                                                            <p class="text-sm font-medium text-skin-inverted">
                                                                <a href="https://laravel.cm/user/dani03" class="block group">
                                                                    <span class="group-hover:underline">dani</span>
                                                                    <span class="text-skin-muted">@dani03</span>
                                                                </a>
                                                            </p>
                                                            <p class="text-sm text-skin-base">
                                                                <time-ago time="1676644025">
                                                                    il y a 8 mois
                                                                </time-ago>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="mt-2 lg:mt-0 shrink-0 self-center">
                                                        <div class="flex flex-wrap gap-2 mt-2 lg:mt-0 lg:gap-x-3">
                                                            <a href="https://laravel.cm/forum/channels/passport" class="flex gap-2">
                                                                <span class="inline-flex items-center leading-none px-2.5 py-1 text-sm font-medium text-skin-inverted rounded-full border border-skin-input font-sans">
                                                                    <svg class="mr-1.5 h-2 w-2" fill="#31c48d" viewBox="0 0 8 8">
                                                                        <circle cx="4" cy="4" r="3"></circle>
                                                                    </svg>
                                                                    Passport
                                                                </span>
                                                            </a>
                                                            <a href="https://laravel.cm/forum/channels/laravel" class="flex gap-2">
                                                                <span class="inline-flex items-center leading-none px-2.5 py-1 text-sm font-medium text-skin-inverted rounded-full border border-skin-input font-sans">
                                                                    <svg class="mr-1.5 h-2 w-2" fill="#ff2d20" viewBox="0 0 8 8">
                                                                        <circle cx="4" cy="4" r="3"></circle>
                                                                    </svg>
                                                                    Laravel
                                                                </span>
                                                            </a>
                                                            <a href="https://laravel.cm/forum/channels/api" class="flex gap-2">
                                                                <span class="inline-flex items-center leading-none px-2.5 py-1 text-sm font-medium text-skin-inverted rounded-full border border-skin-input font-sans">
                                                                    <svg class="mr-1.5 h-2 w-2" fill="#ff2d20" viewBox="0 0 8 8">
                                                                        <circle cx="4" cy="4" r="3"></circle>
                                                                    </svg>
                                                                    Api
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h2 id="question-title-34" class="mt-4 text-base font-medium text-skin-inverted"><a href="https://laravel.cm/forum/token-nexipire-pas-avec-passport-sur-mon-api-laravel-9" class="hover:underline">token n'exipire pas avec passport sur mon API laravel 9</a></h2>
                                            </div>
                                            <div class="mt-2 text-sm text-skin-inverted-muted">
                                                <a href="https://laravel.cm/forum/token-nexipire-pas-avec-passport-sur-mon-api-laravel-9">Bonjour à tous je viens vers vous parce que je rencontre un problème avec mon token qui n'expire pas...</a>
                                            </div>
                                            <div class="mt-6 flex justify-between space-x-8">
                                                <div class="flex items-center space-x-4">
                                                    <div wire:id="DH5UByH9SsRAYoFVh3Qk" class="relative" x-data="{ showReactions: false }">
                                                        <button @click="showReactions = ! showReactions" class="flex items-center text-skin-base hover:underline text-sm leading-5 focus:outline-none focus:ring-0">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-5 w-5 ml-1.5">
                                                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.182 15.182a4.5 4.5 0 01-6.364 0M21 12a9 9 0 11-18 0 9 9 0 0118 0zM9.75 9.75c0 .414-.168.75-.375.75S9 10.164 9 9.75 9.168 9 9.375 9s.375.336.375.75zm-.375 0h.008v.015h-.008V9.75zm5.625 0c0 .414-.168.75-.375.75s-.375-.336-.375-.75.168-.75.375-.75.375.336.375.75zm-.375 0h.008v.015h-.008V9.75z"></path>
                                                            </svg>
                                                        </button>
                                                        <div @click.away="showReactions = false;" x-show="showReactions" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="origin-top absolute mt-4 w-56 rounded-md shadow-lg z-30 left-0" style="display: none;">
                                                            <div class="p-3 pt-4 bg-skin-card rounded-md shadow-lg">
                                                                <h5 class="ml-1 text-xs font-medium text-skin-base">
                                                                    Sélectionnez Une:
                                                                </h5>
                                                                <div class="mt-2 grid grid-cols-4 gap-2 reactions no-load">
                                                                    <button type="button" class="flex col-span-1 justify-center items-center rounded-md cursor-pointer h-8 w-8 hover:bg-skin-card-muted focus:outline-none" wire:click="userReacted('clap')"><img src="https://laravel.cm/images/reactions/clap.svg" class="w-5 h-5" alt="clap emoji"></button>
                                                                    <button type="button" class="flex col-span-1 justify-center items-center rounded-md cursor-pointer h-8 w-8 hover:bg-skin-card-muted focus:outline-none" wire:click="userReacted('fire')"><img src="https://laravel.cm/images/reactions/fire.svg" class="w-5 h-5" alt="fire emoji"></button>
                                                                    <button type="button" class="flex col-span-1 justify-center items-center rounded-md cursor-pointer h-8 w-8 hover:bg-skin-card-muted focus:outline-none" wire:click="userReacted('handshake')"><img src="https://laravel.cm/images/reactions/handshake.svg" class="w-5 h-5" alt="handshake emoji"></button>
                                                                    <button type="button" class="flex col-span-1 justify-center items-center rounded-md cursor-pointer h-8 w-8 hover:bg-skin-card-muted focus:outline-none" wire:click="userReacted('joy')"><img src="https://laravel.cm/images/reactions/joy.svg" class="w-5 h-5" alt="joy emoji"></button>
                                                                    <button type="button" class="flex col-span-1 justify-center items-center rounded-md cursor-pointer h-8 w-8 hover:bg-skin-card-muted focus:outline-none" wire:click="userReacted('love')"><img src="https://laravel.cm/images/reactions/love.svg" class="w-5 h-5" alt="love emoji"></button>
                                                                    <button type="button" class="flex col-span-1 justify-center items-center rounded-md cursor-pointer h-8 w-8 hover:bg-skin-card-muted focus:outline-none" wire:click="userReacted('money')"><img src="https://laravel.cm/images/reactions/money.svg" class="w-5 h-5" alt="money emoji"></button>
                                                                    <button type="button" class="flex col-span-1 justify-center items-center rounded-md cursor-pointer h-8 w-8 hover:bg-skin-card-muted focus:outline-none" wire:click="userReacted('party')"><img src="https://laravel.cm/images/reactions/party.svg" class="w-5 h-5" alt="party emoji"></button>
                                                                    <button type="button" class="flex col-span-1 justify-center items-center rounded-md cursor-pointer h-8 w-8 hover:bg-skin-card-muted focus:outline-none" wire:click="userReacted('pray')"><img src="https://laravel.cm/images/reactions/pray.svg" class="w-5 h-5" alt="pray"></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p class="inline-flex text-sm space-x-2 text-skin-base">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 01.865-.501 48.172 48.172 0 003.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z"></path>
                                                        </svg>
                                                        <span class="text-skin-inverted-muted">1</span>
                                                        <span class="sr-only">réponses</span>
                                                    </p>
                                                    <p class="inline-flex text-sm space-x-2 text-skin-base">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z"></path>
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                                        </svg>
                                                        <span class="text-skin-inverted-muted">88</span>
                                                        <span class="sr-only">vues</span>
                                                    </p>
                                                </div>
                                                <div class="flex text-sm">
                                                    <p class="inline-flex items-center space-x-3 text-sm">
                                                        <a href="https://laravel.cm/forum/token-nexipire-pas-avec-passport-sur-mon-api-laravel-9#182" class="flex items-center gap-x-2 font-medium text-green-500">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 01-1.043 3.296 3.745 3.745 0 01-3.296 1.043A3.745 3.745 0 0112 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 01-3.296-1.043 3.745 3.745 0 01-1.043-3.296A3.745 3.745 0 013 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 011.043-3.296 3.746 3.746 0 013.296-1.043A3.746 3.746 0 0112 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 013.296 1.043 3.746 3.746 0 011.043 3.296A3.745 3.745 0 0121 12z"></path>
                                                            </svg>
                                                            <span class="hover:underline">Résolu</span>
                                                        </a>
                                                    </p>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="bg-skin-card px-4 py-6 rounded-lg shadow sm:p-6">
                                        <article aria-labelledby="question-title-21">
                                            <div>
                                                <div class="lg:flex lg:space-x-3">
                                                    <div class="flex-1 flex items-center space-x-3">
                                                        <div class="shrink-0">
                                                            <img class="object-cover rounded-full  h-8 w-8" src="https://laravel.cm/media/131/B57475FD-E660-4DC0-962A-C6AF75218EF4.jpeg" alt="desire_ndjog">
                                                        </div>
                                                        <div class="min-w-0 flex-1">
                                                            <p class="text-sm font-medium text-skin-inverted">
                                                                <a href="https://laravel.cm/user/desire_ndjog" class="block group">
                                                                    <span class="group-hover:underline">I Forgot My name 🙈🙈👊</span>
                                                                    <span class="text-skin-muted">@desire_ndjog</span>
                                                                </a>
                                                            </p>
                                                            <p class="text-sm text-skin-base">
                                                                <time-ago time="1660755975">
                                                                    il y a environ un an
                                                                </time-ago>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="mt-2 lg:mt-0 shrink-0 self-center">
                                                        <div class="flex flex-wrap gap-2 mt-2 lg:mt-0 lg:gap-x-3">
                                                            <a href="https://laravel.cm/forum/channels/breeze" class="flex gap-2">
                                                                <span class="inline-flex items-center leading-none px-2.5 py-1 text-sm font-medium text-skin-inverted rounded-full border border-skin-input font-sans">
                                                                    <svg class="mr-1.5 h-2 w-2" fill="#31c48d" viewBox="0 0 8 8">
                                                                        <circle cx="4" cy="4" r="3"></circle>
                                                                    </svg>
                                                                    Breeze
                                                                </span>
                                                            </a>
                                                            <a href="https://laravel.cm/forum/channels/laravel" class="flex gap-2">
                                                                <span class="inline-flex items-center leading-none px-2.5 py-1 text-sm font-medium text-skin-inverted rounded-full border border-skin-input font-sans">
                                                                    <svg class="mr-1.5 h-2 w-2" fill="#ff2d20" viewBox="0 0 8 8">
                                                                        <circle cx="4" cy="4" r="3"></circle>
                                                                    </svg>
                                                                    Laravel
                                                                </span>
                                                            </a>
                                                            <a href="https://laravel.cm/forum/channels/authentification" class="flex gap-2">
                                                                <span class="inline-flex items-center leading-none px-2.5 py-1 text-sm font-medium text-skin-inverted rounded-full border border-skin-input font-sans">
                                                                    <svg class="mr-1.5 h-2 w-2" fill="#31c48d" viewBox="0 0 8 8">
                                                                        <circle cx="4" cy="4" r="3"></circle>
                                                                    </svg>
                                                                    Authentification
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h2 id="question-title-21" class="mt-4 text-base font-medium text-skin-inverted"><a href="https://laravel.cm/forum/npm-install-dev-npm-run-dev" class="hover:underline">npm install --dev &amp; npm run dev</a></h2>
                                            </div>
                                            <div class="mt-2 text-sm text-skin-inverted-muted">
                                                <a href="https://laravel.cm/forum/npm-install-dev-npm-run-dev">j'ai un léger soucis depuis hier sur mon projet de Test, en fait j'ai implémenté une authentificatio...</a>
                                            </div>
                                            <div class="mt-6 flex justify-between space-x-8">
                                                <div class="flex items-center space-x-4">
                                                    <div wire:id="us6LZIJtx25BWx3jkGXX" class="relative" x-data="{ showReactions: false }">
                                                        <button @click="showReactions = ! showReactions" class="flex items-center text-skin-base hover:underline text-sm leading-5 focus:outline-none focus:ring-0">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-5 w-5 ml-1.5">
                                                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.182 15.182a4.5 4.5 0 01-6.364 0M21 12a9 9 0 11-18 0 9 9 0 0118 0zM9.75 9.75c0 .414-.168.75-.375.75S9 10.164 9 9.75 9.168 9 9.375 9s.375.336.375.75zm-.375 0h.008v.015h-.008V9.75zm5.625 0c0 .414-.168.75-.375.75s-.375-.336-.375-.75.168-.75.375-.75.375.336.375.75zm-.375 0h.008v.015h-.008V9.75z"></path>
                                                            </svg>
                                                        </button>
                                                        <div @click.away="showReactions = false;" x-show="showReactions" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="origin-top absolute mt-4 w-56 rounded-md shadow-lg z-30 left-0" style="display: none;">
                                                            <div class="p-3 pt-4 bg-skin-card rounded-md shadow-lg">
                                                                <h5 class="ml-1 text-xs font-medium text-skin-base">
                                                                    Sélectionnez Une:
                                                                </h5>
                                                                <div class="mt-2 grid grid-cols-4 gap-2 reactions no-load">
                                                                    <button type="button" class="flex col-span-1 justify-center items-center rounded-md cursor-pointer h-8 w-8 hover:bg-skin-card-muted focus:outline-none" wire:click="userReacted('clap')"><img src="https://laravel.cm/images/reactions/clap.svg" class="w-5 h-5" alt="clap emoji"></button>
                                                                    <button type="button" class="flex col-span-1 justify-center items-center rounded-md cursor-pointer h-8 w-8 hover:bg-skin-card-muted focus:outline-none" wire:click="userReacted('fire')"><img src="https://laravel.cm/images/reactions/fire.svg" class="w-5 h-5" alt="fire emoji"></button>
                                                                    <button type="button" class="flex col-span-1 justify-center items-center rounded-md cursor-pointer h-8 w-8 hover:bg-skin-card-muted focus:outline-none" wire:click="userReacted('handshake')"><img src="https://laravel.cm/images/reactions/handshake.svg" class="w-5 h-5" alt="handshake emoji"></button>
                                                                    <button type="button" class="flex col-span-1 justify-center items-center rounded-md cursor-pointer h-8 w-8 hover:bg-skin-card-muted focus:outline-none" wire:click="userReacted('joy')"><img src="https://laravel.cm/images/reactions/joy.svg" class="w-5 h-5" alt="joy emoji"></button>
                                                                    <button type="button" class="flex col-span-1 justify-center items-center rounded-md cursor-pointer h-8 w-8 hover:bg-skin-card-muted focus:outline-none" wire:click="userReacted('love')"><img src="https://laravel.cm/images/reactions/love.svg" class="w-5 h-5" alt="love emoji"></button>
                                                                    <button type="button" class="flex col-span-1 justify-center items-center rounded-md cursor-pointer h-8 w-8 hover:bg-skin-card-muted focus:outline-none" wire:click="userReacted('money')"><img src="https://laravel.cm/images/reactions/money.svg" class="w-5 h-5" alt="money emoji"></button>
                                                                    <button type="button" class="flex col-span-1 justify-center items-center rounded-md cursor-pointer h-8 w-8 hover:bg-skin-card-muted focus:outline-none" wire:click="userReacted('party')"><img src="https://laravel.cm/images/reactions/party.svg" class="w-5 h-5" alt="party emoji"></button>
                                                                    <button type="button" class="flex col-span-1 justify-center items-center rounded-md cursor-pointer h-8 w-8 hover:bg-skin-card-muted focus:outline-none" wire:click="userReacted('pray')"><img src="https://laravel.cm/images/reactions/pray.svg" class="w-5 h-5" alt="pray"></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p class="inline-flex text-sm space-x-2 text-skin-base">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 01.865-.501 48.172 48.172 0 003.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z"></path>
                                                        </svg>
                                                        <span class="text-skin-inverted-muted">5</span>
                                                        <span class="sr-only">réponses</span>
                                                    </p>
                                                    <p class="inline-flex text-sm space-x-2 text-skin-base">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z"></path>
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                                        </svg>
                                                        <span class="text-skin-inverted-muted">227</span>
                                                        <span class="sr-only">vues</span>
                                                    </p>
                                                </div>
                                                <div class="flex text-sm">
                                                    <p class="inline-flex items-center space-x-3 text-sm"></p>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="bg-skin-card px-4 py-6 rounded-lg shadow sm:p-6">
                                        <article aria-labelledby="question-title-14">
                                            <div>
                                                <div class="lg:flex lg:space-x-3">
                                                    <div class="flex-1 flex items-center space-x-3">
                                                        <div class="shrink-0">
                                                            <img class="object-cover rounded-full  h-8 w-8" src="https://ui-avatars.com/api/?name=Meudje+Karl&amp;color=065F46&amp;background=D1FAE5" alt="bams_237">
                                                        </div>
                                                        <div class="min-w-0 flex-1">
                                                            <p class="text-sm font-medium text-skin-inverted">
                                                                <a href="https://laravel.cm/user/bams_237" class="block group">
                                                                    <span class="group-hover:underline">Meudje Karl</span>
                                                                    <span class="text-skin-muted">@bams_237</span>
                                                                </a>
                                                            </p>
                                                            <p class="text-sm text-skin-base">
                                                                <time-ago time="1643706291">
                                                                    il y a 2 ans
                                                                </time-ago>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="mt-2 lg:mt-0 shrink-0 self-center">
                                                        <div class="flex flex-wrap gap-2 mt-2 lg:mt-0 lg:gap-x-3">
                                                            <a href="https://laravel.cm/forum/channels/ui" class="flex gap-2">
                                                                <span class="inline-flex items-center leading-none px-2.5 py-1 text-sm font-medium text-skin-inverted rounded-full border border-skin-input font-sans">
                                                                    <svg class="mr-1.5 h-2 w-2" fill="#31c48d" viewBox="0 0 8 8">
                                                                        <circle cx="4" cy="4" r="3"></circle>
                                                                    </svg>
                                                                    UI
                                                                </span>
                                                            </a>
                                                            <a href="https://laravel.cm/forum/channels/ui-ux" class="flex gap-2">
                                                                <span class="inline-flex items-center leading-none px-2.5 py-1 text-sm font-medium text-skin-inverted rounded-full border border-skin-input font-sans">
                                                                    <svg class="mr-1.5 h-2 w-2" fill="#6D28D9" viewBox="0 0 8 8">
                                                                        <circle cx="4" cy="4" r="3"></circle>
                                                                    </svg>
                                                                    UI/UX
                                                                </span>
                                                            </a>
                                                            <a href="https://laravel.cm/forum/channels/framework" class="flex gap-2">
                                                                <span class="inline-flex items-center leading-none px-2.5 py-1 text-sm font-medium text-skin-inverted rounded-full border border-skin-input font-sans">
                                                                    <svg class="mr-1.5 h-2 w-2" fill="#fb70a9" viewBox="0 0 8 8">
                                                                        <circle cx="4" cy="4" r="3"></circle>
                                                                    </svg>
                                                                    Framework
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h2 id="question-title-14" class="mt-4 text-base font-medium text-skin-inverted"><a href="https://laravel.cm/forum/avec-ou-sans-bootstrap" class="hover:underline">Avec ou sans bootstrap? </a></h2>
                                            </div>
                                            <div class="mt-2 text-sm text-skin-inverted-muted">
                                                <a href="https://laravel.cm/forum/avec-ou-sans-bootstrap">Hello y'all,Comment vous allez?? Récemment Arthur a publie un lien YouTube d'un dev freelance, dan...</a>
                                            </div>
                                            <div class="mt-6 flex justify-between space-x-8">
                                                <div class="flex items-center space-x-4">
                                                    <div wire:id="qNEgcNg4jvF48eqG2Xgn" class="relative" x-data="{ showReactions: false }">
                                                        <button @click="showReactions = ! showReactions" class="flex relative justify-between items-center cursor-pointer h-8">
                                                            <div class="flex items-center justify-center space-x-2">
                                                                <img class="w-4 h-4" src="https://laravel.cm/images/reactions/clap.svg" alt="clap emoji">
                                                                <img class="w-4 h-4" src="https://laravel.cm/images/reactions/love.svg" alt="love emoji">
                                                                <span class="ml-3 text-sm font-medium text-green-500">2</span>
                                                            </div>
                                                        </button>
                                                        <div @click.away="showReactions = false;" x-show="showReactions" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="origin-top absolute mt-4 w-56 rounded-md shadow-lg z-30 left-0" style="display: none;">
                                                            <div class="p-3 pt-4 bg-skin-card rounded-md shadow-lg">
                                                                <h5 class="ml-1 text-xs font-medium text-skin-base">
                                                                    Sélectionnez Une:
                                                                </h5>
                                                                <div class="mt-2 grid grid-cols-4 gap-2 reactions no-load">
                                                                    <button type="button" class="flex col-span-1 justify-center items-center rounded-md cursor-pointer h-8 w-8 hover:bg-skin-card-muted focus:outline-none" wire:click="userReacted('clap')"><img src="https://laravel.cm/images/reactions/clap.svg" class="w-5 h-5" alt="clap emoji"></button>
                                                                    <button type="button" class="flex col-span-1 justify-center items-center rounded-md cursor-pointer h-8 w-8 hover:bg-skin-card-muted focus:outline-none" wire:click="userReacted('fire')"><img src="https://laravel.cm/images/reactions/fire.svg" class="w-5 h-5" alt="fire emoji"></button>
                                                                    <button type="button" class="flex col-span-1 justify-center items-center rounded-md cursor-pointer h-8 w-8 hover:bg-skin-card-muted focus:outline-none" wire:click="userReacted('handshake')"><img src="https://laravel.cm/images/reactions/handshake.svg" class="w-5 h-5" alt="handshake emoji"></button>
                                                                    <button type="button" class="flex col-span-1 justify-center items-center rounded-md cursor-pointer h-8 w-8 hover:bg-skin-card-muted focus:outline-none" wire:click="userReacted('joy')"><img src="https://laravel.cm/images/reactions/joy.svg" class="w-5 h-5" alt="joy emoji"></button>
                                                                    <button type="button" class="flex col-span-1 justify-center items-center rounded-md cursor-pointer h-8 w-8 hover:bg-skin-card-muted focus:outline-none" wire:click="userReacted('love')"><img src="https://laravel.cm/images/reactions/love.svg" class="w-5 h-5" alt="love emoji"></button>
                                                                    <button type="button" class="flex col-span-1 justify-center items-center rounded-md cursor-pointer h-8 w-8 hover:bg-skin-card-muted focus:outline-none" wire:click="userReacted('money')"><img src="https://laravel.cm/images/reactions/money.svg" class="w-5 h-5" alt="money emoji"></button>
                                                                    <button type="button" class="flex col-span-1 justify-center items-center rounded-md cursor-pointer h-8 w-8 hover:bg-skin-card-muted focus:outline-none" wire:click="userReacted('party')"><img src="https://laravel.cm/images/reactions/party.svg" class="w-5 h-5" alt="party emoji"></button>
                                                                    <button type="button" class="flex col-span-1 justify-center items-center rounded-md cursor-pointer h-8 w-8 hover:bg-skin-card-muted focus:outline-none" wire:click="userReacted('pray')"><img src="https://laravel.cm/images/reactions/pray.svg" class="w-5 h-5" alt="pray"></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p class="inline-flex text-sm space-x-2 text-skin-base">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 01.865-.501 48.172 48.172 0 003.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z"></path>
                                                        </svg>
                                                        <span class="text-skin-inverted-muted">5</span>
                                                        <span class="sr-only">réponses</span>
                                                    </p>
                                                    <p class="inline-flex text-sm space-x-2 text-skin-base">
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z"></path>
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                                        </svg>
                                                        <span class="text-skin-inverted-muted">176</span>
                                                        <span class="sr-only">vues</span>
                                                    </p>
                                                </div>
                                                <div class="flex text-sm">
                                                    <p class="inline-flex items-center space-x-3 text-sm"></p>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="mt-10"></div>
                                </div>
                            </div>

                            {{-- @foreach ($posts as $value)
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
                                <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white hover:underline"><a href="/blog/state-of-flowbite-2022/">{{$value->title}}</a></h2>
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
                            @endforeach --}}
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

</div>
