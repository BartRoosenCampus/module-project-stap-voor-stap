<?php
// index.php
declare(strict_types = 1);

require_once 'ModulesDataHandler.php';

$mdh = new ModulesDataHandler();
$modules = $mdh->getModulesList();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/main.css">
    <title>$Title$</title>
</head>
<body>
<div class="grid">
    <div>
        <div><a href="../">Project stappen</a></div>
        <h1>Modules, stap 3: verwijderen van modules</h1>
        <div>
            <a href="add-module-form.php">Module toevoegen</a>
        </div>
        <?php if (empty($modules)): ?>
            <p>Geen modules gevonden...</p>
        <?php else: ?>
            <table>
                <thead>
                <tr>
                    <th>Naam</th>
                    <th>Prijs</th>
                    <th>Actie</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($modules as $module): ?>
                    <tr>
                        <td>
                            <?= $module->getNaam(); ?>
                        </td>
                        <td class="text-right">
                            € <?= $module->getPrijs(); ?>
                        </td>
                        <td>
                            <a href="delete-module.php?id=<?= $module->getId(); ?>">Verwijder</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        <?php endif; ?>
    </div>
    <div>
        <div><?php require_once '../code/verwijderen.php'; ?></div>
    </div>
</div>
</body>
</html>
