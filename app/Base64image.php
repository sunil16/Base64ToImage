<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Base64image extends Model
{


protected $table = 'base64images';

protected $fillable = [
'imageurl',
];
}
