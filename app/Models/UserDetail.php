<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    use HasFactory;   
    protected $table    = 'user_details';
    protected $fillable = ['f_name','l_name','role_id','user_id'];
}
