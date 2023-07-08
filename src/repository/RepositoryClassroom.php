<?php

namespace repository;

class RepositoryClassroom
{
    private \PDO $connection;

    public function __construct()
    {
        $conn = new ConnectDB("mysql:host=localhost;dbname=my_database_student", 'root', 123456);
        $this->connection = $conn->connection();
    }
    function getById($id): bool|array
    {
        $sql = 'SELECT classroom.id,classroom.name FROM CLASSROOM inner join student on student.classroom_id=classroom.id where student.id='.$id;
        $result = $this->connection->query($sql);
//        var_dump($result);
//        die();
        //       var_dump($data);
//        foreach ($data as $row) {
//            echo "ID: " . $row['id'] . ", Name: " . $row['name'] . "<br>";
//        }
        return $result->fetchAll();
    }
    function getAllClassroom(): bool|array
    {
        $sql = 'SELECT * FROM CLASSROOM';
        $result = $this->connection->query($sql);
        return $result->fetchAll();
    }
}