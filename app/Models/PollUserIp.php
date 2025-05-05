<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PollUserIp extends Model
{
    use HasFactory;
    protected $table = 'poll_user_ips';

    protected $fillable = [
        'ip',
        'poll_id'
    ];
    public function poll(): BelongsTo
    {
        return $this->belongsTo(Poll::class, 'poll_id', $this->id);
    }
}
