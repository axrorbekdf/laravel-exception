<?php

namespace App\Filters;

class ByStatus extends Filter{

    protected function applyFilter($builder) {
        return $builder->when($this->request->has('active'),
            fn($query) =>  $query->where('active', 'REGEXP', $this->request->active)
        );
    }
}