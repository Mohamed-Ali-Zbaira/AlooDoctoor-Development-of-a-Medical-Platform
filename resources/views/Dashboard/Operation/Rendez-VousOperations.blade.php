<!doctype html>
<html lang="en" class="dark">

<!-- Mirrored from flowbite-admin-dashboard.vercel.app/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Mar 2024 08:27:25 GMT -->
<!-- Added by HTTrack -->
<meta name="csrf-token" http-equiv="content-type" content="text/html;charset=utf-8 {{ csrf_token() }}" />
<!-- /Added by HTTrack -->
@include('Inc.Dashboard.Head')

@php
    use Carbon\Carbon;
@endphp

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
                    <div class="w-full mb-1">
                        <div class="mb-4">
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
                                                class="ml-1 text-gray-700 hover:text-primary-600 md:ml-2 dark:text-gray-300 dark:hover:text-white">Rendez-Vous</a>
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
                                                aria-current="page">List</span>
                                        </div>
                                    </li>
                                </ol>
                            </nav>
                            <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white">Listes
                                Rendez-Vous Operations </h1>
                        </div>
                        <div class="sm:flex">
                            <div
                                class="items-center hidden mb-3 sm:flex sm:divide-x sm:divide-gray-100 sm:mb-0 dark:divide-gray-700">
                                <form class="lg:pr-3" action="#" method="GET">
                                    <label for="users-search" class="sr-only">Search</label>
                                    <div class="relative mt-1 lg:w-64 xl:w-96">
                                        <input type="text" name="email" id="users-search"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                            placeholder="Search for Rendez-Vous">
                                    </div>
                                </form>

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

                                            </th>
                                            <th scope="col"
                                                class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                                Nom
                                            </th>
                                            <th scope="col"
                                                class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                                Téléphone
                                            </th>
                                            <th scope="col"
                                                class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                                Lieu
                                            </th>
                                            <th scope="col"
                                                class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                                Date
                                            </th>

                                            <th scope="col"
                                                class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                                Statut
                                            </th>
                                            <th scope="col"
                                                class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                                Payment
                                            </th>
                                            <th scope="col"
                                                class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                                Actions
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody
                                        class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                                        @foreach ($rendezvousOperations as $rendezvousOperation => $R)
                                            <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
                                                <td class="w-4 p-4">
                                                </td>
                                                <td
                                                    class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                    {{ $R->patient->full_name }}</td>
                                                <td
                                                    class="p-4 text-base font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                                    {{ $R->user_phone }}</td>
                                                <td
                                                    class="p-4 text-base font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                                    {{ $R->operation->ville }}</td>
                                                <td
                                                    class="p-4 text-base font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                                    {{ Carbon::parse($R->date)->format('d/m/Y') }}
                                                </td>


                                                <td
                                                    class="p-4 text-base font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                                    @switch($R->status)
                                                        @case('pending')
                                                            <span
                                                                class="inline-flex items-center px-2 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                                                                En attente
                                                            </span>
                                                        @break

                                                        @case('accepted')
                                                            <span
                                                                class="inline-flex items-center px-2 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                                                Accepté
                                                            </span>
                                                        @break

                                                        @case('rejected')
                                                            <span
                                                                class="inline-flex items-center px-2 py-0.5 rounded-full text-xs font-medium bg-red-100 text-red-800">
                                                                Refusé
                                                            </span>
                                                        @break

                                                        @case('completed')
                                                            <span
                                                                class="inline-flex items-center px-2 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-800">
                                                                Terminé
                                                            </span>
                                                        @break
                                                    @endswitch
                                                </td>
                                                <td>
                                                    @if ($R->payment_status === 'paid')
                                                        <span
                                                            class="inline-flex items-center px-2 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                                            Payé
                                                        </span>
                                                    @else
                                                        <span
                                                            class="inline-flex items-center px-2 py-0.5 rounded-full text-xs font-medium bg-red-100 text-red-800">
                                                            Non Payé
                                                        </span>
                                                    @endif
                                                </td>
                                                <td class="p-4 space-x-2 whitespace-nowrap">
                                                    <!-- Edit button -->
                                                    <button type="button"
                                                        data-modal-toggle="#edit-user-modal{{ $R->id }}"
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
                                                        Modifier Operations
                                                    </button>
                                                    <!-- Delete button -->
                                                    <button type="button"
                                                        data-modal-toggle="#delete-user-modal{{ $R->id }}"
                                                        data-id="{{ $R->id }}"
                                                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-red-600 rounded-lg hover:bg-red-800 focus:ring-4 focus:ring-red-300 dark:focus:ring-red-900">
                                                        <svg class="w-4 h-4 mr-2" fill="currentColor"
                                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd"
                                                                d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                                clip-rule="evenodd"></path>
                                                        </svg>
                                                        Supprimer Operations

                                                    </button>
                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                            @foreach ($rendezvousOperations as $rendezvousOperation => $R)
                                <div class="fixed left-0 right-0 z-50 items-center justify-center hidden overflow-x-hidden overflow-y-auto top-4 md:inset-0 h-modal sm:h-full"
                                    id="#edit-user-modal{{ $R->id }}">
                                    <div class="relative w-full h-full max-w-2xl px-4 md:h-auto">
                                        <!-- Modal content -->
                                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-800">
                                            <!-- Modal header -->
                                            <div
                                                class="flex items-start justify-between p-5 border-b rounded-t dark:border-gray-700">
                                                <h3 class="text-xl font-semibold dark:text-white">
                                                    Edit user
                                                </h3>
                                                <button type="button"
                                                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-700 dark:hover:text-white"
                                                    data-modal-toggle="#edit-user-modal{{ $R->id }}">
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
                                                <form action="{{ route('rendezvous.update', ['id' => $R->id]) }}"
                                                    method="POST">
                                                    @csrf
                                                    <div class="grid grid-cols-6 gap-6">
                                                        <div class="col-span-6 sm:col-span-3">
                                                            <label for="user_name"
                                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nom</label>
                                                            <input type="text" name="user_name"
                                                                value="{{ $R->user_name }}" id="user_name_edit"
                                                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                                placeholder="Nom du patient">
                                                        </div>
                                                        <div class="col-span-6 sm:col-span-3">
                                                            <label for="user_phone"
                                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Téléphone</label>
                                                            <input type="text" name="user_phone"
                                                                value="{{ $R->user_phone }}" id="user_phone_edit"
                                                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                                placeholder="Numéro de téléphone">
                                                        </div>
                                                        <div class="col-span-6 sm:col-span-3">
                                                            <label for="location"
                                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Lieu</label>
                                                            <input type="text" name="location"
                                                                value="{{ $R->location }}" id="location_edit"
                                                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                                placeholder="Lieu du rendez-vous">
                                                        </div>
                                                        <div class="col-span-6 sm:col-span-3">
                                                            <label for="date"
                                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date</label>
                                                            <input type="date" name="date"
                                                                value="{{ $R->date }}" id="date_edit"
                                                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                                        </div>
                                                        <div class="col-span-6 sm:col-span-3">
                                                            <label for="time"
                                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Heure</label>
                                                            <input type="time" name="time"
                                                                value="{{ $R->time }}" id="time_edit"
                                                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                                        </div>
                                                        <div class="col-span-6 sm:col-span-3">
                                                            <label for="status"
                                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Statut</label>
                                                            <select name="status" id="status_edit"
                                                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                                                <option value="pending">En attente</option>
                                                                <option value="accepted">Accepté</option>
                                                                <option value="rejected">Refusé</option>
                                                                <option value="completed">Terminé</option>


                                                            </select>
                                                        </div>
                                                        <div class="col-span-6 sm:col-span-3">
                                                            <label for="payment_status"
                                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Paiement</label>
                                                            <select name="payment_status" id="payment_status_edit"
                                                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                                                <option value="paid">Payé</option>
                                                                <option value="unpaid">Non Payé</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-span-6 sm:col-span-3">
                                                            <label for="note"
                                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">note</label>
                                                            <input type="text" name="note"
                                                                value="{{ $R->note }}" id="location_edit"
                                                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                                placeholder="Lieu du rendez-vous">
                                                        </div>
                                                    </div>
                                            </div>
                                            <!-- Modal footer -->
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
                            @endforeach


                            <!-- Delete User Modal -->

                            @foreach ($rendezvousOperations as $rendezvousOperation => $R)
                                <!-- Delete User Modal -->
                                <div class="fixed left-0 right-0 z-50 items-center justify-center hidden overflow-x-hidden overflow-y-auto top-4 md:inset-0 h-modal sm:h-full"
                                    id="#delete-user-modal{{ $R->id }}">
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
                                                <svg class="w-16 h-16 mx-auto text-red-600" fill="none"
                                                    stroke="currentColor" viewBox="0 0 24 24"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                                    </path>
                                                </svg>
                                                <h3 class="mt-5 mb-6 text-lg text-gray-500 dark:text-gray-400">
                                                    Are you sure you want to
                                                    delete this user?</h3>
                                                <a href="/dashboardMedecin/Operations/Rendez-Vous/{{ $R->id }}"
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
                        </div>
                    </div>
                </div>
            </main>
            @include('Inc.Dashboard.footer')

        </div>

    </div>


    @include('Inc.Dashboard.scripts')

</body>

</html>
