<?php include __DIR__ . '/header.php'?>


<div class="card text-center">
    <div class="card-header">
        <h2>Показания счетчиков</h2>
    </div>
</div>

<div class="main">
    <div class="card-deck">
        <?php foreach ($this->meters as $meter):?>
            <div class="card text-white bg-<?php echo $meter->cardstyle?> mb-3">
                <div class="card-header"><a href="<?php echo $meter->site?>"><?php echo $meter->title?></a>
                    <img src="<?php echo $meter->image?>" class="card-img-top" alt="logo">
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
                        <?php foreach ($this->meterReading as $meterReading):?>
                            <?php if($meterReading->meterid == $meter->id):?>
                            <tr>
                                <th scope="row"><?php echo $meterReading->date?></th>
                                <td><?php echo $meterReading->reading?></td>
                                <td style="width:140px; text-align: center">
                                    <a class="btn btn-primary btn-xs" href="/reading/?id=<?php echo $meterReading->id?>"><span class="fas fa-edit"></span></a>
                                    <a class="btn btn-danger btn-xs" href="/delete/?id=<?php echo $meterReading->id?>"><span class="fas fa-trash-alt"></span></a>
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
                    <form method="post" action="/add/">
                        <input type = "text" name = "meterId" value ="<?php echo $meter->id?>" hidden>
                        <div class="row">
                            <div class="col">
                                <input type="date" class="form-control" placeholder="Date" name="date">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Reading" name="reading">
                            </div>
                            <div class="col">
                                <button type="submit" class="btn btn-success">
                                    <span  class="fas fa-plus"></span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        <?php endforeach;?>
    </div>
</div>

<a class="btn btn-primary btn-lg" href='/admin-meter/'><span class="fas fa-edit">Сайты</span></a>

<?php include __DIR__ . '/footer.php'?>
