@extends('master.master')
@section('content')
<div class="z-0 flex-1 w-full py-10 max-w-7xl mx-auto px-4">
    <div wire:id="YMDtquOLcUq3H3VaOerM" class="relative lg:grid lg:grid-cols-12 lg:gap-8">
        <div class="hidden relative lg:block lg:col-span-2">
            <aside class="sticky top-16 divide-y divide-skin-base">
        <div class="pb-6">
                    <span class="inline-flex items-center px-2 py-1 rounded-md text-sm font-medium bg-skin-link text-skin-base font-sans">
                        <svg class="mr-1.5 h-2 w-2 text-skin-base" fill="currentColor" viewBox="0 0 8 8">
                            <circle cx="4" cy="4" r="3"></circle>
                        </svg>
                        Toutes les catégories
                    </span>

                    <div x-data="{ selectedTag: '' }" class="mt-5 space-y-1" aria-labelledby="posts-tags">
                <button wire:click="toggleTag('branding')" type="button" class="group px-2 py-1.5 flex items-center text-base font-medium text-skin-inverted-muted/80 hover:text-skin-inverted rounded-md font-sans">

                                <svg class="mr-1.5 h-2 w-2 brand-branding" fill="currentColor" viewBox="0 0 8 8">
                        <circle cx="4" cy="4" r="3"></circle>
                    </svg>


                <span class="truncate ml-1.5">Branding</span>


            </button>
                <button wire:click="toggleTag('developpement')" type="button" class="group px-2 py-1.5 flex items-center text-base font-medium text-skin-inverted-muted/80 hover:text-skin-inverted rounded-md font-sans">

                                <svg class="mr-1.5 h-2 w-2 brand-developpement" fill="currentColor" viewBox="0 0 8 8">
                        <circle cx="4" cy="4" r="3"></circle>
                    </svg>


                <span class="truncate ml-1.5">Développement</span>


            </button>
                <button wire:click="toggleTag('entrepreneuriat')" type="button" class="group px-2 py-1.5 flex items-center text-base font-medium text-skin-inverted-muted/80 hover:text-skin-inverted rounded-md font-sans">

                                <svg class="mr-1.5 h-2 w-2 brand-entrepreneuriat" fill="currentColor" viewBox="0 0 8 8">
                        <circle cx="4" cy="4" r="3"></circle>
                    </svg>


                <span class="truncate ml-1.5">Entrepreneuriat</span>


            </button>
                <button wire:click="toggleTag('freelance')" type="button" class="group px-2 py-1.5 flex items-center text-base font-medium text-skin-inverted-muted/80 hover:text-skin-inverted rounded-md font-sans">

                                <svg class="mr-1.5 h-2 w-2 brand-freelance" fill="currentColor" viewBox="0 0 8 8">
                        <circle cx="4" cy="4" r="3"></circle>
                    </svg>


                <span class="truncate ml-1.5">Freelance</span>


            </button>
                <button wire:click="toggleTag('open-source')" type="button" class="group px-2 py-1.5 flex items-center text-base font-medium text-skin-inverted-muted/80 hover:text-skin-inverted rounded-md font-sans">

                                <svg class="mr-1.5 h-2 w-2 brand-open-source" fill="currentColor" viewBox="0 0 8 8">
                        <circle cx="4" cy="4" r="3"></circle>
                    </svg>


                <span class="truncate ml-1.5">Open Source</span>


            </button>
                <button wire:click="toggleTag('outils')" type="button" class="group px-2 py-1.5 flex items-center text-base font-medium text-skin-inverted-muted/80 hover:text-skin-inverted rounded-md font-sans">

                                <svg class="mr-1.5 h-2 w-2 brand-outils" fill="currentColor" viewBox="0 0 8 8">
                        <circle cx="4" cy="4" r="3"></circle>
                    </svg>


                <span class="truncate ml-1.5">Outils</span>


            </button>
                <button wire:click="toggleTag('paiement-en-ligne')" type="button" class="group px-2 py-1.5 flex items-center text-base font-medium text-skin-inverted-muted/80 hover:text-skin-inverted rounded-md font-sans">

                                <svg class="mr-1.5 h-2 w-2 brand-paiement-en-ligne" fill="currentColor" viewBox="0 0 8 8">
                        <circle cx="4" cy="4" r="3"></circle>
                    </svg>


                <span class="truncate ml-1.5">Paiement en ligne</span>


            </button>
                <button wire:click="toggleTag('projets')" type="button" class="group px-2 py-1.5 flex items-center text-base font-medium text-skin-inverted-muted/80 hover:text-skin-inverted rounded-md font-sans">

                                <svg class="mr-1.5 h-2 w-2 brand-projets" fill="currentColor" viewBox="0 0 8 8">
                        <circle cx="4" cy="4" r="3"></circle>
                    </svg>


                <span class="truncate ml-1.5">Projets</span>


            </button>
                <button wire:click="toggleTag('salaire')" type="button" class="group px-2 py-1.5 flex items-center text-base font-medium text-skin-inverted-muted/80 hover:text-skin-inverted rounded-md font-sans">

                                <svg class="mr-1.5 h-2 w-2 brand-salaire" fill="currentColor" viewBox="0 0 8 8">
                        <circle cx="4" cy="4" r="3"></circle>
                    </svg>


                <span class="truncate ml-1.5">Salaire</span>


            </button>
        </div>
                </div>
    </aside>
        </div>
        <div x-data="" x-intersect="window.livewire.find('YMDtquOLcUq3H3VaOerM').call('loadMore')" class="relative lg:col-span-7">
            <div class="w-full">
                <nav class="relative z-0 rounded-lg shadow flex divide-x divide-skin-base" aria-label="Tabs">
                    <button type="button" wire:click="sortBy('recent')" aria-current="page" class="w-full text-skin-inverted rounded-l-lg group relative min-w-0 flex-1 overflow-hidden bg-skin-card py-4 px-6 text-sm font-medium text-center hover:bg-skin-card-muted focus:z-10">
                        <span>Récent</span>
                        <span aria-hidden="true" class="bg-skin-primary absolute inset-x-0 bottom-0 h-0.5"></span>
                    </button>

                    <button type="button" wire:click="sortBy('popular')" aria-current="false" class="w-full text-skin-base hover:text-skin-inverted group relative min-w-0 flex-1 overflow-hidden bg-skin-card py-4 px-6 text-sm font-medium text-center hover:bg-skin-card-muted focus:z-10">
                        <span>Populaire</span>
                        <span aria-hidden="true" class="bg-transparent absolute inset-x-0 bottom-0 h-0.5"></span>
                    </button>

                    <button type="button" wire:click="sortBy('active')" aria-current="false" class="w-full text-skin-base hover:text-skin-inverted rounded-r-lg group relative min-w-0 flex-1 overflow-hidden bg-skin-card py-4 px-6 text-sm font-medium text-center hover:bg-skin-card-muted focus:z-10">
                        <span>Actif</span>
                        <span aria-hidden="true" class="bg-transparent absolute inset-x-0 bottom-0 h-0.5"></span>
                    </button>
                </nav>
            </div>
            <div class="relative mt-4 divide-y divide-skin-base z-20">
                                <div class="py-6">
        <div class="lg:flex lg:items-center lg:justify-between">
            <div class="flex-1">
                <h2 class="text-xl font-semibold font-sans text-skin-inverted leading-7">
                    <a href="https://laravel.cm/discussions/symfony-ou-laravel-encore-ce-debat-toujours-ce-debat-et-vous-sil-ne-devait-quen-rester-un-lequel-ca-serait-et-pourquoi" class="hover:text-skin-primary">symfony ou laravel ? encore ce debat toujours ce debat  et vous s'il ne devait qu'en rester un, lequel ça serait et pourquoi ? </a>
                </h2>
            </div>
            <div class="mt-2 lg:mt-0 shrink-0 self-start">
                                <div class="flex flex-wrap gap-2 lg:gap-x-3">
                                                <span class="inline-flex items-center leading-none px-2.5 py-1.5 text-sm font-medium text-skin-inverted rounded-full border border-skin-input">
        <svg class="mr-1.5 h-2 w-2 brand-outils" fill="currentColor" viewBox="0 0 8 8">
            <circle cx="4" cy="4" r="3"></circle>
        </svg>
        Outils
    </span>
                                        </div>
                        </div>
        </div>
        <p class="mt-1 text-sm font-normal text-skin-base leading-5">
            la plupart de mes formateurs et même des collègues de formations parle de symfony comme le saint grall, "symfony on peut faire des gros des petits des moyens projets avec...
        </p>
                <div class="mt-3 sm:flex sm:justify-between">
                <div class="flex items-center text-sm font-sans text-skin-muted">
                    <a class="shrink-0" href="https://laravel.cm/user/dani03">
                        <img class="object-cover rounded-full  h-6 w-6" src="https://laravel.cm/media/40/newDiamond.png" alt="dani03">
                    </a>
                    <span class="ml-2 pr-1">Posté par</span>
                    <div class="flex items-center space-x-1" wire:ignore="">
    <a href="https://laravel.cm/user/dani03" class="text-skin-inverted hover:underline">dani</a>
    <span aria-hidden="true">·</span>
    <time-ago time="1687996687">il y a 4 mois</time-ago></div>
                </div>
                <div class="hidden sm:flex sm:items-center space-x-3">
                                    <p class="inline-flex text-sm space-x-2 text-skin-base">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.76c0 1.6 1.123 2.994 2.707 3.227 1.087.16 2.185.283 3.293.369V21l4.076-4.076a1.526 1.526 0 011.037-.443 48.282 48.282 0 005.68-.494c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z"></path>
                        </svg>
                        <span class="font-normal text-skin-inverted-muted">1</span>
                        <span class="sr-only">réponses</span>
                    </p>
                </div>
            </div>
        </div>
                                <div class="py-6">
        <div class="lg:flex lg:items-center lg:justify-between">
            <div class="flex-1">
                <h2 class="text-xl font-semibold font-sans text-skin-inverted leading-7">
                    <a href="https://laravel.cm/discussions/que-pensez-vous-de-alias-sur-les-modeles-c" class="hover:text-skin-primary">Que pensez-vous de alias sur les modèles c</a>
                </h2>
            </div>
            <div class="mt-2 lg:mt-0 shrink-0 self-start">
                                <div class="flex flex-wrap gap-2 lg:gap-x-3">
                                                <span class="inline-flex items-center leading-none px-2.5 py-1.5 text-sm font-medium text-skin-inverted rounded-full border border-skin-input">
        <svg class="mr-1.5 h-2 w-2 brand-developpement" fill="currentColor" viewBox="0 0 8 8">
            <circle cx="4" cy="4" r="3"></circle>
        </svg>
        Développement
    </span>
                                                <span class="inline-flex items-center leading-none px-2.5 py-1.5 text-sm font-medium text-skin-inverted rounded-full border border-skin-input">
        <svg class="mr-1.5 h-2 w-2 brand-freelance" fill="currentColor" viewBox="0 0 8 8">
            <circle cx="4" cy="4" r="3"></circle>
        </svg>
        Freelance
    </span>
                                                <span class="inline-flex items-center leading-none px-2.5 py-1.5 text-sm font-medium text-skin-inverted rounded-full border border-skin-input">
        <svg class="mr-1.5 h-2 w-2 brand-outils" fill="currentColor" viewBox="0 0 8 8">
            <circle cx="4" cy="4" r="3"></circle>
        </svg>
        Outils
    </span>
                                        </div>
                        </div>
        </div>
        <p class="mt-1 text-sm font-normal text-skin-base leading-5">
            use App\Models\User as Model;

        </p>
                <div class="mt-3 sm:flex sm:justify-between">
                <div class="flex items-center text-sm font-sans text-skin-muted">
                    <a class="shrink-0" href="https://laravel.cm/user/mouns97">
                        <img class="object-cover rounded-full  h-6 w-6" src="https://ui-avatars.com/api/?name=EricLandry+Moutongo&amp;color=065F46&amp;background=D1FAE5" alt="mouns97">
                    </a>
                    <span class="ml-2 pr-1">Posté par</span>
                    <div class="flex items-center space-x-1" wire:ignore="">
    <a href="https://laravel.cm/user/mouns97" class="text-skin-inverted hover:underline">EricLandry Moutongo</a>
    <span aria-hidden="true">·</span>
    <time-ago time="1685112652">il y a 5 mois</time-ago></div>
                </div>
                <div class="hidden sm:flex sm:items-center space-x-3">
                                    <p class="inline-flex text-sm space-x-2 text-skin-base">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.76c0 1.6 1.123 2.994 2.707 3.227 1.087.16 2.185.283 3.293.369V21l4.076-4.076a1.526 1.526 0 011.037-.443 48.282 48.282 0 005.68-.494c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z"></path>
                        </svg>
                        <span class="font-normal text-skin-inverted-muted">1</span>
                        <span class="sr-only">réponses</span>
                    </p>
                </div>
            </div>
        </div>
                                <div class="py-6">
        <div class="lg:flex lg:items-center lg:justify-between">
            <div class="flex-1">
                <h2 class="text-xl font-semibold font-sans text-skin-inverted leading-7">
                    <a href="https://laravel.cm/discussions/projet-ivoirien-en-laravel" class="hover:text-skin-primary">PROJET IVOIRIEN EN LARAVEL</a>
                </h2>
            </div>
            <div class="mt-2 lg:mt-0 shrink-0 self-start">
                                <div class="flex flex-wrap gap-2 lg:gap-x-3">
                                                <span class="inline-flex items-center leading-none px-2.5 py-1.5 text-sm font-medium text-skin-inverted rounded-full border border-skin-input">
        <svg class="mr-1.5 h-2 w-2 brand-projets" fill="currentColor" viewBox="0 0 8 8">
            <circle cx="4" cy="4" r="3"></circle>
        </svg>
        Projets
    </span>
                                                <span class="inline-flex items-center leading-none px-2.5 py-1.5 text-sm font-medium text-skin-inverted rounded-full border border-skin-input">
        <svg class="mr-1.5 h-2 w-2 brand-developpement" fill="currentColor" viewBox="0 0 8 8">
            <circle cx="4" cy="4" r="3"></circle>
        </svg>
        Développement
    </span>
                                                <span class="inline-flex items-center leading-none px-2.5 py-1.5 text-sm font-medium text-skin-inverted rounded-full border border-skin-input">
        <svg class="mr-1.5 h-2 w-2 brand-branding" fill="currentColor" viewBox="0 0 8 8">
            <circle cx="4" cy="4" r="3"></circle>
        </svg>
        Branding
    </span>
                                        </div>
                        </div>
        </div>
        <p class="mt-1 text-sm font-normal text-skin-base leading-5">
            Je suis actuellement en train de travailler sur un projet pour l’Afrique, mais je réalise que je ne pourrais pas y arriver seul. C’est pourquoi j’ai besoin de membres pour m’a...
        </p>
                <div class="mt-3 sm:flex sm:justify-between">
                <div class="flex items-center text-sm font-sans text-skin-muted">
                    <a class="shrink-0" href="https://laravel.cm/user/bt_numerique225">
                        <img class="object-cover rounded-full  h-6 w-6" src="https://ui-avatars.com/api/?name=Toure&amp;color=065F46&amp;background=D1FAE5" alt="bt_numerique225">
                    </a>
                    <span class="ml-2 pr-1">Posté par</span>
                    <div class="flex items-center space-x-1" wire:ignore="">
    <a href="https://laravel.cm/user/bt_numerique225" class="text-skin-inverted hover:underline">Toure</a>
    <span aria-hidden="true">·</span>
    <time-ago time="1679906326">il y a 7 mois</time-ago></div>
                </div>
                <div class="hidden sm:flex sm:items-center space-x-3">
                                        <div class="flex items-center justify-center space-x-2">
                                                        <img class="w-4 h-4" src="https://laravel.cm/images/reactions/party.svg" alt="party emoji">
                                                        <img class="w-4 h-4" src="https://laravel.cm/images/reactions/handshake.svg" alt="handshake emoji">
                                                    <span class="ml-3 text-sm font-medium text-green-500">2</span>
                        </div>
                                    <p class="inline-flex text-sm space-x-2 text-skin-base">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.76c0 1.6 1.123 2.994 2.707 3.227 1.087.16 2.185.283 3.293.369V21l4.076-4.076a1.526 1.526 0 011.037-.443 48.282 48.282 0 005.68-.494c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z"></path>
                        </svg>
                        <span class="font-normal text-skin-inverted-muted">1</span>
                        <span class="sr-only">réponses</span>
                    </p>
                </div>
            </div>
        </div>
                                <div class="py-6">
        <div class="lg:flex lg:items-center lg:justify-between">
            <div class="flex-1">
                <h2 class="text-xl font-semibold font-sans text-skin-inverted leading-7">
                    <a href="https://laravel.cm/discussions/cree-une-communaute-en-rdc" class="hover:text-skin-primary">Cree une communauté en RDC</a>
                </h2>
            </div>
            <div class="mt-2 lg:mt-0 shrink-0 self-start">
                                <div class="flex flex-wrap gap-2 lg:gap-x-3">
                                                <span class="inline-flex items-center leading-none px-2.5 py-1.5 text-sm font-medium text-skin-inverted rounded-full border border-skin-input">
        <svg class="mr-1.5 h-2 w-2 brand-entrepreneuriat" fill="currentColor" viewBox="0 0 8 8">
            <circle cx="4" cy="4" r="3"></circle>
        </svg>
        Entrepreneuriat
    </span>
                                                <span class="inline-flex items-center leading-none px-2.5 py-1.5 text-sm font-medium text-skin-inverted rounded-full border border-skin-input">
        <svg class="mr-1.5 h-2 w-2 brand-outils" fill="currentColor" viewBox="0 0 8 8">
            <circle cx="4" cy="4" r="3"></circle>
        </svg>
        Outils
    </span>
                                                <span class="inline-flex items-center leading-none px-2.5 py-1.5 text-sm font-medium text-skin-inverted rounded-full border border-skin-input">
        <svg class="mr-1.5 h-2 w-2 brand-branding" fill="currentColor" viewBox="0 0 8 8">
            <circle cx="4" cy="4" r="3"></circle>
        </svg>
        Branding
    </span>
                                        </div>
                        </div>
        </div>
        <p class="mt-1 text-sm font-normal text-skin-base leading-5">
            Bonjour Je suis Tresor kasenda je vous écrit a partir de la ville de Lubumbashi, et J'ai 6 ans dans le domaine  du développement logiciel et je suis développeur Laravel depuis...
        </p>
                <div class="mt-3 sm:flex sm:justify-between">
                <div class="flex items-center text-sm font-sans text-skin-muted">
                    <a class="shrink-0" href="https://laravel.cm/user/tresor-kasenda">
                        <img class="object-cover rounded-full  h-6 w-6" src="https://avatars.githubusercontent.com/u/34010260?v=4" alt="tresor-kasenda">
                    </a>
                    <span class="ml-2 pr-1">Posté par</span>
                    <div class="flex items-center space-x-1" wire:ignore="">
    <a href="https://laravel.cm/user/tresor-kasenda" class="text-skin-inverted hover:underline">Tresor-Kasenda</a>
    <span aria-hidden="true">·</span>
    <time-ago time="1678193095">il y a 7 mois</time-ago></div>
                </div>
                <div class="hidden sm:flex sm:items-center space-x-3">
                                        <div class="flex items-center justify-center space-x-2">
                                                        <img class="w-4 h-4" src="https://laravel.cm/images/reactions/fire.svg" alt="fire emoji">
                                                    <span class="ml-3 text-sm font-medium text-green-500">1</span>
                        </div>
                                    <p class="inline-flex text-sm space-x-2 text-skin-base">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.76c0 1.6 1.123 2.994 2.707 3.227 1.087.16 2.185.283 3.293.369V21l4.076-4.076a1.526 1.526 0 011.037-.443 48.282 48.282 0 005.68-.494c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z"></path>
                        </svg>
                        <span class="font-normal text-skin-inverted-muted">1</span>
                        <span class="sr-only">réponses</span>
                    </p>
                </div>
            </div>
        </div>
                                <div class="py-6">
        <div class="lg:flex lg:items-center lg:justify-between">
            <div class="flex-1">
                <h2 class="text-xl font-semibold font-sans text-skin-inverted leading-7">
                    <a href="https://laravel.cm/discussions/personne-ne-peux-predire-le-futur" class="hover:text-skin-primary">Personne ne peux prédire le futur</a>
                </h2>
            </div>
            <div class="mt-2 lg:mt-0 shrink-0 self-start">
                                <div class="flex flex-wrap gap-2 lg:gap-x-3">
                                                <span class="inline-flex items-center leading-none px-2.5 py-1.5 text-sm font-medium text-skin-inverted rounded-full border border-skin-input">
        <svg class="mr-1.5 h-2 w-2 brand-entrepreneuriat" fill="currentColor" viewBox="0 0 8 8">
            <circle cx="4" cy="4" r="3"></circle>
        </svg>
        Entrepreneuriat
    </span>
                                                <span class="inline-flex items-center leading-none px-2.5 py-1.5 text-sm font-medium text-skin-inverted rounded-full border border-skin-input">
        <svg class="mr-1.5 h-2 w-2 brand-freelance" fill="currentColor" viewBox="0 0 8 8">
            <circle cx="4" cy="4" r="3"></circle>
        </svg>
        Freelance
    </span>
                                                <span class="inline-flex items-center leading-none px-2.5 py-1.5 text-sm font-medium text-skin-inverted rounded-full border border-skin-input">
        <svg class="mr-1.5 h-2 w-2 brand-outils" fill="currentColor" viewBox="0 0 8 8">
            <circle cx="4" cy="4" r="3"></circle>
        </svg>
        Outils
    </span>
                                        </div>
                        </div>
        </div>
        <p class="mt-1 text-sm font-normal text-skin-base leading-5">
            Dans la tech on a tendance à vouloir anticiper le futur.
    ❌ On essaie de tenir une charge énorme qui n'arrivera peut-être jamais.
    ❌ On prépare le terrain pour des usecases, e...
        </p>
                <div class="mt-3 sm:flex sm:justify-between">
                <div class="flex items-center text-sm font-sans text-skin-muted">
                    <a class="shrink-0" href="https://laravel.cm/user/stevymarlino">
                        <img class="object-cover rounded-full  h-6 w-6" src="https://avatars.githubusercontent.com/u/25743606?v=4" alt="stevymarlino">
                    </a>
                    <span class="ml-2 pr-1">Posté par</span>
                    <div class="flex items-center space-x-1" wire:ignore="">
    <a href="https://laravel.cm/user/stevymarlino" class="text-skin-inverted hover:underline">Stevy Endaman</a>
    <span aria-hidden="true">·</span>
    <time-ago time="1667289296">il y a 12 mois</time-ago></div>
                </div>
                <div class="hidden sm:flex sm:items-center space-x-3">
                                    <p class="inline-flex text-sm space-x-2 text-skin-base">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.76c0 1.6 1.123 2.994 2.707 3.227 1.087.16 2.185.283 3.293.369V21l4.076-4.076a1.526 1.526 0 011.037-.443 48.282 48.282 0 005.68-.494c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z"></path>
                        </svg>
                        <span class="font-normal text-skin-inverted-muted">1</span>
                        <span class="sr-only">réponses</span>
                    </p>
                </div>
            </div>
        </div>
                                <div class="py-6">
        <div class="lg:flex lg:items-center lg:justify-between">
            <div class="flex-1">
                <h2 class="text-xl font-semibold font-sans text-skin-inverted leading-7">
                    <a href="https://laravel.cm/discussions/certification-laravel" class="hover:text-skin-primary">Certification Laravel</a>
                </h2>
            </div>
            <div class="mt-2 lg:mt-0 shrink-0 self-start">
                                <div class="flex flex-wrap gap-2 lg:gap-x-3">
                                                <span class="inline-flex items-center leading-none px-2.5 py-1.5 text-sm font-medium text-skin-inverted rounded-full border border-skin-input">
        <svg class="mr-1.5 h-2 w-2 brand-developpement" fill="currentColor" viewBox="0 0 8 8">
            <circle cx="4" cy="4" r="3"></circle>
        </svg>
        Développement
    </span>
                                        </div>
                        </div>
        </div>
        <p class="mt-1 text-sm font-normal text-skin-base leading-5">
            Bonjour les devs. J'ai decouvert l'existance il y'a peu de la Certification Laravel et j'aimerais avoir des avis sur cette certification (importance, prix, plu-value ...). Mer...
        </p>
                <div class="mt-3 sm:flex sm:justify-between">
                <div class="flex items-center text-sm font-sans text-skin-muted">
                    <a class="shrink-0" href="https://laravel.cm/user/maestrombody">
                        <img class="object-cover rounded-full  h-6 w-6" src="https://laravel.cm/media/73/maestro.jpg" alt="maestrombody">
                    </a>
                    <span class="ml-2 pr-1">Posté par</span>
                    <div class="flex items-center space-x-1" wire:ignore="">
    <a href="https://laravel.cm/user/maestrombody" class="text-skin-inverted hover:underline">Maestro Mbody</a>
    <span aria-hidden="true">·</span>
    <time-ago time="1659427217">il y a environ un an</time-ago></div>
                </div>
                <div class="hidden sm:flex sm:items-center space-x-3">
                                        <div class="flex items-center justify-center space-x-2">
                                                        <img class="w-4 h-4" src="https://laravel.cm/images/reactions/fire.svg" alt="fire emoji">
                                                    <span class="ml-3 text-sm font-medium text-green-500">1</span>
                        </div>
                                    <p class="inline-flex text-sm space-x-2 text-skin-base">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.76c0 1.6 1.123 2.994 2.707 3.227 1.087.16 2.185.283 3.293.369V21l4.076-4.076a1.526 1.526 0 011.037-.443 48.282 48.282 0 005.68-.494c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z"></path>
                        </svg>
                        <span class="font-normal text-skin-inverted-muted">5</span>
                        <span class="sr-only">réponses</span>
                    </p>
                </div>
            </div>
        </div>
                                <div class="py-6">
        <div class="lg:flex lg:items-center lg:justify-between">
            <div class="flex-1">
                <h2 class="text-xl font-semibold font-sans text-skin-inverted leading-7">
                    <a href="https://laravel.cm/discussions/laravel-cameroun-feedback" class="hover:text-skin-primary">Laravel Cameroun Feedback 🔖</a>
                </h2>
            </div>
            <div class="mt-2 lg:mt-0 shrink-0 self-start">
                                <div class="flex flex-wrap gap-2 lg:gap-x-3">
                                                <span class="inline-flex items-center leading-none px-2.5 py-1.5 text-sm font-medium text-skin-inverted rounded-full border border-skin-input">
        <svg class="mr-1.5 h-2 w-2 brand-projets" fill="currentColor" viewBox="0 0 8 8">
            <circle cx="4" cy="4" r="3"></circle>
        </svg>
        Projets
    </span>
                                        </div>
                        </div>
        </div>
        <p class="mt-1 text-sm font-normal text-skin-base leading-5">
            Alors comme vous l'avez remarqué le site de Laravel Cameroun est en constate évolution, et avoir des retours sur les fonctionnalités et les ajouts à faire serait vraiment idéa...
        </p>
                <div class="mt-3 sm:flex sm:justify-between">
                <div class="flex items-center text-sm font-sans text-skin-muted">
                    <a class="shrink-0" href="https://laravel.cm/user/mckenziearts">
                        <img class="object-cover rounded-full  h-6 w-6" src="https://laravel.cm/media/2/logo-me.jpg" alt="mckenziearts">
                    </a>
                    <span class="ml-2 pr-1">Posté par</span>
                    <div class="flex items-center space-x-1" wire:ignore="">
    <a href="https://laravel.cm/user/mckenziearts" class="text-skin-inverted hover:underline">Arthur Monney</a>
    <span aria-hidden="true">·</span>
    <time-ago time="1659329238">il y a environ un an</time-ago></div>
                </div>
                <div class="hidden sm:flex sm:items-center space-x-3">
                                        <div class="flex items-center justify-center space-x-2">
                                                        <img class="w-4 h-4" src="https://laravel.cm/images/reactions/party.svg" alt="party emoji">
                                                        <img class="w-4 h-4" src="https://laravel.cm/images/reactions/fire.svg" alt="fire emoji">
                                                    <span class="ml-3 text-sm font-medium text-green-500">3</span>
                        </div>
                                    <p class="inline-flex text-sm space-x-2 text-skin-base">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.76c0 1.6 1.123 2.994 2.707 3.227 1.087.16 2.185.283 3.293.369V21l4.076-4.076a1.526 1.526 0 011.037-.443 48.282 48.282 0 005.68-.494c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z"></path>
                        </svg>
                        <span class="font-normal text-skin-inverted-muted">3</span>
                        <span class="sr-only">réponses</span>
                    </p>
                </div>
            </div>
        </div>
                                <div class="py-6">
        <div class="lg:flex lg:items-center lg:justify-between">
            <div class="flex-1">
                <h2 class="text-xl font-semibold font-sans text-skin-inverted leading-7">
                    <a href="https://laravel.cm/discussions/presentation" class="hover:text-skin-primary">Présentation</a>
                </h2>
            </div>
            <div class="mt-2 lg:mt-0 shrink-0 self-start">
                                <div class="flex flex-wrap gap-2 lg:gap-x-3">
                                                <span class="inline-flex items-center leading-none px-2.5 py-1.5 text-sm font-medium text-skin-inverted rounded-full border border-skin-input">
        <svg class="mr-1.5 h-2 w-2 brand-developpement" fill="currentColor" viewBox="0 0 8 8">
            <circle cx="4" cy="4" r="3"></circle>
        </svg>
        Développement
    </span>
                                                <span class="inline-flex items-center leading-none px-2.5 py-1.5 text-sm font-medium text-skin-inverted rounded-full border border-skin-input">
        <svg class="mr-1.5 h-2 w-2 brand-projets" fill="currentColor" viewBox="0 0 8 8">
            <circle cx="4" cy="4" r="3"></circle>
        </svg>
        Projets
    </span>
                                                <span class="inline-flex items-center leading-none px-2.5 py-1.5 text-sm font-medium text-skin-inverted rounded-full border border-skin-input">
        <svg class="mr-1.5 h-2 w-2 brand-freelance" fill="currentColor" viewBox="0 0 8 8">
            <circle cx="4" cy="4" r="3"></circle>
        </svg>
        Freelance
    </span>
                                        </div>
                        </div>
        </div>
        <p class="mt-1 text-sm font-normal text-skin-base leading-5">
            #Bonjour à toute la communauté Laravel Cameroun.
    C'est un plaisir pour moi de me retrouver parmi vous. Félicitations à M Arthur, pour cette initiative et merci.
    Je m'appelle N...
        </p>
                <div class="mt-3 sm:flex sm:justify-between">
                <div class="flex items-center text-sm font-sans text-skin-muted">
                    <a class="shrink-0" href="https://laravel.cm/user/gallus6779">
                        <img class="object-cover rounded-full  h-6 w-6" src="https://ui-avatars.com/api/?name=NOAH+Gallus&amp;color=065F46&amp;background=D1FAE5" alt="gallus6779">
                    </a>
                    <span class="ml-2 pr-1">Posté par</span>
                    <div class="flex items-center space-x-1" wire:ignore="">
    <a href="https://laravel.cm/user/gallus6779" class="text-skin-inverted hover:underline">NOAH Gallus</a>
    <span aria-hidden="true">·</span>
    <time-ago time="1659098563">il y a environ un an</time-ago></div>
                </div>
                <div class="hidden sm:flex sm:items-center space-x-3">
                                    <p class="inline-flex text-sm space-x-2 text-skin-base">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.76c0 1.6 1.123 2.994 2.707 3.227 1.087.16 2.185.283 3.293.369V21l4.076-4.076a1.526 1.526 0 011.037-.443 48.282 48.282 0 005.68-.494c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z"></path>
                        </svg>
                        <span class="font-normal text-skin-inverted-muted">2</span>
                        <span class="sr-only">réponses</span>
                    </p>
                </div>
            </div>
        </div>
                                <div class="py-6">
        <div class="lg:flex lg:items-center lg:justify-between">
            <div class="flex-1">
                <h2 class="text-xl font-semibold font-sans text-skin-inverted leading-7">
                    <a href="https://laravel.cm/discussions/laravel-vuejs-3-socialite" class="hover:text-skin-primary">Laravel Vuejs 3 Socialite</a>
                </h2>
            </div>
            <div class="mt-2 lg:mt-0 shrink-0 self-start">
                                <div class="flex flex-wrap gap-2 lg:gap-x-3">
                                                <span class="inline-flex items-center leading-none px-2.5 py-1.5 text-sm font-medium text-skin-inverted rounded-full border border-skin-input">
        <svg class="mr-1.5 h-2 w-2 brand-developpement" fill="currentColor" viewBox="0 0 8 8">
            <circle cx="4" cy="4" r="3"></circle>
        </svg>
        Développement
    </span>
                                        </div>
                        </div>
        </div>
        <p class="mt-1 text-sm font-normal text-skin-base leading-5">
            Bonjour. Je suis étudiant. Et j'essaie de m'exercer en créant un site web avec laravel et vue js 3.
    Maintenant j'essaie d'ajouter Socialite, Pour qu'un utilisateur puisse se c...
        </p>
                <div class="mt-3 sm:flex sm:justify-between">
                <div class="flex items-center text-sm font-sans text-skin-muted">
                    <a class="shrink-0" href="https://laravel.cm/user/Okanaboy">
                        <img class="object-cover rounded-full  h-6 w-6" src="https://avatars.githubusercontent.com/u/90990723?v=4" alt="Okanaboy">
                    </a>
                    <span class="ml-2 pr-1">Posté par</span>
                    <div class="flex items-center space-x-1" wire:ignore="">
    <a href="https://laravel.cm/user/Okanaboy" class="text-skin-inverted hover:underline">Chrislain AVOCEGAN</a>
    <span aria-hidden="true">·</span>
    <time-ago time="1656425752">il y a environ un an</time-ago></div>
                </div>
                <div class="hidden sm:flex sm:items-center space-x-3">
                                    <p class="inline-flex text-sm space-x-2 text-skin-base">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.76c0 1.6 1.123 2.994 2.707 3.227 1.087.16 2.185.283 3.293.369V21l4.076-4.076a1.526 1.526 0 011.037-.443 48.282 48.282 0 005.68-.494c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z"></path>
                        </svg>
                        <span class="font-normal text-skin-inverted-muted">6</span>
                        <span class="sr-only">réponses</span>
                    </p>
                </div>
            </div>
        </div>
                                <div class="py-6">
        <div class="lg:flex lg:items-center lg:justify-between">
            <div class="flex-1">
                <h2 class="text-xl font-semibold font-sans text-skin-inverted leading-7">
                    <a href="https://laravel.cm/discussions/liste-de-tutoriels" class="hover:text-skin-primary">Liste de tutoriels</a>
                </h2>
            </div>
            <div class="mt-2 lg:mt-0 shrink-0 self-start">
                                <div class="flex flex-wrap gap-2 lg:gap-x-3">
                                                <span class="inline-flex items-center leading-none px-2.5 py-1.5 text-sm font-medium text-skin-inverted rounded-full border border-skin-input">
        <svg class="mr-1.5 h-2 w-2 brand-developpement" fill="currentColor" viewBox="0 0 8 8">
            <circle cx="4" cy="4" r="3"></circle>
        </svg>
        Développement
    </span>
                                                <span class="inline-flex items-center leading-none px-2.5 py-1.5 text-sm font-medium text-skin-inverted rounded-full border border-skin-input">
        <svg class="mr-1.5 h-2 w-2 brand-projets" fill="currentColor" viewBox="0 0 8 8">
            <circle cx="4" cy="4" r="3"></circle>
        </svg>
        Projets
    </span>
                                        </div>
                        </div>
        </div>
        <p class="mt-1 text-sm font-normal text-skin-base leading-5">
            Bonjour les devs. Je suis entrain de préparer une petite série de tutoriels vidéos (et potentiellement des articles) plus sur du contenu Laravel, React, Tailwind et Livewire (...
        </p>
                <div class="mt-3 sm:flex sm:justify-between">
                <div class="flex items-center text-sm font-sans text-skin-muted">
                    <a class="shrink-0" href="https://laravel.cm/user/mckenziearts">
                        <img class="object-cover rounded-full  h-6 w-6" src="https://laravel.cm/media/2/logo-me.jpg" alt="mckenziearts">
                    </a>
                    <span class="ml-2 pr-1">Posté par</span>
                    <div class="flex items-center space-x-1" wire:ignore="">
    <a href="https://laravel.cm/user/mckenziearts" class="text-skin-inverted hover:underline">Arthur Monney</a>
    <span aria-hidden="true">·</span>
    <time-ago time="1656306292">il y a environ un an</time-ago></div>
                </div>
                <div class="hidden sm:flex sm:items-center space-x-3">
                                    <p class="inline-flex text-sm space-x-2 text-skin-base">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.76c0 1.6 1.123 2.994 2.707 3.227 1.087.16 2.185.283 3.293.369V21l4.076-4.076a1.526 1.526 0 011.037-.443 48.282 48.282 0 005.68-.494c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z"></path>
                        </svg>
                        <span class="font-normal text-skin-inverted-muted">2</span>
                        <span class="sr-only">réponses</span>
                    </p>
                </div>
            </div>
        </div>
                                <div class="py-6">
        <div class="lg:flex lg:items-center lg:justify-between">
            <div class="flex-1">
                <h2 class="text-xl font-semibold font-sans text-skin-inverted leading-7">
                    <a href="https://laravel.cm/discussions/il-ya-quelquun-dans-la-maison-ci" class="hover:text-skin-primary">Il ya quelqu'un dans la maison çi ?</a>
                </h2>
            </div>
            <div class="mt-2 lg:mt-0 shrink-0 self-start">
                        </div>
        </div>
        <p class="mt-1 text-sm font-normal text-skin-base leading-5">
            Bonjour à tous, ça fait plaisir de voir qu'il existe une communauté de dev Laravel. Quand j'ai vu le lien, j'ai arreté mon taf direct pour intégrer.
    J'imagine que la plateform...
        </p>
                <div class="mt-3 sm:flex sm:justify-between">
                <div class="flex items-center text-sm font-sans text-skin-muted">
                    <a class="shrink-0" href="https://laravel.cm/user/jmatike">
                        <img class="object-cover rounded-full  h-6 w-6" src="https://avatars.githubusercontent.com/u/12828986?v=4" alt="jmatike">
                    </a>
                    <span class="ml-2 pr-1">Posté par</span>
                    <div class="flex items-center space-x-1" wire:ignore="">
                        <a href="https://laravel.cm/user/jmatike" class="text-skin-inverted hover:underline">JMatike</a>
                        <span aria-hidden="true">·</span>
                        <time-ago time="1654624405">il y a environ un an</time-ago></div>
                </div>
                <div class="hidden sm:flex sm:items-center space-x-3">
                                    <p class="inline-flex text-sm space-x-2 text-skin-base">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.76c0 1.6 1.123 2.994 2.707 3.227 1.087.16 2.185.283 3.293.369V21l4.076-4.076a1.526 1.526 0 011.037-.443 48.282 48.282 0 005.68-.494c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z"></path>
                        </svg>
                        <span class="font-normal text-skin-inverted-muted">6</span>
                        <span class="sr-only">réponses</span>
                    </p>
                </div>
            </div>
        </div>
                                <div class="py-6">
        <div class="lg:flex lg:items-center lg:justify-between">
            <div class="flex-1">
                <h2 class="text-xl font-semibold font-sans text-skin-inverted leading-7">
                    <a href="https://laravel.cm/discussions/avez-vous-une-liste-dentreprise-dans-le-mobile-money-au-cameroun" class="hover:text-skin-primary">Avez-vous une liste d'entreprise dans le Mobile Money au Cameroun ?</a>
                </h2>
            </div>
            <div class="mt-2 lg:mt-0 shrink-0 self-start">
                                <div class="flex flex-wrap gap-2 lg:gap-x-3">
                                                <span class="inline-flex items-center leading-none px-2.5 py-1.5 text-sm font-medium text-skin-inverted rounded-full border border-skin-input">
        <svg class="mr-1.5 h-2 w-2 brand-entrepreneuriat" fill="currentColor" viewBox="0 0 8 8">
            <circle cx="4" cy="4" r="3"></circle>
        </svg>
        Entrepreneuriat
    </span>
                                                <span class="inline-flex items-center leading-none px-2.5 py-1.5 text-sm font-medium text-skin-inverted rounded-full border border-skin-input">
        <svg class="mr-1.5 h-2 w-2 brand-paiement-en-ligne" fill="currentColor" viewBox="0 0 8 8">
            <circle cx="4" cy="4" r="3"></circle>
        </svg>
        Paiement en ligne
    </span>
                                        </div>
                        </div>
        </div>
        <p class="mt-1 text-sm font-normal text-skin-base leading-5">
            Bonjour à tous, je suis entrain de travailler sur mon projet Laravel Shopper et je voudrais intégrer une solution de paiement Mobile Money par défaut pour les utilisateurs qui...
        </p>
                <div class="mt-3 sm:flex sm:justify-between">
                <div class="flex items-center text-sm font-sans text-skin-muted">
                    <a class="shrink-0" href="https://laravel.cm/user/mckenziearts">
                        <img class="object-cover rounded-full  h-6 w-6" src="https://laravel.cm/media/2/logo-me.jpg" alt="mckenziearts">
                    </a>
                    <span class="ml-2 pr-1">Posté par</span>
                    <div class="flex items-center space-x-1" wire:ignore="">
                        <a href="https://laravel.cm/user/mckenziearts" class="text-skin-inverted hover:underline">Arthur Monney</a>
                        <span aria-hidden="true">·</span>
                        <time-ago time="1642434375">il y a 2 ans</time-ago></div>
                </div>
                <div class="hidden sm:flex sm:items-center space-x-3">
                                        <div class="flex items-center justify-center space-x-2">
                                                        <img class="w-4 h-4" src="https://laravel.cm/images/reactions/money.svg" alt="money emoji">
                                                    <span class="ml-3 text-sm font-medium text-green-500">1</span>
                        </div>
                                    <p class="inline-flex text-sm space-x-2 text-skin-base">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.76c0 1.6 1.123 2.994 2.707 3.227 1.087.16 2.185.283 3.293.369V21l4.076-4.076a1.526 1.526 0 011.037-.443 48.282 48.282 0 005.68-.494c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z"></path>
                        </svg>
                        <span class="font-normal text-skin-inverted-muted">9</span>
                        <span class="sr-only">réponses</span>
                    </p>
                </div>
            </div>
        </div>
                                <div class="py-6">
        <div class="lg:flex lg:items-center lg:justify-between">
            <div class="flex-1">
                <h2 class="text-xl font-semibold font-sans text-skin-inverted leading-7">
                    <a href="https://laravel.cm/discussions/les-devs-ca-ne-code-pas-toute-la-journee" class="hover:text-skin-primary">Les devs ça ne code pas toute la journée!</a>
                </h2>
            </div>
            <div class="mt-2 lg:mt-0 shrink-0 self-start">
                                <div class="flex flex-wrap gap-2 lg:gap-x-3">
                                                <span class="inline-flex items-center leading-none px-2.5 py-1.5 text-sm font-medium text-skin-inverted rounded-full border border-skin-input">
        <svg class="mr-1.5 h-2 w-2 brand-developpement" fill="currentColor" viewBox="0 0 8 8">
            <circle cx="4" cy="4" r="3"></circle>
        </svg>
        Développement
    </span>
                                                <span class="inline-flex items-center leading-none px-2.5 py-1.5 text-sm font-medium text-skin-inverted rounded-full border border-skin-input">
        <svg class="mr-1.5 h-2 w-2 brand-outils" fill="currentColor" viewBox="0 0 8 8">
            <circle cx="4" cy="4" r="3"></circle>
        </svg>
        Outils
    </span>
                                                <span class="inline-flex items-center leading-none px-2.5 py-1.5 text-sm font-medium text-skin-inverted rounded-full border border-skin-input">
        <svg class="mr-1.5 h-2 w-2 brand-projets" fill="currentColor" viewBox="0 0 8 8">
            <circle cx="4" cy="4" r="3"></circle>
        </svg>
        Projets
    </span>
                                        </div>
                        </div>
        </div>
        <p class="mt-1 text-sm font-normal text-skin-base leading-5">
            En fait, on lit 10 fois plus de code qu'on en écrit et c'est ça notre activité principale. 📖
    C'est donc notre devoir de dev de faire en sorte que notre code soit compréhensib...
        </p>
                <div class="mt-3 sm:flex sm:justify-between">
                <div class="flex items-center text-sm font-sans text-skin-muted">
                    <a class="shrink-0" href="https://laravel.cm/user/stevymarlino">
                        <img class="object-cover rounded-full  h-6 w-6" src="https://avatars.githubusercontent.com/u/25743606?v=4" alt="stevymarlino">
                    </a>
                    <span class="ml-2 pr-1">Posté par</span>
                    <div class="flex items-center space-x-1" wire:ignore="">
                        <a href="https://laravel.cm/user/stevymarlino" class="text-skin-inverted hover:underline">Stevy Endaman</a>
                        <span aria-hidden="true">·</span>
                        <time-ago time="1642433264">il y a 2 ans</time-ago></div>
                </div>
                <div class="hidden sm:flex sm:items-center space-x-3">
                                        <div class="flex items-center justify-center space-x-2">
                                                        <img class="w-4 h-4" src="https://laravel.cm/images/reactions/clap.svg" alt="clap emoji">
                                                        <img class="w-4 h-4" src="https://laravel.cm/images/reactions/money.svg" alt="money emoji">
                                                        <img class="w-4 h-4" src="https://laravel.cm/images/reactions/handshake.svg" alt="handshake emoji">
                                                    <span class="ml-3 text-sm font-medium text-green-500">7</span>
                        </div>
                                    <p class="inline-flex text-sm space-x-2 text-skin-base">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.76c0 1.6 1.123 2.994 2.707 3.227 1.087.16 2.185.283 3.293.369V21l4.076-4.076a1.526 1.526 0 011.037-.443 48.282 48.282 0 005.68-.494c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z"></path>
                        </svg>
                        <span class="font-normal text-skin-inverted-muted">1</span>
                        <span class="sr-only">réponses</span>
                    </p>
                </div>
            </div>
        </div>
                                <div class="py-6">
        <div class="lg:flex lg:items-center lg:justify-between">
            <div class="flex-1">
                <h2 class="text-xl font-semibold font-sans text-skin-inverted leading-7">
                    <a href="https://laravel.cm/discussions/le-syndrome-de-la-bonne-pratique" class="hover:text-skin-primary">Le Syndrome de la bonne pratique</a>
                </h2>
            </div>
            <div class="mt-2 lg:mt-0 shrink-0 self-start">
                                <div class="flex flex-wrap gap-2 lg:gap-x-3">
                                                <span class="inline-flex items-center leading-none px-2.5 py-1.5 text-sm font-medium text-skin-inverted rounded-full border border-skin-input">
        <svg class="mr-1.5 h-2 w-2 brand-projets" fill="currentColor" viewBox="0 0 8 8">
            <circle cx="4" cy="4" r="3"></circle>
        </svg>
        Projets
    </span>
                                                <span class="inline-flex items-center leading-none px-2.5 py-1.5 text-sm font-medium text-skin-inverted rounded-full border border-skin-input">
        <svg class="mr-1.5 h-2 w-2 brand-developpement" fill="currentColor" viewBox="0 0 8 8">
            <circle cx="4" cy="4" r="3"></circle>
        </svg>
        Développement
    </span>
                                                <span class="inline-flex items-center leading-none px-2.5 py-1.5 text-sm font-medium text-skin-inverted rounded-full border border-skin-input">
        <svg class="mr-1.5 h-2 w-2 brand-outils" fill="currentColor" viewBox="0 0 8 8">
            <circle cx="4" cy="4" r="3"></circle>
        </svg>
        Outils
    </span>
                                        </div>
                        </div>
        </div>
        <p class="mt-1 text-sm font-normal text-skin-base leading-5">

    « C'est une bonne pratique. »
    Dans la tech c'est l'argument d'autorité suprême... C'est une bonne pratique, point. Fin du débat, retourne coder... 👿
    Il ne faut pas s'arrêter...
        </p>
                <div class="mt-3 sm:flex sm:justify-between">
                <div class="flex items-center text-sm font-sans text-skin-muted">
                    <a class="shrink-0" href="https://laravel.cm/user/stevymarlino">
                        <img class="object-cover rounded-full  h-6 w-6" src="https://avatars.githubusercontent.com/u/25743606?v=4" alt="stevymarlino">
                    </a>
                    <span class="ml-2 pr-1">Posté par</span>
                    <div class="flex items-center space-x-1" wire:ignore="">
                        <a href="https://laravel.cm/user/stevymarlino" class="text-skin-inverted hover:underline">Stevy Endaman</a>
                        <span aria-hidden="true">·</span>
                        <time-ago time="1639997169">il y a 2 ans</time-ago></div>
                </div>
                <div class="hidden sm:flex sm:items-center space-x-3">
                                        <div class="flex items-center justify-center space-x-2">
                                                        <img class="w-4 h-4" src="https://laravel.cm/images/reactions/fire.svg" alt="fire emoji">
                                                        <img class="w-4 h-4" src="https://laravel.cm/images/reactions/handshake.svg" alt="handshake emoji">
                                                        <img class="w-4 h-4" src="https://laravel.cm/images/reactions/clap.svg" alt="clap emoji">
                                                    <span class="ml-3 text-sm font-medium text-green-500">3</span>
                        </div>
                                    <p class="inline-flex text-sm space-x-2 text-skin-base">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.76c0 1.6 1.123 2.994 2.707 3.227 1.087.16 2.185.283 3.293.369V21l4.076-4.076a1.526 1.526 0 011.037-.443 48.282 48.282 0 005.68-.494c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z"></path>
                        </svg>
                        <span class="font-normal text-skin-inverted-muted">0</span>
                        <span class="sr-only">réponses</span>
                    </p>
                </div>
            </div>
        </div>
                                <div class="py-6">
        <div class="lg:flex lg:items-center lg:justify-between">
            <div class="flex-1">
                <h2 class="text-xl font-semibold font-sans text-skin-inverted leading-7">
                    <a href="https://laravel.cm/discussions/pourquoi-les-developpeurs-sattardent-trop-sur-le-salaire" class="hover:text-skin-primary">Pourquoi les développeurs s’attardent trop sur le salaire ?</a>
                </h2>
            </div>
            <div class="mt-2 lg:mt-0 shrink-0 self-start">
                                <div class="flex flex-wrap gap-2 lg:gap-x-3">
                                                <span class="inline-flex items-center leading-none px-2.5 py-1.5 text-sm font-medium text-skin-inverted rounded-full border border-skin-input">
        <svg class="mr-1.5 h-2 w-2 brand-salaire" fill="currentColor" viewBox="0 0 8 8">
            <circle cx="4" cy="4" r="3"></circle>
        </svg>
        Salaire
    </span>
                                        </div>
                        </div>
        </div>
        <p class="mt-1 text-sm font-normal text-skin-base leading-5">
            J’ai été contacté par un aîné sur LinkedIn qui voulait des développeurs pour son entreprise. Il m’a donné le profil qu’il voulait avec une mention d’un salaire qui pourrait al...
        </p>
                <div class="mt-3 sm:flex sm:justify-between">
                <div class="flex items-center text-sm font-sans text-skin-muted">
                    <a class="shrink-0" href="https://laravel.cm/user/mckenziearts">
                        <img class="object-cover rounded-full  h-6 w-6" src="https://laravel.cm/media/2/logo-me.jpg" alt="mckenziearts">
                    </a>
                    <span class="ml-2 pr-1">Posté par</span>
                    <div class="flex items-center space-x-1" wire:ignore="">
                        <a href="https://laravel.cm/user/mckenziearts" class="text-skin-inverted hover:underline">Arthur Monney</a>
                        <span aria-hidden="true">·</span>
                        <time-ago time="1639564523">il y a 2 ans</time-ago></div>
                </div>
                <div class="hidden sm:flex sm:items-center space-x-3">
                                        <div class="flex items-center justify-center space-x-2">
                                                        <img class="w-4 h-4" src="https://laravel.cm/images/reactions/joy.svg" alt="joy emoji">
                                                    <span class="ml-3 text-sm font-medium text-green-500">1</span>
                        </div>
                                    <p class="inline-flex text-sm space-x-2 text-skin-base">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.76c0 1.6 1.123 2.994 2.707 3.227 1.087.16 2.185.283 3.293.369V21l4.076-4.076a1.526 1.526 0 011.037-.443 48.282 48.282 0 005.68-.494c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z"></path>
                        </svg>
                        <span class="font-normal text-skin-inverted-muted">7</span>
                        <span class="sr-only">réponses</span>
                    </p>
                </div>
            </div>
        </div>
                                <div class="py-6">
        <div class="lg:flex lg:items-center lg:justify-between">
            <div class="flex-1">
                <h2 class="text-xl font-semibold font-sans text-skin-inverted leading-7">
                    <a href="https://laravel.cm/discussions/comment-etre-productif" class="hover:text-skin-primary">Comment être productif ?</a>
                </h2>
            </div>
            <div class="mt-2 lg:mt-0 shrink-0 self-start">
                                <div class="flex flex-wrap gap-2 lg:gap-x-3">
                                                <span class="inline-flex items-center leading-none px-2.5 py-1.5 text-sm font-medium text-skin-inverted rounded-full border border-skin-input">
        <svg class="mr-1.5 h-2 w-2 brand-developpement" fill="currentColor" viewBox="0 0 8 8">
            <circle cx="4" cy="4" r="3"></circle>
        </svg>
        Développement
    </span>
                                                <span class="inline-flex items-center leading-none px-2.5 py-1.5 text-sm font-medium text-skin-inverted rounded-full border border-skin-input">
        <svg class="mr-1.5 h-2 w-2 brand-entrepreneuriat" fill="currentColor" viewBox="0 0 8 8">
            <circle cx="4" cy="4" r="3"></circle>
        </svg>
        Entrepreneuriat
    </span>
                                                <span class="inline-flex items-center leading-none px-2.5 py-1.5 text-sm font-medium text-skin-inverted rounded-full border border-skin-input">
        <svg class="mr-1.5 h-2 w-2 brand-projets" fill="currentColor" viewBox="0 0 8 8">
            <circle cx="4" cy="4" r="3"></circle>
        </svg>
        Projets
    </span>
                                        </div>
                        </div>
        </div>
        <p class="mt-1 text-sm font-normal text-skin-base leading-5">
            Sur chacun de ses projets ils faut se poser la question sur “Comment être productif et realiser quelque chose d’utile très rapidement”. Dans ce sujet de discussion je vais vou...
        </p>
                <div class="mt-3 sm:flex sm:justify-between">
                <div class="flex items-center text-sm font-sans text-skin-muted">
                    <a class="shrink-0" href="https://laravel.cm/user/mckenziearts">
                        <img class="object-cover rounded-full  h-6 w-6" src="https://laravel.cm/media/2/logo-me.jpg" alt="mckenziearts">
                    </a>
                    <span class="ml-2 pr-1">Posté par</span>
                    <div class="flex items-center space-x-1" wire:ignore="">
                        <a href="https://laravel.cm/user/mckenziearts" class="text-skin-inverted hover:underline">Arthur Monney</a>
                        <span aria-hidden="true">·</span>
                        <time-ago time="1639469936">il y a 2 ans</time-ago></div>
                </div>
                <div class="hidden sm:flex sm:items-center space-x-3">
                                        <div class="flex items-center justify-center space-x-2">
                                                        <img class="w-4 h-4" src="https://laravel.cm/images/reactions/handshake.svg" alt="handshake emoji">
                                                    <span class="ml-3 text-sm font-medium text-green-500">1</span>
                        </div>
                                    <p class="inline-flex text-sm space-x-2 text-skin-base">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.76c0 1.6 1.123 2.994 2.707 3.227 1.087.16 2.185.283 3.293.369V21l4.076-4.076a1.526 1.526 0 011.037-.443 48.282 48.282 0 005.68-.494c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z"></path>
                        </svg>
                        <span class="font-normal text-skin-inverted-muted">1</span>
                        <span class="sr-only">réponses</span>
                    </p>
                </div>
            </div>
        </div>
                                <div class="py-6">
        <div class="lg:flex lg:items-center lg:justify-between">
            <div class="flex-1">
                <h2 class="text-xl font-semibold font-sans text-skin-inverted leading-7">
                    <a href="https://laravel.cm/discussions/comment-facturer-ses-clients-quand-on-commence-dans-le-free-lance" class="hover:text-skin-primary">Comment facturer ses clients quand on commence dans le free-lance ?</a>
                </h2>
            </div>
            <div class="mt-2 lg:mt-0 shrink-0 self-start">
                                <div class="flex flex-wrap gap-2 lg:gap-x-3">
                                                <span class="inline-flex items-center leading-none px-2.5 py-1.5 text-sm font-medium text-skin-inverted rounded-full border border-skin-input">
        <svg class="mr-1.5 h-2 w-2 brand-entrepreneuriat" fill="currentColor" viewBox="0 0 8 8">
            <circle cx="4" cy="4" r="3"></circle>
        </svg>
        Entrepreneuriat
    </span>
                                                <span class="inline-flex items-center leading-none px-2.5 py-1.5 text-sm font-medium text-skin-inverted rounded-full border border-skin-input">
        <svg class="mr-1.5 h-2 w-2 brand-freelance" fill="currentColor" viewBox="0 0 8 8">
            <circle cx="4" cy="4" r="3"></circle>
        </svg>
        Freelance
    </span>
                                        </div>
                        </div>
        </div>
        <p class="mt-1 text-sm font-normal text-skin-base leading-5">
            La plus part du temps quand on se lance dans le freelance, l'un des soucis majeur qu'on rencontre après la recherche des clients c'est de savoir comment facturer ces derniers....
        </p>
                <div class="mt-3 sm:flex sm:justify-between">
                <div class="flex items-center text-sm font-sans text-skin-muted">
                    <a class="shrink-0" href="https://laravel.cm/user/mckenziearts">
                        <img class="object-cover rounded-full  h-6 w-6" src="https://laravel.cm/media/2/logo-me.jpg" alt="mckenziearts">
                    </a>
                    <span class="ml-2 pr-1">Posté par</span>
                    <div class="flex items-center space-x-1" wire:ignore="">
                        <a href="https://laravel.cm/user/mckenziearts" class="text-skin-inverted hover:underline">Arthur Monney</a>
                        <span aria-hidden="true">·</span>
                        <time-ago time="1637963731">il y a 2 ans</time-ago></div>
                </div>
                <div class="hidden sm:flex sm:items-center space-x-3">
                                        <div class="flex items-center justify-center space-x-2">
                                                        <img class="w-4 h-4" src="https://laravel.cm/images/reactions/party.svg" alt="party emoji">
                                                        <img class="w-4 h-4" src="https://laravel.cm/images/reactions/love.svg" alt="love emoji">
                                                        <img class="w-4 h-4" src="https://laravel.cm/images/reactions/clap.svg" alt="clap emoji">
                                                    <span class="ml-3 text-sm font-medium text-green-500">5</span>
                        </div>
                                    <p class="inline-flex text-sm space-x-2 text-skin-base">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.76c0 1.6 1.123 2.994 2.707 3.227 1.087.16 2.185.283 3.293.369V21l4.076-4.076a1.526 1.526 0 011.037-.443 48.282 48.282 0 005.68-.494c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z"></path>
                        </svg>
                        <span class="font-normal text-skin-inverted-muted">2</span>
                        <span class="sr-only">réponses</span>
                    </p>
                </div>
            </div>
        </div>
                                <div class="py-6">
        <div class="lg:flex lg:items-center lg:justify-between">
            <div class="flex-1">
                <h2 class="text-xl font-semibold font-sans text-skin-inverted leading-7">
                    <a href="https://laravel.cm/discussions/bienvenu-sur-laravel-cameroun" class="hover:text-skin-primary">Bienvenu sur Laravel Cameroun</a>
                </h2>
            </div>
            <div class="mt-2 lg:mt-0 shrink-0 self-start">
                        </div>
        </div>
        <p class="mt-1 text-sm font-normal text-skin-base leading-5">
            #Bienvenu sur Laravel Cameroun
    {% giphy https://giphy.com/embed/Sg4DwEJrCpGIU %}

    Laissez un commentaire ci-dessous pour vous présenter ! Vous pouvez parler de ce qui vous a a...
        </p>
                <div class="mt-3 sm:flex sm:justify-between">
                <div class="flex items-center text-sm font-sans text-skin-muted">
                    <a class="shrink-0" href="https://laravel.cm/user/laravelcm">
                        <span class="relative inline-block ">
            <img class="object-cover rounded-full ring-2 !ring-yellow-500 h-6 w-6" src="https://laravel.cm/media/26/avatar@4x.jpg" alt="laravelcm">
            <span class="absolute -right-1 -top-1 ring-1 h-4 w-4 flex items-center justify-center rounded-full bg-white p-1 ring-yellow-500">
                <svg class="w-full h-full text-yellow-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                    <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd"></path>
                </svg>
            </span>
        </span>
                    </a>
                    <span class="ml-2 pr-1">Posté par</span>
                    <div class="flex items-center space-x-1" wire:ignore="">
                        <a href="https://laravel.cm/user/laravelcm" class="text-skin-inverted hover:underline">Laravel Cameroun</a>
                        <span aria-hidden="true">·</span>
                        <time-ago time="1637823488">il y a 2 ans</time-ago></div>
                </div>
                <div class="hidden sm:flex sm:items-center space-x-3">
                                        <div class="flex items-center justify-center space-x-2">
                                                        <img class="w-4 h-4" src="https://laravel.cm/images/reactions/fire.svg" alt="fire emoji">
                                                        <img class="w-4 h-4" src="https://laravel.cm/images/reactions/pray.svg" alt="pray emoji">
                                                        <img class="w-4 h-4" src="https://laravel.cm/images/reactions/handshake.svg" alt="handshake emoji">
                                                    <span class="ml-3 text-sm font-medium text-green-500">4</span>
                        </div>
                                    <p class="inline-flex text-sm space-x-2 text-skin-base">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.76c0 1.6 1.123 2.994 2.707 3.227 1.087.16 2.185.283 3.293.369V21l4.076-4.076a1.526 1.526 0 011.037-.443 48.282 48.282 0 005.68-.494c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z"></path>
                        </svg>
                        <span class="font-normal text-skin-inverted-muted">3</span>
                        <span class="sr-only">réponses</span>
                    </p>
                </div>
            </div>
        </div>
                        </div>

                </div>
        <div wire:ignore="" class="hidden relative lg:block lg:col-span-3">
    <aside class="sticky top-16 space-y-12">
    <div>
    <h4 class="text-lg font-semibold text-skin-inverted font-sans leading-6">Top Contributeurs</h4>
    <p class="mt-3 font-normal text-skin-base text-sm">Les personnes qui ont lancé le plus de discussions sur le site.</p>
    <div class="mt-6">
    <ul role="list" class="divide-y divide-skin-base">
    <li class="py-4">
    <div class="flex items-center space-x-4">
    <a href="https://laravel.cm/user/mckenziearts" class="flex items-center flex-1 min-w-0">
    <div class="shrink-0">
    <img class="object-cover rounded-full  h-8 w-8" src="https://laravel.cm/media/2/logo-me.jpg" alt="mckenziearts">
    </div>
    <div class="ml-3.5 font-sans">
    <p class="text-sm font-medium text-skin-inverted truncate">
    Arthur Monney
    </p>
    <p class="text-sm text-skin-base truncate">
    @mckenziearts
    </p>
    </div>
    </a>
    <div>
    <span class="inline-flex items-center text-sm leading-5 font-medium text-skin-inverted">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-5 w-5 mr-1 text-skin-muted">
    <path stroke-linecap="round" stroke-linejoin="round" d="M8.625 9.75a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H8.25m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H12m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0h-.375m-13.5 3.01c0 1.6 1.123 2.994 2.707 3.227 1.087.16 2.185.283 3.293.369V21l4.184-4.183a1.14 1.14 0 01.778-.332 48.294 48.294 0 005.83-.498c1.585-.233 2.708-1.626 2.708-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z"></path>
    </svg>
    6
    </span>
    </div>
    </div>
    </li>
    <li class="py-4">
    <div class="flex items-center space-x-4">
    <a href="https://laravel.cm/user/stevymarlino" class="flex items-center flex-1 min-w-0">
    <div class="shrink-0">
    <img class="object-cover rounded-full  h-8 w-8" src="https://avatars.githubusercontent.com/u/25743606?v=4" alt="stevymarlino">
    </div>
    <div class="ml-3.5 font-sans">
    <p class="text-sm font-medium text-skin-inverted truncate">
    Stevy Endaman
    </p>
    <p class="text-sm text-skin-base truncate">
    @stevymarlino
    </p>
    </div>
    </a>
    <div>
    <span class="inline-flex items-center text-sm leading-5 font-medium text-skin-inverted">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-5 w-5 mr-1 text-skin-muted">
    <path stroke-linecap="round" stroke-linejoin="round" d="M8.625 9.75a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H8.25m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H12m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0h-.375m-13.5 3.01c0 1.6 1.123 2.994 2.707 3.227 1.087.16 2.185.283 3.293.369V21l4.184-4.183a1.14 1.14 0 01.778-.332 48.294 48.294 0 005.83-.498c1.585-.233 2.708-1.626 2.708-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z"></path>
    </svg>
    3
    </span>
    </div>
    </div>
    </li>
    <li class="py-4">
    <div class="flex items-center space-x-4">
    <a href="https://laravel.cm/user/laravelcm" class="flex items-center flex-1 min-w-0">
    <div class="shrink-0">
    <span class="relative inline-block ">
    <img class="object-cover rounded-full ring-2 !ring-yellow-500 h-8 w-8" src="https://laravel.cm/media/26/avatar@4x.jpg" alt="laravelcm">
    <span class="absolute -right-1 top-0 ring-2 h-4 w-4 flex items-center justify-center rounded-full bg-white p-1 ring-yellow-500">
    <svg class="w-full h-full text-yellow-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
    <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z" clip-rule="evenodd"></path>
    </svg>
    </span>
    </span>
    </div>
    <div class="ml-3.5 font-sans">
    <p class="text-sm font-medium text-skin-inverted truncate">
    Laravel Cameroun
    </p>
    <p class="text-sm text-skin-base truncate">
    @laravelcm
    </p>
    </div>
    </a>
    <div>
    <span class="inline-flex items-center text-sm leading-5 font-medium text-skin-inverted">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-5 w-5 mr-1 text-skin-muted">
    <path stroke-linecap="round" stroke-linejoin="round" d="M8.625 9.75a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H8.25m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H12m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0h-.375m-13.5 3.01c0 1.6 1.123 2.994 2.707 3.227 1.087.16 2.185.283 3.293.369V21l4.184-4.183a1.14 1.14 0 01.778-.332 48.294 48.294 0 005.83-.498c1.585-.233 2.708-1.626 2.708-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z"></path>
    </svg>
    1
    </span>
    </div>
    </div>
    </li>
    <li class="py-4">
    <div class="flex items-center space-x-4">
    <a href="https://laravel.cm/user/dani03" class="flex items-center flex-1 min-w-0">
    <div class="shrink-0">
    <img class="object-cover rounded-full  h-8 w-8" src="https://laravel.cm/media/40/newDiamond.png" alt="dani03">
    </div>
    <div class="ml-3.5 font-sans">
    <p class="text-sm font-medium text-skin-inverted truncate">
    dani
    </p>
    <p class="text-sm text-skin-base truncate">
    @dani03
    </p>
    </div>
    </a>
    <div>
    <span class="inline-flex items-center text-sm leading-5 font-medium text-skin-inverted">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-5 w-5 mr-1 text-skin-muted">
    <path stroke-linecap="round" stroke-linejoin="round" d="M8.625 9.75a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H8.25m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H12m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0h-.375m-13.5 3.01c0 1.6 1.123 2.994 2.707 3.227 1.087.16 2.185.283 3.293.369V21l4.184-4.183a1.14 1.14 0 01.778-.332 48.294 48.294 0 005.83-.498c1.585-.233 2.708-1.626 2.708-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z"></path>
    </svg>
    1
    </span>
    </div>
    </div>
    </li>
    <li class="py-4">
    <div class="flex items-center space-x-4">
    <a href="https://laravel.cm/user/gallus6779" class="flex items-center flex-1 min-w-0">
    <div class="shrink-0">
    <img class="object-cover rounded-full  h-8 w-8" src="https://ui-avatars.com/api/?name=NOAH+Gallus&amp;color=065F46&amp;background=D1FAE5" alt="gallus6779">
    </div>
    <div class="ml-3.5 font-sans">
    <p class="text-sm font-medium text-skin-inverted truncate">
    NOAH Gallus
    </p>
    <p class="text-sm text-skin-base truncate">
    @gallus6779
    </p>
    </div>
    </a>
    <div>
    <span class="inline-flex items-center text-sm leading-5 font-medium text-skin-inverted">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-5 w-5 mr-1 text-skin-muted">
    <path stroke-linecap="round" stroke-linejoin="round" d="M8.625 9.75a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H8.25m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0H12m4.125 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm0 0h-.375m-13.5 3.01c0 1.6 1.123 2.994 2.707 3.227 1.087.16 2.185.283 3.293.369V21l4.184-4.183a1.14 1.14 0 01.778-.332 48.294 48.294 0 005.83-.498c1.585-.233 2.708-1.626 2.708-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z"></path>
    </svg>
    1
    </span>
    </div>
    </div>
    </li>
    </ul>
    </div>
    </div>
    <div>
    <h4 class="text-lg font-semibold text-skin-inverted font-sans leading-6">Discussions sans commentaires</h4>
    <p class="mt-3 font-normal text-skin-base text-sm">Les discussions/sujets qui n’ont pas encore eu de commentaires. Soyez le premier à apporter votre contribution.</p>
    <div class="mt-6">
    <ul role="list" class="divide-y divide-skin-base">
    <li class="py-4">
    <div class="flex space-x-3">
    <img class="h-6 w-6 object-cover rounded-full" src="https://avatars.githubusercontent.com/u/25743606?v=4" alt="">
    <div class="flex-1 space-y-1">
    <div class="flex items-center justify-between">
    <h3 class="text-sm font-medium text-skin-inverted font-sans">
    <a href="https://laravel.cm/user/stevymarlino" class="hover:underline">Stevy Endaman</a>
    </h3>
    <p class="text-xs text-skin-muted font-normal truncate">
    <time-ago time="1639997169">il y a 2 ans</time-ago></p>
    </div>
    <a href="https://laravel.cm/discussions/le-syndrome-de-la-bonne-pratique" class="inline-flex text-sm text-skin-base font-normal hover:text-skin-inverted leading-5">
    Le Syndrome de la bonne pratique
    </a>
    </div>
    </div>
    </li>
    </ul>
    </div>
    </div>
    </aside>
    </div>
    </div>

    </div>
@endsection
