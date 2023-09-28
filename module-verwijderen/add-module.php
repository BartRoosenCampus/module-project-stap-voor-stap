<?php
// add-module.php
declare(strict_types = 1);

require_once 'Module.php';
require_once 'ModulesDataHandler.php';

if (
    isset($_POST, $_POST['naam'], $_POST['prijs']) &&
    !empty($_POST['naam']) &&
    !empty($_POST['prijs'])
) {
    $mdh    = new ModulesDataHandler();
    $module = Module::create(
        $_POST['naam'],
        (float)$_POST['prijs']
    );

    $mdh->addModule($module);
}

header('location: ./');
