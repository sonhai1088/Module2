<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    public static function find($id)
    {
    }

    public static function where(string $string, $id)
    {
    }
}
