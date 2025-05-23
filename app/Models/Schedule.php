<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Schedule extends Model
{
    use HasFactory;

    protected $table = 'schedules';
    protected $fillable = [
        'day',
        'time',
        'desc_ru',
        'desc_uz',
        'desc_eng',
        'apparat_id',
    ];
    public function apparat(): BelongsTo
    {
        return $this->belongsTo(Apparat::class);
    }
}
