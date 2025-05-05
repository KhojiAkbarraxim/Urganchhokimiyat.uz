<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Mfy extends Model
{
    use HasFactory;
    protected $table = 'mfys';
    protected $id;
    protected $fillable = [
        'tel',
        'name',
        'raisi',
        'sector_id'
    ];
    public function MfySector() : BelongsTo
    {
        return $this->belongsTo(MfySector::class, 'sector_id');
    }
    public $timestamps = false;
}
