<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Operation extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'user_id',
        'ville',
        'tarifs',
        'date',
        'duree',
        'image',
        'description',
        'medecin',
        'etablissement_medical',
        'numero_chambre',
        'statut',
        'complications',
        'preparatifs_pre_operatoires',
        'suivi_post_operatoire',
        'documents_associes',
        'notes',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
