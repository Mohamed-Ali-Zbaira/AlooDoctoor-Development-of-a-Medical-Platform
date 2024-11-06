<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Operation;

class OperationController extends Controller
{
    public function index()
    {
        $operations = Operation::paginate(4);
        return view('Home.OperationMedicale.OperationMedicale', compact('operations'));
    }

    public function search(Request $request)
    {
        $query = $request->input('query');

        $operations = Operation::where('nom', 'like', "%$query%")
            ->orWhere('ville', 'like', "%$query%")
            ->orWhere('description', 'like', "%$query%")
            ->orWhere('tarifs', 'like', "%$query%")
            ->orWhere('medecin', 'like', "%$query%")
            ->orWhere('etablissement_medical', 'like', "%$query%")
            ->paginate(4);

        return view('Home.OperationMedicale.OperationMedicale', compact('operations', 'query'));
    }
    public function showOperationDetails($id)
    {
        $operation = Operation::findOrFail($id);
        return view('Home.OperationMedicale.OperationMedicale', compact('operation'));
    }

}

