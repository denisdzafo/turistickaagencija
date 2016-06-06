<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = ['id', 'title', 'image_link', 'description', 'created_at',  'updated_at',
];
}