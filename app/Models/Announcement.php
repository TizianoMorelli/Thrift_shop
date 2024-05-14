<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    use HasFactory;

    protected $fillable = [

        'title',
        'subtitle',
        'body',
        'user_id',
        'price',
        'category_id',
        'img'

    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function toBeRevisionedCount(){
        return Announcement::where('is_accepted',null)->count();
    }
}
