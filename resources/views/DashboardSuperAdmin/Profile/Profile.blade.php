@include('Inc.DashboardSuperAdmin.Head')
@include('Inc.DashboardSuperAdmin.Navbar')


<main>
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
                                src="{{ $user->image }}" alt="Jese picture">

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
                                        <h2 style="color: rgb(12, 115, 234);">Full Name</h2>
                                    </label>
                                    <p class="mb-3 text-gray-500 dark:text-gray-400">
                                        <span class="inline-block align-middle mr-1">

                                            {{ $user->full_name }}
                                        </span>
                                        <span class="inline-block align-middle">{{ $user->NomClinic }}</span>
                                    </p>
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <span class="block mr-2 text-sm font-medium text-gray-900 dark:text-green"
                                        style="color: rgb(12, 115, 234);">Phone
                                        number:</span>
                                    <p class="mb-3 text-gray-500 dark:text-gray-400">
                                        <span class="inline-block align-middle mr-1">
                                            <svg class="h-5 w-5 text-blue-400" width="24" height="24"
                                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" />
                                                <path
                                                    d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2" />
                                            </svg>
                                        </span>
                                        <span class="inline-block align-middle">{{ $user->numero_telephone }}</span>
                                    </p>
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                        <h2 style="color: rgb(12, 115, 234);">username</h2>
                                    </label>
                                    <p class="mb-3 text-gray-500 dark:text-gray-400">

                                        <span class="inline-block align-middle">{{ $user->username }}</span>
                                    </p>
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                        <h2 style="color: rgb(12, 115, 234);">Email </h2>
                                    </label>
                                    <p class="mb-3 text-gray-500 dark:text-gray-400">
                                        <span class="inline-block align-middle mr-1">
                                            <svg class="h-5 w-5 text-blue-400" width="24" height="24"
                                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" />
                                                <path d="M17.788 5.108A9 9 0 1021 12h-8" />
                                            </svg>
                                        </span>
                                        <span class="inline-block align-middle">{{ $user->email }}</span>
                                    </p>

                                </div>

                        </form>


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



                    </div>





                    <!-- Modal toggle -->
                    <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal"
                        class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                        type="button">
                        Modifier Profil
                    </button>

                    <!-- Main modal -->
                    <div id="authentication-modal" tabindex="-1" aria-hidden="true"
                        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                        <div class="relative p-4 w-full max-w-md max-h-full">
                            <!-- Modal content -->
                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                <!-- Modal header -->
                                <div
                                    class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                        Modifier le profil
                                    </h3>
                                    <button type="button"
                                        class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                        data-modal-hide="authentication-modal">
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 14 14">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                        </svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                </div>
                                <!-- Modal body -->
                                <div class="p-4 md:p-5">
                                    <form class="space-y-4" action="{{ route('admin.profile.update') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('POST')
                                        <div>
                                            <label for="email"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Votre
                                                email</label>
                                            <input type="email" name="email" id="email"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                placeholder="name@company.com" value="{{ Auth::user()->email }}"
                                                required />
                                        </div>
                                        <div>
                                            <label for="numero_telephone"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Numéro
                                                de téléphone</label>
                                            <input type="text" name="numero_telephone" id="numero_telephone"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                placeholder="Numéro de téléphone"
                                                value="{{ Auth::user()->numero_telephone }}" required />
                                        </div>
                                        <div>
                                            <label for="full_name"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nom
                                                Complet</label>
                                            <input type="text" name="full_name" id="full_name"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                placeholder="Nom Complet" value="{{ Auth::user()->full_name }}"
                                                required />
                                        </div>
                                        <div>
                                            <label for="username"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nom
                                                d'utilisateur</label>
                                            <input type="text" name="username" id="username"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                placeholder="Nom d'utilisateur" value="{{ Auth::user()->username }}"
                                                required />
                                        </div>
                                        <div>
                                            <label for="image"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Image</label>
                                            <input type="file" name="image" id="image"
                                                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                                accept="image/*" />
                                        </div>
                                        <button type="submit"
                                            class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Mettre
                                            à jour</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>




            </div>
    </main>
</main>

@include('Inc.DashboardSuperAdmin.Footer')
</div>
</div>
@include('Inc.DashboardSuperAdmin.Scripts')
