<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Account Blocked</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* Add any custom styles here */
        .blocked-title {
            color: #e53e3e; /* Rouge */
        }
    </style>
</head>
<body class="bg-gray-100 dark:bg-gray-900">

<div class="flex flex-col h-screen p-4 items-center justify-center gap-6 text-center">
    <div class="space-y-6">
        @if(session('success'))
            <div class="alert alert-success" role="alert"
                 style="background-color: #d4edda; border-color: #c3e6cb; color: #155724;">
                <p class="mb-0">{{ session('success') }}</p>
            </div>

        @endif


        <h1 class="text-3xl font-bold tracking-tighter sm:text-4xl text-gray-800 dark:text-white blocked-title">Your
            Account Has Been Blocked</h1>
        <p class="text-gray-600 md:text-lg/relaxed dark:text-gray-400">
            Please contact support for further assistance.
        </p>
        <p class="text-gray-600 md:text-lg/relaxed dark:text-gray-400">
            If you believe this is a mistake, you can also try contacting our support team.
        </p>
        <p class="text-gray-600 md:text-lg/relaxed dark:text-gray-400">
            AlooDoctoor@gmail.com || 74521679
        </p>
        <p class="text-gray-600 md:text-lg/relaxed dark:text-gray-400">
            Thank you.
        </p>
        <button class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium bg-gray-600 text-white hover:bg-bleu-300 h-10 px-4 py-8 w-full transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
            <a href="/">Go Home</a>
          </button>

        <!-- Formulaire pour la saisie de l'email et du message -->
        {{-- <form action="{{ route('status.store') }}" method="POST">
            @csrf
            <input type="email" name="email" id="email" aria-describedby="email-help"
                   class="bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-700 text-gray-900 dark:text-white text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3 transition-colors duration-200"
                   placeholder="Your Email" required>
            <br>
            <textarea name="message" id="message" rows="4"
                      class="bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-700 text-gray-900 dark:text-white text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3 transition-colors duration-200"
                      placeholder="Write your message here..." required></textarea>
            <br>
            <button type="submit"
                    class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium bg-blue-600 text-white hover:bg-red-600 h-10 px-4 py-2 w-full transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                Send
            </button>
            <br> <br>
            <button class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium bg-gray-600 text-white hover:bg-bleu-300 h-10 px-4 py-8 w-full transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                <a href="/">Go Home</a>
            </button>
        </form> --}}
    </div>
</div>

</body>
</html>
