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
    <title>Modulelijst afbeelden</title>
</head>
<body>
<div class="grid">
    <div>
        <div><a href="../">Project stappen</a></div>
        <h1>Modules, stap 1: data ophalen en afbeelden</h1>
        <?php if (empty($modules)): ?>
            <p>Geen modules gevonden...</p>
        <?php else: ?>
            <table>
                <thead>
                <tr>
                    <th>Naam</th>
                    <th>Prijs</th>
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
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        <?php endif; ?>
        <div class="picture-frame">
            <h3>Schema:</h3>
            <a href="../img/lijst.php" target="_blank">
                <img src="../img/modulelijst-ophalen.png" alt="Modulelijst ophalen"/>
            </a>
        </div>
    </div>
    <div><?php require_once '../code/afbeelden.php'; ?></div>
</body>
</html>
</div>

