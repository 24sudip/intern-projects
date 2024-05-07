<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function rel_to_user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
