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

                <div
                    class="p-4 bg-white block sm:flex items-center justify-between border-b border-gray-200 lg:mt-1.5 dark:bg-gray-800 dark:border-gray-700">
                    <div class="w-full mb-1"><br>
                        <div class="mb-4">

                            <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white">All Operations
                            </h1>
                        </div>
                        <div class="sm:flex">
                            <div
                                class="items-center hidden mb-3 sm:flex sm:divide-x sm:divide-gray-100 sm:mb-0 dark:divide-gray-700">
                                <form class="lg:pr-3" action="#" method="GET">
                                    <label for="users-search" class="sr-only">Search</label>
                                    <div class="relative mt-1 lg:w-64 xl:w-96">
                                        <input type="text" name="email" id="users-search"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                            placeholder="Search for Operations">
                                    </div>
                                </form>

                            </div>
                            <div class="flex items-center ml-auto space-x-2 sm:space-x-3">
                                <button type="button" data-modal-toggle="add-user-modal"
                                    class="inline-flex items-center justify-center w-1/2 px-3 py-2 text-sm font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 sm:w-auto dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                                    <svg class="w-5 h-5 mr-2 -ml-1" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    Add Operation
                                </button>

                            </div>
                        </div>

                    </div>
                </div>
                <div class="flex flex-col">
                    <div class="overflow-x-auto">
                        <div class="inline-block min-w-full align-middle">
                            <div class="overflow-hidden shadow">
                                <table class="min-w-full divide-y divide-gray-200 table-fixed dark:divide-gray-600">
                                    <thead class="bg-gray-100 dark:bg-gray-700">
                                        <tr>
                                            <th scope="col" class="p-4">
                                                <div class="flex items-center">
                                                    <input id="checkbox-all" aria-describedby="checkbox-1"
                                                        type="checkbox"
                                                        class="w-4 h-4 border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:focus:ring-primary-600 dark:ring-offset-gray-800 dark:bg-gray-700 dark:border-gray-600">
                                                    <label for="checkbox-all" class="sr-only">checkbox</label>
                                                </div>
                                            </th>
                                            <th scope="col"
                                                class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                                Image
                                            </th>
                                            <th scope="col"
                                                class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                                Name
                                            </th>

                                            <th scope="col"
                                                class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                                Ville
                                            </th>

                                            <th scope="col"
                                                class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                                Etablissement Medical
                                            </th>

                                            <th scope="col"
                                                class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                                Actions
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody
                                        class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                                        @foreach ($operations as $operation => $O)
                                            <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
                                                <td class="w-4 p-4">
                                                    <div class="flex items-center">
                                                        <input id="checkbox-1" aria-describedby="checkbox-1"
                                                            type="checkbox"
                                                            class="w-4 h-4 border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:focus:ring-primary-600 dark:ring-offset-gray-800 dark:bg-gray-700 dark:border-gray-600">
                                                        <label for="checkbox-1" class="sr-only">checkbox</label>
                                                    </div>
                                                </td>
                                                <td class="flex items-center p-4 mr-12 space-x-6 whitespace-nowrap">
                                                    <img class="w-10 h-10 rounded-full" src="{{ asset($O->image) }}"
                                                        alt="Neil Sims avatar">

                                                </td>
                                                <td
                                                    class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                    {{ $O->nom }}
                                                </td>
                                                <td
                                                    class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                    {{ $O->ville }}</td>
                                                <td
                                                    class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                    {{ $O->etablissement_medical }}</td>

                                                <td class="p-4 space-x-2 whitespace-nowrap">
                                                    <button type="button"
                                                        data-modal-toggle="#edit-user-modal{{ $O->id }}"
                                                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                                                        <svg class="w-4 h-4 mr-2" fill="currentColor"
                                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z">
                                                            </path>
                                                            <path fill-rule="evenodd"
                                                                d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"
                                                                clip-rule="evenodd"></path>
                                                        </svg>
                                                        Edit Operation
                                                    </button>
                                                    <!-- Delete button -->
                                                    <button type="button"
                                                        data-modal-toggle="#delete-user-modal{{ $O->id }}"
                                                        data-id="{{ $O->id }}"
                                                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-red-600 rounded-lg hover:bg-red-800 focus:ring-4 focus:ring-red-300 dark:focus:ring-red-900">
                                                        <svg class="w-4 h-4 mr-2" fill="currentColor"
                                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd"
                                                                d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                                clip-rule="evenodd"></path>
                                                        </svg>
                                                        Supprimer

                                                    </button>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pagination -->
                <div
                    class="sticky bottom-0 right-0 items-center w-full p-4 bg-white border-t border-gray-200 sm:flex sm:justify-between dark:bg-gray-800 dark:border-gray-700">
                    <div class="flex items-center mb-4 sm:mb-0">
                        <a href="#"
                            class="inline-flex justify-center p-1 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                            <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </a>
                        <a href="#"
                            class="inline-flex justify-center p-1 mr-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                            <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </a>
                        <span class="text-sm font-normal text-gray-500 dark:text-gray-400">Showing <span
                                class="font-semibold text-gray-900 dark:text-white">1-20</span> of <span
                                class="font-semibold text-gray-900 dark:text-white">2290</span></span>
                    </div>
                    <div class="flex items-center space-x-3">
                        <a href="#"
                            class="inline-flex items-center justify-center flex-1 px-3 py-2 text-sm font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                            <svg class="w-5 h-5 mr-1 -ml-1" " fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                      d=" M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0
                                010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            Previous
                        </a>
                        <a href="#"
                            class="inline-flex items-center justify-center flex-1 px-3 py-2 text-sm font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                            Next
                            <svg class="w-5 h-5 ml-1 -mr-1" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Edit Operation Modal -->
                @foreach ($operations as $operation => $O)
                    <div class="fixed left-0 right-0 z-50 items-center justify-center hidden overflow-x-hidden overflow-y-auto top-4 md:inset-0 h-modal sm:h-full"
                        id="#edit-user-modal{{ $O->id }}">
                        <div class="relative w-full h-full max-w-2xl px-4 md:h-auto">
                            <!-- Modal content -->
                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-800">
                                <!-- Modal header -->
                                <div
                                    class="flex items-start justify-between p-5 border-b rounded-t dark:border-gray-700">
                                    <h3 class="text-xl font-semibold dark:text-white">
                                        Edit Operation
                                    </h3>
                                    <button type="button"
                                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-700 dark:hover:text-white"
                                        data-modal-toggle="edit-Operation-modal">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </button>
                                </div>
                                <!-- Modal body -->
                                <div class="p-6 space-y-6">
                                    <form action="{{ route('operations.update', ['id' => $O->id]) }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')

                                        <div class="grid grid-cols-6 gap-6">
                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="nom"
                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nom</label>
                                                <input type="text" name="nom" value="{{ $O->nom }}"
                                                    id="nom"
                                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                            </div>
                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="ville"
                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ville</label>
                                                <input type="text" name="ville" value="{{ $O->ville }}"
                                                    id="ville"
                                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                            </div>
                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="tarifs"
                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tarifs</label>
                                                <input type="text" name="tarifs" value="{{ $O->tarifs }}"
                                                    id="tarifs"
                                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                            </div>
                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="date"
                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date</label>
                                                <input type="date" name="date" value="{{ $O->date }}"
                                                    id="date"
                                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                            </div>
                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="duree"
                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Durée</label>
                                                <input type="text" name="duree" value="{{ $O->duree }}"
                                                    id="duree"
                                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                            </div>
                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="medecin"
                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Médecin</label>
                                                <input type="text" name="medecin" value="{{ $O->medecin }}"
                                                    id="medecin"
                                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                            </div>
                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="etablissement_medical"
                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Etablissement
                                                    Médical</label>
                                                <input type="text" name="etablissement_medical"
                                                    value="{{ $O->etablissement_medical }}"
                                                    id="etablissement_medical"
                                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                            </div>
                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="numero_chambre"
                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Numéro
                                                    de
                                                    Chambre</label>
                                                <input type="number" name="numero_chambre"
                                                    value="{{ $O->numero_chambre }}" id="numero_chambre"
                                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                            </div>

                                            <div class="col-span-6">
                                                <label for="image"
                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Image</label>
                                                <input type="file" name="image" id="image"
                                                    class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400">
                                            </div>
                                        </div>

                                        <div
                                            class="items-center p-6 border-t border-gray-200 rounded-b dark:border-gray-700">
                                            <button
                                                class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800"
                                                type="submit">Save all</button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

                <!-- Add User Modal -->
                <div class="fixed left-0 right-0 z-50 items-center justify-center hidden overflow-x-hidden overflow-y-auto top-4 md:inset-0 h-modal sm:h-full"
                    id="add-user-modal">
                    <div class="relative w-full h-full max-w-2xl px-4 md:h-auto">
                        <!-- Modal content -->
                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-800">
                            <!-- Modal header -->
                            <div class="flex items-start justify-between p-5 border-b rounded-t dark:border-gray-700">
                                <h3 class="text-xl font-semibold dark:text-white">
                                    Add new Operations
                                </h3>
                                <button type="button"
                                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-700 dark:hover:text-white"
                                    data-modal-toggle="add-user-modal">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </div>
                            <!-- Modal body -->
                            <div class="p-6 space-y-6">
                                <form method="POST" action="{{ route('operationsDashMedecin.store') }}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="grid grid-cols-6 gap-6">
                                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="nom"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nom</label>
                                            <input type="text" name="nom" id="nom"
                                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                placeholder="Nom de l'opération">
                                        </div>
                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="ville"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ville</label>
                                            <input type="text" name="ville" id="ville"
                                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                placeholder="Ville de l'opération">
                                        </div>
                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="tarifs"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tarifs</label>
                                            <input type="number" name="tarifs" id="tarifs"
                                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                placeholder="Tarifs de l'opération">
                                        </div>
                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="date"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date</label>
                                            <input type="date" name="date" id="date"
                                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                        </div>
                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="duree"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Durée</label>
                                            <input type="text" name="duree" id="duree"
                                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                placeholder="Durée de l'opération">
                                        </div>
                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="medecin"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Médecin</label>
                                            <input type="text" name="medecin" id="medecin"
                                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                placeholder="Médecin de l'opération">
                                        </div>

                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="etablissement_medical"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Établissement
                                                médical</label>
                                            <input type="text" name="etablissement_medical"
                                                id="etablissement_medical"
                                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                placeholder="Établissement médical de l'opération">
                                        </div>
                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="numero_chambre"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Numéro
                                                de
                                                chambre</label>
                                            <input type="number" name="numero_chambre" id="numero_chambre"
                                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                placeholder="Numéro de chambre">
                                        </div>


                                        <div class="col-span-6">
                                            <label for="image"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">image</label>
                                            <input type="file" name="image" id="image"
                                                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                                accept="image/*">
                                        </div>

                                    </div>
                                    <!-- Modal footer -->
                                    <div
                                        class="items-center p-6 border-t border-gray-200 rounded-b dark:border-gray-700">
                                        <button
                                            class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800"
                                            type="submit">Ajouter Opération
                                        </button>
                                    </div>
                                </form>


                            </div>
                        </div>
                    </div>
                </div>
                <!-- Delete User Modal -->
                @foreach ($operations as $operation => $O)
                    <!-- Delete User Modal -->
                    <div class="fixed left-0 right-0 z-50 items-center justify-center hidden overflow-x-hidden overflow-y-auto top-4 md:inset-0 h-modal sm:h-full"
                        id="#delete-user-modal{{ $O->id }}">
                        <div class="relative w-full h-full max-w-md px-4 md:h-auto">
                            <!-- Modal content -->
                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-800">
                                <!-- Modal header -->
                                <div class="flex justify-end p-2">
                                    <button type="button"
                                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-700 dark:hover:text-white"
                                        data-modal-toggle="delete-user-modal">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </button>
                                </div>
                                <!-- Modal body -->
                                <div class="p-6 pt-0 text-center">
                                    <svg class="w-16 h-16 mx-auto text-red-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                        </path>
                                    </svg>
                                    <h3 class="mt-5 mb-6 text-lg text-gray-500 dark:text-gray-400">
                                        Are you sure you want to
                                        delete this operation?</h3>
                                    <a href="/dashboardMedecin/ListesOperations/{{ $O->id }}"
                                        class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-base inline-flex items-center px-3 py-2.5 text-center mr-2 dark:focus:ring-red-800">
                                        Yes, I'm sure

                                    </a>
                                    <a href="#"
                                        class="text-gray-900 bg-white hover:bg-gray-100 focus:ring-4 focus:ring-primary-300 border border-gray-200 font-medium inline-flex items-center rounded-lg text-base px-3 py-2.5 text-center dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-gray-700"
                                        data-modal-toggle="delete-user-modal">
                                        No, cancel
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </main>
            @include('Inc.Dashboard.footer')

        </div>

    </div>


    @include('Inc.Dashboard.scripts')
    <script src="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.js"></script>

</body>

<!-- Mirrored from flowbite-admin-dashboard.vercel.app/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Mar 2024 08:27:34 GMT -->

</html>
