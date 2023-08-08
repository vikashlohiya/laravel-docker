<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;   
    protected $table    = 'articles';
    protected $fillable = ['name','type_of_pouring','trolly1','trolly2','material_id1','material_id2','finish_work','spray','hand_paint','masking','material_extra','number_of_step','created_by'];
}
