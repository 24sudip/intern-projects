<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function relation_to_category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function relation_to_user()
    {
        return $this->belongsTo(User::class, 'blogger_id');
    }
}
