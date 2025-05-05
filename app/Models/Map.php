<?php

namespace App\Models;

use App\Models\Company;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Map extends Model
{
    use HasFactory;
    protected $table = 'object_locations';  

    protected $fillable = [
        'address',
        'obj_type',
        'latitude',
        'longitude',
        'company_id', 
        'tree_count',
    ];
    public function companies(): BelongsTo
    {
        return $this->belongsTo(Company::class, 'company_id');
    }
}
