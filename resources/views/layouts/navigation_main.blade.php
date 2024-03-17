    <div class="header-wrapper text-white">
        <header id="site-header" class="text-white">
            <div class="mx-auto max-w-[1440px] px-5">
                <nav
                    class="grid grid-cols-[100px_1fr] lg:grid-cols-[21%_1fr_21%] min-h-[64px] gap-x-6 lg:gap-x-11 py-1 lg:min-h-[90px] lg:py-4">

                    <!-- Social Links -->
                    <ul class="flex-wrap gap-3.5 lg:gap-4 xl:gap-6 self-center hidden lg:flex">
                        <li>
                            <a class="text-gray-900 transition-colors hover:text-primary dark:text-white dark:hover:text-primary"
                                href="https://www.facebook.com/danfisher.dev/" title="Facebook">
                                <svg class="w-3.5 xl:w-4 aspect-square" fill="currentColor">
                                    <use xlink:href="assets/img/main/social-icons.svg#facebook"></use>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a class="text-gray-900 transition-colors hover:text-primary dark:text-white dark:hover:text-primary"
                                href="https://twitter.com/danfisher_dev" title="Twitter">
                                <svg class="w-3.5 xl:w-4 aspect-square" fill="currentColor">
                                    <use xlink:href="assets/img/main/social-icons.svg#twitter"></use>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a class="text-gray-900 transition-colors hover:text-primary dark:text-white dark:hover:text-primary"
                                href="https://instagram.com/dan.fisher.dev/" title="Instagram">
                                <svg class="w-3.5 xl:w-4 aspect-square" fill="currentColor">
                                    <use xlink:href="assets/img/main/social-icons.svg#instagram"></use>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a class="text-gray-900 transition-colors hover:text-primary dark:text-white dark:hover:text-primary"
                                href="https://twitch.tv/" title="Twitch">
                                <svg class="w-3.5 xl:w-4 aspect-square" fill="currentColor">
                                    <use xlink:href="assets/img/main/social-icons.svg#twitch"></use>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a class="text-gray-900 transition-colors hover:text-primary dark:text-white dark:hover:text-primary"
                                href="https://discord.com" title="Discord">
                                <svg class="w-3.5 xl:w-4 aspect-square" fill="currentColor">
                                    <use xlink:href="assets/img/main/social-icons.svg#discord"></use>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a class="text-gray-900 transition-colors hover:text-primary dark:text-white dark:hover:text-primary"
                                href="https://patreon.com" title="Patreon">
                                <svg class="w-3.5 xl:w-4 aspect-square" fill="currentColor">
                                    <use xlink:href="assets/img/main/social-icons.svg#patreon"></use>
                                </svg>
                            </a>
                        </li>
                    </ul>
                    <!-- Social Links / End -->
                    <!-- Navigation & Logo -->
                    <div class="grid lg:grid-cols-[1fr_110px_1fr] xl:grid-cols-[1fr_150px_1fr] items-center">
                        <!-- Navigation (Desktop) -->
                        <ul
                            class="hidden lg:gap-x-5 xl:gap-x-8 text-gray-900 dark:text-white lg:text-sm xl:text-base font-bold uppercase tracking-tight lg:flex min-[1260px]:gap-x-10 justify-self-end">
                            <li class="">
                                <a class="relative inline-flex leading-10 transition-colors after:absolute after:bottom-[7px] after:left-0 after:h-[2px] after:transition-transform after:w-full {{ Request::is('/') ? 'after:origin-left after:scale-x-100 text-primary after:bg-primary' : 'after:bg-gray-900 dark:after:bg-white after:origin-right hover:after:origin-left after:scale-x-0 hover:after:scale-x-100 hover:text-primary hover:after:bg-primary dark:hover:after:bg-primary' }}"
                                    href="{{ route('home') }}">
                                    Home
                                </a>
                            </li>
                            <li class="">
                                <a class="relative inline-flex leading-10 transition-colors after:absolute after:bottom-[7px] after:left-0 after:h-[2px] after:transition-transform after:w-full {{ Request::is('stream') ? 'after:origin-left after:scale-x-100 text-primary after:bg-primary' : 'after:bg-gray-900 dark:after:bg-white after:origin-right hover:after:origin-left after:scale-x-0 hover:after:scale-x-100 hover:text-primary hover:after:bg-primary dark:hover:after:bg-primary' }}"
                                    href="{{ route('stream') }}">
                                    Stream
                                </a>
                            </li>
                            <li class="">
                                <a class="relative inline-flex leading-10 transition-colors after:absolute after:bottom-[7px] after:left-0 after:h-[2px] after:transition-transform after:w-full {{ Request::is('affiliates') ? 'after:origin-left after:scale-x-100 text-primary after:bg-primary' : 'after:bg-gray-900 dark:after:bg-white after:origin-right hover:after:origin-left after:scale-x-0 hover:after:scale-x-100 hover:text-primary hover:after:bg-primary dark:hover:after:bg-primary' }}"
                                    href="{{ route('affiliates') }}">
                                    Affiliates
                                </a>
                            </li>
                        </ul>
                        <!-- Navigation (Desktop) / End -->

                        <!-- Logo -->
                        <div class="lg:mx-auto">
                            <a href="{{ route('home') }}">
                                <div
                                    class="relative inline-flex aspect-square w-11 items-center justify-center overflow-hidden rounded-full bg-primary lg:w-[50px]">
                                    <svg class="relative aspect-[37/36] w-6 fill-white lg:w-[26px]" viewBox="0 0 37 36"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M17 16L15 29.001L27 10.001H21L27.363 0H37L25 36H13L0 0H13L11 16H17Z">
                                        </path>
                                    </svg>
                                </div>
                            </a>
                        </div>
                        <!-- Logo / End -->

                        <!-- Navigation (Desktop) -->
                        <ul
                            class="hidden lg:gap-x-5 xl:gap-x-8 text-gray-900 dark:text-white lg:text-sm xl:text-base font-bold uppercase tracking-tight lg:flex min-[1260px]:gap-x-10">
                            <li
                                class="relative pr-5 [&>.sub-menu]:hover:visible [&>.sub-menu]:hover:animate-popper-pop-in [&>.sub-menu]:hover:opacity-100">
                                <a class="relative inline-flex leading-10 transition-colors after:absolute after:bottom-[7px] after:left-0 after:h-[2px] after:transition-transform after:w-full {{ Request::is('shop') ? 'after:origin-left after:scale-x-100 text-primary after:bg-primary' : 'after:bg-gray-900 dark:after:bg-white after:origin-right hover:after:origin-left after:scale-x-0 hover:after:scale-x-100 hover:text-primary hover:after:bg-primary dark:hover:after:bg-primary' }}"
                                    href="{{ route('shop') }}">
                                    Shop
                                    <svg role="img"
                                        class="h-2 w-2 rotate-90 fill-gray-900 dark:fill-white absolute -right-3 top-1/2 -translate-y-1/2">
                                        <use xlink:href="assets/img/main/sprite.svg#arrow-right"></use>
                                    </svg>
                                </a>
                                <ul
                                    class="sub-menu invisible absolute z-20 flex w-40 flex-col bg-white dark:bg-gray-700 py-2.5 text-sm font-bold opacity-0 shadow-2xl transition-all">
                                    <li class="px-5.5">
                                        <a class="flex items-center justify-between py-1.5 transition-colors text-gray-900 hover:text-primary dark:text-white dark:hover:text-primary"
                                            href="{{ route('shop') }}">
                                            Shop Page
                                        </a>
                                    </li>

                                    <li class="px-5.5">
                                        <a class="flex items-center justify-between py-1.5 transition-colors text-gray-900 hover:text-primary dark:text-white dark:hover:text-primary"
                                            href="{{ route('cart') }}">
                                            Cart
                                        </a>
                                    </li>
                                    <li class="px-5.5">
                                        <a class="flex items-center justify-between py-1.5 transition-colors text-gray-900 hover:text-primary dark:text-white dark:hover:text-primary"
                                            href="{{ route('checkout') }}">
                                            Checkout
                                        </a>
                                    </li>
                                    <li class="px-5.5">
                                        <button
                                            class="js-vv-modal__open-btn-login-register flex items-center justify-between py-1.5 transition-colors text-gray-900 hover:text-primary dark:text-white dark:hover:text-primary uppercase"
                                            data-id="login-register">
                                            Login/Register
                                        </button>
                                    </li>
                                    <li class="px-5.5">
                                        <a class="flex items-center justify-between py-1.5 transition-colors text-gray-900 hover:text-primary dark:text-white dark:hover:text-primary"
                                            href="{{ route('account') }}">
                                            Account
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="">
                                <a class="relative inline-flex leading-10 transition-colors after:absolute after:bottom-[7px] after:left-0 after:h-[2px] after:transition-transform after:w-full {{ Request::is('contact') ? 'after:origin-left after:scale-x-100 text-primary after:bg-primary' : 'after:bg-gray-900 dark:after:bg-white after:origin-right hover:after:origin-left after:scale-x-0 hover:after:scale-x-100 hover:text-primary hover:after:bg-primary dark:hover:after:bg-primary' }}"
                                    href="{{ route('contact') }}">
                                    Contact
                                </a>
                            </li>
                            <li class="">
                                <a class="relative inline-flex leading-10 transition-colors after:absolute after:bottom-[7px] after:left-0 after:h-[2px] after:transition-transform after:w-full {{ Request::is('donate') ? 'after:origin-left after:scale-x-100 text-primary after:bg-primary' : 'after:bg-gray-900 dark:after:bg-white after:origin-right hover:after:origin-left after:scale-x-0 hover:after:scale-x-100 hover:text-primary hover:after:bg-primary dark:hover:after:bg-primary' }}"
                                    href="#.html">
                                    Donate
                                </a>
                            </li>
                        </ul>
                        <!-- Navigation (Desktop) / End -->
                    </div>
                    <!-- Navigation & Logo / End -->

                    <!-- Header Controls -->
                    <div class="flex ml-auto items-center">

                        <a class="relative mr-4 hidden h-10 items-center overflow-hidden bg-gradient-to-r from-[#9246ff] to-[#ff46aa] pl-10 text-sm font-bold uppercase tracking-tight transition-all hover:hue-rotate-30 xl:inline-flex min-[1350px]:pr-5"
                            href="#">
                            <svg class="absolute -left-2.5 top-[3px] block h-[46px] w-10" viewBox="0 0 40 46"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M8.5 1.10001H37.1V22.1L25.286 33.1H5.09998L8.5 1.10001Z" fill="white"></path>
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M25.002 37.786H18.333L9.99601 45.1V37.786H-0.00799561V8.214L8.32901 0H40.008V22.1L25.002 37.786ZM36.1 2.1H9.10001V27.1H16.1V33.1L22.1 27.1H29.1L36.1 20.1V2.1ZM27.993 9.004H30.986V18.985H27.993V9.004ZM19.009 9.004H22V18.985H19.009V9.004Z"
                                    fill="black"></path>
                            </svg>
                            <span class="hidden min-[1350px]:block">Subscribe!</span>
                        </a>

                        <div class="flex items-center py-4 px-1 sm:px-2">
                            <label for="theme-toggle" class="relative inline-flex cursor-pointer items-center">
                                <input type="checkbox" value="" id="theme-toggle" class="peer sr-only">
                                <span
                                    class="relative z-10 block h-6 w-11 rounded-full border-2 border-gray-900 after:absolute after:top-0.5 after:left-0.5 after:h-4 after:w-4 after:rounded-full after:bg-gray-900 after:transition-transform peer-checked:after:translate-x-[20px] dark:border-white dark:after:bg-white"></span>
                                <svg role="img"
                                    class="pointer-events-none absolute left-[5px] top-1 h-4 w-4 stroke-gray-900 dark:stroke-white">
                                    <use xlink:href="assets/img/yt1/sprite.svg#sun"></use>
                                </svg>
                                <svg role="img"
                                    class="pointer-events-none absolute right-[5px] top-1 h-4 w-4 stroke-gray-900 dark:stroke-white">
                                    <use xlink:href="assets/img/yt1/sprite.svg#moon"></use>
                                </svg>
                            </label>
                        </div>

                        <div
                            class="relative [&>.sub-menu]:lg:hover:visible [&>.sub-menu]:hover:animate-popper-pop-in [&>.sub-menu]:lg:hover:opacity-100">
                            <a class="block py-4 px-2 xl:px-3" href="{{ route('account') }}">
                                <svg role="img" class="h-6 w-6 fill-gray-900 dark:fill-white">
                                    <use xlink:href="assets/img/main/sprite.svg#user"></use>
                                </svg>
                            </a>

                            <ul
                                class="sub-menu invisible absolute right-full z-20 -mr-9 flex w-40 origin-top-right flex-col bg-white dark:bg-gray-700 py-3 text-sm font-bold opacity-0 shadow-2xl transition-all uppercase">
                                <li class="px-5.5">
                                    <a class="flex flex-row-reverse items-center justify-between py-1.5 text-gray-900 dark:text-white transition-colors hover:text-primary dark:hover:text-primary"
                                        href="{{ route('account-info') }}">
                                        Personal Info
                                    </a>
                                </li>
                                <li class="px-5.5">
                                    <a class="flex flex-row-reverse items-center justify-between py-1.5 text-gray-900 dark:text-white transition-colors hover:text-primary dark:hover:text-primary"
                                        href="{{ route('account-billing') }}">
                                        Billing Details
                                    </a>
                                </li>
                                <li class="px-5.5">
                                    <a class="flex flex-row-reverse items-center justify-between py-1.5 text-gray-900 dark:text-white transition-colors hover:text-primary dark:hover:text-primary"
                                        href="{{ route('account-shipping') }}">
                                        Shipping Details
                                    </a>
                                </li>
                                <li class="px-5.5">
                                    <a class="flex flex-row-reverse items-center justify-between py-1.5 text-gray-900 dark:text-white transition-colors hover:text-primary dark:hover:text-primary"
                                        href="{{ route('account-orders') }}">
                                        Orders
                                    </a>
                                </li>
                                <li class="px-5.5">
                                    <a class="flex flex-row-reverse items-center justify-between py-1.5 text-gray-900 dark:text-white transition-colors hover:text-primary dark:hover:text-primary"
                                        href="#">
                                        Logout
                                    </a>
                                </li>
                            </ul>

                        </div>

                        <div
                            class="relative [&>.sub-menu]:lg:hover:visible [&>.sub-menu]:hover:animate-popper-pop-in [&>.sub-menu]:lg:hover:opacity-100 lg:-mr-2">
                            <a class="relative block py-4 px-1 sm:px-2" href="{{ route('cart') }}">
                                <svg role="img" class="h-6 w-6 fill-gray-900 dark:fill-white">
                                    <use xlink:href="assets/img/main/sprite.svg#shopping-basket"></use>
                                </svg>
                                <span
                                    class="absolute top-1 -right-2 text-3xs font-bold leading-none w-4.5 h-4.5 rounded-full bg-primary inline-flex justify-center items-center">2</span>
                            </a>

                            <div
                                class="sub-menu invisible absolute right-2 z-20 w-[360px] origin-top-right bg-white dark:bg-gray-700 py-9 text-gray-900 dark:text-white opacity-0 shadow-2xl transition-all">
                                <!-- Products -->
                                <ul class="flex flex-col gap-y-4.5 text-sm">
                                    <!-- List items with product details -->
                                </ul>
                                <!-- Cart Buttons -->
                                <!-- Cart Buttons / End -->
                            </div>

                        </div>

                        <button class="js-menu-toggle -mr-2 ml-2 inline-flex py-4 px-2 sm:px-3 lg:hidden xl:px-4">
                            <svg role="img"
                                class="js-menu-toggle-icon-open h-6 w-6 fill-gray-900 dark:fill-white">
                                <use xlink:href="assets/img/main/sprite.svg#menu"></use>
                            </svg>
                            <svg role="img"
                                class="js-menu-toggle-icon-close hidden h-6 w-6 fill-gray-900 dark:fill-white">
                                <use xlink:href="assets/img/main/sprite.svg#menu-close"></use>
                            </svg>
                        </button>

                    </div>

                    <!-- Header Controls / End -->

                </nav>
            </div>
        </header>

    </div>

    <!-- Mobile Menu -->
    <div
        class="js-mobile-menu p-t-[64px] fixed left-0 top-[64px] z-50 block h-[calc(100dvh-64px)] w-full translate-x-full overflow-auto bg-white dark:bg-gray-700 py-5 text-primary dark:text-white transition-transform duration-300 lg:hidden">
        <div class="container">
            <!-- Navigation (Mobile) -->
            <ul class="flex flex-col font-bold">
                <li
                    class="flex flex-wrap items-center gap-x-4 border-b border-b-gray-200/50 dark:border-b-gray-200/10">
                    <a class="flex-grow gap-x-1 py-4 uppercase leading-normal text-gray-900 transition-colors hover:text-primary dark:text-white dark:hover:text-primary {{ request()->is('/') ? 'active' : '' }}"
                        href="{{ route('home') }}">
                        Home
                    </a>
                </li>
                <li
                    class="flex flex-wrap items-center gap-x-4 border-b border-b-gray-200/50 dark:border-b-gray-200/10">
                    <a class="flex-grow gap-x-1 py-4 uppercase leading-normal text-gray-900 transition-colors hover:text-primary dark:text-white dark:hover:text-primary {{ request()->is('stream') ? 'active' : '' }}"
                        href="{{ route('stream') }}">
                        Stream
                    </a>
                </li>
                <li
                    class="flex flex-wrap items-center gap-x-4 border-b border-b-gray-200/50 dark:border-b-gray-200/10">
                    <a class="flex-grow gap-x-1 py-4 uppercase leading-normal text-gray-900 transition-colors hover:text-primary dark:text-white dark:hover:text-primary {{ request()->is('affiliates') ? 'active' : '' }}"
                        href="{{ route('affiliates') }}">
                        Affiliates
                    </a>
                </li>
                <li
                    class="flex flex-wrap items-center gap-x-4 border-b border-b-gray-200/50 dark:border-b-gray-200/10">
                    <a class="flex-grow gap-x-1 py-4 uppercase leading-normal text-gray-900 transition-colors hover:text-primary dark:text-white dark:hover:text-primary {{ request()->is('shop') ? 'active' : '' }}"
                        href="{{ route('shop') }}">
                        Shop
                    </a>
                    <button
                        class="js-mobile-submenu-toggle ml-auto inline-flex h-7 w-7 items-center justify-center transition-transform">
                        <svg role="img" class="sub-menu-toggle h-2 w-2 rotate-90 fill-primary dark:fill-white">
                            <use xlink:href="assets/img/main/sprite.svg#arrow-right"></use>
                        </svg>
                    </button>
                    <ul
                        class="flex max-h-0 w-full flex-col overflow-hidden pl-4 text-sm transition-all duration-300 [&>li:last-child]:pb-4">
                        <li class="flex flex-wrap items-center gap-x-4">
                            <a class="flex-grow gap-x-1 py-2 text-gray-900 transition-colors hover:text-primary dark:text-white dark:hover:text-primary"
                                href="{{ route('shop') }}">
                                Shop Page
                            </a>
                        </li>

                        <li class="flex flex-wrap items-center gap-x-4">
                            <a class="flex-grow gap-x-1 py-2 text-gray-900 transition-colors hover:text-primary dark:text-white dark:hover:text-primary"
                                href="{{ route('cart') }}">
                                Cart
                            </a>
                        </li>
                        <li class="flex flex-wrap items-center gap-x-4">
                            <a class="flex-grow gap-x-1 py-2 text-gray-900 transition-colors hover:text-primary dark:text-white dark:hover:text-primary"
                                href="{{ route('checkout') }}">
                                Checkout
                            </a>
                        </li>
                        <li class="flex flex-wrap items-center gap-x-4">
                            <button
                                class="js-vv-modal__open-btn-login-register flex-grow gap-x-1 py-2 text-left text-gray-900 transition-colors hover:text-primary dark:text-white dark:hover:text-primary"
                                data-id="login-register">
                                Login/Register
                            </button>
                        </li>
                        <li class="flex flex-wrap items-center gap-x-4">
                            <a class="flex-grow gap-x-1 py-2 text-gray-900 transition-colors hover:text-primary dark:text-white dark:hover:text-primary"
                                href="{{ route('account') }}">
                                Account
                            </a>
                        </li>
                    </ul>
                </li>
                <li
                    class="flex flex-wrap items-center gap-x-4 border-b border-b-gray-200/50 dark:border-b-gray-200/10">
                    <a class="flex-grow gap-x-1 py-4 uppercase leading-normal text-gray-900 transition-colors hover:text-primary dark:text-white dark:hover:text-primary {{ request()->is('contact') ? 'active' : '' }}"
                        href="{{ route('contact') }}">
                        Contact
                    </a>
                </li>
                <li
                    class="flex flex-wrap items-center gap-x-4 border-b border-b-gray-200/50 dark:border-b-gray-200/10">
                    <a class="flex-grow gap-x-1 py-4 uppercase leading-normal text-gray-900 transition-colors hover:text-primary dark:text-white dark:hover:text-primary {{ request()->is('donate') ? 'active' : '' }}"
                        href="{{ route('donate') }}">
                        Donate
                    </a>
                </li>
            </ul>
            <!-- Navigation (Mobile) / End -->

            <ul class="flex flex-wrap gap-5 pt-8">
                <li>
                    <a class="text-primary transition-colors hover:text-primary dark:text-white dark:hover:text-primary"
                        href="https://www.facebook.com/danfisher.dev/" title="Facebook">
                        <svg class="h-4 w-4" fill="currentColor">
                            <use xlink:href="assets/img/main/social-icons.svg#facebook"></use>
                        </svg>
                    </a>
                </li>
                <li>
                    <a class="text-primary transition-colors hover:text-primary dark:text-white dark:hover:text-primary"
                        href="https://twitter.com/danfisher_dev" title="Twitter">
                        <svg class="h-4 w-4" fill="currentColor">
                            <use xlink:href="assets/img/main/social-icons.svg#twitter"></use>
                        </svg>
                    </a>
                </li>
                <li>
                    <a class="text-primary transition-colors hover:text-primary dark:text-white dark:hover:text-primary"
                        href="https://instagram.com/dan.fisher.dev/" title="Instagram">
                        <svg class="h-4 w-4" fill="currentColor">
                            <use xlink:href="assets/img/main/social-icons.svg#instagram"></use>
                        </svg>
                    </a>
                </li>
                <li>
                    <a class="text-primary transition-colors hover:text-primary dark:text-white dark:hover:text-primary"
                        href="https://twitch.tv/" title="Twitch">
                        <svg class="h-4 w-4" fill="currentColor">
                            <use xlink:href="assets/img/main/social-icons.svg#twitch"></use>
                        </svg>
                    </a>
                </li>
                <li>
                    <a class="text-primary transition-colors hover:text-primary dark:text-white dark:hover:text-primary"
                        href="https://discord.com" title="Discord">
                        <svg class="h-4 w-4" fill="currentColor">
                            <use xlink:href="assets/img/main/social-icons.svg#discord"></use>
                        </svg>
                    </a>
                </li>
                <li>
                    <a class="text-primary transition-colors hover:text-primary dark:text-white dark:hover:text-primary"
                        href="https://patreon.com" title="Patreon">
                        <svg class="h-4 w-4" fill="currentColor">
                            <use xlink:href="assets/img/main/social-icons.svg#patreon"></use>
                        </svg>
                    </a>
                </li>
            </ul>
        </div>

        <!-- Mobile Menu / End -->
</div>