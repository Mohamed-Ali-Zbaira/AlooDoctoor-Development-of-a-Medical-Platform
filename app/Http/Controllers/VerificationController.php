<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Document;
use Illuminate\Support\Facades\Auth;

class VerificationController extends Controller
{
    public function index()
    {
        // Récupérer les documents de l'utilisateur actuellement authentifié
        $documents = Document::where('user_id', Auth::id())->get();
        return view('Home.Verification.VerificationPage', compact('documents'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'fileInput.*' => 'required|mimes:pdf,docx,jpeg,png|max:2048',
        ]);

        if ($request->hasFile('fileInput')) {
            foreach ($request->file('fileInput') as $file) {
                $filename = $file->getClientOriginalName();
                $type = $file->getClientOriginalExtension();
                $size = $file->getSize();

                $document = new Document();
                $document->filename = $filename;
                $document->type = $type;
                $document->size = $size;
                $document->user_id = Auth::id(); // Récupérer l'ID de l'utilisateur actuellement authentifié
                $document->save();
            }
        }

        return redirect()->route('verification.index')->with('success', 'Documents uploaded successfully!');
    }
    public function show($id)
    {
        $document = Document::where('id', $id)->where('user_id', Auth::id())->firstOrFail();
        return view('Home.Verification.VerificationPage', compact('document'));
    }


    public function destroy($id)
    {
        $document = Document::where('id', $id)
            ->where('user_id', Auth::id())
            ->firstOrFail();

        $document->delete();

        return redirect()->route('verification.index')->with('success', 'Document deleted successfully!');
    }
    public function update(Request $request, $id)
    {
        $document = Document::findOrFail($id);

        $request->validate([
            'filename' => 'required|string|max:255',

        ]);

        $document->filename = $request->input('filename');


        $document->save();

        return redirect()->route('verification.index')->with('success', 'Document updated successfully!');
    }
}
