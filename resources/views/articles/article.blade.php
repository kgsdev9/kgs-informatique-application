@extends('master.master')

@section('content')
<div class="w-full px-4 mx-auto max-w-8xl">
    <div class="lg:flex">

      <aside id="sidebar" class="fixed inset-0 z-20 flex-none hidden h-full w-72 lg:static lg:h-auto lg:overflow-y-visible lg:pt-0 lg:w-48 lg:block" aria-labelledby="sidebar-label">
        <h4 id="sidebar-label" class="sr-only">Browse docs</h4>
        <div id="navWrapper" class="overflow-y-auto z-20 h-full bg-white scrolling-touch max-w-2xs lg:h-[calc(100vh-3rem)] lg:block lg:sticky top:24 lg:top-28 dark:bg-gray-900 lg:mr-0">
    <nav id="nav" class="pt-16 px-1 pl-3 lg:pl-0 lg:pt-2 font-normal text-base lg:text-sm pb-10 lg:pb-20 sticky?lg:h-(screen-18)" aria-label="Docs navigation"><ul class="mb-0 list-unstyled">
          <li class="mt-8">
            <h5 class="mb-2 text-sm font-semibold tracking-wide text-gray-900 uppercase lg:text-xs dark:text-white">Getting started</h5>
            <ul class="py-1 list-unstyled fw-normal small">
                <li>
                  <a href="https://flowbite.com/docs/getting-started/introduction/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Introduction </a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/getting-started/quickstart/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Quickstart </a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/getting-started/typescript/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">TypeScript </a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/getting-started/license/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">License </a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/getting-started/changelog/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Changelog </a>
                </li>
            </ul>
          </li>
          <li class="mt-8">
            <h5 class="mb-2 text-sm font-semibold tracking-wide text-gray-900 uppercase lg:text-xs dark:text-white">Integration guides</h5>
            <ul class="py-1 list-unstyled fw-normal small">
                <li>
                  <a href="https://flowbite.com/docs/getting-started/react/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">React </a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/getting-started/next-js/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Next.js </a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/getting-started/vue/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Vue </a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/getting-started/nuxt-js/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Nuxt </a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/getting-started/svelte/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Svelte </a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/getting-started/angular/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Angular <span><span class="bg-blue-100 text-blue-800 text-2xs font-semibold ml-2 px-1.5 py-0.5 rounded dark:bg-gray-700 dark:text-blue-400 border border-blue-100 dark:border-blue-400">NEW</span></span></a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/getting-started/astro/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Astro </a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/getting-started/remix/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Remix </a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/getting-started/meteor-js/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Meteor.js <span><span class="bg-blue-100 text-blue-800 text-2xs font-semibold ml-2 px-1.5 py-0.5 rounded dark:bg-gray-700 dark:text-blue-400 border border-blue-100 dark:border-blue-400">NEW</span></span></a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/getting-started/gatsby/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Gatsby </a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/getting-started/solid-js/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">SolidJS </a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/getting-started/qwik/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Qwik </a>
                </li>
                <li>
                  <a href="index.html" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white  !text-blue-700 hover:!text-blue-700 dark:!text-blue-500 dark:hover:!text-blue-500" aria-current="page">Laravel <span><span class="bg-blue-100 text-blue-800 text-2xs font-semibold ml-2 px-1.5 py-0.5 rounded dark:bg-gray-700 dark:text-blue-400 border border-blue-100 dark:border-blue-400">NEW</span></span></a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/getting-started/symfony/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Symfony </a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/getting-started/rails/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Rails </a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/getting-started/phoenix/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Phoenix </a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/getting-started/django/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Django </a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/getting-started/flask/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Flask </a>
                </li>
            </ul>
          </li>
          <li class="mt-8">
            <h5 class="mb-2 text-sm font-semibold tracking-wide text-gray-900 uppercase lg:text-xs dark:text-white">Customize</h5>
            <ul class="py-1 list-unstyled fw-normal small">
                <li>
                  <a href="https://flowbite.com/docs/customize/configuration/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Configuration </a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/customize/dark-mode/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Dark mode </a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/customize/theming/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Theming </a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/customize/colors/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Colors </a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/customize/icons/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Icons </a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/customize/optimization/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Optimization </a>
                </li>
            </ul>
          </li>
          <li class="mt-8">
            <h5 class="mb-2 text-sm font-semibold tracking-wide text-gray-900 uppercase lg:text-xs dark:text-white">Components</h5>
            <ul class="py-1 list-unstyled fw-normal small">
                <li>
                  <a href="https://flowbite.com/docs/components/accordion/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Accordion </a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/components/alerts/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Alerts </a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/components/avatar/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Avatar </a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/components/badge/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Badge </a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/components/banner/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Banner </a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/components/bottom-navigation/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Bottom Navigation </a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/components/breadcrumb/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Breadcrumb </a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/components/buttons/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Buttons </a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/components/button-group/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Button Group </a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/components/card/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Card </a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/components/carousel/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Carousel </a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/components/device-mockups/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Device Mockups </a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/components/drawer/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Drawer </a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/components/dropdowns/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Dropdowns </a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/components/footer/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Footer </a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/components/forms/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Forms </a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/components/gallery/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Gallery </a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/components/indicators/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Indicators </a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/components/jumbotron/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Jumbotron </a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/components/kbd/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">KBD </a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/components/list-group/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">List Group </a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/components/mega-menu/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Mega menu </a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/components/modal/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Modal </a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/components/navbar/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Navbar </a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/components/pagination/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Pagination </a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/components/popover/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Popover </a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/components/progress/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Progress </a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/components/rating/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Rating </a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/components/sidebar/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Sidebar </a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/components/skeleton/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Skeleton </a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/components/speed-dial/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Speed Dial </a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/components/spinner/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Spinner </a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/components/stepper/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Stepper </a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/components/tables/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Tables </a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/components/tabs/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Tabs </a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/components/timeline/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Timeline </a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/components/toast/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Toast </a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/components/tooltips/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Tooltips </a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/components/typography/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Typography </a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/components/video/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Video </a>
                </li>
            </ul>
          </li>
          <li class="mt-8">
            <h5 class="mb-2 text-sm font-semibold tracking-wide text-gray-900 uppercase lg:text-xs dark:text-white">Forms</h5>
            <ul class="py-1 list-unstyled fw-normal small">
                <li>
                  <a href="https://flowbite.com/docs/forms/input-field/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Input Field </a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/forms/file-input/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">File Input </a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/forms/search-input/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Search Input </a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/forms/select/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Select </a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/forms/textarea/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Textarea </a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/forms/checkbox/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Checkbox </a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/forms/radio/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Radio </a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/forms/toggle/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Toggle </a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/forms/range/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Range </a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/forms/floating-label/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Floating Label </a>
                </li>
            </ul>
          </li>
          <li class="mt-8">
            <h5 class="mb-2 text-sm font-semibold tracking-wide text-gray-900 uppercase lg:text-xs dark:text-white">Typography</h5>
            <ul class="py-1 list-unstyled fw-normal small">
                <li>
                  <a href="https://flowbite.com/docs/typography/headings/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Headings </a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/typography/paragraphs/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Paragraphs </a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/typography/blockquote/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Blockquote </a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/typography/images/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Images </a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/typography/lists/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Lists </a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/typography/links/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Links </a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/typography/text/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Text </a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/typography/hr/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">HR </a>
                </li>
            </ul>
          </li>
          <li class="mt-8">
            <h5 class="mb-2 text-sm font-semibold tracking-wide text-gray-900 uppercase lg:text-xs dark:text-white">Plugins</h5>
            <ul class="py-1 list-unstyled fw-normal small">
                <li>
                  <a href="https://flowbite.com/docs/plugins/charts/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Charts <span><span class="bg-blue-100 text-blue-800 text-2xs font-semibold ml-2 px-1.5 py-0.5 rounded dark:bg-gray-700 dark:text-blue-400 border border-blue-100 dark:border-blue-400">NEW</span></span></a>
                </li>
                <li>
                  <a href="https://flowbite.com/docs/plugins/datepicker/" data-sidebar-item="" class="py-2 transition-colors duration-200 relative flex items-center flex-wrap font-medium hover:text-gray-900 text-gray-500 dark:text-gray-400 dark:hover:text-white ">Datepicker </a>
                </li>
            </ul>
          </li>
      </ul>
    </nav>
  </div>


      </aside>

      <div class="fixed inset-0 z-10 hidden bg-gray-900/50 dark:bg-gray-900/60" id="sidebarBackdrop"></div>

      <main id="content-wrapper" class="flex-auto w-full min-w-0 lg:static lg:max-h-full lg:overflow-visible">
        <div class="flex w-full">


          <div class="flex-auto max-w-4xl min-w-0 pt-6 lg:px-8 lg:pt-8 pb:12 xl:pb-24 lg:pb-16">


            <div class="pb-4 mb-8 border-b border-gray-200 dark:border-gray-800">



                <aside class="mb-5" aria-label="Integration requires Laravel">
                  <span class="inline-flex items-center justify-between px-1 py-1 pr-4 text-sm text-gray-700 bg-gray-100 rounded-full dark:bg-gray-800 dark:text-white">
                    <span class="text-xs text-[#ff2d20] rounded-full bg-white dark:bg-gray-900 px-3 py-1.5 mr-3">
                    <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="laravel" class="w-4 h-4" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M504.4,115.83a5.72,5.72,0,0,0-.28-.68,8.52,8.52,0,0,0-.53-1.25,6,6,0,0,0-.54-.71,9.36,9.36,0,0,0-.72-.94c-.23-.22-.52-.4-.77-.6a8.84,8.84,0,0,0-.9-.68L404.4,55.55a8,8,0,0,0-8,0L300.12,111h0a8.07,8.07,0,0,0-.88.69,7.68,7.68,0,0,0-.78.6,8.23,8.23,0,0,0-.72.93c-.17.24-.39.45-.54.71a9.7,9.7,0,0,0-.52,1.25c-.08.23-.21.44-.28.68a8.08,8.08,0,0,0-.28,2.08V223.18l-80.22,46.19V63.44a7.8,7.8,0,0,0-.28-2.09c-.06-.24-.2-.45-.28-.68a8.35,8.35,0,0,0-.52-1.24c-.14-.26-.37-.47-.54-.72a9.36,9.36,0,0,0-.72-.94,9.46,9.46,0,0,0-.78-.6,9.8,9.8,0,0,0-.88-.68h0L115.61,1.07a8,8,0,0,0-8,0L11.34,56.49h0a6.52,6.52,0,0,0-.88.69,7.81,7.81,0,0,0-.79.6,8.15,8.15,0,0,0-.71.93c-.18.25-.4.46-.55.72a7.88,7.88,0,0,0-.51,1.24,6.46,6.46,0,0,0-.29.67,8.18,8.18,0,0,0-.28,2.1v329.7a8,8,0,0,0,4,6.95l192.5,110.84a8.83,8.83,0,0,0,1.33.54c.21.08.41.2.63.26a7.92,7.92,0,0,0,4.1,0c.2-.05.37-.16.55-.22a8.6,8.6,0,0,0,1.4-.58L404.4,400.09a8,8,0,0,0,4-6.95V287.88l92.24-53.11a8,8,0,0,0,4-7V117.92A8.63,8.63,0,0,0,504.4,115.83ZM111.6,17.28h0l80.19,46.15-80.2,46.18L31.41,63.44Zm88.25,60V278.6l-46.53,26.79-33.69,19.4V123.5l46.53-26.79Zm0,412.78L23.37,388.5V77.32L57.06,96.7l46.52,26.8V338.68a6.94,6.94,0,0,0,.12.9,8,8,0,0,0,.16,1.18h0a5.92,5.92,0,0,0,.38.9,6.38,6.38,0,0,0,.42,1v0a8.54,8.54,0,0,0,.6.78,7.62,7.62,0,0,0,.66.84l0,0c.23.22.52.38.77.58a8.93,8.93,0,0,0,.86.66l0,0,0,0,92.19,52.18Zm8-106.17-80.06-45.32,84.09-48.41,92.26-53.11,80.13,46.13-58.8,33.56Zm184.52,4.57L215.88,490.11V397.8L346.6,323.2l45.77-26.15Zm0-119.13L358.68,250l-46.53-26.79V131.79l33.69,19.4L392.37,178Zm8-105.28-80.2-46.17,80.2-46.16,80.18,46.15Zm8,105.28V178L455,151.19l33.68-19.4v91.39h0Z"></path></svg></span> <span class="text-sm font-medium">Requires Laravel</span>
                  </span>
                </aside>































              <h1 class="inline-block mb-2 text-3xl font-extrabold tracking-tight text-gray-900 dark:text-white" id="content">Tailwind CSS Laravel - Flowbite</h1>
              <p class="mb-4 text-lg text-gray-600 dark:text-gray-400">Learn how to install Tailwind CSS with Flowbite using Laravel Mix and start building modern websites with the most popular PHP framework in the world</p>
            </div>

            <div id="mainContent">

              <p>Laravel is the most popular PHP web framework based on the model-view-controller (MCV) model that helps you build modern web applications and API’s.</p>
  <p>Use the officially recommended Tailwind CSS utility-first framework and the UI components from Flowbite to enhance your front-end development process.</p>

  <h2 class="relative group">Install Tailwind CSS with Laravel
  <span id="install-tailwind-css-with-laravel" class="absolute -top-[140px]"></span> <a class="ml-2 text-blue-700 opacity-0 transition-opacity dark:text-blue-500 group-hover:opacity-100" href="#install-tailwind-css-with-laravel" aria-label="Link to this section: Install Tailwind CSS with Laravel">#</a></h2><p>Make sure that you have <a href="https://getcomposer.org/" rel="nofollow">Composer</a> and <a href="https://nodejs.org/en/" rel="nofollow">Node.js</a> installed locally on your computer.</p>
  <p>Follow the next steps to install Tailwind CSS and Flowbite with Laravel Mix.</p>
  <ol>
  <li>Require the Laravel Installer globally using Composer:</li>
  </ol>
  <div class="highlight"><pre class="chroma"><code class="language-bash" data-lang="bash">composer global require laravel/installer
  </code></pre></div><p>Make sure to place the vendor bin directory in your PATH. Here’s how you can do it based on each OS:</p>
  <ul>
  <li>macOS: <code>export PATH="$PATH:$HOME/.composer/vendor/bin"</code></li>
  <li>Windows: <code>set PATH=%PATH%;%USERPROFILE%\AppData\Roaming\Composer\vendor\bin</code></li>
  <li>Linux: <code>export PATH="~/.config/composer/vendor/bin:$PATH"</code></li>
  </ul>
  <ol start="2">
  <li>Create a new project using Laravel’s CLI:</li>
  </ol>
  <div class="highlight"><pre class="chroma"><code class="language-bash" data-lang="bash">laravel new awesome-project

  <span class="nb">cd</span> awesome-project
  </code></pre></div><p>Start the development server using the following command:</p>
  <div class="highlight"><pre class="chroma"><code class="language-bash" data-lang="bash">php artisan serve
  </code></pre></div><p>You can now access the Laravel application on <code>http://localhost:8000</code>.</p>
  <p>This command will initialize a blank Laravel project that you can get started with.</p>
  <ol start="4">
  <li>Install Tailwind CSS and Flowbite using NPM:</li>
  </ol>
  <div class="highlight"><pre class="chroma"><code class="language-javascript" data-lang="javascript"><span class="nx">npm</span> <span class="nx">install</span> <span class="o">-</span><span class="nx">D</span> <span class="nx">tailwindcss</span> <span class="nx">postcss</span> <span class="nx">autoprefixer</span> <span class="nx">flowbite</span>
  </code></pre></div><ol start="5">
  <li>Create a Tailwind CSS config file:</li>
  </ol>
  <div class="highlight"><pre class="chroma"><code class="language-bash" data-lang="bash">npx tailwindcss init -p
  </code></pre></div><p>A new <code>tailwind.config.js</code> file will be created inside your root folder.</p>
  <ol start="6">
  <li>Add the view paths and require Flowbite as a plugin inside <code>tailwind.config.js</code>:</li>
  </ol>
  <div class="highlight"><pre class="chroma"><code class="language-javascript" data-lang="javascript"><span class="nx">module</span><span class="p">.</span><span class="nx">exports</span> <span class="o">=</span> <span class="p">{</span>
      <span class="nx">content</span><span class="o">:</span> <span class="p">[</span>
        <span class="s2">"./resources/**/*.blade.php"</span><span class="p">,</span>
        <span class="s2">"./resources/**/*.js"</span><span class="p">,</span>
        <span class="s2">"./resources/**/*.vue"</span><span class="p">,</span>
        <span class="s2">"./node_modules/flowbite/**/*.js"</span>
      <span class="p">],</span>
      <span class="nx">theme</span><span class="o">:</span> <span class="p">{</span>
        <span class="nx">extend</span><span class="o">:</span> <span class="p">{},</span>
      <span class="p">},</span>
      <span class="nx">plugins</span><span class="o">:</span> <span class="p">[</span>
          <span class="nx">require</span><span class="p">(</span><span class="s1">'flowbite/plugin'</span><span class="p">)</span>
      <span class="p">],</span>
    <span class="p">}</span>
  </code></pre></div><p>This will tell the compiler from Tailwind what files to look for to properly apply the classes inside the final CSS file and it will also install the extra plugin options from Flowbite.</p>
  <ol start="7">
  <li>Add the directives inside the <code>./resources/css/app.css</code> file:</li>
  </ol>
  <div class="highlight"><pre class="chroma"><code class="language-css" data-lang="css"><span class="p">@</span><span class="k">tailwind</span> <span class="nt">base</span><span class="p">;</span>
  <span class="p">@</span><span class="k">tailwind</span> <span class="nt">components</span><span class="p">;</span>
  <span class="p">@</span><span class="k">tailwind</span> <span class="nt">utilities</span><span class="p">;</span>
  </code></pre></div><ol start="8">
  <li>Make sure your compiled CSS and JS is included in the <code>&lt;head&gt;</code> then start using Tailwind’s utility classes to style your content.</li>
  </ol>
  <div class="highlight"><pre class="chroma"><code class="language-javascript" data-lang="javascript"><span class="err">@</span><span class="nx">vite</span><span class="p">([</span><span class="s1">'resources/css/app.css'</span><span class="p">,</span><span class="s1">'resources/js/app.js'</span><span class="p">])</span>
  </code></pre></div><ol start="9">
  <li>Import the Flowbite JavaScript package inside the <code>./resources/js/app.js</code> file to enable the interactive components such as modals, dropdowns, navbars, and more.</li>
  </ol>
  <div class="highlight"><pre class="chroma"><code class="language-javascript" data-lang="javascript"><span class="kr">import</span> <span class="s1">'flowbite'</span><span class="p">;</span>
  </code></pre></div><p>Alternatively, you can also include the JavaScript file using CDN:</p>
  <div class="highlight"><pre class="chroma"><code class="language-html" data-lang="html"><span class="p">&lt;</span><span class="nt">script</span> <span class="na">src</span><span class="o">=</span><span class="s">"https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"</span><span class="p">&gt;&lt;/</span><span class="nt">script</span><span class="p">&gt;</span>
  </code></pre></div><p>Now that you’ve set everything up start up a local development server using <code>php artisan serve</code> and run the build process for Vite by using <code>npm run dev</code> or build it for production using <code>npm run build</code>.</p>

  <h2 class="relative group">Flowbite components
  <span id="flowbite-components" class="absolute -top-[140px]"></span> <a class="ml-2 text-blue-700 opacity-0 transition-opacity dark:text-blue-500 group-hover:opacity-100" href="#flowbite-components" aria-label="Link to this section: Flowbite components">#</a></h2><p>Now that you have successfully installed the project you can start using the UI components from Flowbite and Tailwind CSS to develop modern websites and web applications.</p>
  <p>We recommend exploring the components using the search bar navigation (<code>cmd</code> or <code>ctrl</code> + <code>k</code>) or by browsing the components section of the sidebar on the left side of this page.</p>
  <!-- ## Boilerplate Github Repository

  Download or clone the Flowbite Laravel Github boilerplate repository to get access to a project that already has Laravel, Tailwind CSS, and Flowbite set up for development.

  ```bash
  git clone ...
  ``` --><blockquote>
  </blockquote>


              <aside class="flex mt-6 mb-8 font-medium leading-6" aria-label="Previous and next page navigation">

                  <a class="flex items-center justify-center mr-8 text-gray-500 transition-colors duration-200 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white" href="https://flowbite.com/docs/getting-started/qwik/"><svg class="w-3.5 h-3.5 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5H1m0 0 4 4M1 5l4-4"></path>
                  </svg>Qwik</a>


                <a class="flex items-center justify-center ml-auto text-right text-gray-500 transition-colors duration-200 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white" href="https://flowbite.com/docs/getting-started/symfony/">Symfony<svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"></path>
                </svg></a>

              </aside>

              <aside class="p-4 my-8 bg-white border border-gray-200 rounded-lg shadow-md sm:p-6 lg:p-8 dark:bg-gray-800 dark:border-gray-700" aria-label="Subscribe to the Flowbite newsletter">
                <h3 class="mb-3 text-xl font-medium text-gray-900 dark:text-white">Get more updates...</h3>
                <p class="mb-5 text-sm font-medium text-gray-500 dark:text-gray-300">Do you want to get notified when a new component is added to Flowbite? Sign up for our newsletter and you'll be among the first to find out about new features, components, versions, and tools.</p>
                <script src="../../../../f.convertkit.com/ckjs/ck.5.html"></script>
                <form action="https://app.convertkit.com/forms/4692392/subscriptions" class="seva-form formkit-form" method="post" data-sv-form="4692392" data-uid="344e3b5c48" data-format="inline" data-version="5" data-options="{&quot;settings&quot;:{&quot;after_subscribe&quot;:{&quot;action&quot;:&quot;message&quot;,&quot;success_message&quot;:&quot;Success! Now check your email to confirm your subscription.&quot;,&quot;redirect_url&quot;:&quot;&quot;},&quot;analytics&quot;:{&quot;google&quot;:null,&quot;fathom&quot;:null,&quot;facebook&quot;:null,&quot;segment&quot;:null,&quot;pinterest&quot;:null,&quot;sparkloop&quot;:null,&quot;googletagmanager&quot;:null},&quot;modal&quot;:{&quot;trigger&quot;:&quot;timer&quot;,&quot;scroll_percentage&quot;:null,&quot;timer&quot;:5,&quot;devices&quot;:&quot;all&quot;,&quot;show_once_every&quot;:15},&quot;powered_by&quot;:{&quot;show&quot;:true,&quot;url&quot;:&quot;https://convertkit.com/features/forms?utm_campaign=poweredby&amp;utm_content=form&amp;utm_medium=referral&amp;utm_source=dynamic&quot;},&quot;recaptcha&quot;:{&quot;enabled&quot;:false},&quot;return_visitor&quot;:{&quot;action&quot;:&quot;show&quot;,&quot;custom_content&quot;:&quot;&quot;},&quot;slide_in&quot;:{&quot;display_in&quot;:&quot;bottom_right&quot;,&quot;trigger&quot;:&quot;timer&quot;,&quot;scroll_percentage&quot;:null,&quot;timer&quot;:5,&quot;devices&quot;:&quot;all&quot;,&quot;show_once_every&quot;:15},&quot;sticky_bar&quot;:{&quot;display_in&quot;:&quot;top&quot;,&quot;trigger&quot;:&quot;timer&quot;,&quot;scroll_percentage&quot;:null,&quot;timer&quot;:5,&quot;devices&quot;:&quot;all&quot;,&quot;show_once_every&quot;:15}},&quot;version&quot;:&quot;5&quot;}" min-width="400 500 600 700 800">
                    <div data-style="clean" class="flex items-end mb-3">
                        <ul class="formkit-alert formkit-alert-error" data-element="errors" data-group="alert"></ul>
                        <div data-element="fields" data-stacked="false" class="flex items-center w-full max-w-md mb-3 seva-fields formkit-fields">
                            <div class="relative w-full mr-3 formkit-field">
                                <label for="member_email" class="hidden block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Email address</label>
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none">
                                  <svg class="w-3.5 h-3.5 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 16">
                                    <path d="m10.036 8.278 9.258-7.79A1.979 1.979 0 0 0 18 0H2A1.987 1.987 0 0 0 .641.541l9.395 7.737Z"></path>
                                    <path d="M11.241 9.817c-.36.275-.801.425-1.255.427-.428 0-.845-.138-1.187-.395L0 2.6V14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2.5l-8.759 7.317Z"></path>
                                  </svg>
                                </div>
                                <input id="member_email" class="formkit-input bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="email_address" aria-label="Email Address" placeholder="Your email address..." required="" type="email">
                            </div>
                            <button data-element="submit" class="formkit-submit">
                                <div class="formkit-spinner">
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                </div>
                                <span class="px-5 py-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg cursor-pointer hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Subscribe</span>
                            </button>
                        </div>
                    </div>
                </form>
                <div class="text-sm font-medium text-gray-500 dark:text-gray-300">By subscribing, you agree with ConvertKit's <a rel="nofollow" href="https://convertkit.com/terms" class="text-blue-600 hover:underline dark:text-blue-500">Terms of Service</a> and <a rel="nofollow" class="text-blue-600 hover:underline dark:text-blue-500" href="https://convertkit.com/privacy">Privacy Policy</a>.</div>
              </aside>

            </div>
          </div>


          <div class="flex-none hidden w-64 pl-8 mr-8 xl:text-sm xl:block">

            <div class="flex overflow-y-auto sticky top-28 flex-col justify-between pt-10 pb-6 h-[calc(100vh-5rem)]">
              <div class="mb-8">
                <h4 class="pl-2.5 mb-2 text-sm font-semibold tracking-wide text-gray-900 uppercase dark:text-white lg:text-xs">On this page</h4>
                <nav id="TableOfContents">
    <ul>
      <li><a href="#install-tailwind-css-with-laravel" class="!border-blue-700 !after:opacity-100 !text-blue-700 dark:!border-blue-500 dark:!text-blue-500">Install Tailwind CSS with Laravel</a></li>
      <li><a href="#flowbite-components" class="">Flowbite components</a></li>
    </ul>
  </nav>

                <aside class="w-52 mt-6 mx-auto border-t border-gray-200 dark:border-gray-700 pt-8">
                  <a href="https://www.enhanceui.com/?ref=flowbite-sidebar" class="block rounded-lg" rel="nofollow noopener noreferrer" target="_blank">
                    <img src="https://flowbite.com/docs/images/book-light.svg" class="shadow mb-3 w-36 dark:hidden" alt="Enhance UI book cover light mode">
                    <img src="https://flowbite.com/docs/images/book-dark.svg" class="shadow mb-3 w-36 hidden dark:block" alt="Enhance UI book cover dark mode">
                    <h4 class="text-base font-semibold text-gray-900 mb-1.5 dark:text-white">Learn Design Concepts</h4>
                    <p class="text-gray-500 dark:text-gray-400">Make better Flowbite pages by learning the fundamentals of design</p>
                    <div class="border-t border-gray-200 dark:border-gray-700 pt-2 mt-2">
                      <h5 class="font-medium text-gray-900 dark:text-white">Teach Me Design</h5>
                      <p class="text-gray-500 dark:text-gray-400">by Adrian Twarog</p>
                    </div>
                  </a>
                </aside>
              </div>
            </div>

          </div>
        </div>

      </main>

    </div>
  </div>

@endsection
