@if (Auth::check())

<div class="container">
    <div class="row px-xl-5">
        <div class="col">
            <div class="tab-content">
                <div class="tab-pane fade show active" id="tab-pane-1">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <h4 class="mb-3" style="color: #0e54b7;">Prend RendezVous</h4>
                    <style>
                        /* Custom CSS for form elements */
                        .form-group label {
                            color: #0e54b7;
                            /* Set label color to blue */
                        }

                        .form-control {
                            border-color: #0e54b7;
                            /* Set border color of form controls to blue */
                            border-radius: 20px;
                            /* Set border radius for rounded corners */
                        }

                        .btn-primary {
                            background-color: #0e54b7;
                            /* Set button background color to blue */
                            border-color: #0e54b7;
                            /* Set button border color to blue */
                            border-radius: 20px;
                            /* Set border radius for rounded corners */
                            color: white;
                            /* Set text color to white */
                            text-decoration: none;
                            /* Remove underline from the link */
                            display: inline-block;
                            /* Ensure button displays inline */
                            padding: 0.375rem 0.75rem;
                            /* Apply padding to the button */
                            transition: background-color 0.3s ease, border-color 0.3s ease, color 0.3s ease;
                            /* Add transition effect */
                        }

                        .btn-primary:hover {
                            background-color: #073e89;
                            /* Darker shade of blue for button hover */
                            border-color: #073e89;
                            /* Darker shade of blue for button border on hover */
                        }
                    </style>
                    <form action="{{ route('rendezvous.store') }}" method="POST">
                        @csrf
                        {{-- <input type="hidden" name="user_id" value="{{ Auth::user()->id }}"> --}}
                        {{-- <input type="hidden" name="medecin_id" value="{{ $medecin->id }}">
                        <input type="hidden" name="status" value="pending"> --}}
                        <!-- Champ caché avec valeur par défaut "pending" -->
                        <input type="hidden" name="payment_status" value="unpaid">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="user_name">Name</label>
                                    <input type="text" class="form-control" id="user_name"
                                        name="user_name">
                                </div>
                                <div class="form-group">
                                    <label for="user_email">Email</label>
                                    <input type="email" class="form-control" id="user_email"
                                        name="user_email" required>
                                </div>
                                <div class="form-group">
                                    <label for="user_phone">Phone Number</label>
                                    <input type="tel" class="form-control" id="user_phone"
                                        name="user_phone" required>
                                </div>
                                <div class="form-group">
                                    <label for="location">Ville</label>
                                    <input type="text" class="form-control" id="location"
                                        name="location" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="date">Date</label>
                                    <input type="date" class="form-control" id="date"
                                        name="date" required>
                                </div>
                                <div class="form-group">
                                    <label for="time">Time</label>
                                    <input type="time" class="form-control" id="time"
                                        name="time" required>
                                </div>
                                <div class="form-group">
                                    <label for="note">Situation (Optional)</label>
                                    <textarea class="form-control" id="note" name="note" rows="4"></textarea>
                                    <small class="form-text text-muted">Explain your situation here
                                        (optional)</small>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Rendezvous</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endauth
