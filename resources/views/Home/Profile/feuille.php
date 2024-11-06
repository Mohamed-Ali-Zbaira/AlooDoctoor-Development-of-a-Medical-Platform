<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        @page {
            size: A4;
            margin: 0;
        }

        body {
            margin: 0;
            font-family: 'Arial', sans-serif;
        }

        @media print {
            body * {
                visibility: visible;
            }

            #printableArea, #printableArea * {
                visibility: visible;
            }

            #printableArea {
                position: static;
            }
        }

        /* Style du cadre à imprimer */
        #printableArea {
            border: 2px solid #ccc;
            padding: 20px;
            max-width: 100%;
            box-sizing: border-box;
            page-break-inside: avoid; /* Empêcher le contenu de se couper sur plusieurs pages */
        }
    </style>

</head>

<body class="font-sans antialiased">

    <div id="printableArea" class="max-w-2xl mx-auto px-4 py-8">
        <div class="space-y-6">
            <h1 class="text-3xl font-bold">Fiche de rendez-vous</h1>
        </div>

        <div class="bg-gray-200 rounded-lg shadow-md my-4">
            <div class="p-4 md:flex md:items-center md:justify-between">
                <span class="text-2xl text-blue-500">Information patient</span>
            </div>
        </div>

        <div class="space-y-4">
            <div class="flex flex-col space-y-1.5 md:flex-row md:space-x-4 md:space-y-0">
                <div>
                    <label class="font-medium text-gray-600" for="patient-name">Nom du patient:</label>
                    <div id="patient-name" class="text-sm text-gray-900 border border-gray-300 rounded-md px-3 py-2">
                        {{ $rendezvous->user_name }}
                    </div>
                </div>
                <div>
                    <label class="font-medium text-gray-600" for="appointment-date">Date du rendez-vous:</label>
                    <div id="appointment-date" class="text-sm text-gray-900 border border-gray-300 rounded-md px-3 py-2">
                        {{ $rendezvous->date }}
                    </div>
                </div>
                <div>
                    <label class="font-medium text-gray-600" for="appointment-time">Heure du rendez-vous:</label>
                    <div id="appointment-time" class="text-sm text-gray-900 border border-gray-300 rounded-md px-3 py-2">
                        {{ $rendezvous->time }}
                    </div>
                </div>
            </div>
            <div class="flex flex-col md:flex-row md:space-x-4">
                <div>
                    <label class="font-medium text-gray-600" for="user-email">Email de l'utilisateur:</label>
                    <div id="user-email" class="text-sm text-gray-900 border border-gray-300 rounded-md px-3 py-2">
                        {{ $rendezvous->user_email }}
                    </div>
                </div>
                <div>
                    <label class="font-medium text-gray-600" for="user-phone">Numéro de téléphone de l'utilisateur:</label>
                    <div id="user-phone" class="text-sm text-gray-900 border border-gray-300 rounded-md px-3 py-2">
                        {{ $rendezvous->user_phone }}
                    </div>
                </div>
            </div>
        </div>


        <div class="bg-gray-200 rounded-lg shadow-md my-4">
            <div class="p-4 md:flex md:items-center md:justify-between">
                <span class="text-2xl text-blue-500">Information médecin</span>
            </div>
        </div>

        <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
            <div class="flex flex-col space-y-1.5">
                <label class="font-medium" for="doctor-name">Nom du médecin</label>
                <div id="doctor-name" class="border border-gray-300 rounded-md px-3 py-2 text-sm text-gray-900">
                    {{ $rendezvous->medecin->full_name }}
                </div>
            </div>
            <div class="flex flex-col space-y-1.5">
                <label class="font-medium" for="location">Lieu</label>
                <div id="location" class="border border-gray-300 rounded-md px-3 py-2 text-sm text-gray-900">
                    {{ $rendezvous->medecin->adresse }}
                </div>
            </div>
        </div>

        <blockquote class="text-xl italic font-semibold text-gray-900 mt-8">
            <svg class="w-8 h-8 text-gray-400 mb-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 14">
                <path d="M6 0H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3H2a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Zm10 0h-4a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3h-1a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Z"/>
            </svg>
            <p>"Votre santé est notre priorité. Veuillez arriver 15 minutes avant l'heure du rendez-vous. En cas d'empêchement, veuillez nous contacter dès que possible."</p>
        </blockquote>
        <div class="right-align">
            <p>Signature</p>
            <img src="https://res.cloudinary.com/dkrfmqbj1/image/upload/v1712391207/PFE/Vue/Signature/OnlineSignatures.net-21_d7lbuk.png" alt="Signature" class="mt-4" style="max-width: 150px;">
        </div>

    </div>
    <div class="flex justify-center mt-4">
        <button onclick="window.print()" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Imprimer</button>
    </div>
</body>

</html>
