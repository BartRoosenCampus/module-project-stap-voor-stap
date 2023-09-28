<?php

$step  = 'module-bijwerken';
$files = [
    'index',
    'Module',
    'ModulesDataHandler',
    'add-module',
    'add-module-form',
    'delete-module',
    'update-module',
];

?>

<h1>Code</h1>
<div class="code">
    <?php foreach ($files as $file): ?>
        <div class="code-title" data-id="<?= $file; ?>">
            <pre><?= $file; ?>.php</pre>
        </div>
        <div class="code-content" id="<?= $file; ?>">
            <?php show_source(sprintf('../%s/%s.php', $step, $file), false); ?>
        </div>
    <?php endforeach; ?>
</div>
<script src="../js/code-collapse.js" defer></script>