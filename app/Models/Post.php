<?php

namespace App\Models;

use Illuminate\Database\Eloquent\{Model, SoftDeletes};

class Post extends Model
{
    use SoftDeletes;

    protected $fillable = ['tenant_id', 'user_id', 'title', 'body', 'image'];

    public function user()
    {
        $this->belongsTo(User::class);
    }

    public function tenant()
    {
        $this->belongsTo(Tenant::class);
    }
}
