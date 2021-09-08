<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // data yang boleh diisi
    // protected $fillable = ['title','excerpt','body'];

    // data yang tidak boleh diisi sisanya dapat diubah
    protected $guarded = ['id'];
}
