<?php

namespace App\Casts;

use Illuminate\Contracts\Database\Eloquent\CastsAttributes;

class Tags implements CastsAttributes 
{
    public function get($model, $key, $val, $attributes)
    {
        return json_decode($val);
    }

    public function set($model, $key, $val, $attributes)
    {
        return json_encode($val);
    }
}