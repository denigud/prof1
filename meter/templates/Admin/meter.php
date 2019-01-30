<?php include __DIR__ . '/header.php'?>

<table>
    <?php foreach ($this->models as $model): ?>
    <tr>
        <?php foreach ($this->functions as $function): ?>
        <td><?=$function($model)?></td>
        <?php endforeach;?>
    </tr>
    <?php endforeach;?>
</table>

<?php include __DIR__ . '/footer.php'?>
