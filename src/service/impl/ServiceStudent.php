<?php

namespace impl;

use Classroom;
use ICrud;
use repository\RepositoryStudent;
use Student;

require_once 'C:\xampp\htdocs\PHP\bai3_MVC\src\service\core\ICrud.php';
require_once 'C:\xampp\htdocs\PHP\bai3_MVC\src\model\Student.php';
require_once 'C:\xampp\htdocs\PHP\bai3_MVC\src\model\Classroom.php';
require_once 'C:\xampp\htdocs\PHP\bai3_MVC\src\service\impl\ServiceClassroom.php';
class ServiceStudent implements ICrud
{
    private RepositoryStudent $repository;
    private ServiceClassroom $classroom;
    private Student $student;

    public function __construct(public array $students = [])
    {
        $this->repository = new RepositoryStudent();
        $this->classroom=new ServiceClassroom();
    }

    public function create(): void

    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $this->classroom->findAll();
            include_once(__DIR__ . '/../../views/display/creat.php');
        }  else {
            $name = $_POST['name'];
            $age = $_POST['age'];
            $address = $_POST['address'];
            $email = $_POST['email'];
            $classroom = $_POST['classroom'];
            $this->repository->addStudent($name,$age,$address, $email, $classroom);

            header('Location: index.php?page=student&action=show-list');
        }
    }

    public function findById($id)
    {

    }

    public function findAll()
    {
        $data = $this->repository->getAllUsers();
        $students = [];
        foreach ($data as $item) {
//            $intId = intval($item['classroom_id']);
//            var_dump($intId);
            $classroom=$this->classroom->findById($item['id']);
//            var_dump($classroom);
//            die();
            $student = new Student($item['id'], $item['name'], $item['age'], $item['address'], $item['email'], $classroom);
            $students[] = $student;
        }
//        include_once 'C:\xampp\htdocs\PHP\bai3_MVC\viewsControl\display\list.php';
        include_once 'C:\xampp\htdocs\PHP\bai3_MVC\src\views\display\list.php';
    }

    public function update()
    {

    }

    public function delete()
    {

    }
}