<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RendezvousOperation extends Model
{
    protected $fillable = ['patient_id','medecin_id','operation_id', 'date', 'note', 'status', 'payment_status', 'user_name', 'user_email', 'user_phone', 'etat'];

    public function patient()
    {
        return $this->belongsTo(User::class, 'patient_id');
    }

    public function operation()
    {
        return $this->belongsTo(Operation::class, 'operation_id');
    }
    public function medecin()
    {
        return $this->belongsTo(User::class, 'medecin_id');
    }

}
