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
        foreach ($book as $info => $value) {
           echo "$info: $value" . PHP_EOL;
        }
    }
}
?>