<?php
// update-module-verwijderen.php
declare(strict_types = 1);

require_once 'Module.php';
require_once 'ModulesDataHandler.php';

if (
    isset($_POST, $_POST['naam'], $_POST['prijs'], $_POST['id']) &&
    !empty($_POST['naam']) &&
    !empty($_POST['prijs']) &&
    !empty($_POST['id'])
) {
    $mdh = new ModulesDataHandler();
    $module = Module::create(
        $_POST['naam'],
        (float)$_POST['prijs'],
        (int)$_POST['id']
    );

    $mdh->updateModule($module);
}

header('location: ./');
