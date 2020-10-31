<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
    use HasFactory;

    protected $fillable = [
        // 'user_id',
        'title',
        'slug',
        'image',
        'content',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
