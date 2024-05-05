<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function rel_to_subject()
    {
        return $this->belongsTo(Subject::class, 'subject_id');
    }

    protected $guarded = ['id'];

    protected $casts = [
        'deleted_at' => 'datetime',
    ];
}
