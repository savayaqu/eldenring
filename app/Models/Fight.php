<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fight extends Model
{
    use HasFactory;
    protected $fillable = ['status', 'attempts', 'boss_id', 'user_id'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function boss()
    {
        return $this->belongsTo(Boss::class);
    }
}
