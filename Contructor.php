<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
    class Book{
        var $title;
        var $author;
        var $pages;

        function __construct(){
            echo "New Book created";
            echo "<br>";
        }
    }
    $book1 = new Book;
    $book1->title = "My Book";
    $book1->author = "Jk Bowling";
    $book1->pages = 400;

    $book2 = new Book;
    $book2->title = "Wings of fire";
    $book2->author = "APJ Kalam";
    $book2->pages = 400;

    echo $book1->author;
    echo "<br>";
    echo $book2->author;
    ?>

</body>
</html>