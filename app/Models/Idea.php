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


    public function votes()
    {
        return $this->belongsToMany(User::class, 'votes');
    }

    public function getStatusColor($name)
    {
        $statuses= [
            'Closed' => 'red-400 text-white',
            'Considering'=> 'purple-400 text-white',
            'In progress'=> 'blue-400 text-white',
            'Implemented'=> 'green-400 text-white',
            'Open'=> 'yellow-400 text-white',
        ];

        foreach($statuses as $key => $value){
            if($name == $key)
            {
                return $value;
            }

        }
    }

}
