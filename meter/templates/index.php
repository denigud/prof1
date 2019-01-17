<? include __DIR__ . '/header.php'?>

<div class="card text-center">
    <div class="card-header">
        <h2>Показания счетчиков</h2>
    </div>
</div>

<div class="main">
    <div class="card-deck">
        <?php foreach ($this->data['meters'] as $value):?>
            <?php $meter = $value->getData();?>
            <div class="card text-white bg-<?php echo $meter['cardStyle']?> mb-3">
                <div class="card-header"><a href="<?php echo $meter['site']?>"><?php echo $meter['title'] ?></a>
                    <img src="<?php echo $meter['image'] ?>" class="card-img-top" alt="...">
                </div>

                <div class="card-body">
                    <table class="table table-sm">
                        <thead>
                        <tr>
                            <th scope="col">Дата</th>
                            <th scope="col">Показание</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($this->data['meterReading'] as $meterReading):?>
                            <?php if($meterReading['meterId'] == $value->getId()):?>
                            <tr>
                                <th scope="row"><?php echo $meterReading['date']?></th>
                                <td><?php echo $meterReading['reading']?></td>
                            </tr>
                            <?php endif;?>
                        <?php endforeach;?>
                        </tbody>
                    </table>
                    <h5 class="card-title"></h5>
                    <p class="card-text"></p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                </div>
            </div>
        <?php endforeach;?>
    </div>
</div>

<? include __DIR__ . '/footer.php'?>
