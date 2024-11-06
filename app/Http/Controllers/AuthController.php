<?php
namespace App\Http\Controllers;
use App\Models\Medecin;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;

class AuthController extends Controller
{
    public function showRegistrationForm()
    {
        return view('Home.auth.signup');
    }



    public function register(Request $request)
    {
        $request->validate([
            'full_name' => 'required|string',
            'username' => 'required|string|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:6',
            'role' => 'required|string'
        ]);

        if ($request->input('role') === 'medecin') {
            $user = User::create([
                'full_name' => $request->input('full_name'),
                'username' => $request->input('username'),
                'email' => $request->input('email'),
                'password' => Hash::make($request->input('password')),
                'role' => $request->input('role')
            ]);
        } else {
            $user = User::create([
                'full_name' => $request->input('full_name'),
                'username' => $request->input('username'),
                'email' => $request->input('email'),
                'password' => Hash::make($request->input('password')),
                'role' => $request->input('role')
            ]);
        }

        // Générer le jeton
        $token = $user->createToken('authToken')->plainTextToken;

        return redirect()->route('login')->with(['message' => 'Registration successful. Please log in.', 'user' => $user, 'access_token' => $token]);
    }


    public function showLoginForm()
    {
        return view('Home.auth.signin');
    }

    public function login(Request $request)
    {
        // Validate request data
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        // Attempt to authenticate normal users
        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            // Check if the user is blocked
            if ($user->role === 'user' && $user->statut === 'bloque') {
                Auth::logout();
                return redirect('/statut')->with('error', 'Your account is blocked.');
            } elseif ($user->role === 'user' && $user->statut === 'connecter') {
                return redirect('/')->with(['user' => $user]);
            }
        }

        // Attempt to authenticate doctors
        if (Auth::guard('web')->attempt($credentials)) {
            $medecin = Auth::guard('web')->user();

            // Check if the doctor is blocked
            if ($medecin->role === 'medecin' && $medecin->statut === 'bloque') {
                Auth::guard('web')->logout();
                return redirect('/statut')->with('error', 'Your account is blocked.');
            } elseif ($medecin->role === 'medecin' && $medecin->statut === 'connecter') {
                // Additional verification for doctors
                if ($medecin->etat === 'verifier') {
                    return redirect('/Dashboard')->with(['user' => $medecin]);
                } elseif ($medecin->etat === 'inverifier') {
                    return redirect('/VerificationPage')->with(['user' => $medecin]);
                } elseif ($medecin->etat === 'Wating') {
                    return redirect('/WaitingPage')->with(['user' => $medecin]);
                }
            }
        }

        // Check for superadmin authentication
        if (Auth::attempt($credentials) && Auth::user()->role === 'superadmin') {
            return redirect('/dashboardSuperAdmin')->with(['user' => Auth::user()]);
        }

        // Redirect back with error if authentication fails
        return redirect()->back()->withErrors(['error' => 'Invalid credentials. Please check your email and password.'])->withInput();
    }





    public function logout(Request $request)
    {
        Auth::logout();

        return redirect()->route('login')->with('message', 'Successfully logged out.');
    }

    public function getUser(Request $request)
    {
        return view('Home.index')->with('user', $request->user());
    }

    public function showResetPasswordForm($token)
    {
        return view('Home.auth.reset-password-Email', ['token' => $token]);
    }

    public function openResetPassword()
    {
        return view('Home.auth.reset-password');
    }

    public function sendResetLinkEmail(Request $request)
    {
        $request->validate(['email' => 'required|email']);

        $status = Password::sendResetLink(
            $request->only('email')
        );

        return $status === Password::RESET_LINK_SENT
            ? back()->with('status', __($status))
            : back()->withErrors(['email' => __($status)]);
    }

    public function updateResetPassword(Request $request)

    {
        $request->validate([
            // 'email' => 'required|email',
            'password' => 'required|string|min:6|confirmed',
            'token' => 'required|string',
        ]);

        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user, $password) {
                $user->forceFill([
                    'password' => Hash::make($password)
                ])->save();
            }
        );

        return $status == Password::PASSWORD_RESET
            ? redirect()->route('login')->with('status', __($status))
            : back()->withErrors(['email' => [__($status)]]);
    }


    public function showDashboard()
    {
        // Get the authenticated doctor
        $medecin = Auth::guard('medecin')->user();

        // Pass the doctor's information to the dashboard view
        return view('Inc.Dashboard.NavDash', ['medecin' => $medecin]);
    }


}