<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable=[
        'caption',
        'user_id',
    ];

    //coz one user can have many posts so user is referenced here

    public function user()
    {
        return $this->belongsTo(User::class)->select('name','id');
    }

}
