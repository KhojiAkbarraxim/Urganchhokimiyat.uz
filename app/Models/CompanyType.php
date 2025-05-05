<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CompanyType extends Model
{
    use HasFactory;

    protected $id;
    protected $name;
    public $timestamps = false;
    protected $table = 'company_types';
    protected $fillable = [
        'name_uz',
        'name_eng',
        'name_ru'
    ];
    public function company(): HasMany
    {
        return $this->hasMany(Company::class);
    }
}
