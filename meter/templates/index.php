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
                    <img src="<?php echo $meter['image'] ?>" class="card-img-top" alt="logo">
                </div>

                <div class="card-body">
                    <table class="table table-sm">
                        <thead>
                        <tr>
                            <th scope="col">Дата</th>
                            <th scope="col">Показание</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($this->data['meterReading'] as $valueReading):?>
                            <?php $meterReading = $valueReading->getData();?>
                            <?php if($meterReading['meterId'] == $value->getId()):?>
                            <tr>
                                <th scope="row"><?php echo $meterReading['date']?></th>
                                <td><?php echo $meterReading['reading']?></td>
                                <td style="width:140px; text-align: center">
                                    <form action="deleteReading.php" method="POST">
                                        <input type = "text" name = "id" value ="<?php echo $valueReading->getId()?>" hidden />
                                        <button type="submit" class="btn btn-primary btn-xs" data-title="Edit" data-target="#edit"><span class="glyphicon glyphicon-pencil"></span></button>
                                        <button type="submit" class="btn btn-danger btn-xs" data-title="Delete" data-target="#delete"><span class="glyphicon glyphicon-trash"></span></button>
                                    </form>
                                </td>
                            </tr>
                            <?php endif;?>
                        <?php endforeach;?>
                        </tbody>
                    </table>
                    <h5 class="card-title"></h5>
                    <p class="card-text"></p>
                </div>
                <div class="card-footer">
                    <form method="post" action="addReading.php">
                        <input type = "text" name = "meterId" value ="<?php echo $value->getId()?>" hidden />
                        <div class="row">
                            <div class="col">
                                <input type="date" class="form-control" placeholder="Date" name="date">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Reading" name="reading">
                            </div>
                            <div class="col">
                                <button type="submit" class="btn btn-success">
                                    <span class="glyphicon glyphicon-plus"></span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        <?php endforeach;?>
    </div>
</div>

<? include __DIR__ . '/footer.php'?>
