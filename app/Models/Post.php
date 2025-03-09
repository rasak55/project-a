<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','content'];
    protected $hidden = ['created_at', 'updated_at'];

    protected $casts = [
        'content' => 'string',
        'user_id' => 'integer'
    ];

}
