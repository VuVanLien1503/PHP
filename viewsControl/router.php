<?php
require_once 'C:\xampp\htdocs\PHP\bai3_MVC\src\controller\ControllerStudent.php';
require_once 'C:\xampp\htdocs\PHP\bai3_MVC\src\repository\ConnectDB.php';
require_once 'C:\xampp\htdocs\PHP\bai3_MVC/src/repository/RepositoryStudent.php';
require_once 'C:\xampp\htdocs\PHP\bai3_MVC\src\service\impl\ServiceStudent.php';
require_once 'C:\xampp\htdocs\PHP\bai3_MVC\src\service\core\ICrud.php';

$controllerStudent = new \controller\ControllerStudent();

$page = $_GET['page'] ?? null;
$action = $_GET['action'] ?? null;
switch ($page) {
    case 'student':
        if ($action == 'show-list') {
            $controllerStudent->getAll();
        }
        elseif ($action == 'show-add') {
            $controllerStudent->showFromAdd();
        }
        elseif ($action=='creat-new'){
            $controllerStudent->addStudentNew();
        }
//        elseif ($action == 'delete') {
//            $controllerStudent->deleteStudent();
//        }
//        elseif ($action == 'edit') {
//            $controllerStudent->editStudent();
//        }
//        else {
//            // Xử lý mặc định nếu không có action cụ thể
//        }

        break;
    case 'classroom':
        // Xử lý cho trang classroom
        break;
    default:
        $controllerStudent->getAll();
        break;

}