<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $fillable = ['filename', 'type', 'size', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
