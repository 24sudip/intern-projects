<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscriber extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function relation_to_user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
