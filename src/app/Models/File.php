<?php

namespace App\Models;

use App\Models\Route;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class File extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     *  File has a only one Route
     * */
    public function route()
    {
        return $this->belongsTo(Route::class, "route_id");
    }
}
