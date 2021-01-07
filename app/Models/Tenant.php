<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tenant extends Model
{
    protected $fillable = ['subdomain', 'name'];

    public function users()
    {
        $this->hasMany(User::class);
    }

    public function posts()
    {
        $this->hasMany(Post::class);
    }
}
