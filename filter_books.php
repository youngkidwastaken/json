<?php
// Читаем содержимое JSON-файла
$jsonContent = file_get_contents('books.json');

// Декодируем JSON в массив PHP
$books = json_decode($jsonContent, true);

// Функция для фильтрации книг после 2000 года
function filterBooksAfter2000($book) {
    return $book['year'] > 2000;
}

// Применяем фильтр
$filteredBooks = array_filter($books, 'filterBooksAfter2000');

// Выводим отфильтрованные книги
echo "Книги, изданные после 2000 года:\n";
foreach ($filteredBooks as $book) {
    echo "- {$book['title']} ({$book['author']}, {$book['year']})\n";
}
