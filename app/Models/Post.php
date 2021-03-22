<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Post extends Model {
    use HasFactory;
    
    use Sluggable;

    protected $fillable = [
        'title',
        'description',
        'user_id',
        'slug'
    ];

    public function user() //foreign key user_id
    {
        return $this->belongsTo(User::class);
    }


    public function sluggable(): array {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

}