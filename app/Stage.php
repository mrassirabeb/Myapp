<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stage extends Model
{
        protected $fillable = [
        'nom', 'mobile','contry','departement','ddescription','website','filename',
    ];
}
