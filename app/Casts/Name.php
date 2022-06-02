<?php

namespace App\Casts;

use Illuminate\Contracts\Database\Eloquent\CastsAttributes;

class Name implements CastsAttributes 
{
    public function get($model, $key, $val, $attributes)
    {
        return "GROWP_{$val}";
    }

    public function set($model, $key, $val, $attributes)
    {
        return "LDZ_{$val}";
    }
}