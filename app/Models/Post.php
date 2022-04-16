<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // protected $fillable = ['title', 'excerpt', 'body'];
    protected $guarded= ['id'];

    public function category() { // nama method harus sama dengan yg dihubungkan(category)
        return $this->belongsTo(Category::class, 'category_id'); // 1 postingan punya 1 kattegori(belongsTo)
    }
    
}
