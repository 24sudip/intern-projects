<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    use HasFactory;

    public function relation_to_user()
    {
        return $this->belongsTo(User::class, 'replier_id');
    }

    public function relation_to_comment()
    {
        return $this->belongsTo(Comment::class, 'comment_id');
    }
}
