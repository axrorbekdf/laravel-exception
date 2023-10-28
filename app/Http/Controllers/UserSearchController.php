<?php

namespace App\Http\Controllers;

use App\Models\User;
use Closure;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Http\Request;


use Illuminate\Support\Facades\Pipeline;

class UserSearchController extends Controller
{
    public function __invoke(Request $request)
    {
        return Pipeline::send(User::query())
        ->through([
            function(Builder $builder, Closure $next){
                return $next($builder);
            },
            function(Builder $builder, Closure $next){
                return $next($builder);
            }
        ])
        ->thenReturn()
        ->paginate();
        // ->then(fn(User $user)=> $user);
    }
}
