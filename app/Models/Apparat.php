<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Apparat extends Model
{
    use HasFactory;
    protected $table = 'apparats';
    protected $fillable = [
        'ismi_sharifi',
        'hodim_malumotlari',
        'hodim_malumotlari_eng',
        'hodim_malumotlari_ru',
        'kasbi',
        'kasbi_eng',
        'kasbi_ru',
        'image_path',
        'address',
        'email',
        'tel',
        'majburiyati',
        'majburiyati_eng',
        'majburiyati_ru',
    ];
    public function public_reception(): HasMany
    {
        return $this->hasMany(PublicReception::class);
    }
    public function schedule(): HasMany
    {
        return $this->hasMany(Schedule::class);
    }

}
