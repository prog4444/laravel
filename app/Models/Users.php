<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;
    protected $table = 'users_s';
    protected $fillable = [
        'name', 'email', 'active'
    ];

    public function group() {
        return $this->belongsTo('App\Models\Group');
    }
}
