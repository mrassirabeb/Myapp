<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cv extends Model
{
    protected $fillable = [
        'firstname', 'lastname', 'adresse','city','age','typeemploi','categories','niveauetude','tel','filename','userid',
    ];
}
