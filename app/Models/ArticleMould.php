<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticleMould extends Model
{
    use HasFactory;   
    protected $table    = 'article_moulds';
    protected $fillable = ['size_id','article_id','mould_qty','club_size_id','size_plugin'];
}
