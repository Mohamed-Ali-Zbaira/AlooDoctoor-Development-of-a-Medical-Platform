@include('Inc.DashboardSuperAdmin.Head')
@include('Inc.DashboardSuperAdmin.Navbar')


<main>
    <div class="px-4 pt-6">

        <br>
        <div class="grid grid-cols-1 xl:grid-cols-3 xl:gap-4 dark:bg-gray-900">

            <!-- Right Content -->
            <div class="col-span-full xl:col-auto">
                <div
                    class="p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                    <div
                        class="items-center sm:flex xl:block 2xl:flex sm:space-x-4 xl:space-x-0 2xl:space-x-4 justify-center">
                        <img class="mb-4 rounded-lg w-40 h-40 sm:mb-0 xl:mb-4 2xl:mb-0 mx-auto"
                            src="{{ $medecin->image }}" alt="Jese picture">

                    </div>

                </div>
                <div
                    class="p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                    <div
                        class="items-center sm:flex xl:block 2xl:flex sm:space-x-4 xl:space-x-0 2xl:space-x-4 justify-center">

                        <div class="text-center">
                            <h4 class="mb-1 text-xl font-bold text-gray-900 dark:text-white">
                                {{ $medecin->full_name }}</h4>
                            <div class="mb-4 text-sm text-blue-500 dark:text-black-400">
                                <h5 class="flex items-center justify-center">
                                    <svg class="h-5 w-5 text-blue mr-2" width="8" height="8"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" />
                                        <rect x="3" y="7" width="18" height="13" rx="2" />
                                        <path d="M8 7v-2a2 2 0 0 1 2 -2h4a2 2 0 0 1 2 2v2" />
                                        <line x1="12" y1="12" x2="12" y2="12.01" />
                                        <path d="M3 13a20 20 0 0 0 18 0" />
                                    </svg>
                                    <span class="text-black">{{ $medecin->speciality }}</span>
                                </h5>
                            </div>
                            <div class="mb-4 text-sm text-black-500 dark:text-gray-400">
                                <h2 class="flex items-center justify-center">
                                    <svg class="h-5 w-5 text-blue-400" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                    Sfax
                                </h2>
                                <br>
                                <div class="mb-4 flex items-center justify-center">
                                    <svg class="h-5 w-5 text-blue-400" width="24" height="24" viewBox="0 0 24 24"
                                        stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" />
                                        <path
                                            d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" />
                                    </svg>
                                    &nbsp;
                                    <span
                                        class="block mr-2 text-sm font-medium text-gray-900 dark:text-green"style="color: rgb(12, 115, 234);">Phone
                                        number:</span>
                                    <span class="block mr-2 text-sm font-medium">{{ $medecin->numero_telephone }}</span>
                                </div>
                                <div class="mb-4 flex items-center justify-center">
                                    <svg class="h-5 w-5 text-blue-400" width="24" height="24" viewBox="0 0 24 24"
                                        stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" />
                                        <path d="M17.788 5.108A9 9 0 1021 12h-8" />
                                    </svg>
                                    &nbsp;
                                    <span
                                        class="block mr-2 text-sm font-medium text-gray-900 dark:text-green"style="color: rgb(12, 115, 234);">Email
                                        :</span>
                                    <span class="block mr-2 text-sm font-medium">{{ $medecin->email }}</span>
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
                            Creation Date: {{ $medecin->created_at }}</span>
                    </div>
                    <div class="mb-4">
                        <span class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Last
                            Update: {{ $medecin->updated_at }}</span>
                    </div>
                    @if ($medecin->role === 'medecin')
                        <div class="mb-4 flex items-center">
                            <span class="block mr-2 text-sm font-medium text-gray-900 dark:text-green">Etat:</span>
                            @if ($medecin->etat === 'verifier')
                                <span class="block mr-2 text-sm font-medium text-green-500">Verifier</span>
                                <svg class="h-5 w-5 text-green-500" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                                </svg>
                            @else
                                <span class="block mr-2 text-sm font-medium text-red-500">Inverifier</span>
                            @endif
                        </div>
                        <button data-modal-target="crud-modal" data-modal-toggle="crud-modal"
                            class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                            type="button">
                            Changer Status
                        </button>
                    @else
                        <!-- If the user's role is not 'medecin', do nothing or show alternative content -->
                    @endif

                    <div id="crud-modal" tabindex="-1" aria-hidden="true"
                        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                        <div class="relative p-4 w-full max-w-md max-h-full">
                            <!-- Modal content -->
                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                <!-- Modal header -->
                                <div
                                    class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                        Update Medecin Etat
                                    </h3>
                                    <button type="button"
                                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                        data-modal-toggle="crud-modal">
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 14 14">
                                            <path stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2"
                                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                        </svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                </div>
                                <!-- Modal body -->
                                <form action="{{ route('medecin_super_admin.update_etat', $medecin->id) }}"
                                    method="post" class="p-4 md:p-5">
                                    @csrf
                                    @method('PUT')

                                    <div class="mb-4">
                                        <label for="etat"
                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Etat</label>
                                        <select id="etat" name="etat"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                            <option value="inverifier"
                                                {{ $medecin->etat === 'inverifier' ? 'selected' : '' }}>Inverifier
                                            </option>
                                            <option value="verifier"
                                                {{ $medecin->etat === 'verifier' ? 'selected' : '' }}>Verifier</option>
                                        </select>
                                    </div>

                                    <button type="submit"
                                        class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                        Update Etat
                                    </button>
                                </form>
                            </div>
                        </div>
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
                                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    <h2 style="color: rgb(12, 115, 234);">lieu de travail</h2>
                                </label>
                                <p class="mb-3 text-gray-500 dark:text-gray-400">
                                    <span class="inline-block align-middle mr-1">
                                        <svg class="h-5 w-5 text-blue-500" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                        </svg>
                                    </span>
                                    <span class="inline-block align-middle">{{ $medecin->NomClinic }}</span>
                                </p>
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    <h2 style="color: rgb(12, 115, 234);">langue parles</h2>
                                </label>
                                <p class="mb-3 text-gray-500 dark:text-gray-400">
                                    <span class="inline-block align-middle mr-1">
                                        <svg class="h-5 w-5 text-blue-500" width="24" height="24"
                                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" />
                                            <circle cx="12" cy="12" r="9" />
                                            <line x1="3.6" y1="9" x2="20.4" y2="9" />
                                            <line x1="3.6" y1="15" x2="20.4" y2="15" />
                                            <path d="M11.5 3a17 17 0 0 0 0 18" />
                                            <path d="M12.5 3a17 17 0 0 1 0 18" />
                                        </svg>
                                    </span>
                                    <span class="inline-block align-middle">{{ $medecin->langue_parles }}</span>
                                </p>
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    <h2 style="color: rgb(12, 115, 234);">tarifs</h2>
                                </label>
                                <p class="mb-3 text-gray-500 dark:text-gray-400">
                                    <span class="inline-block align-middle mr-1">
                                        <svg class="h-5 w-5 text-blue-500" width="24" height="24"
                                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" />
                                            <path
                                                d="M16.7 8a3 3 0 0 0 -2.7 -2h-4a3 3 0 0 0 0 6h4a3 3 0 0 1 0 6h-4a3 3 0 0 1 -2.7 -2" />
                                            <path d="M12 3v3m0 12v3" />
                                        </svg>
                                    </span>
                                    <span class="inline-block align-middle">{{ $medecin->tarifs }}</span>
                                </p>
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                    <h2 style="color: rgb(12, 115, 234);">disponibilité </h2>
                                </label>
                                <p class="mb-3 text-gray-500 dark:text-gray-400">
                                    <span class="inline-block align-middle mr-1">
                                        <svg class="h-5 w-5 text-blue-500" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round">
                                            <circle cx="12" cy="12" r="10" />
                                            <polyline points="12 6 12 12 16 14" />
                                        </svg>
                                    </span>
                                    <span class="inline-block align-middle">{{ $medecin->temps }}</span>
                                </p>

                            </div>

                    </form>


                </div>
                <div class="col-span-6 sm:col-span-3">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white ">
                        <h2 style="color: rgb(12, 115, 234);">description</h2>
                    </label>

                    <p class="mb-3 text-gray-500 dark:text-gray-400">{{ $medecin->description }} </p>
                </div>

                <button type="button" data-modal-toggle="#delete-user-modal{{ $medecin->id }}"
                    data-id="{{ $medecin->id }}"
                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-red-600 rounded-lg hover:bg-red-800 focus:ring-4 focus:ring-red-300 dark:focus:ring-red-900">
                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                            clip-rule="evenodd"></path>
                    </svg>
                    Supprimer
                </button>
                <div class="fixed left-0 right-0 z-50 items-center justify-center hidden overflow-x-hidden overflow-y-auto top-4 md:inset-0 h-modal sm:h-full"
                    id="#delete-user-modal{{ $medecin->id }}"
                    data-modal-toggle="#delete-user-modal{{ $medecin->id }}">
                    <div class="relative w-full h-full max-w-md px-4 md:h-auto">
                        <!-- Modal content -->
                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-800">
                            <!-- Modal header -->
                            <div class="flex justify-end p-2">
                                <button type="button"
                                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-700 dark:hover:text-white"
                                    wire:click="closeModal">
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
                                        d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <h3 class="mt-5 mb-6 text-lg text-gray-500 dark:text-gray-400">Are you sure you
                                    want to
                                    delete this
                                    user?</h3>
                                <div class="flex justify-center">
                                    <form action="{{ route('medecin_super_admin.delete', $medecin->id) }}"
                                        method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-base inline-flex items-center px-3 py-2.5 text-center mr-2 dark:focus:ring-red-800">Yes,
                                            I'm sure</button>
                                    </form>
                                    <button type="button"
                                        class="text-gray-900 bg-white hover:bg-gray-100 focus:ring-4 focus:ring-primary-300 border border-gray-200 font-medium inline-flex items-center rounded-lg text-base px-3 py-2.5 text-center dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-gray-700"
                                        wire:click="closeModal">Cancel</button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>




            </div>



            @if ($medecin->role === 'medecin')
                <div class="col-span-2">
                    <div
                        class="p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm 2xl:col-span-2 dark:border-gray-700 sm:p-6 dark:bg-gray-800">
                        <h3 class="mb-4 text-xl font-semibold dark:text-white">Document Verfication</h3>
                        <form action="#">
                            <div class="relative overflow-x-auto">
                                <table
                                    class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <thead
                                        class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                        <tr>
                                            <th scope="col" class="px-6 py-3">
                                                Filename
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Type
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Size
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Action
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($document)
                                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                                <th scope="row"
                                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                    {{ $document->filename }}
                                                </th>
                                                <td class="px-6 py-4">
                                                    {{ $document->type }}
                                                </td>
                                                <td class="px-6 py-4">
                                                    {{ $document->size }}
                                                </td>
                                                <td class="px-6 py-4">
                                                    <button type="button"
                                                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"
                                                        style="background-color: #0e54b7; color: white;"> <a
                                                            href="{{ route('medecin_super_admin.download', ['id' => $medecin->id]) }}"
                                                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"
                                                            style="background-color: #0e54b7; color: white;">Télécharger</a>

                                                    </button>

                                                </td>
                                            </tr>
                                        @else
                                            <p>No document found for this user.</p>
                                        @endif
                                    </tbody>
                                </table>
                            </div>




                        </form>


                    </div>




                </div>
            @else
                <!-- If the user's role is not 'medecin', do nothing or show alternative content -->
            @endif
        </div>
</main>
@include('Inc.DashboardSuperAdmin.Footer')
</div>
</div>
@include('Inc.DashboardSuperAdmin.Scripts')
