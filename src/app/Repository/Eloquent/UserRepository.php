<?php

namespace App\Repository\Eloquent;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Repository\Eloquent\BaseRepository;
use App\Repository\Interfaces\UserRepositoryI;

class UserRepository extends BaseRepository implements UserRepositoryI
{
    public function __construct(User $model)
    {
        parent::__construct($model);
    }

    /**
     * Get current usar authentication
     *
     *  @return Illuminate\Support\Facades\Auth
     * */
    public function getAuth()
    {
        return Auth::user();
    }
}
