<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facture extends Model
{
    use HasFactory;

    protected $fillable = [
        'clientId',
        'reference',
        'mode',
        'produits',
        'total_ht',
        'total_ttc'
    ];
}
