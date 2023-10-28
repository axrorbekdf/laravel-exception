<?php

namespace App\Http\Controllers;

use App\Filters\ByName;
use App\Filters\ByRoleId;
use App\Filters\ByStatus;
use App\Models\User;
use Illuminate\Support\Facades\Pipeline;

class UserSearchController extends Controller
{
    public function __invoke()
    {
        return Pipeline::send(User::query())
        ->through([
            ByName::class,
            ByRoleId::class,
            ByStatus::class,
        ])
        ->thenReturn()
        ->paginate();
    }
}
