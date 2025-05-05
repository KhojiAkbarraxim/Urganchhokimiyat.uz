<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PublicReception extends Model
{
    use HasFactory;
    protected $table = 'public_receptions';
    protected $fillable = [
        'apparat_id',
        'qabul_joyi_manzili',
        'begin_date',
        'desc_eng',
        'desc_uz',
        'desc_ru',
        'status'
        ];
    public function apparat(): BelongsTo
    {
        return $this->belongsTo(Apparat::class);
    }
}
