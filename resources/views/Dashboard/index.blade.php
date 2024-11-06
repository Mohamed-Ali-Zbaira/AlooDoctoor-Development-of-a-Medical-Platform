<!doctype html>
<html lang="en" class="dark">

<!-- Mirrored from flowbite-admin-dashboard.vercel.app/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Mar 2024 08:27:25 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8"/><!-- /Added by HTTrack -->
@include('Inc.Dashboard.Head')


<body class="bg-gray-50 dark:bg-gray-800">


@include('Inc.Dashboard.NavDash')


<div class="flex pt-16 overflow-hidden bg-gray-50 dark:bg-gray-900">

    @include('Inc.Dashboard.sidebar')

    <div class="fixed inset-0 z-10 hidden bg-gray-900/50 dark:bg-gray-900/90" id="sidebarBackdrop"></div>
    <br>
    <div id="main-content" class="relative w-full h-full overflow-y-auto bg-gray-50 lg:ml-64 dark:bg-gray-900 ">
        <main>
            <div class="px-4 pt-6">
                <!-- les trois cards -->
                <div class="grid w-full grid-cols-1 gap-4 mt-4 xl:grid-cols-3 2xl:grid-cols-3">
                    <div
                        class="items-center justify-between p-4 bg-white border border-gray-200 rounded-lg shadow-sm sm:flex dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                        <div class="w-full">
                            <h3 class="text-base font-normal text-gray-500 dark:text-gray-400">Articles</h3>
                            <span class="text-2xl font-bold leading-none text-gray-900 sm:text-3xl dark:text-white">2,340</span>
                            <p class="flex items-center text-base font-normal text-gray-500 dark:text-gray-400">
            <span class="flex items-center mr-1.5 text-sm text-green-500 dark:text-green-400">
              <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"
                   aria-hidden="true">
                <path clip-rule="evenodd" fill-rule="evenodd"
                      d="M10 17a.75.75 0 01-.75-.75V5.612L5.29 9.77a.75.75 0 01-1.08-1.04l5.25-5.5a.75.75 0 011.08 0l5.25 5.5a.75.75 0 11-1.08 1.04l-3.96-4.158V16.25A.75.75 0 0110 17z"></path>
              </svg>
              12.5%
            </span>
                                Since last month
                            </p>
                        </div>
                        <div class="w-full" id="new-products-chart"></div>
                    </div>
                    <div
                        class="items-center justify-between p-4 bg-white border border-gray-200 rounded-lg shadow-sm sm:flex dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                        <div class="w-full">
                            <h3 class="text-base font-normal text-gray-500 dark:text-gray-400">Rendez-vous</h3>
                            <span class="text-2xl font-bold leading-none text-gray-900 sm:text-3xl dark:text-white">2,340</span>
                            <p class="flex items-center text-base font-normal text-gray-500 dark:text-gray-400">
            <span class="flex items-center mr-1.5 text-sm text-green-500 dark:text-green-400">
              <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"
                   aria-hidden="true">
                <path clip-rule="evenodd" fill-rule="evenodd"
                      d="M10 17a.75.75 0 01-.75-.75V5.612L5.29 9.77a.75.75 0 01-1.08-1.04l5.25-5.5a.75.75 0 011.08 0l5.25 5.5a.75.75 0 11-1.08 1.04l-3.96-4.158V16.25A.75.75 0 0110 17z"></path>
              </svg>
              12.5%
            </span>
                                Since last month
                            </p>
                        </div>
                        <div class="w-full" id="new-products-chart"></div>
                    </div>

                    <div
                        class="items-center justify-between p-4 bg-white border border-gray-200 rounded-lg shadow-sm sm:flex dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                        <div class="w-full">
                            <h3 class="text-base font-normal text-gray-500 dark:text-gray-400">Patient</h3>
                            <span class="text-2xl font-bold leading-none text-gray-900 sm:text-3xl dark:text-white">2,340</span>
                            <p class="flex items-center text-base font-normal text-gray-500 dark:text-gray-400">
            <span class="flex items-center mr-1.5 text-sm text-green-500 dark:text-green-400">
              <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"
                   aria-hidden="true">
                <path clip-rule="evenodd" fill-rule="evenodd"
                      d="M10 17a.75.75 0 01-.75-.75V5.612L5.29 9.77a.75.75 0 01-1.08-1.04l5.25-5.5a.75.75 0 011.08 0l5.25 5.5a.75.75 0 11-1.08 1.04l-3.96-4.158V16.25A.75.75 0 0110 17z"></path>
              </svg>
              3,4%
            </span>
                                Since last month
                            </p>
                        </div>
                        <div class="w-full" id="week-signups-chart"></div>
                    </div>

                </div>
                <!-- les trois cards -->
                <br>
                <div
                    class="p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 dark:border-gray-700 sm:p-6 dark:bg-gray-800">

                    <section class="w-full py-12 md:py-24 lg:py-32">
                        <div class="container px-4 md:px-6">
                            <div class="flex flex-col items-center justify-center space-y-4 text-center">
                                <div class="space-y-2"><h1 class="text-3xl font-bold tracking-tighter sm:text-5xl">
                                        Bienvenue Mr. {{ Auth::user()->full_name }}


                                    </h1>
                                    <p class="max-w-[600px] text-gray-500 md:text-xl/relaxed lg:text-base/relaxed xl:text-xl/relaxed dark:text-gray-400">

                                        Bienvenue sur AlooDoctoor, votre nouveau compagnon de santé en ligne. Avec une
                                        interface conviviale et des fonctionnalités avancées, AlooDoctoor simplifie la
                                        prise de rendez-vous, les consultations en ligne et le suivi médical. Notre
                                        plateforme vous offre un accès facile à une gamme complète de services de santé,
                                        vous permettant de prendre soin de vous où que vous soyez. Découvrez dès
                                        maintenant comment AlooDoctoor peut améliorer votre bien-être et révolutionner
                                        votre expérience de soins de santé.
                                    </p></div>
                                <div class="flex flex-col gap-2 min-[400px] flex-row">
                                    <button style="background-color: #0e54b7;"
                                            class="inline-flex h-10 items-center justify-center rounded-md border border-gray-200 border-gray-200 px-8 text-sm font-medium shadow-sm transition-colors hover:bg-gray-100 hover:text-gray-900 focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-gray-950 disabled:pointer-events-none disabled:opacity-50 dark:border-gray-800 dark:border-gray-800 dark:bg-gray-950 dark:hover:bg-gray-800 dark:hover:text-gray-50 dark:focus-visible:ring-gray-300">
                                        Visiter AlooDoctoor
                                    </button>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>

            </div>
        </main>

        @include('Inc.Dashboard.footer')

    </div>

</div>


@include('Inc.Dashboard.scripts')

</body>

<!-- Mirrored from flowbite-admin-dashboard.vercel.app/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Mar 2024 08:27:34 GMT -->
</html>
