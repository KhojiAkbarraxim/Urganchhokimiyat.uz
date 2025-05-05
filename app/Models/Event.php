<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Event extends Model
{
    use HasFactory;
    protected $id;
    protected $fillable = [
        'title_uz',
        'title_eng',
        'title_ru',
        'content_uz',
        'content_eng',
        'content_ru',
        'category_id',
        'image_path'
    ];
    public function EventType(): BelongsTo
    {
        return $this->belongsTo(EventType::class, 'category_id', $this->id);
    }
}
