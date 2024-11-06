<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clinique extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'user_id',
        'ville',
        'email',
        'numero_telephone',
        'localisation_link',
        'image',
        'description',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
