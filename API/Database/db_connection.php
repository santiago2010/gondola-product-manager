<?php

class db_connection
{
    private $connection;

    public function __construct($servername, $username, $password, $dbname = "")
    {
        if ($dbname != "") {
            $this->connection = mysqli_connect($servername, $username, $password, $dbname);
        }
        else $this->connection = mysqli_connect($servername, $username, $password);

        if (mysqli_connect_errno())
        {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
    }

    public function getData()
    {
        $sql = "SELECT * FROM productes";

        $res= $this->connection->query($sql);
        $result = [];

        while($row = $res->fetch_assoc()) {
            array_push($result, $row);
        }

        return $result;

    }


}