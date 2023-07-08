<?php

namespace repository;

class RepositoryStudent
{

    private \PDO $connection;

    public function __construct()
    {
        $conn = new ConnectDB("mysql:host=localhost;dbname=my_database_student", 'root', 123456);
        $this->connection = $conn->connection();
    }
    function getAllUsers(): bool|array
    {
        $sql = 'SELECT * FROM STUDENT';
        $result = $this->connection->query($sql);
        return $result->fetchAll();
    }

    function addStudent($name,$age,$address, $email, $classroom)
    {
        try {
            $sql = 'INSERT INTO student (name,age,address,email,classroom_id) VALUES (?, ?, ?,?,?) ';
            $result = $this->connection->prepare($sql);
            $result->bindParam(1, $name);
            $result->bindParam(2, $age);
            $result->bindParam(3, $address);
            $result->bindParam(4, $email);
            $result->bindParam(5, $classroom);
            $result->execute();
        } catch (Exception $e) {
            var_dump($e->getMessage());
            die();
        }
    }
}