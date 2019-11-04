<?php

class BookSingleton
{
    /**
    * Singleton classes
    */
    private $author = 'Jonny, Hellen, Patrick';
    private $title = 'Design Pattern';
    private static $book = NULL;
    private static $isLoanedOut = FALSE;

    private function __construct() {

    }

    static function borrowBook() {
        if (FALSE == self::$isLoanedOut) {
            if (NULL == self::$book) {
                self::$isLoanedOut = TRUE;
                return self::$book;
            } else {
                return NULL;
            }
        }
    }

    function returnBook(BookSingleton $bookReturned) {
        self::$isLoanedOut = FALSE;
    }

    function getAuthor() {
        return $this->author;
    }

    function getTitle() {
        return $this->title;
    }

    function getAuthorAndTitle() {
        return $this->getTitle() . ' by ' . $this->getAuthor();
    }

}

class BookBorrower {
    private $borrowedBook;
    private $haveBook = FALSE;

    function __construct()
    {
        
    }

    function getAuthorAndTitle() {
        if (TRUE == $this->haveBook) {
            return $this->borrowBook->getAuthorAndTitle();
        } else {
            return "I don't have the book";
        }
    }

    function borrowBook() {
        $this->borrowBook = BookSingleton::borrowBook();
        if ($this->borrowBook == NULL) {
            $this->haveBook =  FALSE;
        } else {
            $this->haveBook =TRUE;
        }
    }

    function returnBook() {
        $this->borrowBook->returnBook($this->borrowBook);
    }
}

