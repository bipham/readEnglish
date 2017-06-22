<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Post extends Model
{
    protected $table = 'posts';

    protected $fillable = ['name', 'content', 'cate_id', 'publish'];

    public $timestamps = true;
}
