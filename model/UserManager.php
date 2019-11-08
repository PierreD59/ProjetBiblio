<?php

class UserManager
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
     * Add user into DB
     *
     * @param user $user
     */
    public function add(user $user)
    {
        $query = $this->getDb()->prepare('INSERT * INTO users(name, email, password, token) VALUES (:name, :email, :password, :token)');

        $query->bindValue('name', $user->getName(), PDO::PARAM_STR);
        $query->bindValue('email', $user->getEmail(), PDO::PARAM_STR);
        $query->bindValue('password', $user->getPassword(), PDO::PARAM_STR);
        $query->bindValue('token', $user->getToken(), PDO::PARAM_INT);
    }

    /**
     * Get one userUser by id or name
     *
     * @param $info
     * @return User
     */
    public function getUser($info)
    {
        $query = $this->getDB()->prepare('SELECT * FROM users WHERE id = :id');
        $query->bindValue('id', $info, PDO::PARAM_INT);
        $query->execute();
        $user = $query->fetch(PDO::FETCH_ASSOC);

        $class = ucfirst($user['type']);
        return new $class($user);
    }

    /**
     * List all books
     *
     * @return array $arrayOfBooks
     */
    public function getUsers()
    {
        $query = $this->getDB()->prepare('SELECT * FROM users WHERE id = :id');
        $dataBooks = $query->fetchAll(PDO::FETCH_ASSOC);
        $arrayOfUsers = [];

        foreach ($dataBooks as $dataBook) {
            $arrayOfUsers[] = new Manga($dataBook);
        }

        return $arrayOfUsers;
    }

    public function deleteUsers($user)
    {
        $query = $this->getDb()->prepare('DELETE FROM users WHERE id = :id');
        $query->bindValue('id', $user, PDO::PARAM_INT);
        $query->execute();
    }

    /**
     * Update user's data 
     *
     * @param User $user
     */
    public function update(User $user)
    {
        $query = $this->getDb()->prepare('UPDATE INTO users(name, email, password, token) VALUES (:name, :email, :password, :token)');

        $query->bindValue('name', $user->getName(), PDO::PARAM_STR);
        $query->bindValue('email', $user->getEmail(), PDO::PARAM_STR);
        $query->bindValue('password', $user->getPassword(), PDO::PARAM_STR);
        $query->bindValue('token', $user->getToken(), PDO::PARAM_INT);

        $query->execute();
    }
}
