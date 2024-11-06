<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>Ficher de rendez-vous de Mr, Mme, ou M.:{{ Auth::user()->full_name }}</title>

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
                            <h4> {{ $rendezvous->medecin->full_name }}</h4>
                            <h4> {{ $rendezvous->medecin->speciality }}</h4>

                            <address>
                                <strong>Phone: {{ $rendezvous->medecin->numero_telephone }}</strong><br>

                                Email: {{ $rendezvous->medecin->email }} <br>
                                Adress: {{ $rendezvous->medecin->adresse }} <br>
                                {{ $rendezvous->medecin->NomClinic }}

                            </address>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-12 col-sm-6 col-md-8">
                            <h4>Patient </h4>
                            <address>
                                <strong>{{ $rendezvous->user_name }}</strong><br>
                                Phone: {{ $rendezvous->user_phone }}<br>
                                Email: {{ $rendezvous->user_email }}
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
                                    <span style="width: 50%; text-align: end;">#{{ $rendezvous->id }}</span>
                                </div>
                                <div style="display: flex; justify-content: space-between;">
                                    <span style="width: 50%;">Date</span>
                                    <span style="width: 50%; text-align: end;">{{ $rendezvous->date }}</span>
                                </div>
                                <div style="display: flex; justify-content: space-between;">
                                    <span style="width: 50%;">Time</span>
                                    <span style="width: 50%; text-align: end;">{{ $rendezvous->time }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-12">
                            <div class="table-responsive">
                                <p>Je soussigné, {{ $rendezvous->medecin->full_name }},
                                    {{ $rendezvous->medecin->speciality }}, atteste par la présente que
                                    {{ $rendezvous->user_name }} a un rendez-vous médical programmé avec moi le
                                    {{ $rendezvous->date }} à {{ $rendezvous->time }} à
                                    {{ $rendezvous->medecin->adresse }}.

                                    Ce rendez-vous est fixé pour une consultation médicale afin d'évaluer
                                    {{ $rendezvous->note }}.
                                    Cordialement,</p>
                                <br>
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
