<?php include __DIR__ . '/../header.php'?>
<div class="container">
    <table class="table">
        <thead class="table-primary">
        <tr>
            <?php foreach ($this->functions as $key=>$function): ?>
                <th scope="col"><?=$key?></th>
            <?php endforeach;?>
        </tr>
        </thead>

        <?php foreach ($this->models as $model): ?>
        <tbody>
        <tr>
            <?php foreach ($this->functions as $function): ?>
            <td><?=$function($model)?></td>
            <?php endforeach;?>
        </tr>
        </tbody>
        <?php endforeach;?>
    </table>
</div>
<?php include __DIR__ . '/../footer.php'?>
