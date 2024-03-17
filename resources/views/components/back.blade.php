        <!DOCTYPE html>
        <html lang="en">
            <!-- Added by HTTrack -->
            <meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

            <head>
                <meta charset="UTF-8" />
                <meta http-equiv="X-UA-Compatible" content="IE=edge" />
                <meta name="viewport" content="width=device-width, initial-scale=1.0" />
                <title>
                    eCommerce Dashboard | TailAdmin - Tailwind CSS Admin Dashboard Template
                </title>
                <link rel="icon" href="favicon.ico" />
                <link href="{{ asset('assets/css/back/style.css') }}" rel="stylesheet" />
            </head>

            <body x-data="{ page: 'ecommerce', 'loaded': true, 'darkMode': true, 'stickyMenu': false, 'sidebarToggle': false, 'scrollTop': false }" x-init="darkMode = JSON.parse(localStorage.getItem('darkMode'));
            $watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))"
                :class="{ 'dark text-bodydark bg-boxdark-2': darkMode === true }">
                <!-- ===== Preloader Start ===== -->
                <div x-show="loaded" x-init="window.addEventListener('DOMContentLoaded', () => { setTimeout(() => loaded = false, 500) })"
                    class="fixed left-0 top-0 z-999999 flex h-screen w-screen items-center justify-center bg-white dark:bg-black">
                    <div
                        class="h-16 w-16 animate-spin rounded-full border-4 border-solid border-primary border-t-transparent">
                    </div>
                </div>

                <!-- ===== Preloader End ===== -->

                <!-- ===== Page Wrapper Start ===== -->
                <!-- ===== Page Wrapper Start ===== -->
                <div class="flex h-screen overflow-hidden">
                    <!-- ===== Sidebar Start ===== -->
                    @include('layouts.navigation_back_side')

                    <!-- ===== Sidebar End ===== -->

                    <!-- ===== Content Area Start ===== -->
                    <div class="relative flex flex-1 flex-col overflow-y-auto overflow-x-hidden pb-5">
                        <!-- ===== Header Start ===== -->
                        @include('layouts.navigation_back')
                        <!-- ===== Header End ===== -->

                        <!-- ===== Main Content Start ===== -->
                        <main class="u-min-h-screen">
                            {{ $slot }}
                        </main>
                        <!-- ===== Main Content End ===== -->
                    </div>
                    <!-- ===== Content Area End ===== -->
                </div>
                <!-- ===== Content Area End ===== -->
                </div>
                <!-- ===== Page Wrapper End ===== -->
                <script defer src="{{ asset('assets/js/back/bundle.js') }}"></script>
                <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v84a3a4012de94ce1a686ba8c167c359c1696973893317"
                    integrity="sha512-euoFGowhlaLqXsPWQ48qSkBSCFs3DPRyiwVu3FjR96cMPx+Fr+gpWRhIafcHwqwCqWS42RZhIudOvEI+Ckf6MA=="
                    data-cf-beacon='{"rayId":"8656e3bf8c206fcd","version":"2024.2.4","r":1,"token":"67f7a278e3374824ae6dd92295d38f77","b":1}'
                    crossorigin="anonymous"></script>
            </body>

        </html>
