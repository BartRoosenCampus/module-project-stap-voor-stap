<?php
// bewerken-form.php
declare(strict_types = 1);

require_once 'ModulesDataHandler.php';

$module = null;

if (isset($_GET, $_GET['id']) && !empty($_GET['id'])) {
    $mdh    = new ModulesDataHandler();
    $module = $mdh->getModuleById((int)$_GET['id']);
}

if (null === $module) {
    header('location: ./');
    die;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>Module bijwerken</title>
</head>
<body>
<h1>Module bijwerken</h1>
<form action="update-module.php" method="post">
    <input type="text"
           name="id"
           value="<?= $module->getId(); ?>"
           hidden="hidden"
    />
    <input type="text"
           name="naam"
           value="<?= $module->getNaam(); ?>"
    />
    <input type="text"
           name="prijs"
           value="<?= $module->getPrijs() ?>"
    />
    <button type="submit">opslaan</button>
</form>
</body>
</html>
