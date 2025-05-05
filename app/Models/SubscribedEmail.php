<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SubscribedEmail extends Model
{
    use HasFactory;
    protected $table = 'subscribed_emails';
    protected $fillable = ['email'];
}
