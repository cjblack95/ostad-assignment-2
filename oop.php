<?php

class Book {

    private $title;
    private $availableCopies;

    public function __construct($title, $availableCopies) {
        $this->title = $title;
        $this->availableCopies = $availableCopies;
    }

    public function getTitle() {
        return $this->title;
    }

    public function availableCopies() {
        return $this->availableCopies;
    }

    public function borrowBook() {
        return $this->availableCopies = $this->availableCopies - 1;
    }

    public function returnBook() {
        return $this->availableCopies = $this->availableCopies + 1;
    }

}


class Member {

    private $name;
    private $book;

    public function __construct($name) {
        $this->name = $name;
        if($this->name === "John Doe"){
            $this->book = new Book("The Great Gatsby",5);
            $available = $this->borrowBook($this->book);
            echo "Available Copies of "."'".$this->book->getTitle()."'"." ".$available;
        }
        elseif ($this->name === "Jane Smith"){
            $this->book = new Book("To Kill a Mockingbird",3);
            $available = $this->borrowBook($this->book);
            echo "Available Copies of "."'".$this->book->getTitle()."'"." ".$available;
        }
    }

    public function getName() {
        return $this->name;
    }

    private function borrowBook($book) {
        return $book->borrowBook();
    }

    private function returnBook($book) {
        return $book->returnBook();
    }

}
$member1 = new Member("John Doe");
echo "\n";
$member2 = new Member("Jane Smith");
