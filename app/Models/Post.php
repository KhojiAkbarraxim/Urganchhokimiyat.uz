<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    // protected $guarded =['id'];
    protected $fillable = [
        'title', 
        'content', 
        'category', 
        'eng_title', 
        'eng_content', 
        'ru_title', 
        'ru_content', 
        'image_path'
    ];
    public $timestamp = true;

}
