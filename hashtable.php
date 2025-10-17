<?php

$bookData = [
    "Pride and Prejudice" => ["author" => "Jane Austen", "year" => 1813, "genre" => "Classic Romance"],
    "Moby Dick" => ["author" => "Herman Melville", "year" => 1851, "genre" => "Adventure"],
    "Clean Code" => ["author" => "Robert C. Martin", "year" => 2008, "genre" => "Programming"],
    "Superintelligence" => ["author" => "Nick Bostrom", "year" => 2014, "genre" => "Artificial Intelligence"],
    "The Diary of Anne Frank" => ["author" => "Anne Frank", "year" => 1947, "genre" => "Historical Biography"]
];

function findBook($title, $bookData) {
    echo "<h3>🔍 Searching for Book: '$title'</h3>";
    if (array_key_exists($title, $bookData)) {
        $info = $bookData[$title];
        echo "Title: $title<br>";
        echo "Author: {$info['author']}<br>";
        echo "Year: {$info['year']}<br>";
        echo "Genre: {$info['genre']}<br>";
    } else {
        echo "Sorry, no record found for this book.<br>";
    }
}

// Example
findBook("Clean Code", $bookData);
echo "<hr>";
findBook("The Great Gatsby", $bookData);
?>
