<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $guarded = ['mana'];

    public function profile()
    {
        return $this->hasMany('App\Models\profile');
    }
}
