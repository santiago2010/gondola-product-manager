<?php


class DbConnectionParams
{
    /** @var string */
    private $servername;
    /** @var string */
    private $username;
    /** @var string */
    private $password;
    /** @var string */
    private $dbname ;


    public function __construct($servername, $username, $password, $dbname)
    {
        $this->setServername($servername);
        $this->setUsername($username);
        $this->setPassword($password);
        $this->setDbname($dbname);

    }

    //TODO: validate every setter
    private function checkIsset($value): bool
    {
        if(isset($value)){
            return true;
        } else {
            throw new Exception("Error, value " . $value . " not defined");
        }
    }

    public function getServername(): string
    {
        return $this->servername;
    }

    private function setServername(string $servername): void
    {
        if ($this->checkIsset($servername)) {
            $this->servername = $servername;
        }
    }

    public function getUsername()
    {
        return $this->username;
    }

    private function setUsername($username): void
    {
        if ($this->checkIsset($username)) {
            $this->username = $username;
        }
    }

    public function getPassword()
    {
        return $this->password;
    }

    private function setPassword($password): void
    {
        if ($this->checkIsset($password)){
            $this->password = $password;
        }

    }

    public function getDbname()
    {
        return $this->dbname;
    }

    private function setDbname($dbname): void
    {
        if ($this->checkIsset($dbname)) {
            $this->dbname = $dbname;
        }
    }


}