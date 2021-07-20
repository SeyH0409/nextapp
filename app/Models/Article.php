<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //table name
    protected $table = 'articles';

    //register items
    protected $fillable =[
        'id',
        'nickname',
        'title',
        'content',
    ];
}
