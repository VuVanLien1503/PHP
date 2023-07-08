<?php

namespace impl;

use Classroom;
use ICrud;
use repository\RepositoryClassroom;


require_once 'C:\xampp\htdocs\PHP\bai3_MVC\src\service\core\ICrud.php';
require_once 'C:\xampp\htdocs\PHP\bai3_MVC\src\model\Classroom.php';
require_once 'C:\xampp\htdocs\PHP\bai3_MVC\src\repository\RepositoryClassroom.php';

class ServiceClassroom implements ICrud
{
    private RepositoryClassroom $repository;
    private Classroom $classroom;

    public function __construct(public array $classrooms = [])
    {
        $this->repository = new RepositoryClassroom();
    }

    public function create()
    {
        // TODO: Implement create() method.
    }

    public function findById($id)
    {
        // TODO: Implement findById() method.
        $data = $this->repository->getById($id);
//       var_dump($data);
//       die();
        foreach ($data as $item) {
            return new Classroom($item["id"], $item["name"]);
        }
    }

    public function findAll() :void
    {
        // TODO: Implement findAll() method.
        $data = $this->repository->getAllClassroom();
        $classroom= [];
        foreach ($data as $item) {
            $classroom = new Classroom($item['id'], $item['name']);
            $classrooms[] = $classroom;
        }
        include_once 'C:\xampp\htdocs\PHP\bai3_MVC\src\views\display\creat.php';

    }

    public function update()
    {
        // TODO: Implement update() method.
    }

    public function delete()
    {
        // TODO: Implement delete() method.
    }
}