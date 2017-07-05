<?php

/**
 * Created by PhpStorm.
 * User: artem.vasilev
 * Date: 7/5/2017
 * Time: 7:25 AM
 */
class DatabaseAccessData
{
    private $login;
    private $host;
    private $password;
    private $dbName;

    public function __construct($_login, $_host, $_password, $_dbName)
    {
        $this->login = $_login;
        $this->host = $_host;
        $this->password = $_password;
        $this->dbName = $_dbName;
    }

    public function __get($attr)
    {
        if (isset($this->$attr))
            return $this->$attr;
        else
            user_error("Атрибут ".$attr." не найден!");
    }
}