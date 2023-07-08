<?php

namespace repository;

use PDO;

class ConnectDB
{
    function __construct(private string $dsn,
                         private string $user,
                         private string $password)
    {
    }

    function connection(): PDO
    {
        return new PDO($this->dsn, $this->user, $this->password);
    }
}