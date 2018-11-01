<?php

class MysqliDbConnector
{
    private $connection;

    public function __construct(DbConnectionParams $dbConnectionParams)
    {

        $this->connection = mysqli_connect(
            $dbConnectionParams->getServername(),
            $dbConnectionParams->getUsername(),
            $dbConnectionParams->getPassword(),
            $dbConnectionParams->getDbname()
        );

    }


}