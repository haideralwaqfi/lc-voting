<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Idea extends Model
{
    use HasFactory;
    use Sluggable;

    public $guarded = [];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function status()
    {
        return $this->belongsTo(Status::class);
    }

    public function getStatusColor($name)
    {
        $statuses= [
            'Colesed' => 'bg-red-400',
            'Considering'=> 'bg-red-400',
            'In progress'=> 'bg-red-400',
            'Implemented'=> 'bg-red-400',
            'Open'=> 'bg-red-400',
        ];

        foreach($statuses as $key => $value){
            if($name == $key)
            {
                return $value;
            }

        }
    }

}
