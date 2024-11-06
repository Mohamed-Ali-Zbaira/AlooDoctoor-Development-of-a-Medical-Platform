<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Comment;
use Illuminate\Auth\Passwords\CanResetPassword;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, CanResetPassword;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'full_name', 'username', 'email', 'image', 'password', 'role', 'NomClinic', 'statut', 'numero_telephone', 'adresse', 'etat', 'speciality', 'localisation_link', 'description', 'document', 'langue_parles', 'temps', 'tarifs'
    ];



    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    const ROLE_USER = 'user';
    const ROLE_MEDECIN = 'medecin';
    const ROLE_ADMINCLINIC = 'adminclinic';
    const ROLE_SUPERADMIN = 'superadmin';

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
    public function rendezvous()
    {
        return $this->hasMany(RendezVous::class, 'medecin_id');
    }
    public function cliniques()
    {
        return $this->hasMany(Clinique::class);
    }
    public function rendezvousOperation()
    {
        return $this->hasMany(RendezVous::class, 'medecin_id');
    }
}