<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    protected $fillable = ['nickname', 'password', 'api_token', 'role_id'];
    public function fights()
    {
     return   $this->hasMany(Fight::class);
    }
    public function role()
    {
     return   $this->belongsTo(Role::class);
    }
    public function hasRole(array $role) {
        return in_array($this->role->name, $role);
    }
}
