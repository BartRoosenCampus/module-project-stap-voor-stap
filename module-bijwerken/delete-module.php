<?php
// delete-module-verwijderen.php
declare(strict_types = 1);

require_once 'ModulesDataHandler.php';

if (isset($_GET, $_GET['id']) && !empty($_GET['id'])) {
    $mdh = new ModulesDataHandler();
    $mdh->removeById((int)$_GET['id']);
}

header('location: ./');