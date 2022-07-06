<?php

class Doente
{
    public  $id;
    public  $nome;
    public  $idade;
    public  $sintomas;
    public  $diagnostico;
    private $dataBaseConnection;

    public function __construct(PDO $dataBaseConnection)
    {
        $this->dataBaseConnection = $dataBaseConnection;
    }

    public function criar($nome, $idade, $sintomas, $diagnostico)
    {
        $query = 'INSERT INTO doentes
                  (nome, idade, sintomas, diagnostico)
                  VALUES (:nome, :idade, :sintomas, :diagnostico);';

        $statment = $this->dataBaseConnection->prepare($query);
        $statment->bindParam(":nome", $nome);
        $statment->bindParam(":idade", $idade);
        $statment->bindParam(":sintomas", $sintomas);
        $statment->bindParam(":diagnostico", $diagnostico);
        $statment->execute();

        return true;
    }

    public function listar()
    {
        $query = 'SELECT * FROM doentes';

        $statment = $this->dataBaseConnection->prepare($query);
        $statment->execute();
        $doentes = $statment->fetchAll(PDO::FETCH_ASSOC);

        return $doentes;
    }

    public function listarUm($id)
    {
        $query = 'SELECT * FROM doentes
            where id = :id';

        $statment = $this->dataBaseConnection->prepare($query);
        $statment->bindParam(":id", $id);
        $statment->execute();
        $doente = $statment->fetch(PDO::FETCH_ASSOC);

        return $doente;
    }

    public function actualizar($id, $nome, $idade, $sintomas, $diagnostico)
    {
        $query = 'UPDATE doentes
                  SET nome = :nome, idade = :idade,
                  sintomas = :sintomas, diagnostico = :diagnostico
                  WHERE id = :id;';
        
        $statment = $this->dataBaseConnection->prepare($query);
        $statment->bindParam(":id", $id);
        $statment->bindParam(":nome", $nome);
        $statment->bindParam(":idade", $idade);
        $statment->bindParam(":sintomas", $sintomas);
        $statment->bindParam(":diagnostico", $diagnostico);
        $statment->execute();

        return true;
    }

    public function remover($id)
    {
        $query = 'DELETE FROM doentes WHERE id = :id;';
        $statment = $this->dataBaseConnection->prepare($query);
        $statment->bindParam(":id", $id);
        $statment->execute();

        return true;
    }
}
