<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Blog extends Model
{
    use HasFactory;

    const EXCERPT_LENGTH = 100;

    protected $fillable = ['body',];

    public function excerpt()
    {
        return Str::limit($this->body, Blog::EXCERPT_LENGTH);
    }
}
