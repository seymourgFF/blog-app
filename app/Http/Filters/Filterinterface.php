<?php

namespace App\Http\Filters;


use Illuminate\Database\Eloquent\Builder;

interface Filterinterface
{
    public function apply(Builder $builder);
}
