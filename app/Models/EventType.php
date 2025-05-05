<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class EventType extends Model
{
    use HasFactory;

    protected $id;
    public $timestamps = false;
    protected $table = 'event_types';

    protected $fillable = [
        'name_uz',
        'name_ru',
        'name_eng'
    ];
    public function event(): HasMany
    {
        return $this->hasMany(Event::class);
    }
}
