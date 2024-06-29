<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Boss extends Model
{
    use HasFactory;

    protected $fillable = [
        'external_id',
        'name',
        'image',
        'region',
        'description',
        'location',
    ];
    public function fights()
    {
        return $this->hasMany(Fight::class);
    }
}
