<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserInterests extends Model
{
    protected $fillable = ['user_id', 'name'];
}
