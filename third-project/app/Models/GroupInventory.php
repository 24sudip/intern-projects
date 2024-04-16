<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GroupInventory extends Model
{
    use HasFactory;

    public function relation_to_blog()
    {
        return $this->belongsTo(Blog::class, 'blog_id');
    }
}
