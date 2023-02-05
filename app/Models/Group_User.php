<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group_User extends Model
{
    use HasFactory;
    protected $table = 'droup_user';

    protected $fillable = [
        'group_id',
        'expired_at–datetime'
    ];


}
