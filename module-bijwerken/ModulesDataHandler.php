<?php

require_once "Module.php";

class ModulesDataHandler
{
    private ?PDO $dbh = null;

    public function getModulesList(): array
    {
        $this->connect();
        $stmt = $this->dbh->prepare(
            "select id, naam, prijs from modules;"
        );
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $this->disconnect();

        $result = [];
        foreach ($data as $row) {
            $result[] = Module::create(
                $row['naam'],
                (float)$row['prijs'],
                (int)$row['id']
            );
        }

        return $result;
    }

    public function addModule(Module $module)
    {
        $this->connect();
        $stmt = $this->dbh->prepare(
            "INSERT INTO modules (naam, prijs)
                    VALUES (:naam, :prijs);"
        );
        $stmt->execute(
            [
                ':naam'  => $module->getNaam(),
                ':prijs' => $module->getPrijs(),
            ]
        );
        $this->disconnect();
    }

    public function removeById(int $id)
    {
        $this->connect();
        $stmt = $this->dbh->prepare(
            "DELETE FROM modules where id = :id;"
        );
        $stmt->execute([':id' => $id]);
        $this->disconnect();
    }

    public function getModuleById(int $id): ?Module
    {
        $this->connect();
        $stmt = $this->dbh->prepare(
            "select id, naam, prijs from modules where id = :id"
        );
        $stmt->execute([':id' => $id]);
        $record = $stmt->fetch(PDO::FETCH_ASSOC);
        $this->disconnect();

        if (empty($record)) return null;

        return Module::create(
            $record['naam'],
            (float)$record['prijs'],
            (int)$record['id']
        );
    }

    public function updateModule(Module $module)
    {
        $this->connect();
        $stmt = $this->dbh->prepare(
            "update modules
                    set naam  = :naam,
                        prijs = :prijs
                    where id = :id;"
        );
        $stmt->execute(
            [
                ':naam'  => $module->getNaam(),
                ':prijs' => $module->getPrijs(),
                ':id'    => $module->getId(),
            ]
        );
        $this->disconnect();
    }

    private function connect()
    {
        $this->dbh = new PDO(
            "mysql:host=localhost;port=3306;dbname=cursusphp;charset=utf8",
            "cursusgebruiker",
            "cursuspwd"
        );
    }

    private function disconnect()
    {
        $this->dbh = null;
    }
}