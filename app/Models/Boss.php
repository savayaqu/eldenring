<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Boss extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'boss_image',
        'health',
        'remembrance',
        'requires',
        'map'
    ];
    public function fights()
    {
        return $this->hasMany(Fight::class);
    }
}
