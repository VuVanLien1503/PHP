<?php

namespace controller;

use impl\ServiceStudent;

class ControllerStudent
{
    private ServiceStudent $serviceStudent;

    public function __construct()
    {
        $this->serviceStudent = new ServiceStudent();
    }

    function getAll(): void
    {
        $this->serviceStudent->findAll();
    }

    function showFromAdd(): void
    {
        $this->serviceStudent->create();
    }

    function addStudentNew(): void
    {
        $this->serviceStudent->create();
    }
}