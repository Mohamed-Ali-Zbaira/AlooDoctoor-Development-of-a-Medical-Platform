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

                        </div>
                    </div>
                    <div class="col-span-full xl:col-auto">
                        <div
                            class="p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                            <h3 class="mb-4 text-xl font-semibold dark:text-white">Update General information</h3>
                            <form method="POST" action="{{ route('profiledash.update') }}">
                                @csrf

                                <div class="grid grid-cols-6 gap-6">
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="full-name"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Full
                                            Name</label>
                                        <input type="text" name="full_name" id="full-name"
                                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                            placeholder="Full Name" required value="{{ $user->full_name }}">
                                    </div>
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="username"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Username</label>
                                        <input type="text" name="username" id="username"
                                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                            placeholder="Username" required value="{{ $user->username }}">
                                    </div>
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="email"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                                        <input type="email" name="email" id="email"
                                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                            placeholder="Email" required value="{{ $user->email }}">
                                    </div>
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="numero_telephone"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone</label>
                                        <input type="tel" name="numero_telephone" id="numero_telephone"
                                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                            placeholder="Phone" required value="{{ $user->numero_telephone }}">
                                    </div>
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="NomClinic"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Clinic
                                            Name</label>
                                        <input type="text" name="NomClinic" id="NomClinic"
                                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                            placeholder="Clinic Name" value="{{ $user->NomClinic }}">
                                    </div>
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="tarifs"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tarifs</label>
                                        <input type="text" name="tarifs" id="tarifs"
                                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                            placeholder="Tarifs" value="{{ $user->tarifs }}">
                                    </div>
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="temps"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Availability</label>
                                        <input type="text" name="temps" id="temps"
                                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                            placeholder="Availability" value="{{ $user->temps }}">
                                    </div>
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="speciality"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Speciality</label>
                                        <input type="text" name="speciality" id="speciality"
                                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                            placeholder="Speciality" value="{{ $user->speciality }}">
                                    </div>
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="localisation_link"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Google
                                            Maps Link</label>
                                        <input type="text" name="localisation_link" id="localisation_link"
                                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                            placeholder="Google Maps Link" value="{{ $user->localisation_link }}">
                                        <p class="text-xs text-gray-500 dark:text-gray-400">Please provide a Google
                                            Maps link.</p>
                                    </div>
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="langue_parles"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Spoken
                                            Language</label>
                                        <input type="text" name="langue_parles" id="langue_parles"
                                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                            placeholder="Spoken Language" value="{{ $user->langue_parles }}">
                                    </div>
                                    <div class="col-span-6 sm:col-span-3">
                                        <label
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Image</label>
                                        <div class="flex items-center space-x-2">
                                            <input type="file" name="image" id="image" class="hidden"
                                                accept="image/*">
                                            <label for="image"
                                                class="cursor-pointer inline-block py-2 px-4 border border-gray-300 rounded-lg bg-gray-100 text-gray-700 dark:bg-gray-700 dark:text-gray-300 hover:bg-gray-200 dark:hover:bg-gray-600 hover:text-gray-900 dark:hover:text-gray-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">Choose
                                                Image</label>
                                            <div class="w-12 h-12 rounded-full overflow-hidden">
                                                @if ($user->image)
                                                    <img src="{{ asset($user->image) }}"
                                                        class="w-full h-full object-cover" alt="Current Image">
                                                @else
                                                    <p
                                                        class="flex items-center justify-center w-full h-full text-gray-500 dark:text-gray-400">
                                                        No image uploaded</p>
                                                @endif
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-span-6">
                                        <label for="description"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                                        <textarea name="description" id="description"
                                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                            placeholder="Description" style="height: 300px; resize: vertical;" required>{{ $user->description }}</textarea>
                                    </div>

                                    <div class="col-span-6 sm:col-full">
                                        <button
                                            class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800"
                                            type="submit">Save all</button>
                                    </div>
                                </div>
                            </form>



                        </div>
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
