<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Company extends Model
{
    use HasFactory;

    protected $id;
    protected $fillable = [
        'tel',
        'name',
        'email',
        'address',
        'site_url',
        'type_id',
        'director',
        'latitude',
        'longitude',
        'description_uz',
        'description_ru',
        'description_eng'
    ];
    public function companytypes(): BelongsTo
    {
        return $this->belongsTo(CompanyType::class, 'type_id', $this->id);
    }
    public function polls(): HasMany
    {
        return $this->hasMany(Poll::class);
    }
    public function map(): HasMany
    {
        return $this->hasMany(Map::class);
    }
}
