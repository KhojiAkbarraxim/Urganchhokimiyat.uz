<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class MfySector extends Model
{
    use HasFactory;
    protected $table = 'mfy_sectors';
    protected $id;
    protected $fillable = [
        'tel',
        'name',
        'address',
        'director'
    ];
    public $timestamps = false;
    public function Mfy() : HasMany
    {
        return $this->hasMany(Mfy::class);
    }
}
