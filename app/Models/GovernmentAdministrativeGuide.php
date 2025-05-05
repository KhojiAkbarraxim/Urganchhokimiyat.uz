<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GovernmentAdministrativeGuide extends Model
{
    use HasFactory;
    protected $table = 'government_administrative_guides';  

    protected $fillable = [
        'file_path', 
        'file_size', 
        'desc_eng',
        'desc_uz',
        'desc_ru'
    ];
}
