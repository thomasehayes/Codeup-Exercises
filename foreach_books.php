<?php 

$books = [
    'The Hobbit' => [
        'published' => 1937,
        'author' => 'J. R. R. Tolkien',
        'pages' => 310
    ],
    'Game of Thrones' => [
        'published' => 1996,
        'author' => 'George R. R. Martin',
        'pages' => 835
    ],
    'The Catcher in the Rye' => [
        'published' => 1951,
        'author' => 'J. D. Salinger',
        'pages' => 220
    ],
    'A Tale of Two Cities' => [
        'published' => 1859,
        'author' => 'Charles Dickens',
        'pages' => 544
    ]
];

foreach ($books as $title => $book) {
    if ($book['published'] > 1950){
        echo $title . PHP_EOL;
        foreach ($book as $bookInfo => $bookValue) {
           echo "\t $bookInfo: $bookValue" . PHP_EOL;
        }
    }
}

//====================
//   Note Section
//====================
//if you have arrays, you will use foreach loops to get into it. 
//if you run into array to string conversion, it means you're trying to echo an array and its trying to convert it to a string, so you won't see the data within the array. 
// .= is concantenating and assigning it to the variable
//how do we filter stuff? 
    // use a if statement

?>