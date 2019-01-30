<?php include __DIR__ . '/header.php'?>


<div class="card text-center">
    <div class="card-header">
        <h2>Показания счетчиков</h2>
    </div>
</div>

<div class="main">
    <div class="card-deck">
        <?php foreach ($this->meters as $meter):?>
            <div class="card text-white bg-<?php echo $meter->cardStyle?> mb-3">
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
                            <?php if($meterReading->meterId == $meter->id):?>
                            <tr>
                                <th scope="row"><?php echo $meterReading->date?></th>
                                <td><?php echo $meterReading->reading?></td>
                                <td style="width:140px; text-align: center">
                                    <a class="btn btn-primary btn-xs" href="/reading/?id=<?=$meterReading->id?>"><span class="fas fa-edit"></span></a>
                                    <a class="btn btn-danger btn-xs" href="/delete/?id=<?=$meterReading->id?>"><span class="fas fa-trash-alt"></span></a>
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

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="<?php echo $this->meterReading[0]->id;?>" data-date="<?php echo $this->meterReading[0]->date;?>" data-whatever="<?php echo $this->meterReading[0]->id;?>" data-reading="<?php echo $this->meterReading[0]->reading;?>">Показание на <?php echo $this->meterReading[0]->date;?></button>

<a class="btn btn-primary btn-lg" href='/Meter.php/'><span class="fas fa-edit">Сайты</span></a>

<div class="modal modal-open fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Показания</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="recipient-date" class="col-form-label">Дата:</label>
                        <input type="date" class="form-control" id="recipient-date">
                    </div>
                    <div class="form-group">
                        <label for="recipient-reading" class="col-form-label">Показание:</label>
                        <input type="text" class="form-control" id="recipient-reading">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Отмена</button>
                <button type="button" class="btn btn-primary">Сохранить</button>
            </div>
        </div>
    </div>
</div>

<?php include __DIR__ . '/footer.php'?>
