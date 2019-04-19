<?php
 
namespace App;

use Illuminate\Database\Eloquent\Model;

class Postuleroffre extends Model
{
    protected $fillable = [
        'offreid', 'userid',
    ];
}
