<?php

class database
{
    private string $host;
    private string $user;
    private string $pass;
    private string $dbname;

    public function __construct(string $host = "localhost", string $user = "root", string $pass = "", string $dbname = "qlbh")
    {
        $this->$host = $host;
        $this->$user = $user;
        $this->$pass = $pass;
        $this->$dbname = $dbname;
    }

    public function getConnect(): mysqli
    {
        $conn = new mysqli($this->host, $this->user, $this->pass, $this->dbname);
        $conn->query("SET character_set_results = 'utf8'");

        if($conn->connect_errno){
            die("Connection error: " . $conn->connect_error);
        }
        return $conn;
    }
}