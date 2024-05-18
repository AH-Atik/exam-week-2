<?php
class Book {
    // Private properties
    private $title;
    private $availableCopies;

    // Constructor to initialize properties
    public function __construct($title, $availableCopies) {
        $this->title = $title;
        $this->availableCopies = $availableCopies;
    }

    // Method to get the title of the book
    public function getTitle() {
        return $this->title;
    }

    // Method to get the available copies of the book
    public function getAvailableCopies() {
        return $this->availableCopies;
    }

    // Method to borrow a book, decrease available copies
    public function borrowBook() {
        if ($this->availableCopies > 0) {
            $this->availableCopies--;
            return true;
        } else {
            return false;
        }
    }

    // Method to return a book, increase available copies
    public function returnBook() {
        $this->availableCopies++;
    }
}

class Member {
    // Private property
    private $name;

    // Constructor to initialize properties
    public function __construct($name) {
        $this->name = $name;
    }

    // Method to get the name of the member
    public function getName() {
        return $this->name;
    }

    // Method to borrow a book
    public function borrowBook($book) {
        if ($book->borrowBook()) {
            return $this->name . " Borrowed " . $book->getTitle() . "<br>";
        } else {
            return $this->name . " Could not borrow " . $book->getTitle() . " Out of stock.<br>";
        }
    }

    // Method to return a book
    public function returnBook($book) {
        $book->returnBook();
        echo $this->name . " Returned " . $book->getTitle() . "<br>";
    }
}

// Create 2 books with the following properties
$book1 = new Book("The Great Gatsby", 5);
$book2 = new Book("To Kill a Mockingbird", 3);

// Create 2 members with the following properties
$member1 = new Member("John Doe");
$member2 = new Member("Jane Smith");

// Member 1 borrows book 1
$member1->borrowBook($book1);

// Member 2 borrows book 2
$member2->borrowBook($book2);

// Print available copies with their names
echo"Available Copies of" ." '".$book1->getTitle()."': " . $book1->getAvailableCopies() . "<br>";
echo"Available Copies of" ." '".$book2->getTitle()."': " . $book2->getAvailableCopies() . "<br>";


?>
