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
        $query = $this->getDb()->prepare('INSERT INTO vehicles(name, author, content, release_date, available, category_id, image_id) VALUES (:name, :author, :content, :release_date, :available, :category_id, :image_id)');
        $query->bindValue('name', $book->getName(), PDO::PARAM_STR);
        $query->bindValue('author', $book->getAuthor(), PDO::PARAM_STR);
        $query->bindValue('content', $book->getContent(), PDO::PARAM_STR);
        $query->bindValue('release_date', $book->getRelease_date(), PDO::PARAM_INT);
        $query->bindValue('available', $book->getAvailable(), PDO::PARAM_INT);
        $query->bindValue('category_id', $book->getCatagory_id(), PDO::PARAM_STR);
        $query->bindValue('image_id', $book->getImage_id(), PDO::PARAM_STR);
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
        $vehicle = $query->fetch(PDO::FETCH_ASSOC);

        $class = ucfirst($vehicle['type']);
        return new $class($vehicle);
    }
}
