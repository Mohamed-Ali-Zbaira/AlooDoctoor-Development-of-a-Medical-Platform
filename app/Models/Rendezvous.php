<?php

namespace App\Models;
use App\Models\User;
use App\Models\Medecin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rendezvous extends Model
{
    use HasFactory;
    protected $table = 'rendezvous';

    protected $fillable = [
        'user_id',
        'medecin_id',
        'date',
        'time',
        'note',
        'status',
        'duration',
        'location',
        'reason',
        'reminder_sent',
        'payment_status',
        'user_name',
        'user_email',
        'user_phone',
    ];

    /**
     * Relations
     */

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function medecin()
    {
        return $this->belongsTo(User::class, 'medecin_id');
    }

}
