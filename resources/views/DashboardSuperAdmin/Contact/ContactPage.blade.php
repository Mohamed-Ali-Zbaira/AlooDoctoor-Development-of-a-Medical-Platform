@include('Inc.DashboardSuperAdmin.Head')
@include('Inc.DashboardSuperAdmin.Navbar')


<main>
    <div class="px-4 pt-6">
        <br>
        <div
            class="p-4 bg-white border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 sm:p-6 dark:bg-gray-800">
            <!-- Card header -->
            <div class="items-center justify-between lg:flex">
                <div class="mb-4 lg:mb-0">
                    <h3 class="mb-2 text-xl font-bold text-gray-900 dark:text-white">Reclamation</h3>
                    <span class="text-base font-normal text-gray-500 dark:text-gray-400">Ceci est une liste de demandes de réclamation
                    </span>
                </div>
                <div class="items-center sm:flex">
                    <div class="flex items-center">
                        <button id="dropdownDefault" data-dropdown-toggle="dropdown"
                            class="mb-4 sm:mb-0 mr-4 inline-flex items-center text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-4 py-2.5 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700"
                            type="button">
                            Filter by Role
                            <svg class="w-4 h-4 ml-2" aria-hidden="true" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <!-- Dropdown menu -->
                        <div id="dropdown" class="z-10 hidden w-56 p-3 bg-white rounded-lg shadow dark:bg-gray-700">
                            <h6 class="mb-3 text-sm font-medium text-gray-900 dark:text-white">
                                Role
                            </h6>
                            <ul class="space-y-2 text-sm" aria-labelledby="dropdownDefault">
                                <li class="flex items-center">
                                    <input id="apple" type="checkbox" value=""
                                        class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" />

                                    <label for="apple"
                                        class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">
                                        Patient
                                    </label>
                                </li>

                                <li class="flex items-center">
                                    <input id="fitbit" type="checkbox" value="" checked
                                        class="w-4 h-4 bg-gray-100 border-gray-300 rounded text-primary-600 focus:ring-primary-500 dark:focus:ring-primary-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" />

                                    <label for="fitbit"
                                        class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">
                                        Medecin
                                    </label>
                                </li>




                            </ul>
                        </div>
                    </div>

                </div>
            </div>
            <!-- Table -->
            <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-600">
                <thead class="bg-gray-50 dark:bg-gray-700">
                    <tr>
                        <th scope="col"
                            class="p-4 text-xs font-medium tracking-wider text-left text-gray-500 uppercase dark:text-white">
                            nom
                        </th>
                        <th scope="col"
                            class="p-4 text-xs font-medium tracking-wider text-left text-gray-500 uppercase dark:text-white">
                            Email
                        </th>
                        <th scope="col"
                            class="p-4 text-xs font-medium tracking-wider text-left text-gray-500 uppercase dark:text-white">
                            prénom
                        </th>
                        <th scope="col"
                            class="p-4 text-xs font-medium tracking-wider text-left text-gray-500 uppercase dark:text-white">
                            Role
                        </th>
                        <th scope="col"
                            class="p-4 text-xs font-medium tracking-wider text-left text-gray-500 uppercase dark:text-white">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white dark:bg-gray-800">
                    @foreach ($contacts as $contact => $C)
                        <tr class="bg-gray-50 dark:bg-gray-700">
                            <td class="p-4 text-sm font-normal text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $C->name }}
                            </td>
                            <td class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                                {{ $C->email }}
                            </td>
                            <td class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap dark:text-gray-400">
                                {{ $C->user->full_name }}
                            </td>
                            <td class="p-4 text-sm font-normal whitespace-nowrap">
                                @if ($C->user->role == 'user')
                                    <span
                                        class="bg-green-100 text-green-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-md dark:bg-gray-700 dark:text-green-400 border border-green-100 dark:border-green-500">
                                        {{ $C->user->role }}
                                    </span>
                                @else
                                    <span
                                        class="bg-red-100 text-red-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-md dark:bg-gray-700 dark:text-red-400 border border-red-100 dark:border-red-500">
                                        {{ $C->user->role }}
                                    </span>
                                @endif
                            </td>
                            <td class="p-4 whitespace-nowrap flex flex-row">
                                <button type="button" data-modal-target="default-modal-{{ $C->id }}"
                                    data-modal-toggle="default-modal-{{ $C->id }}"
                                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Voir</button>
                                &nbsp;
                                <button type="button" data-modal-target="popup-modal-{{ $C->id }}"
                                    data-modal-toggle="popup-modal-{{ $C->id }}"
                                    class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Delete</button>

                            </td>

                        </tr>
                        <!-- Main modal -->
                        <div id="default-modal-{{ $C->id }}" tabindex="-1" aria-hidden="true"
                            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                            <div class="relative p-4 w-full max-w-2xl max-h-full">
                                <!-- Modal content -->
                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                    <!-- Modal header -->
                                    <div
                                        class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                            Reclamation
                                        </h3>
                                        <button type="button"
                                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                            data-modal-hide="default-modal-{{ $C->id }}">
                                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                fill="none" viewBox="0 0 14 14">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="2"
                                                    d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                            </svg>
                                            <span class="sr-only">Close modal</span>
                                        </button>
                                    </div>
                                    <div class="p-4 md:p-5">
                                        <ol
                                            class="relative border-s border-gray-200 dark:border-gray-600 ms-3.5 mb-4 md:mb-5">
                                            <li class="mb-10 ms-8">
                                                <h3
                                                    class="flex items-start mb-1 text-lg font-semibold text-gray-900 dark:text-white">
                                                    Subject
                                                </h3>
                                                <time
                                                    class="block mb-3 text-sm font-normal leading-none text-gray-500 dark:text-gray-400">
                                                    {{ $C->subject }}</time>
                                            </li>
                                            <li class="mb-10 ms-8">
                                                <h3
                                                    class="flex items-start mb-1 text-lg font-semibold text-gray-900 dark:text-white">
                                                    Message
                                                </h3>
                                                <time
                                                    class="block mb-3 text-sm font-normal leading-none text-gray-500 dark:text-gray-400">
                                                    {{ $C->message }}</time>
                                            </li>

                                        </ol>

                                    </div>
                                    <!-- Modal footer -->

                                </div>
                            </div>
                        </div>
                    @endforeach
                </tbody>
            </table>



            <!-- Main modal -->
            <div id="default-modal" tabindex="-1" aria-hidden="true"
                class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative p-4 w-full max-w-2xl max-h-full">
                    <!-- Modal content -->
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                        <!-- Modal header -->
                        <div
                            class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                Terms of Service
                            </h3>
                            <button type="button"
                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                data-modal-hide="default-modal">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                        </div>
                        <!-- Modal body -->
                        <div class="p-4 md:p-5 space-y-4">


                        </div>
                        <!-- Modal footer -->
                        <div
                            class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">

                            <button data-modal-hide="default-modal" type="button"
                                class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Decline</button>
                        </div>
                    </div>
                </div>
            </div>

            @foreach ($contacts as $contact => $C)
                <!-- Boîte de dialogue modale pour chaque contact -->
                <div id="popup-modal-{{ $C->id }}" tabindex="-1"
                    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                    <div class="relative p-4 w-full max-w-md max-h-full">
                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                            <button type="button"
                                class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                data-modal-hide="popup-modal-{{ $C->id }}">

                                <span class="sr-only">Close modal</span>
                            </button>
                            <div class="p-4 md:p-5 text-center">

                                <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Êtes-vous sûr de
                                    vouloir supprimer ce contact ?</h3>
                                <form action="{{ route('contacts.destroy', $C->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                                        "Oui, je suis sûr(e)
                                    </button>
                                </form>
                                <button data-modal-hide="popup-modal-{{ $C->id }}" type="button"
                                    class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                                    Non, annuler</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach


            <!-- Card Footer -->
            <div class="flex items-center justify-between pt-3 sm:pt-6">
                <div>
                    <button
                        class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-500 rounded-lg hover:text-gray-900 dark:text-gray-400 dark:hover:text-white"
                        type="button" data-dropdown-toggle="transactions-dropdown">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                        </path>
                        </svg>
                    </button>
                    <!-- Dropdown menu -->

                </div>
                <div class="pagination flex items-center justify-center space-x-2 mt-4">
                    <a href="#"
                        class="px-3 py-1 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300">&laquo;</a>
                    <a href="#" class="px-3 py-1 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300">1</a>
                    <a href="#" class="px-3 py-1 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300">2</a>
                    <a href="#" class="px-3 py-1 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300">3</a>
                    <a href="#"
                        class="px-3 py-1 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300">&raquo;</a>
                </div>

            </div>
        </div>
    </div>
</main>

@include('Inc.DashboardSuperAdmin.Footer')
</div>
</div>
@include('Inc.DashboardSuperAdmin.Scripts')
