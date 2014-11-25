<?php

// *Construct a loop that iterates through each book and 
// then each book's keys and values. 
// Have it output the book's title, then list the key value pairs for 
// the data about each book.

// *Update your loop to only show books that were written after 1950.

$books = array(
    'The Hobbit' => array(
        'published' => 1937,
        'author' => 'J. R. R. Tolkien',
        'pages' => 310
    ),
    'Game of Thrones' => array(
        'published' => 1996,
        'author' => 'George R. R. Martin',
        'pages' => 835
    ),
    'The Catcher in the Rye' => array(
        'published' => 1951,
        'author' => 'J. D. Salinger',
        'pages' => 220
    ),
    'A Tale of Two Cities' => array(
        'published' => 1859,
        'author' => 'Charles Dickens',
        'pages' => 544
    )
);

foreach ($books as $title => $item) {
	if ($item ['published'] > 1950) {
// exit();
		echo "\n$title" . PHP_EOL;
		foreach ($item as $key => $value) {
		 	echo $key . ' ' . $value . PHP_EOL;
		}
	}
}