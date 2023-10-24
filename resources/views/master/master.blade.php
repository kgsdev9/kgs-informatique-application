<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Bienvenue sur KGS INFORMATIQUE </title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="{{asset('css.css')}}">


        <script src="https://cdn.tiny.cloud/1/ewnwdlukikfd20zuefy426z7slixkeng4g2wsxxikjsyfa5k/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    </head>
    <body class="antialiased" >
        <header class="sticky top-0 z-40 flex-none mx-auto w-full bg-white dark:bg-gray-900 ">
            <div id="banner" tabindex="-1" class="z-50 flex justify-center w-full px-4 py-3 border border-b border-gray-200 bg-gray-50 dark:border-gray-600 lg:py-4 dark:bg-gray-700">
                <div class="items-center md:flex">
                    <p class="text-sm font-medium text-gray-900 md:my-0 dark:text-white">
                        <span class="bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 hidden md:inline">Important</span>
                        cette plateforme est en cours de développement  revenez plus tard
                        <a class="inline-flex items-center ml-2 text-sm font-medium text-blue-600 md:ml-2 dark:text-blue-500 hover:underline" href="/blocks/">
                            KGS
                            <svg class="w-3 h-3 ml-1.5 text-blue-600 dark:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"></path>
                            </svg>
                        </a>
                    </p>
                </div>
            </div>
            <div class="w-full px-3 py-3 mx-auto lg:flex lg:justify-between max-w-8xl lg:px-3">
                <div class="flex justify-between">
                    <div class="flex items-center">
                        <a class="flex items-center justify-between" href="/">
                            <span style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%;">
                                <span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;"><img alt="" aria-hidden="true" src="data:image/svg+xml,%3csvg%20xmlns=%27http://www.w3.org/2000/svg%27%20version=%271.1%27%20width=%2732%27%20height=%2733%27/%3e" style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;"></span>
                                <img alt="KGS" src="/images/logo.svg" decoding="async" data-nimg="intrinsic" class="h-8 flex-shrink-0" srcset="/images/logo.svg 1x, /images/logo.svg 2x" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;">
                                <noscript></noscript>
                            </span>
                            <span class="self-center ml-3 text-2xl font-semibold whitespace-nowrap dark:text-white">KGS</span>
                        </a>

                    </div>
                    <div class="flex items-center lg:hidden">

                        <button type="button" class="text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5 w-10 h-10 inline-flex items-center justify-center">
                            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                                <path d="M17.8 13.75a1 1 0 0 0-.859-.5A7.488 7.488 0 0 1 10.52 2a1 1 0 0 0 0-.969A1.035 1.035 0 0 0 9.687.5h-.113a9.5 9.5 0 1 0 8.222 14.247 1 1 0 0 0 .004-.997Z"></path>
                            </svg>
                        </button>
                        <a class="inline-flex items-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center ml-1 md:ml-3" href="/login/">
                            <span class="md:hidden">Connexions</span>

                            <svg class="hidden w-3 h-3 ml-2 xl:inline" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"></path>
                            </svg>
                        </a>
                        <button class="ml-1 text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5 inline-flex items-center justify-center w-10 h-10">
                            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"></path>
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="flex items-center w-full lg:w-auto">
                    <ul class="flex flex-col py-2 lg:py-0 lg:flex-row lg:self-center collapse w-full lg:w-auto collapsed">
                        <li><a class="block py-2 text-sm font-medium text-gray-900 lg:px-3 lg:py-0 hover:text-blue-600 dark:text-gray-300 dark:hover:text-blue-500" href="#">Accueil</a></li>
                        <li><a class="block py-2 text-sm font-medium text-gray-900 lg:px-3 lg:py-0 hover:text-blue-600 dark:text-gray-300 dark:hover:text-blue-500" href="#">Articles</a></li>
                        <li><a class="block py-2 text-sm font-medium text-gray-900 lg:px-3 lg:py-0 hover:text-blue-600 dark:text-gray-300 dark:hover:text-blue-500" href="{{url('/forums')}}">Forum</a></li>
                        <li><a class="block py-2 text-sm font-medium text-gray-900 lg:px-3 lg:py-0 hover:text-blue-600 dark:text-gray-300 dark:hover:text-blue-500" href="#">Formations </a></li>
                        <li><a class="block py-2 text-sm font-medium text-gray-900 lg:px-3 lg:py-0 hover:text-blue-600 dark:text-gray-300 dark:hover:text-blue-500" href="#">Histoires</a></li>

                    </ul>
                    <div class="lg:self-center flex items-center mb-4 lg:mb-0 collapse collapsed">
                        <div class="items-center hidden mr-3 lg:flex">
                            <a href="#" class="hidden xl:inline-flex items-center justify-center w-10 h-10 text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5 mr-1">
                                <svg class="w-[1.1rem] h-[1.1rem] " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 .333A9.911 9.911 0 0 0 6.866 19.65c.5.092.678-.215.678-.477 0-.237-.01-1.017-.014-1.845-2.757.6-3.338-1.169-3.338-1.169a2.627 2.627 0 0 0-1.1-1.451c-.9-.615.07-.6.07-.6a2.084 2.084 0 0 1 1.518 1.021 2.11 2.11 0 0 0 2.884.823c.044-.503.268-.973.63-1.325-2.2-.25-4.516-1.1-4.516-4.9A3.832 3.832 0 0 1 4.7 7.068a3.56 3.56 0 0 1 .095-2.623s.832-.266 2.726 1.016a9.409 9.409 0 0 1 4.962 0c1.89-1.282 2.717-1.016 2.717-1.016.366.83.402 1.768.1 2.623a3.827 3.827 0 0 1 1.02 2.659c0 3.807-2.319 4.644-4.525 4.889a2.366 2.366 0 0 1 .673 1.834c0 1.326-.012 2.394-.012 2.72 0 .263.18.572.681.475A9.911 9.911 0 0 0 10 .333Z" clip-rule="evenodd"></path>
                                </svg>
                            </a>

                            <a href="#" class="hidden xl:inline-flex items-center justify-center w-10 h-10 text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5 mr-1">
                                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 14">
                                    <path fill-rule="evenodd" d="M19.7 3.037a4.26 4.26 0 0 0-.789-1.964 2.84 2.84 0 0 0-1.984-.84c-2.767-.2-6.926-.2-6.926-.2s-4.157 0-6.928.2a2.836 2.836 0 0 0-1.983.84A4.225 4.225 0 0 0 .3 3.038a30.148 30.148 0 0 0-.2 3.206v1.5c.01 1.071.076 2.142.2 3.206.094.712.363 1.39.784 1.972.604.536 1.38.837 2.187.848 1.583.15 6.731.2 6.731.2s4.161 0 6.928-.2a2.844 2.844 0 0 0 1.985-.84 4.27 4.27 0 0 0 .787-1.965c.124-1.064.19-2.135.2-3.206V6.243a30.672 30.672 0 0 0-.202-3.206ZM8.008 9.59V3.97l5.4 2.819-5.4 2.8Z" clip-rule="evenodd"></path>
                                </svg>
                            </a>
                            <button type="button" class="text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5 w-10 h-10 inline-flex items-center justify-center">
                                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                                    <path d="M17.8 13.75a1 1 0 0 0-.859-.5A7.488 7.488 0 0 1 10.52 2a1 1 0 0 0 0-.969A1.035 1.035 0 0 0 9.687.5h-.113a9.5 9.5 0 1 0 8.222 14.247 1 1 0 0 0 .004-.997Z"></path>
                                </svg>
                            </button>

                            @guest
                            <a class="inline-flex items-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center ml-1 md:ml-3" href="/login/">
                                <span class="hidden md:inline">Connexion</span>
                                <svg class="hidden w-3 h-3 ml-2 xl:inline" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"></path>
                                </svg>
                            </a>
                            @else

                            <button id="dropdownInformationButton" data-dropdown-toggle="dropdownInformation" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">Dashboard <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                              </svg>
                            </button>

                        <!-- Dropdown menu -->
                              <div id="dropdownInformation" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                            <div class="px-4 py-3 text-sm text-gray-900 dark:text-white">
                            <div>Bonnie Green</div>
                            <div class="font-medium truncate">name@flowbite.com</div>
                            </div>
                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownInformationButton">
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                            </li>
                            </ul>
                            <div class="py-2">
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign out</a>
                            </div>
                        </div>
                            @endguest

                        </div>
                    </div>
                </div>
            </div>
        </header>




           @yield('content')

           <footer class="justify-self-end pt-16 pb-8 lg:pt-24 lg:pb-10">
            <div class="px-4 mx-auto max-w-8xl lg:px-4">
                <div class="grid gap-12 lg:grid-cols-6 lg:gap-18">
                    <div class="col-span-2">
                        <a class="flex mb-6" href="/">
                            <span style="box-sizing: border-box; display: inline-block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: relative; max-width: 100%;">
                                <span style="box-sizing: border-box; display: block; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; max-width: 100%;"><img alt="" aria-hidden="true" src="data:image/svg+xml,%3csvg%20xmlns=%27http://www.w3.org/2000/svg%27%20version=%271.1%27%20width=%2732%27%20height=%2733%27/%3e" style="display: block; max-width: 100%; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px;"></span>
                                <img alt="Flowbite Logo" src="/images/logo.svg" decoding="async" data-nimg="intrinsic" style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%;" srcset="/images/logo.svg 1x, /images/logo.svg 2x">
                            </span>
                            <span class="self-center ml-3 text-2xl font-semibold text-gray-900 dark:text-white">KGS INFORMATIQUE</span>
                        </a>
                        <p class="text-gray-600 dark:text-gray-400">
                          KGS Informatique est une plateforme de d'informaticien et  développeurs informatique pour l'entraide
                        </p>
                    </div>
                    <div>
                        <h3 class="mb-6 text-sm font-semibold text-gray-400 uppercase dark:text-white">Resources</h3>
                        <ul>
                            <li class="mb-4"><a href="https://flowbite.com/docs/getting-started/introduction/" class="font-medium text-gray-600 dark:text-gray-400 dark:hover:text-white hover:underline">Politique</a></li>
                            <li class="mb-4"><a class="font-medium text-gray-600 dark:text-gray-400 dark:hover:text-white hover:underline" href="#">Forums</a></li>
                            <li class="mb-4"><a class="font-medium text-gray-600 dark:text-gray-400 dark:hover:text-white hover:underline" href="#">Astuces</a></li>
                            <li class="mb-4"><a class="font-medium text-gray-600 dark:text-gray-400 dark:hover:text-white hover:underline" href="#">Articles</a></li>
                            <li class="mb-4"><a class="font-medium text-gray-600 dark:text-gray-400 dark:hover:text-white hover:underline" href="#">Discutions </a></li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="mb-6 text-sm font-semibold text-gray-400 uppercase dark:text-white">Associations </h3>
                        <ul>
                            <li class="mb-4"><a class="font-medium text-gray-600 dark:text-gray-400 dark:hover:text-white hover:underline" href="/contact/">CDG COCODYU </a></li>
                            <li class="mb-4"><a class="font-medium text-gray-600 dark:text-gray-400 dark:hover:text-white hover:underline" href="/dashboard/support/">DJANGO GIRL </a></li>
                            <li class="mb-4 flex items-center">
                                <a class="font-medium text-gray-600 dark:text-gray-400 dark:hover:text-white hover:underline" href="/work-with-us/">EHUB</a>
                                <span class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300 ml-2">JOURNNE DU CODE </span>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="mb-6 text-sm font-semibold text-gray-400 uppercase dark:text-white">NOS PAGES </h3>
                        <ul>
                            <li class="mb-4"><a href="#" rel="noreferrer nofollow" class="font-medium text-gray-600 dark:text-gray-400 dark:hover:text-white hover:underline">Discord</a></li>
                            <li class="mb-4"><a href="#" rel="noreferrer nofollow" class="font-medium text-gray-600 dark:text-gray-400 dark:hover:text-white hover:underline">Github</a></li>
                            <li class="mb-4"><a href="#" rel="noreferrer nofollow" class="font-medium text-gray-600 dark:text-gray-400 dark:hover:text-white hover:underline">Twitter</a></li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="mb-6 text-sm font-semibold text-gray-400 uppercase dark:text-white">Legal</h3>
                        <ul>
                            <li class="mb-4"><a class="font-medium text-gray-600 dark:text-gray-400 dark:hover:text-white hover:underline" href="/license/">Politique d'utilisation</a></li>
                            <li class="mb-4"><a class="font-medium text-gray-600 dark:text-gray-400 dark:hover:text-white hover:underline" href="/privacy-policy/">A propos de nous </a></li>
                            <li class="mb-4"><a class="font-medium text-gray-600 dark:text-gray-400 dark:hover:text-white hover:underline" href="/terms-and-conditions/">Termes &amp; conditions</a></li>
                            <li class="mb-4"><a class="font-medium text-gray-600 dark:text-gray-400 dark:hover:text-white hover:underline" href="/brand/">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <hr class="my-8 border-gray-200 dark:border-gray-700 lg:my-12">
                <span class="block font-normal text-center text-gray-600 dark:text-gray-400">© 2022-2023 KGS INFORMATIQUE™ est une marque déposée. Tous droits réservés.</span>
            </div>
        </footer>
         @livewireScripts
         <script>
            tinymce.init({
              selector: 'textarea',
              plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
              toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
            });
          </script>
    </body>
</html>
