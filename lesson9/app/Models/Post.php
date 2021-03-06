<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public $guarded = ['id'];

    public function phones()
    {
        return $this->belongsTo(Phone::class);
    }

}
