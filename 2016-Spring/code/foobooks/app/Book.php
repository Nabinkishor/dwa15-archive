<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['title','author_id','published','cover','purchase_link','user_id'];

    /**
	* Relationship method
	*/
    public function author() {
        return $this->belongsTo('\App\Author');
    }

    /**
	* Relationship method
	*/
    public function tags() {
        return $this->belongsToMany('\App\Tag')->withTimestamps();
    }

    /**
	* Relation method
	*/
    public function user() {
        return $this->belongsTo('\App\User');
    }

    /**
	* Example of outsourcing a common query to the model
	*/
    public static function getAllBooksWithAuthors() {
        return \App\Book::with('author')->where('user_id', '=',\Auth::id())->orderBy('id','desc')->get();
    }

    /**
	*
	*/
    public function getTagsForThisBook() {

        $tags_for_this_book = [];
        foreach($this->tags as $tag) {
            $tags_for_this_book[] = $tag->id;
        }

        return $tags_for_this_book;
    }

}
