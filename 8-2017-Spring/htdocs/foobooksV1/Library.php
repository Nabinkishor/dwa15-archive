<?php

class Library {

    private $books;

    /**
	* 
	*/
    public function __construct($jsonPath) {

        $bookJson = file_get_contents($jsonPath);
        $this->books = json_decode($bookJson, true);

    }


    public function getAllBooks() {
        return $this->books;
    }


    public function getBooksByTitle(string $title, $caseSensitive = false) {

        $filteredBooks = [];

        foreach($this->books as $thisTitle => $book) {

            if($caseSensitive) {
                $match = $title == $thisTitle;
            }
            else {
                $match = strtolower($title) == strtolower($thisTitle);
            }

            if($match) {
                $filteredBooks[$thisTitle] = $book;
            }

        }

        return $filteredBooks;

    }


} # eoc
