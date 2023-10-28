<?php

namespace App\Filters;

class ByRoleId extends Filter{

    protected function applyFilter($builder) {
        return $builder->when($this->request->has('role_id'),
            fn($query) =>  $query->where('role_id', $this->request->role_id)
        );
    }
}