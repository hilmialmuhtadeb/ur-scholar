<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bookmark extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'slug',
    ];

    public function scholaships() {
        return $this->belongsTo(Scholarship::class);
    }

    public function users() {
        return $this->belongsTo(User::class);
    }
}
