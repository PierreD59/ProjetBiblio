<?php

class BookManager
{
    private $_db;

    /**
     * constructor
     *
     * @param PDO $db
     */
    public function __construct(PDO $db)
    {
        $this->setDb($db);
    }

    /**
     * Get the value of _db
     */
    public function getDb()
    {
        return $this->_db;
    }

    /**
     * Set the value of _db
     *
     * @param PDO $db
     * @return  self
     */
    public function setDb(PDO $db)
    {
        $this->_db = $db;

        return $this;
    }
    /**
     * Add book into DB
     *
     * @param Book $Book
     */
    public function add(Book $book)
    {
        $query = $this->getDb()->prepare('INSERT INTO book(name, author, content, category, image, alt) VALUES (:name, :author, :content, :category, :image, :alt)');
        $query->bindValue('name', $book->getName(), PDO::PARAM_STR);
        $query->bindValue('author', $book->getAuthor(), PDO::PARAM_STR);
        $query->bindValue('content', $book->getContent(), PDO::PARAM_STR);
        $query->bindValue('category', $book->getCategory(), PDO::PARAM_STR);
        $query->bindValue('image', $book->getImage(), PDO::PARAM_STR);
        $query->bindValue('alt', $book->getAlt(), PDO::PARAM_STR);

        $query->execute();
    }

    /**
     * Get one book by id or name
     *
     * @param $info
     * @return Book
     */
    public function getBook($info)
    {
        $query = $this->getDB()->prepare('SELECT * FROM book WHERE id = :id');
        $query->bindValue('id', $info, PDO::PARAM_INT);
        $query->execute();
        $detailBook = $query->fetch(PDO::FETCH_ASSOC);

        $class = ucfirst($detailBook['category']);
        return new $class($detailBook);
    }

    /**
     * List all books
     *
     * @return array $arrayOfBooks
     */
    public function getBooks()
    {
        $query = $this->getDB()->query('SELECT id, name, author, content, category FROM book LIMIT 3');
        $dataBooks = $query->fetchAll(PDO::FETCH_ASSOC);
        $arrayOfBooks = [];

        foreach ($dataBooks as $dataBook) {
            if ($dataBook['category'] == "Manga") {
                $arrayOfBooks[] = new Manga($dataBook);
            } elseif ($dataBook['category'] == "Comic") {
                $arrayOfBooks[] = new Comic($dataBook);
            } elseif ($dataBook['category'] == "Roman") {
                $arrayOfBooks[] = new Roman($dataBook);
            }
        }

        return $arrayOfBooks;
    }

    public function deleteBook($book)
    {
        $query = $this->getDb()->prepare('DELETE FROM book WHERE id = :id');
        $query->bindValue('id', $book, PDO::PARAM_INT);
        $query->execute();
    }

    /**
     * Update book's data 
     *
     * @param Book $book
     */
    public function update(Book $book)
    {
        $query = $this->getDb()->prepare('UPDATE book SET name = :name, author = :author, content = :content, category = :category, image = :image, alt = :alt WHERE id = :id ');

        $query->bindValue('id', $book->getId(), PDO::PARAM_INT);
        $query->bindValue('name', $book->getName(), PDO::PARAM_STR);
        $query->bindValue('author', $book->getAuthor(), PDO::PARAM_STR);
        $query->bindValue('content', $book->getContent(), PDO::PARAM_STR);
        $query->bindValue('category', $book->getCategory(), PDO::PARAM_STR);
        $query->bindValue('image', $book->getImage(), PDO::PARAM_STR);
        $query->bindValue('alt', $book->getAlt(), PDO::PARAM_STR);

        $query->execute();
    }
}
