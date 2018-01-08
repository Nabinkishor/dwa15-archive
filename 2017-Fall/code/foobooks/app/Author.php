<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    /*
    * Relationship method
    */
    public function books()
    {
        # Author has many Books
        # Define a one-to-many relationship.
        return $this->hasMany('App\Book');
    }


    /*
    * Helper method to get an array of author ids => author names
    */
    public static function getForDropdown()
    {
        $authors = Author::orderBy('last_name')->get();
        foreach ($authors as $author) {
            $authorsForDropdown[$author->id] = $author->first_name.' '.$author->last_name;
        }
        return $authorsForDropdown;
    }
}
