<?php

class Connection
{
    private $conn = null;

    public function connect()
    {
        $options = array(
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        );

        $this->conn = new PDO('mysql:host=localhost;dbname=mydb', 'root', '', $options);

        return $this->conn;
    }

    public function disconnect()
    {
        $this->conn = null;
    }
}
?>
