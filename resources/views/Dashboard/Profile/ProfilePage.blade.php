<!doctype html>
<html lang="en" class="dark">

<!-- Mirrored from flowbite-admin-dashboard.vercel.app/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Mar 2024 08:27:25 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

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


                    <div class="grid grid-cols-1 xl:grid-cols-3 xl:gap-4 dark:bg-gray-900">
                        <div class="mb-4 col-span-full xl:mb-2">
                            <nav class="flex mb-5" aria-label="Breadcrumb">
                                <ol class="inline-flex items-center space-x-1 text-sm font-medium md:space-x-2">
                                    <li class="inline-flex items-center">
                                        <a href="#"
                                            class="inline-flex items-center text-gray-700 hover:text-primary-600 dark:text-gray-300 dark:hover:text-white">
                                            <svg class="w-5 h-5 mr-2.5" fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z">
                                                </path>
                                            </svg>
                                            Home
                                        </a>
                                    </li>
                                    <li>
                                        <div class="flex items-center">
                                            <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                            <a href="#"
                                                class="ml-1 text-gray-700 hover:text-primary-600 md:ml-2 dark:text-gray-300 dark:hover:text-white">Users</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="flex items-center">
                                            <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                            <span class="ml-1 text-gray-400 md:ml-2 dark:text-gray-500"
                                                aria-current="page">Settings</span>
                                        </div>
                                    </li>
                                </ol>
                            </nav>
                            <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white">User settings
                            </h1>
                        </div>
                        <!-- Right Content -->
                        <div class="col-span-full xl:col-auto">
                            <div
                                class="p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                                <div
                                    class="items-center sm:flex xl:block 2xl:flex sm:space-x-4 xl:space-x-0 2xl:space-x-4 justify-center">
                                    <img class="mb-4 rounded-lg w-40 h-40 sm:mb-0 xl:mb-4 2xl:mb-0 mx-auto"
                                        src="{{ $user->image }}" alt="Jese picture">

                                </div>

                            </div>
                            <div
                                class="p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                                <div
                                    class="items-center sm:flex xl:block 2xl:flex sm:space-x-4 xl:space-x-0 2xl:space-x-4 justify-center">

                                    <div class="text-center">
                                        <h4 class="mb-1 text-xl font-bold text-gray-900 dark:text-white">
                                            {{ $user->full_name }}</h4>
                                        <div class="mb-4 text-sm text-blue-500 dark:text-black-400">
                                            <h5 class="flex items-center justify-center">
                                                <svg class="h-5 w-5 text-blue mr-2" width="8" height="8"
                                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" />
                                                    <rect x="3" y="7" width="18" height="13" rx="2" />
                                                    <path d="M8 7v-2a2 2 0 0 1 2 -2h4a2 2 0 0 1 2 2v2" />
                                                    <line x1="12" y1="12" x2="12" y2="12.01" />
                                                    <path d="M3 13a20 20 0 0 0 18 0" />
                                                </svg>
                                                <span class="text-black">{{ $user->speciality }}</span>
                                            </h5>
                                        </div>
                                        <div class="mb-4 text-sm text-black-500 dark:text-gray-400">
                                            <h2 class="flex items-center justify-center">
                                                <svg class="h-5 w-5 text-blue-400" fill="none" viewBox="0 0 24 24"
                                                    stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                                </svg>
                                                Sfax
                                            </h2>
                                            <br>
                                            <div class="mb-4 flex items-center justify-center">
                                                <svg class="h-5 w-5 text-blue-400" width="24" height="24"
                                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" />
                                                    <path
                                                        d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" />
                                                </svg>
                                                &nbsp;
                                                <span
                                                    class="block mr-2 text-sm font-medium text-gray-900 dark:text-green"style="color: rgb(12, 115, 234);">Phone
                                                    number:</span>
                                                <span
                                                    class="block mr-2 text-sm font-medium">{{ $user->numero_telephone }}</span>
                                            </div>
                                            <div class="mb-4 flex items-center justify-center">
                                                <svg class="h-5 w-5 text-blue-400" width="24" height="24"
                                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" />
                                                    <path d="M17.788 5.108A9 9 0 1021 12h-8" />
                                                </svg>
                                                &nbsp;
                                                <span
                                                    class="block mr-2 text-sm font-medium text-gray-900 dark:text-green"style="color: rgb(12, 115, 234);">Email
                                                    address:</span>
                                                <span class="block mr-2 text-sm font-medium">{{ $user->email }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div
                                class="p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                                <h3 class="mb-4 text-xl font-semibold dark:text-white">Account Information</h3>
                                <div class="mb-4">
                                    <span class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Account
                                        Creation Date: {{ $user->created_at }}</span>
                                </div>
                                <div class="mb-4">
                                    <span class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Last
                                        Update: {{ $user->updated_at }}</span>
                                </div>
                                <div class="mb-4 flex items-center">
                                    <span class="block mr-2 text-sm font-medium text-gray-900 dark:text-green">Account
                                        Status:</span>
                                    <span class="block mr-2 text-sm font-medium" style="color: green;">Verified</span>
                                    <svg class="h-5 w-5 text-blue-400" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                                    </svg>
                                </div>


                            </div>



                        </div>
                        <div class="col-span-2">
                            <div
                                class="p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                                <h3 class="mb-4 text-xl font-semibold dark:text-white">General information</h3>
                                <form action="#">
                                    <div class="grid grid-cols-6 gap-6">
                                        <div class="col-span-6 sm:col-span-3">
                                            <label
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                                <h2 style="color: rgb(12, 115, 234);">lieu de travail</h2>
                                            </label>
                                            <p class="mb-3 text-gray-500 dark:text-gray-400">
                                                <span class="inline-block align-middle mr-1">
                                                    <svg class="h-5 w-5 text-blue-500" fill="none"
                                                        viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                                    </svg>
                                                </span>
                                                <span class="inline-block align-middle">{{ $user->NomClinic }}</span>
                                            </p>
                                        </div>
                                        <div class="col-span-6 sm:col-span-3">
                                            <label
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                                <h2 style="color: rgb(12, 115, 234);">langue parles</h2>
                                            </label>
                                            <p class="mb-3 text-gray-500 dark:text-gray-400">
                                                <span class="inline-block align-middle mr-1">
                                                    <svg class="h-5 w-5 text-blue-500" width="24" height="24"
                                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                        fill="none" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" />
                                                        <circle cx="12" cy="12" r="9" />
                                                        <line x1="3.6" y1="9" x2="20.4"
                                                            y2="9" />
                                                        <line x1="3.6" y1="15" x2="20.4"
                                                            y2="15" />
                                                        <path d="M11.5 3a17 17 0 0 0 0 18" />
                                                        <path d="M12.5 3a17 17 0 0 1 0 18" />
                                                    </svg>
                                                </span>
                                                <span
                                                    class="inline-block align-middle">{{ $user->langue_parles }}</span>
                                            </p>
                                        </div>
                                        <div class="col-span-6 sm:col-span-3">
                                            <label
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                                <h2 style="color: rgb(12, 115, 234);">tarifs</h2>
                                            </label>
                                            <p class="mb-3 text-gray-500 dark:text-gray-400">
                                                <span class="inline-block align-middle mr-1">
                                                    <svg class="h-5 w-5 text-blue-500" width="24" height="24"
                                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                        fill="none" stroke-linecap="round"
                                                        stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" />
                                                        <path
                                                            d="M16.7 8a3 3 0 0 0 -2.7 -2h-4a3 3 0 0 0 0 6h4a3 3 0 0 1 0 6h-4a3 3 0 0 1 -2.7 -2" />
                                                        <path d="M12 3v3m0 12v3" />
                                                    </svg>
                                                </span>
                                                <span class="inline-block align-middle">{{ $user->tarifs }}</span>
                                            </p>
                                        </div>
                                        <div class="col-span-6 sm:col-span-3">
                                            <label
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                                <h2 style="color: rgb(12, 115, 234);">disponibilité </h2>
                                            </label>
                                            <p class="mb-3 text-gray-500 dark:text-gray-400">
                                                <span class="inline-block align-middle mr-1">
                                                    <svg class="h-5 w-5 text-blue-500" viewBox="0 0 24 24"
                                                        fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round">
                                                        <circle cx="12" cy="12" r="10" />
                                                        <polyline points="12 6 12 12 16 14" />
                                                    </svg>
                                                </span>
                                                <span class="inline-block align-middle">{{ $user->temps }}</span>
                                            </p>

                                        </div>

                                </form>


                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white ">
                                    <h2 style="color: rgb(12, 115, 234);">description</h2>
                                </label>

                                <p class="mb-3 text-gray-500 dark:text-gray-400">{{ $user->description }} </p>
                            </div>
                            <button class="px-4 py-2 text-white bg-blue-500 rounded-md hover:bg-blue-600 sm:ml-auto"><a
                                    href="{{ route('profiledash.update') }}"
                                    class="px-4 py-2 text-white bg-blue-500 rounded-md hover:bg-blue-600 sm:ml-auto">Update
                                    Profile</a>
                            </button>


                        </div>


                    </div>
            </main>

            @include('Inc.Dashboard.footer')

        </div>

    </div>


    @include('Inc.Dashboard.scripts')
    <script src="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.js"></script>

</body>

<!-- Mirrored from flowbite-admin-dashboard.vercel.app/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Mar 2024 08:27:34 GMT -->

</html>
