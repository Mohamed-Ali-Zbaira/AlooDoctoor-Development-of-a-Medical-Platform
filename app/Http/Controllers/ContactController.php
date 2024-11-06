<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact; // Assurez-vous d'importer le modèle Contact si vous en avez un

class ContactController extends Controller
{
    public function showContactForm()
    {
        return view('Home.Contact.contactPage');
    }

    public function submitContactForm(Request $request)
    {
        // Validate the form data
        $request->validate([
            'user_id' => 'required|string',
            'name' => 'required|string',
            'email' => 'required|email',
            'subject' => 'required|string',
            'message' => 'required|string',
        ]);

        $contact = new Contact();
        $contact->user_id = $request->input('user_id'); // Assign user_id correctly
        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->subject = $request->input('subject');
        $contact->message = $request->input('message');

        // Save the data to the database
        $contact->save();
        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }


    // DashboardSuperAdmin

    public function index()
    {

        $contacts = Contact::all();

        // Passer les contacts à la vue pour l'affichage
        return view('DashboardSuperAdmin.Contact.ContactPage', compact('contacts'));
    }
    public function show($id)
    {
        // Récupérer le contact par son ID
        $contact = Contact::findOrFail($id);

        // Passer le contact à la vue pour l'affichage
        return view('DashboardSuperAdmin.Contact.ContactPage', compact('contact'));
    }
    public function destroy($id)
    {
        $contact = Contact::findOrFail($id);
        $contact->delete();
        return redirect()->route('contacts.index')->with('success', 'Contact deleted successfully.');
    }
}