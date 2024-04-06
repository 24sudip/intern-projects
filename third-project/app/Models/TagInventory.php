<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TagInventory extends Model
{
    use HasFactory;

    public function relation_to_tag()
    {
        return $this->belongsTo(Tag::class, 'tag_id');
    }
}
