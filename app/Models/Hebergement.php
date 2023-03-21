<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Hebergement extends Model
{
    use HasFactory;

    protected $fillable = [
        'userId',
        'packageChoisi',
        'dateDebut',
        'dateFin',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
