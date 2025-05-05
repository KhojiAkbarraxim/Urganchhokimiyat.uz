<?php

namespace App\Models;

use App\Models\PollUserIp;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Poll extends Model
{
    use HasFactory;
    protected $table = 'polls';

    protected $fillable = [
        'good',
        'great',
        'acceptable',
        'unacceptable',
        'end_date',
        'question',
        'begin_date',
        'company_id',
        'ru_question',
        'eng_question',
        'publish_limit',
        'archive_status'
    ];
    public function companies(): BelongsTo
    {
        return $this->belongsTo(Company::class, 'company_id');
    }
    public function pollUserIp(): HasMany
    {
        return $this->hasMany(PollUserIp::class);
    }
}
