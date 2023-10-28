<?php

namespace App\Filters;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

abstract class Filter{

    public function __construct(protected Request $request){}

    public function handle(Builder $builder, \Closure $next){

        return $this->applyFilter($next($builder));
    }

    abstract protected function applyFilter($builder);
}