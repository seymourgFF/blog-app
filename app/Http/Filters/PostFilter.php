<?php

namespace App\Http\Filters;

use Illuminate\Database\Eloquent\Builder;

class PostFilter extends AbstractFilter
{
    public const DATESTART = 'datestart';
    public const CATEGORY_ID = 'category_id';


    protected function getCallbacks(): array
    {
        return [
            self::CATEGORY_ID => [$this, 'categoryId'],
            self::DATESTART => [$this, 'dateStart'],
        ];
    }


    public function categoryId(Builder $builder, $value)
    {
        $builder->where('category_id', $value);
    }
    public function dateStart(Builder $builder, $value)
    {
        $builder->where('datestart', 'like',"%".$value."%");
    }
}
