<?php

namespace App\Filters;

class ByName extends Filter{

    protected function applyFilter($builder) {
        return $builder->when($this->request->has('login'),
            fn($query) =>  $query->where('login', 'REGEXP', $this->request->login)
        );
    }
}