<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.2/dist/css/bootstrap.min.css">
<title>Fiche de rendez-vous de MR.{{ $rendezvousOperation->patient->username }}</title>
    <style>
        @media print {
            .no-print {
                display: none;
            }
        }
    </style>

</head>

<body class="font-sans antialiased">

    <section class="py-3 py-md-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-9 col-xl-8 col-xxl-7">
                    <div class="row gy-3 mb-3">
                        <div class="col-6">
                            <h3 class="text-uppercase text-endx m-0">Fiche de rendez-vous</h3>
                        </div>
                        <div class="col-6">
                            <a class="d-block text-end" href="#!">
                                <img src="https://res.cloudinary.com/dkrfmqbj1/image/upload/v1713096666/PFE/Aloodoctoor/InShot_20240414_130922526_ivwfqm.webp"
                                    class="img-fluid" alt="BootstrapBrain Logo" width="135" height="44">
                            </a>
                        </div>


                        <div class="col-12">
                            <h4>{{ $rendezvousOperation->operation->etablissement_medical }}</h4>
                            <address>
                                <strong>Ville : {{ $rendezvousOperation->operation->ville }}</strong><br>
                                Adresse : Centre Urbain Nord 1082 Tunis, Tunisie<br>

                            </address>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-12 col-sm-6 col-md-8">

                            <address>
                                <strong>{{ $rendezvousOperation->patient->username }}</strong><br>
                                {{ $rendezvousOperation->patient->adresse }}<br>

                                Phone:  {{ $rendezvousOperation->patient->numero_telephone }}<br>
                                Email:  {{ $rendezvousOperation->patient->email }}
                            </address>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4">
                            <h4 class="row">
                                <span class="col-6">Invoice #</span>
                                <span class="col-6 text-sm-end">INT-001</span>
                            </h4>
                            <div class="row">
                                <div style="display: flex; justify-content: space-between;">
                                    <span style="width: 50%;">rendez-vous ID</span>
                                    <span style="width: 50%; text-align: end;">#{{ $rendezvousOperation->id }}</span>
                                </div>
                                <div style="display: flex; justify-content: space-between;">
                                    <span style="width: 50%;">Date</span>
                                    <span style="width: 50%; text-align: end;">{{ $rendezvousOperation->date }}</span>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-12">
                            <br><br>
                            <div class="table-responsive">
                                Je soussigné, {{ $rendezvousOperation->operation->medecin }}, atteste par la présente que  {{ $rendezvousOperation->user_name }} a un
                                rendez-vous médical programmé avec moi le  {{ $rendezvousOperation->date }} à {{ $rendezvousOperation->operation->etablissement_medical }}. Ce
                                rendez-vous est fixé pour une opération médicale {{ $rendezvousOperation->operation->nom }}.
                                <br>Cordialement,
                                <br>
                                <br><br><br><br>
                                <blockquote class="blockquote text-center">
                                    <p class="mb-0">"Votre santé est notre priorité. Veuillez arriver 15 minutes avant
                                        l'heure du rendez-vous. En cas d'empêchement, veuillez nous contacter dès que
                                        possible."</p>

                                    <p>
                                    <footer class="blockquote-footer">AlooDoctoor.tn </footer>
                                    </p>
                                </blockquote>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 text-end">
                            <p>Signature</p>
                            <img src="https://res.cloudinary.com/dkrfmqbj1/image/upload/v1712391207/PFE/Vue/Signature/OnlineSignatures.net-21_d7lbuk.png"
                                alt="Signature" class="mt-4" style="max-width: 150px;">
                            <br>
                            <!-- Ajout de la classe "no-print" pour masquer ce bouton lors de l'impression -->
                            <button type="submit" onclick="window.print()"
                                class="btn btn-primary mb-3 no-print">Download
                                rendez-vous</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>

</html>
