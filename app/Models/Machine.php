<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Machine extends Model
{
    use HasFactory;   
    protected $table    = 'machines';
    protected $fillable = ['name','total_station','total_round','main_color_tank','main_material_tank','island_color_tank','island_material_tank'];
}
