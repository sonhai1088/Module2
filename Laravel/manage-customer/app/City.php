<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\This;

class City extends Model
{
    /**
     * @var array|string|null
     */

    public function customers()
    {
        return $this->hasMany('App\Customer');
    }

}


