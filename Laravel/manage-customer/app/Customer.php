<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\This;

class Customer extends Model
{
    protected $table = 'customer';

    public static function where(string $string, string $string1, string $string2)
    {
    }

    public function city(){
        return $this->belongsTo('App\City');
    }

}

