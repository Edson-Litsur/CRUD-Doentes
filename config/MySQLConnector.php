<?php

class MySQLConnector
{
    // atributos / propriedades
    private $serverName = 'localhost';
    private $dbName     = 'db_doentes';
    private $userName   = 'root';
    private $password   = '';
    private $pdoConnection;

    public function __construct()
    {
        try {
            $this->pdoConnection = new PDO(
                "mysql:host=$this->serverName;
                dbname=$this->dbName", 
                $this->userName, 
                $this->password
            );
        } catch (PDOException $pdoException) {
            echo "falha na conexao: " . $pdoException->getMessage();
        }
    }

    public function getConnection()
    {
        return $this->pdoConnection;
    }
}
