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