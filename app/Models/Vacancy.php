<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vacancy extends Model
{
    use HasFactory;
        protected $fillable = [
            'file_path',
            'desc_uz',
            'desc_ru',
            'desc_eng',
        ];
    
}
