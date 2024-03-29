<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Streamer and Youtuber HTML Template">
        <meta name="author" content="Dan Fisher">
        <meta name="keywords" content="youtube, streamer, stream, creator">
        <!-- Favicons -->
        <link rel="shortcut icon" href="{{ asset('assets/img/main/favicons/favicon.ico') }}">
        <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('assets/img/main/favicons/favicon-120.png') }}">
        <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('assets/img/main/favicons/favicon-152.png') }}">
        <!-- Mobile Specific Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@400;500;700&amp;family&#x3D;Rock+Salt&display=swap"
            rel="stylesheet">
        <!-- Tailwind CSS CDN -->
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
        <!-- Vendor CSS -->
        <link href="{{ asset('assets/vendors/common/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/vendors/common/swiper/css/swiper-bundle.min.css') }}" rel="stylesheet">
        <!-- Template CSS -->
        <link href="{{ asset('assets/css/main/style.css') }}" rel="stylesheet">
    </head>

    <body
        class="relative z-10 antialiased font-base text-gray-500 text-sm font-medium h-full bg-white dark:bg-gray-800 overflow-x-hidden dark:text-gray lg:text-base">
        <div id="site-wrapper" class="flex flex-col h-full js-site-wrapper">
            @include('layouts.navigation_main')
            <main id="main-content" class="grow lg:pt-0">
                {{ $slot }}
            </main>
        </div>
        <footer id="site-footer">

            <div class="bg-gray-50 py-12 dark:bg-gray-900 sm:py-16 md:py-20 lg:py-24 xl:py-[104px]">
                <div class="mx-auto max-w-[1440px] px-5">
                    <div class="grid grid-cols-1 items-baseline justify-center gap-y-10 lg:grid-cols-[20%_1fr_20%]">
                        <div class="justify-self-center lg:justify-self-start">
                            <a href="_main-index.html">
                                <svg width="96" height="26" viewBox="0 0 96 26" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path class="fill-primary" fill-rule="evenodd" clip-rule="evenodd"
                                        d="M0 7.60599C2.352 7.60599 4.563 7.60599 6.864 7.60599C6.572 10.313 6.284 12.971 5.984 15.752C7.056 15.752 8.037 15.752 9.142 15.752C8.708 17.967 8.3 20.051 7.892 22.135C7.941 22.154 7.989 22.176 8.038 22.196C10.029 19.206 12.019 16.217 14.103 13.087C13.013 13.087 12.067 13.087 10.951 13.087C12.134 11.192 13.224 9.44599 14.368 7.61299C15.827 7.61299 17.417 7.61299 19.083 7.61299C18.995 7.90399 18.941 8.13599 18.856 8.35699C16.767 13.794 14.666 19.227 12.597 24.672C12.4 25.193 12.16 25.374 11.592 25.355C10.234 25.312 8.872 25.327 7.512 25.349C7.074 25.357 6.819 25.271 6.642 24.817C4.504 19.34 2.341 13.872 0.19 8.39999C0.105 8.18199 0.079 7.94199 0 7.60599Z">
                                    </path>
                                    <path class="fill-gray-900 dark:fill-white" fill-rule="evenodd" clip-rule="evenodd"
                                        d="M95.992 16.602C95.992 17.984 95.997 19.364 95.991 20.744C95.977 23.573 94.489 25.177 91.706 25.251C89.598 25.308 87.486 25.254 85.377 25.267C84.756 25.272 84.465 25.026 84.467 24.369C84.477 19.183 84.476 13.999 84.468 8.81299C84.467 8.26999 84.66 7.927 85.222 7.931C87.58 7.946 89.947 7.86199 92.294 8.03199C94.66 8.20399 95.94 9.768 95.985 12.207C96.014 13.67 95.991 15.136 95.992 16.602ZM88.044 22.097C88.999 22.097 89.882 22.098 90.763 22.096C92.125 22.092 92.446 21.802 92.462 20.424C92.486 18.453 92.476 16.482 92.466 14.511C92.462 13.723 92.432 12.936 92.398 12.15C92.372 11.508 91.987 11.144 91.397 11.12C90.297 11.075 89.196 11.107 88.044 11.107C88.044 14.777 88.044 18.37 88.044 22.097Z">
                                    </path>
                                    <path class="fill-gray-900 dark:fill-white" fill-rule="evenodd" clip-rule="evenodd"
                                        d="M48.739 18.348C47.533 19.292 46.956 20.395 47.152 21.9C47.26 22.729 47.166 23.588 47.173 24.432C47.177 24.996 46.902 25.26 46.359 25.26C45.721 25.261 45.082 25.257 44.443 25.261C43.887 25.264 43.648 24.982 43.648 24.423C43.652 19.211 43.653 14 43.645 8.789C43.645 8.171 43.931 7.921 44.504 7.922C47.638 7.931 47.141 7.621 47.169 10.427C47.186 12.044 47.173 13.66 47.173 15.47C48.719 13.155 50.165 11.036 51.56 8.883C52.005 8.194 52.549 7.881 53.351 7.912C54.192 7.945 55.034 7.919 55.876 7.919C55.913 8.015 55.949 8.11 55.986 8.207C55.806 8.535 55.656 8.884 55.443 9.188C54.055 11.158 52.669 13.127 51.248 15.073C50.938 15.498 50.91 15.789 51.205 16.246C52.841 18.792 54.446 21.358 56.038 23.934C56.228 24.241 56.268 24.643 56.379 25.002C56.044 25.088 55.713 25.197 55.374 25.257C53.651 25.556 52.529 24.882 51.722 23.267C50.872 21.571 49.763 20.01 48.739 18.348Z">
                                    </path>
                                    <path class="fill-gray-900 dark:fill-white" fill-rule="evenodd" clip-rule="evenodd"
                                        d="M23.837 7.91999C26.734 7.92099 26.211 7.72499 26.885 10.308C28.077 14.872 29.252 19.439 30.434 24.007C30.736 25.172 30.67 25.259 29.474 25.262C27.191 25.268 27.191 25.268 26.602 23.056C26.573 22.948 26.539 22.837 26.534 22.726C26.492 21.899 26.058 21.685 25.28 21.737C24.175 21.812 23.06 21.776 21.951 21.747C21.512 21.736 21.302 21.878 21.214 22.323C21.072 23.038 20.851 23.738 20.706 24.454C20.583 25.058 20.263 25.307 19.657 25.269C19.076 25.235 18.491 25.269 17.909 25.259C17.045 25.245 16.934 25.1 17.155 24.243C17.98 21.034 18.813 17.827 19.642 14.62C20.112 12.798 20.585 10.978 21.053 9.15699C21.334 8.06299 21.497 7.92799 22.589 7.92099C23.004 7.91799 23.421 7.91999 23.837 7.91999ZM25.631 18.836C25.036 16.412 24.469 14.107 23.902 11.8C23.857 11.804 23.812 11.807 23.767 11.81C23.199 14.138 22.631 16.466 22.053 18.835C23.246 18.836 24.375 18.836 25.631 18.836Z">
                                    </path>
                                    <path class="fill-gray-900 dark:fill-white" fill-rule="evenodd" clip-rule="evenodd"
                                        d="M69.921 21.069C70.426 18.674 70.899 16.429 71.371 14.185C71.754 12.372 72.155 10.563 72.514 8.74499C72.627 8.16399 72.932 7.92299 73.48 7.92199C74.146 7.92099 74.813 7.90499 75.477 7.92399C76.332 7.94799 76.492 8.17299 76.272 9.04299C75.175 13.369 74.073 17.694 72.973 22.019C72.766 22.836 72.553 23.651 72.354 24.47C72.223 25.011 71.915 25.276 71.348 25.266C70.351 25.248 69.352 25.257 68.353 25.262C67.806 25.263 67.505 25.026 67.363 24.459C66.056 19.288 64.73 14.122 63.405 8.95599C63.232 8.28799 63.426 7.91399 64.148 7.92299C67.541 7.96599 66.907 7.45499 67.548 10.48C68.284 13.94 69.016 17.401 69.75 20.861C69.755 20.886 69.781 20.902 69.921 21.069Z">
                                    </path>
                                    <path class="fill-gray-900 dark:fill-white" fill-rule="evenodd" clip-rule="evenodd"
                                        d="M35.842 22.08C37.714 22.08 39.434 22.112 41.152 22.067C41.972 22.044 42.221 22.386 42.213 23.169C42.192 25.417 42.351 25.269 40.215 25.264C37.938 25.258 35.66 25.243 33.384 25.274C32.598 25.285 32.303 25.003 32.307 24.19C32.331 19.117 32.329 14.044 32.308 8.97C32.305 8.203 32.583 7.907 33.33 7.914C36.258 7.94 35.825 7.67 35.838 10.419C35.856 13.941 35.842 17.466 35.842 20.988C35.842 21.319 35.842 21.65 35.842 22.08Z">
                                    </path>
                                    <path class="fill-gray-900 dark:fill-white" fill-rule="evenodd" clip-rule="evenodd"
                                        d="M61.602 16.588C61.602 19.122 61.579 21.656 61.616 24.189C61.628 25.005 61.329 25.324 60.545 25.269C60.048 25.235 59.546 25.243 59.048 25.267C58.325 25.301 58.071 24.953 58.073 24.246C58.087 19.149 58.09 14.055 58.07 8.95901C58.067 8.17701 58.4 7.90901 59.122 7.91701C62.045 7.94401 61.572 7.64601 61.599 10.34C61.618 12.421 61.602 14.506 61.602 16.588Z">
                                    </path>
                                    <path class="fill-gray-900 dark:fill-white" fill-rule="evenodd" clip-rule="evenodd"
                                        d="M81.431 16.678C81.431 19.184 81.407 21.69 81.444 24.195C81.456 25.016 81.146 25.285 80.368 25.272C77.595 25.228 77.915 25.57 77.911 22.804C77.902 18.271 77.908 13.739 77.908 9.206C77.909 8.055 78.028 7.922 79.121 7.922C81.82 7.924 81.406 7.701 81.428 10.259C81.444 12.399 81.431 14.538 81.431 16.678Z">
                                    </path>
                                    <path class="fill-primary" fill-rule="evenodd" clip-rule="evenodd"
                                        d="M61.43 2C61.43 3.001 61.43 3.967 61.43 4.98C60.435 4.98 59.485 4.98 58.485 4.98C58.485 3.976 58.485 3.01 58.485 2C59.479 2 60.429 2 61.43 2Z">
                                    </path>
                                    <path class="fill-primary" fill-rule="evenodd" clip-rule="evenodd"
                                        d="M81.487 4.99701C80.505 4.99701 79.573 4.99701 78.582 4.99701C78.582 4.01001 78.582 3.04201 78.582 2.01501C79.523 2.01501 80.475 2.01501 81.487 2.01501C81.487 2.97101 81.487 3.93801 81.487 4.99701Z">
                                    </path>
                                </svg>
                            </a>
                        </div>

                        <nav>
                            <ul
                                class="flex flex-wrap justify-center gap-x-4 text-base font-bold uppercase tracking-tight sm:gap-x-6 lg:gap-x-7 xl:gap-x-10">
                                <li>
                                    <a class="text-gray-900 transition-colors hover:text-primary dark:text-white dark:hover:text-primary"
                                        href="index">Home</a>
                                </li>
                                <li>
                                    <a class="text-gray-900 transition-colors hover:text-primary dark:text-white dark:hover:text-primary"
                                        href="stream">Stream</a>
                                </li>
                                <li>
                                    <a class="text-gray-900 transition-colors hover:text-primary dark:text-white dark:hover:text-primary"
                                        href="affiliates">Affiliates</a>
                                </li>
                                <li>
                                    <a class="text-gray-900 transition-colors hover:text-primary dark:text-white dark:hover:text-primary"
                                        href="shop-grid-3">Shop</a>
                                </li>
                                <li>
                                    <a class="text-gray-900 transition-colors hover:text-primary dark:text-white dark:hover:text-primary"
                                        href="contact">Contact</a>
                                </li>
                                <li>
                                    <a class="text-gray-900 transition-colors hover:text-primary dark:text-white dark:hover:text-primary"
                                        href="#">Donate</a>
                                </li>
                                <li>
                                    <a class="text-gray-900 transition-colors hover:text-primary dark:text-white dark:hover:text-primary"
                                        href="#">Subscribe</a>
                                </li>
                            </ul>
                        </nav>

                        <!-- Social Links -->
                        <ul class="flex flex-wrap gap-6 justify-self-center lg:gap-4 lg:justify-self-end xl:gap-6">
                            <li>
                                <a class="text-gray-900 transition-colors hover:text-primary dark:text-white dark:hover:text-primary"
                                    href="https://www.facebook.com/danfisher.dev/" title="Facebook">
                                    <svg class="h-4 w-4" fill="currentColor">
                                        <use xlink:href="assets/img/main/social-icons.svg#facebook"></use>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a class="text-gray-900 transition-colors hover:text-primary dark:text-white dark:hover:text-primary"
                                    href="https://twitter.com/danfisher_dev" title="Twitter">
                                    <svg class="h-4 w-4" fill="currentColor">
                                        <use xlink:href="assets/img/main/social-icons.svg#twitter"></use>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a class="text-gray-900 transition-colors hover:text-primary dark:text-white dark:hover:text-primary"
                                    href="https://instagram.com/dan.fisher.dev/" title="Instagram">
                                    <svg class="h-4 w-4" fill="currentColor">
                                        <use xlink:href="assets/img/main/social-icons.svg#instagram"></use>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a class="text-gray-900 transition-colors hover:text-primary dark:text-white dark:hover:text-primary"
                                    href="https://twitch.tv/" title="Twitch">
                                    <svg class="h-4 w-4" fill="currentColor">
                                        <use xlink:href="assets/img/main/social-icons.svg#twitch"></use>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a class="text-gray-900 transition-colors hover:text-primary dark:text-white dark:hover:text-primary"
                                    href="https://discord.com" title="Discord">
                                    <svg class="h-4 w-4" fill="currentColor">
                                        <use xlink:href="assets/img/main/social-icons.svg#discord"></use>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a class="text-gray-900 transition-colors hover:text-primary dark:text-white dark:hover:text-primary"
                                    href="https://patreon.com" title="Patreon">
                                    <svg class="h-4 w-4" fill="currentColor">
                                        <use xlink:href="assets/img/main/social-icons.svg#patreon"></use>
                                    </svg>
                                </a>
                            </li>
                        </ul>
                        <!-- Social Links / End -->

                    </div>
                </div>
            </div>

            <div class="bg-primary py-8">
                <div class="mx-auto max-w-[1440px] px-5">
                    <div
                        class="flex flex-col flex-wrap items-center justify-between gap-y-2 text-center text-sm font-bold leading-6 tracking-tight text-white md:flex-row">
                        <div>
                            Developed & Designed by
                            <a class="vv-link-underline" href="https://dan-fisher.dev" target="_blank">Dan Fisher</a>
                            &
                            <a class="vv-link-underline" href="https://odindesignthemes.com" target="_blank">Odin
                                Design</a>
                            -
                            <span class="whitespace-nowrap"> All Rights Reserved 2023</span>
                        </div>
                        <nav>
                            <ul
                                class="flex flex-wrap gap-x-6 [&>li:not(:first-child)]:before:absolute [&>li:not(:first-child)]:before:top-1/2 [&>li:not(:first-child)]:before:-left-3 [&>li:not(:first-child)]:before:h-2.5 [&>li:not(:first-child)]:before:w-[1px] [&>li:not(:first-child)]:before:-translate-y-1/2 [&>li:not(:first-child)]:before:bg-white [&>li]:relative">
                                <li>
                                    <a class="vv-link-underline" href="#">Terms of Service</a>
                                </li>
                                <li>
                                    <a class="vv-link-underline" href="#">Privacy Policy</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </footer>
        <dialog id="login-register"
            class="js-vv-modal mx-auto w-[470px] max-w-[90%] border-none bg-transparent p-0 backdrop:bg-gray-900/90">
            <div class="pt-[22px]">
                <div class="bg-white dark:bg-gray-700 shadow-3xl overflow-y-auto">
                    <div
                        class="relative overflow-hidden isolate flex h-28 items-center bg-primary px-6 md:px-10 lg:h-[140px]">
                        <div class="relative z-[4] text-white sm:ml-[56%]">
                            <h4
                                class="text-2xl leading-none font-bold mb-1 lg:text-3xl xl:text-[38px] xl:leading-[0.74em] tracking-tighter uppercase">
                                <span>Login &</span>
                                <span class="block xl:leading-none xl:text-[32px]">Register</span>
                            </h4>
                            <div class="font-bold leading-none uppercase tracking-tighter">I’m glad to see you here!
                            </div>
                        </div>
                        <svg class="absolute left-0 top-0 w-full h-full -z-20" fill="none" viewBox="0 0 470 140">
                            <defs>
                                <pattern id="dotted-pattern" x="0" y="0" width="26" height="26"
                                    patternUnits="userSpaceOnUse">
                                    <rect x="0" y="0" width="3" height="3" class="text-white/30"
                                        fill="currentColor" />
                                </pattern>
                            </defs>
                            <rect width="470" height="140" fill="url(#dotted-pattern)" />
                        </svg>
                        <img class="hidden sm:block absolute left-0 top-0 h-full z-[5] object-cover aspect-[251/140]"
                            src="{{ asset('assets/img/main/samples/modal-header-hero.png') }}" alt="">
                    </div>
                    <div>
                        <div class="tabs">
                            <nav class="tabs__header overflow-hidden">
                                <ul class="grid grid-cols-2 gap-x-[1px] dark:bg-gray-500/20">
                                    <li class="tabs__header-item is-active group">
                                        <a href="#"
                                            class="flex justify-center uppercase tracking-tighter border-b bg-gray-50 dark:bg-gray-800 group-[.is-active]:bg-white border-gray-500/20 py-4 text-center font-bold text-gray-600 transition-colors hover:text-gray-900 dark:hover:text-white group-[.is-active]:text-primary dark:group-[.is-active]:border-gray-700 group-[.is-active]:border-white dark:group-[.is-active]:bg-gray-700 dark:group-[.is-active]:hover:text-primary">Login</a>
                                    </li>
                                    <li class="tabs__header-item group flex-1">
                                        <a href="#"
                                            class="flex justify-center uppercase tracking-tighter border-b bg-gray-50 dark:bg-gray-800 group-[.is-active]:bg-white border-gray-500/20 py-4 text-center font-bold text-gray-600 transition-colors hover:text-gray-900 dark:hover:text-white group-[.is-active]:text-primary dark:group-[.is-active]:border-gray-700 group-[.is-active]:border-white dark:border-gray-500/20 dark:group-[.is-active]:bg-gray-700 dark:group-[.is-active]:hover:text-primary">Register</a>
                                    </li>
                                </ul>
                            </nav>
                            <div class="tabs__content py-6 px-6 lg:px-10 lg:py-9">
                                <div class="tabs__content-item">
                                    <x-login-form />
                                </div>
                                <div class="tabs__content-item">
                                    <x-register-form />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </dialog>
        </div>

        <!-- Scripts -->
        <!-- Vendors JS -->
        <script src="{{ asset('assets/vendors/common/glightbox/js/glightbox.min.js') }}"></script>
        <script src="{{ asset('assets/vendors/common/swiper/js/swiper-bundle.min.js') }}"></script>

        <!-- Template JS -->
        <script src="{{ asset('assets/js/main/common.js') }}"></script>
        <script src="{{ asset('assets/js/main/init.js') }}"></script>
    </body>

</html>
