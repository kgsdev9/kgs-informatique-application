<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Bienvenue sur KGS INFORMATIQUE </title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <style>

        </style>
         @vite('resources/css/app.css')
    </head>
    <body class="antialiased">


        <header class="sticky top-0 z-40 flex-none w-full mx-auto bg-white border-b border-gray-200 dark:border-gray-600 dark:bg-gray-800">
            <div id='banner' tabIndex='-1'class='z-50 flex justify-center w-full px-4 py-3 border border-b border-gray-200 bg-gray-50 dark:border-gray-600 lg:py-4 dark:bg-gray-700'>
                <div class='items-center md:flex'>
                  <p class='text-sm font-medium text-gray-900 md:my-0 dark:text-white'>
                    <span class='bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 hidden md:inline'>Annonce</span>
                   Je partage mon experience en programmation web , Securité informatique ,  suppport informatique aux developpeurs et aux particuliers!
                      <a href="#" class='inline-flex items-center ml-2 text-sm font-medium text-blue-600 md:ml-2 dark:text-blue-500 hover:underline'>
                        Portofilio
                        <svg class="w-3 h-3 ml-1.5 text-blue-600 dark:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                        </svg>
                      </a>
                  </p>
                </div>
            </div>
            <div class="flex items-center justify-between w-full px-3 py-3 mx-auto max-w-8xl lg:px-4">
              <div class="flex items-center">
                <button id="toggleSidebarMobile" aria-expanded="true" aria-controls="sidebar" class="p-2 mr-2 text-gray-500 rounded cursor-pointer lg:hidden hover:text-gray-900 hover:bg-gray-100 focus:bg-gray-100 dark:focus:bg-gray-700 focus:ring-2 focus:ring-gray-100 dark:focus:ring-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                  <svg id="toggleSidebarMobileHamburger" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                  <svg id="toggleSidebarMobileClose" class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
                <div class="flex items-center justify-between">
                  <a href="https://flowbite.com/" class="flex">
                    <img src="https://flowbite.com/docs/images/logo.svg" class="h-8 mr-3" alt="FlowBite Logo" />
                    <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Kgs</span>
                  </a>
                </div>
                <div id="docsearch" class="hidden md:flex ml-6 xl:ml-20"></div>
              </div>

              <div class="flex items-center">
                <ul id="flowbiteMenu" class="flex-col hidden pt-6 lg:flex-row lg:self-center lg:py-0 lg:flex">
                  <li class="mb-3 lg:px-2 xl:px-2 lg:mb-0">
                    <a href="" class="text-sm font-medium text-gray-900 hover:text-blue-600 dark:text-gray-300 dark:hover:text-blue-500">Forums</a>
                  </li>
                  <li class="mb-3 lg:px-2 xl:px-2 lg:mb-0">
                    <a href="https://flowbite.com/blocks/" class="text-sm font-medium text-gray-900 hover:text-blue-600 dark:text-gray-300 dark:hover:text-blue-500">Articles</a>
                  </li>
                  <li class="mb-3 lg:px-2 xl:px-2 lg:mb-0">
                    <a href="https://flowbite.com/figma/" class="text-sm font-medium text-gray-900 hover:text-blue-600 dark:text-gray-300 dark:hover:text-blue-500">Discutions</a>
                  </li>
                  <li class="mb-3 lg:px-2 xl:px-2 lg:mb-0">
                    <a href="https://flowbite.com/icons/" class="text-sm font-medium text-gray-900 hover:text-blue-600 dark:text-gray-300 dark:hover:text-blue-500">Astuces</a>
                  </li>
                  <li class="mb-3 lg:px-2 xl:px-2 lg:mb-0">
                    <a href="https://flowbite.com/blog/" class="text-sm font-medium text-gray-900 hover:text-blue-600 dark:text-gray-300 dark:hover:text-blue-500">DevOpps</a>
                  </li>
                  <li class="hidden mb-3 lg:px-2 xl:px-2 lg:mb-0 xl:block">
                    <a href="https://flowbite.com/pro/" class="text-sm font-medium text-gray-900 hover:text-blue-600 dark:text-gray-300 dark:hover:text-blue-500">Base de données</a>
                  </li>
                </ul>

                <a href="https://github.com/themesberg/flowbite" data-tooltip-target="tooltip-github-2" class="hidden sm:inline-flex items-center justify-center text-gray-500 w-10 h-10 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5 mr-1" >
                  <svg class="w-[1.1rem] h-[1.1rem]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 .333A9.911 9.911 0 0 0 6.866 19.65c.5.092.678-.215.678-.477 0-.237-.01-1.017-.014-1.845-2.757.6-3.338-1.169-3.338-1.169a2.627 2.627 0 0 0-1.1-1.451c-.9-.615.07-.6.07-.6a2.084 2.084 0 0 1 1.518 1.021 2.11 2.11 0 0 0 2.884.823c.044-.503.268-.973.63-1.325-2.2-.25-4.516-1.1-4.516-4.9A3.832 3.832 0 0 1 4.7 7.068a3.56 3.56 0 0 1 .095-2.623s.832-.266 2.726 1.016a9.409 9.409 0 0 1 4.962 0c1.89-1.282 2.717-1.016 2.717-1.016.366.83.402 1.768.1 2.623a3.827 3.827 0 0 1 1.02 2.659c0 3.807-2.319 4.644-4.525 4.889a2.366 2.366 0 0 1 .673 1.834c0 1.326-.012 2.394-.012 2.72 0 .263.18.572.681.475A9.911 9.911 0 0 0 10 .333Z" clip-rule="evenodd"/>
                  </svg>
                  <span class="sr-only">View on Github</span>
                </a>
                <div id="tooltip-github-2" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip">
                    View on Github
                    <div class="tooltip-arrow" data-popper-arrow></div>
                </div>
                <a href="https://discord.gg/4eeurUVvTy" data-tooltip-target="tooltip-discord-2" class="hidden sm:inline-flex items-center justify-center text-gray-500 w-10 h-10 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5 mr-1" >
                  <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 21 16">
                    <path d="M16.942 1.556a16.3 16.3 0 0 0-4.126-1.3 12.04 12.04 0 0 0-.529 1.1 15.175 15.175 0 0 0-4.573 0 11.585 11.585 0 0 0-.535-1.1 16.274 16.274 0 0 0-4.129 1.3A17.392 17.392 0 0 0 .182 13.218a15.785 15.785 0 0 0 4.963 2.521c.41-.564.773-1.16 1.084-1.785a10.63 10.63 0 0 1-1.706-.83c.143-.106.283-.217.418-.33a11.664 11.664 0 0 0 10.118 0c.137.113.277.224.418.33-.544.328-1.116.606-1.71.832a12.52 12.52 0 0 0 1.084 1.785 16.46 16.46 0 0 0 5.064-2.595 17.286 17.286 0 0 0-2.973-11.59ZM6.678 10.813a1.941 1.941 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.919 1.919 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Zm6.644 0a1.94 1.94 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.918 1.918 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Z"/>
                  </svg>
                  <span class="sr-only">Join Discord community</span>
                </a>
                <div id="tooltip-discord-2" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip">
                  Join community on Discord
                  <div class="tooltip-arrow" data-popper-arrow></div>
                </div>
                <a href="https://www.youtube.com/channel/UC_Ms4V2kYDsh7F_CSsHyQ6A" data-tooltip-target="tooltip-youtube" class="hidden sm:inline-flex items-center justify-center text-gray-500 w-10 h-10 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5 mr-1" >
                  <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 14">
                    <path fill-rule="evenodd" d="M19.7 3.037a4.26 4.26 0 0 0-.789-1.964 2.84 2.84 0 0 0-1.984-.84c-2.767-.2-6.926-.2-6.926-.2s-4.157 0-6.928.2a2.836 2.836 0 0 0-1.983.84A4.225 4.225 0 0 0 .3 3.038a30.148 30.148 0 0 0-.2 3.206v1.5c.01 1.071.076 2.142.2 3.206.094.712.363 1.39.784 1.972.604.536 1.38.837 2.187.848 1.583.15 6.731.2 6.731.2s4.161 0 6.928-.2a2.844 2.844 0 0 0 1.985-.84 4.27 4.27 0 0 0 .787-1.965c.124-1.064.19-2.135.2-3.206V6.243a30.672 30.672 0 0 0-.202-3.206ZM8.008 9.59V3.97l5.4 2.819-5.4 2.8Z" clip-rule="evenodd"/>
                  </svg>
                  <span class="sr-only">Flowbite YouTube</span>
                </a>
                <div id="tooltip-youtube" role="tooltip" class="absolute z-10 invisible inline-flex px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip">
                  Subscribe to YouTube channel
                  <div class="tooltip-arrow" data-popper-arrow></div>
                </div>

                <div id="tooltip-toggle" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip">
                    Toggle dark mode
                    <div class="tooltip-arrow" data-popper-arrow></div>
                </div>

                <a href="https://flowbite.com/pro/#pricing"  class="hidden xl:inline-flex items-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center ml-1 sm:ml-3">Inscription</a>
              </div>
            </div>
          </header>


           @yield('content')

          {{-- <footer class="bg-skin-footer" aria-labelledby="footerHeading">
            <h2 id="footerHeading" class="sr-only">Footer</h2>
            <div class="max-w-7xl mx-auto px-4 sm:px-6">
                <div class="py-12 lg:py-16 lg:grid lg:grid-cols-3 lg:gap-8">
                    <div class="space-y-4">
                        <img class="h-12 w-auto sm:h-16 logo-white" src="#" alt="Laravel.cm">
                        <img class="h-12 w-auto sm:h-16 logo-dark" src="#" alt="Laravel.cm">
                        <p class="inline-flex items-center flex-wrap text-sm text-skin-base">
                            <a href="#" class="underline text-skin-inverted font-medium">Laravel Country Logomarks</a>
                            <span class="ml-1.5">par Caneco</span>
                            <img class="ml-2 h-6 w-6 rounded-full" src="https://avatars.githubusercontent.com/u/502041" alt="Caneco profile">
                        </p>
                    </div>
                    <div class="mt-12 grid grid-cols-2 gap-8 lg:mt-0">
                        <div>
                            <h3 class="text-sm font-semibold text-skin-muted tracking-wider uppercase">Ressources</h3>
                            <ul class="mt-4 space-y-4">
                                <li><a href="https://laravel.cm/a-propos" class="inline-flex items-center text-base text-skin-base hover:text-skin-menu-hover" title="A propos">A propos</a></li>
                                <li>
                                    <a href="#" class="inline-flex items-center text-base text-skin-base hover:text-skin-menu-hover" title="Podcasts">Podcasts<span class="inline-flex ml-2 text-xs leading-4 text-green-800 bg-green-100 py-0.5 px-1.5 rounded-full">Bientôt</span></a>
                                </li>
                                <li>
                                    <a href="#" class="inline-flex items-center text-base text-skin-base hover:text-skin-menu-hover" title="Jobs">Jobs<span class="inline-flex ml-2 text-xs leading-4 text-green-800 bg-green-100 py-0.5 px-1.5 rounded-full">Bientôt</span></a>
                                </li>
                                <li><a href="https://laravel.cm/sponsors" class="inline-flex items-center text-base text-skin-base hover:text-skin-menu-hover" title="Sponsors">Sponsors</a></li>
                                <li><a href="https://github.com/caneco/laravel-country-logomarks/blob/main/src/cm/README.md" class="inline-flex items-center text-base text-skin-base hover:text-skin-menu-hover" title="Branding">Branding</a></li>
                            </ul>
                        </div>
                        <div>
                            <h3 class="text-sm font-semibold text-skin-muted tracking-wider uppercase">Légal</h3>
                            <ul class="mt-4 space-y-4">
                                <li><a href="https://laravel.cm/terms" class="inline-flex items-center text-base text-skin-base hover:text-skin-menu-hover" title="Conditions d’utilisation">Conditions d’utilisation</a></li>
                                <li><a href="https://laravel.cm/privacy" class="inline-flex items-center text-base text-skin-base hover:text-skin-menu-hover" title="Confidentialité">Confidentialité</a></li>
                                <li><a href="https://laravel.cm/rules" class="inline-flex items-center text-base text-skin-base hover:text-skin-menu-hover" title="Code de conduite">Code de conduite</a></li>
                                <li><a href="https://laravel.cm/faq" class="inline-flex items-center text-base text-skin-base hover:text-skin-menu-hover" title="FAQ">FAQ</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="mt-12 lg:mt-0">
                        <div class="sm:max-w-lg lg:max-w-none">
                            <h3 class="text-sm font-semibold text-skin-muted tracking-wider uppercase">Rejoignez nous</h3>
                            <p class="mt-4 text-base text-skin-base">
                                Rejoignez notre newsletter recevez des tutoriels, articles et podcasts sur le design et la programmation web.
                            </p>
                            <form aria-labelledby="newsletter-headline" action="https://laravelcm.us4.list-manage.com/subscribe/post?u=0642d391e4785535c232a8c66&amp;id=6ff87af677" method="POST" id="mc-embedded-subscribe-form" class="mt-4 sm:flex" name="mc-embedded-subscribe-form" target="_blank" novalidate="">
                                <div class="w-full">
                                    <div class="">
                                        <div class="relative ">
                                            <input name="EMAIL" type="email" id="EMAIL" class="bg-skin-input shadow-sm focus:ring-flag-green focus:border-flag-green block w-full placeholder-skin-input focus:outline-none focus:placeholder-skin-input-focus text-skin-base sm:text-sm border-skin-input rounded-md w-full block" autocomplete="email" required="required" placeholder="Entrer votre adresse email" aria-label="Adresse E-mail">
                                        </div>
                                    </div>
                                    <input type="hidden" name="b_0642d391e4785535c232a8c66_6ff87af677" tabindex="-1" value="">
                                </div>
                                <div class="mt-3 rounded-md sm:mt-0 sm:ml-3 sm:shrink-0">
                                    <button class="button inline-flex items-center justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-body focus:ring-green-500 block w-full" type="submit">S'inscrire</button>
                                </div>
                            </form>
                        </div>
                        <p class="mt-6 text-base text-skin-base">
                            Ou intégrez nos différentes plateformes de communication
                        </p>
                        <div class="mt-4 sm:flex sm:items-center sm:space-x-4">
                            <a href="https://laravel.cm/discord" class="inline-flex items-center px-4 py-2 text-base text-skin-base font-medium bg-skin-body hover:bg-skin-card-muted rounded-md">
                                <svg class="h-5 w-5 mr-2" fill="#5865F2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 146 146">
                                    <path d="M107.75 125.001s-4.5-5.375-8.25-10.125c16.375-4.625 22.625-14.875 22.625-14.875-5.125 3.375-10 5.75-14.375 7.375-6.25 2.625-12.25 4.375-18.125 5.375-12 2.25-23 1.625-32.375-.125-7.125-1.375-13.25-3.375-18.375-5.375-2.875-1.125-6-2.5-9.125-4.25-.375-.25-.75-.375-1.125-.625-.25-.125-.375-.25-.5-.375-2.25-1.25-3.5-2.125-3.5-2.125s6 10 21.875 14.75c-3.75 4.75-8.375 10.375-8.375 10.375-27.625-.875-38.125-19-38.125-19 0-40.25 18-72.875 18-72.875 18-13.5 35.125-13.125 35.125-13.125l1.25 1.5c-22.5 6.5-32.875 16.375-32.875 16.375s2.75-1.5 7.375-3.625c13.375-5.875 24-7.5 28.375-7.875.75-.125 1.375-.25 2.125-.25 7.625-1 16.25-1.25 25.25-.25 11.875 1.375 24.625 4.875 37.625 12 0 0-9.875-9.375-31.125-15.875l1.75-2S110 19.626 128 33.126c0 0 18 32.625 18 72.875 0 0-10.625 18.125-38.25 19zM49.625 66.626c-7.125 0-12.75 6.25-12.75 13.875s5.75 13.875 12.75 13.875c7.125 0 12.75-6.25 12.75-13.875.125-7.625-5.625-13.875-12.75-13.875zm45.625 0c-7.125 0-12.75 6.25-12.75 13.875s5.75 13.875 12.75 13.875c7.125 0 12.75-6.25 12.75-13.875s-5.625-13.875-12.75-13.875z" fill-rule="nonzero"></path>
                                </svg>
                                Discord
                            </a>
                            <a href="https://laravel.cm/slack" class="inline-flex items-center px-4 py-2 text-base text-skin-base font-medium bg-skin-body hover:bg-skin-card-muted rounded-md">
                                <svg class="h-5 w-5 mr-2" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <g clip-path="url(#clip0)" fill-rule="evenodd" clip-rule="evenodd">
                                        <path d="M7.333 0a2 2 0 100 4h2V2a2.001 2.001 0 00-2-2zm0 5.333H2a2 2 0 000 4h5.333a2 2 0 100-4z" fill="#36C5F0"></path>
                                        <path d="M20 7.333a2 2 0 00-4 0v2h2a2 2 0 002-2zm-5.333 0V2a2 2 0 00-4 0v5.333a2 2 0 104 0z" fill="#2EB67D"></path>
                                        <path d="M12.666 20a2 2 0 100-3.999h-2v2c-.001 1.102.895 1.998 2 2zm0-5.334H18a2 2 0 000-4h-5.333a2 2 0 000 4z" fill="#ECB22E"></path>
                                        <path d="M0 12.666a2 2 0 004 0v-2H2a2 2 0 00-2 2zm5.333 0V18a2 2 0 104 0v-5.332a2 2 0 00-4-.002z" fill="#E01E5A"></path>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0">
                                            <path fill="#fff" d="M0 0h20v20H0z"></path>
                                        </clipPath>
                                    </defs>
                                </svg>
                                Slack
                            </a>
                            <a href="https://laravel.cm/telegram" class="inline-flex items-center mt-4 sm:mt-0 px-4 py-2 text-base text-skin-base font-medium bg-skin-body hover:bg-skin-card-muted rounded-md">
                                <svg class="h-5 w-5 mr-2" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path d="M10 20c5.523 0 10-4.477 10-10S15.523 0 10 0 0 4.477 0 10s4.477 10 10 10z" fill="#34AADF"></path>
                                    <path d="M4.162 9.913s5-2.052 6.734-2.774c.665-.29 2.919-1.214 2.919-1.214s1.04-.405.954.578c-.03.404-.26 1.82-.492 3.352-.346 2.168-.722 4.538-.722 4.538s-.058.665-.55.78c-.49.116-1.3-.404-1.444-.52-.116-.087-2.168-1.387-2.92-2.023-.202-.173-.433-.52.03-.925 1.04-.954 2.283-2.139 3.034-2.89.347-.347.694-1.156-.751-.173a246.647 246.647 0 01-4.075 2.745s-.463.29-1.33.03-1.879-.608-1.879-.608-.693-.433.492-.896z" fill="#fff"></path>
                                </svg>
                                Telegram
                            </a>
                        </div>
                    </div>
                </div>
                <div class="border-t border-skin-base py-6 sm:flex sm:items-center sm:justify-between lg:py-8">
                    <p class="text-base text-center leading-6 text-skin-muted lg:text-left">
                        © 2018 - 2023 Laravel Cameroun. Tous droits réservés.
                    </p>
                    <div class="mt-4 flex justify-center space-x-6 sm:mt-0 lg:justify-start">
                        <a href="https://laravel.cm/twitter" class="text-skin-muted hover:text-skin-base">
                            <span class="sr-only">Twitter</span>
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"></path>
                            </svg>
                        </a>
                        <a href="https://laravel.cm/facebook" class="text-skin-muted hover:text-skin-base">
                            <span class="sr-only">Facebook</span>
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd"></path>
                            </svg>
                        </a>
                        <a href="https://laravel.cm/linkedin" class="text-skin-muted hover:text-skin-base">
                            <span class="sr-only">LinkedIn</span>
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M19 0H5a5 5 0 00-5 5v14a5 5 0 005 5h14a5 5 0 005-5V5a5 5 0 00-5-5zM8 19H5V8h3v11zM6.5 6.732c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zM20 19h-3v-5.604c0-3.368-4-3.113-4 0V19h-3V8h3v1.765c1.396-2.586 7-2.777 7 2.476V19z"></path>
                            </svg>
                        </a>
                        <a href="https://laravel.cm/github" class="text-skin-muted hover:text-skin-base">
                            <span class="sr-only">GitHub</span>
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd"></path>
                            </svg>
                        </a>
                        <a href="https://laravel.cm/youtube" class="text-skin-muted hover:text-skin-base">
                            <span class="sr-only">YouTube</span>
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0C.488 3.45.029 5.804 0 12c.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0C23.512 20.55 23.971 18.196 24 12c-.029-6.185-.484-8.549-4.385-8.816zM9 16V8l8 3.993L9 16z"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </footer> --}}


    </body>
</html>
