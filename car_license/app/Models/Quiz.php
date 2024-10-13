<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    use HasFactory;

    public function favorite() {
        return $this->hasOne(Favorite::class)->where('user_id', auth()->id());
    }
    public function user() {
        return $this->hasMany(User::class);

        
    }    protected $fillable = [
        'quiz',
        'kind',
    ];
    
}