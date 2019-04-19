<?php
 
namespace App;

use Illuminate\Database\Eloquent\Model;

class Offre extends Model
{
    protected $fillable = [
        'nom', 'mobile', 'contrat','contry','departement','ddescription','website','filename',
    ];
}
