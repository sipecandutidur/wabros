<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;


class Contact extends Model
{
    use HasFactory;
    use Sluggable;


    protected $guarded = ['id'];


    public function user(){
        return $this->belongsTo(User::class);
    }


    public function category_contact(){
        return $this->belongsTo(CategoryContact::class);
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    public function getRouteKeyName()
    {
    return 'slug';
    }



}
