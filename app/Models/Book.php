<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'title', 'author', 'isbn', 'published_year', 'category_id'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
