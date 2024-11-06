<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Identity Verification</title>

    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 dark:bg-gray-900">
    <div class="flex flex-col h-screen p-4 items-center justify-center gap-6 text-center">
        <h1
            class="text-3xl font-bold tracking-tighter sm:text-4xl text-gray-800 dark:text-white items-center justify-center gap-6 text-center">
            Identity Verification</h1>
        <h1
            class="text-xl-center tracking-tighter sm:text-2xl text-gray-800 dark:text-white items-center justify-center gap-6 text-center">
            Please upload the following documents for identity verification. Only PDF, image, and Word files are
            accepted.</h1>
            @if (session('success'))
            <div class="bg-green-200 text-green-800 p-4 mt-4 rounded-md">
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="bg-red-200 text-red-800 p-4 mt-4 rounded-md">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="flex items-center min-h-[600px] p-6 sm:p-10 space-x-6 ">

            <div class="w-full max-w-3xl py-12">

                <div class="bg-white dark:bg-gray-800 shadow-md rounded-lg p-6">
                    <h2 class="text-lg font-semibold mb-4">Upload documents</h2>
                    <p class="text-gray-600 dark:text-gray-400 mb-4">Please upload the following documents for
                        verification. Only PDF, image, and Word files are accepted.</p>
                    <form action="{{ route('verification.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="border-dashed border-2 border-gray-200 rounded-lg w-full p-4 flex items-center justify-center border-dashed border-gray-300 dark:border-gray-700 mb-4">
                            <!-- Champ de fichier -->
                            <input type="file" name="fileInput[]" class="hidden" id="fileInput" multiple onchange="displayFileName(this)" />
                            <!-- Bouton pour choisir un fichier -->
                            <label for="fileInput" class="cursor-pointer bg-gray-600 text-white py-2 px-4 rounded-lg w-full  transition duration-200">Choose
                                File</label>
                            <!-- Nom du fichier sélectionné -->
                            <span id="fileName" class="ml-2 text-gray-600 dark:text-gray-400">No file chosen</span>
                        </div>
                        <button type="submit" class="bg-blue-600 text-white py-2 px-4 rounded-lg w-full hover:bg-red-600 transition duration-200">Add</button>
                    </form>
                </div>

                <script>
                    function displayFileName(input) {
                        const fileName = document.getElementById('fileName');
                        // Afficher le nom du fichier sélectionné
                        fileName.textContent = input.files.length > 0 ? input.files[0].name : "No file chosen";
                    }
                </script>


            </div>
            <div class="w-full max-w-3xl">
                <div class="bg-white dark:bg-gray-800 shadow-md rounded-lg p-6">
                    <h2 class="text-lg font-semibold mb-4">Uploaded documents</h2>
                    <p class="text-gray-600 dark:text-gray-400 mb-4">You have uploaded the following documents for
                        verification.</p>
                    <div class="overflow-hidden border rounded-lg">
                        <table class="min-w-full">
                            <thead class="bg-gray-100 dark:bg-gray-800">
                                <tr>
                                    <th class="px-4 py-2 text-center">Filename</th>
                                    <th class="px-4 py-2 text-center">Type</th>
                                    <th class="px-4 py-2 text-center">Size</th>
                                    <th class="px-4 py-2 text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200 dark:divide-gray-800">
                                @foreach ($documents as $document)
                                    <tr class="hover:bg-gray-100 dark:hover:bg-gray-800">
                                        <td class="px-4 py-3 whitespace-nowrap">{{ $document->filename }}</td>
                                        <td class="px-4 py-3 whitespace-nowrap">{{ $document->type }}</td>
                                        <td class="px-4 py-3 whitespace-nowrap">{{ $document->size }} KO</td>
                                        <td class="px-4 py-3 text-right space-x-2">
                                            {{-- <button
                                                class="bg-transparent hover:bg-gray-200 dark:hover:bg-gray-700 text-gray-700 dark:text-gray-300 py-1 px-2 rounded-full">
                                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30"
                                                    height="30" viewBox="0 0 30 30">
                                                    <path
                                                        d="M 15 3 C 12.031398 3 9.3028202 4.0834384 7.2070312 5.875 A 1.0001 1.0001 0 1 0 8.5058594 7.3945312 C 10.25407 5.9000929 12.516602 5 15 5 C 20.19656 5 24.450989 8.9379267 24.951172 14 L 22 14 L 26 20 L 30 14 L 26.949219 14 C 26.437925 7.8516588 21.277839 3 15 3 z M 4 10 L 0 16 L 3.0507812 16 C 3.562075 22.148341 8.7221607 27 15 27 C 17.968602 27 20.69718 25.916562 22.792969 24.125 A 1.0001 1.0001 0 1 0 21.494141 22.605469 C 19.74593 24.099907 17.483398 25 15 25 C 9.80344 25 5.5490109 21.062074 5.0488281 16 L 8 16 L 4 10 z">
                                                    </path>
                                                </svg> <span class="sr-only">Update</span>
                                            </button> --}}
                                            <form action="{{ route('verification.destroy', $document->id) }}"
                                                method="POST" class="inline">
                                                @csrf
                                                @method('DELETE')
                                                <button
                                                    class="bg-transparent hover:bg-gray-200 dark:hover:bg-gray-700 text-gray-700 dark:text-gray-300 py-1 px-2 rounded-full">
                                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                        width="30" height="30" viewBox="0 0 30 30">
                                                        <path
                                                            d="M 14.984375 2.4863281 A 1.0001 1.0001 0 0 0 14 3.5 L 14 4 L 8.5 4 A 1.0001 1.0001 0 0 0 7.4863281 5 L 6 5 A 1.0001 1.0001 0 1 0 6 7 L 24 7 A 1.0001 1.0001 0 1 0 24 5 L 22.513672 5 A 1.0001 1.0001 0 0 0 21.5 4 L 16 4 L 16 3.5 A 1.0001 1.0001 0 0 0 14.984375 2.4863281 z M 6 9 L 7.7929688 24.234375 C 7.9109687 25.241375 8.7633438 26 9.7773438 26 L 20.222656 26 C 21.236656 26 22.088031 25.241375 22.207031 24.234375 L 24 9 L 6 9 z">
                                                        </path>
                                                    </svg>
                                                    <span class="sr-only">Delete</span>
                                                </button>
                                            </form>

                                            {{-- <button
                                                class="bg-transparent hover:bg-gray-200 dark:hover:bg-gray-700 text-gray-700 dark:text-gray-300 py-1 px-2 rounded-full">
                                                <img
                                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAACXBIWXMAAAsTAAALEwEAmpwYAAABkklEQVR4nO2WvUoDQRSFPwsjoomk8wHEUpNgL9aKnVjYii/hT2FEIwgS8hBKgp1gY6ddYpGHWPNjKRKrRAZuYBj3zu5iRIs9cJs7557D3Duzs5AixT/AGlAGHoEOMJDoSO4UKE3ScBt4AUYxowls/cRwGXhIYOjGPbCU1HQX+AgR6wGHQAGYkygCR7Lm8t+BnTiGU8A5MAwRqQNZT61Za4TUGa0z0VZNa0rb6r5CRyPMfARUNY0rpaAXsVMXOaCvaF265APPITEztZERgVcgACqSs3Hs0dsfk1aBTw/RrNuohHBMzkbRozcAVgypFXEt3DYHIRyTs5GN0GwZUvsXjHMRmm1D2lCuzzgKMVp9kaDVQ2B9TKx6iObjYCMj5oHncJ149K5dsecJXacF4E3RegKm3YK8Z96NBB+QO89c81rhorwumnkuYqeaaVO0vZgFbhWBvnwczLs7L1GSmWrtvRHNWDAt21OuTtwIRCPOiL4hKy+LthutK+WEB1LFDLApr5c5/V3r16cruZpwDDdFCv4MXw/YJO5+W1zLAAAAAElFTkSuQmCC">
                                                <span class="sr-only">View</span>
                                            </button> --}}
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
</body>

</html>
