<?php

interface ICrud{
    public function create();
    public function findById($id);
    public function findAll();
    public function update();
    public function delete();
}