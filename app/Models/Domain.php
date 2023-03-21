<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Domain extends Model
{
    use HasFactory;

    protected $fillable = [
        'userId',
        'domainName',
        'dns1',
        'dns2',
        'expirationDate'
    ];
}
