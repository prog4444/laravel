<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;
    protected $table = 'droups';
    protected $fillable = [
        'name', 'expire_hours',
    ];



    public function user() {
        return $this->belongsTo('App\Models\Users');
    }
}
