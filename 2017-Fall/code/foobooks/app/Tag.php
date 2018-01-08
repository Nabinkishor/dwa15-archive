<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    /*
    * Relationship method
    */
    public function books()
    {
        return $this->belongsToMany('App\Book')->withTimestamps();
    }


    /*
    * Helper method to get an array of tag ids => tag names
    */
    public static function getForCheckboxes()
    {
        $tags = Tag::orderBy('name')->get();

        $tagsForCheckboxes = [];

        foreach ($tags as $tag) {
            $tagsForCheckboxes[$tag['id']] = $tag->name;
        }

        return $tagsForCheckboxes;
    }
}
