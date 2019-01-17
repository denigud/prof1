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
                        <?php foreach ($this->data['meterReading'] as $meterReading):?>
                            <?php if($meterReading['meterId'] == $value->getId()):?>
                            <tr>
                                <th scope="row"><?php echo $meterReading['date']?></th>
                                <td><?php echo $meterReading['reading']?></td>
                                <td>
                                    <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                                        <button type="button" class="btn btn-primary btn-sm"><span>
                                            <span><img src="/meter/ico/pen_1.png" alt="Edit"></span>
                                        </button>
                                        <button type="button" class="btn btn-secondary btn-sm">
                                            <span><img src="/meter/ico/circle_delete.png" alt="Delete"></span>
                                        </button>
                                    </div>
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
                    <form>
                        <div class="row">
                            <div class="col">
                                <input type="date" class="form-control" placeholder="Date">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Reading">
                            </div>
                            <div class="col">
                                <button type="button" class="btn btn-success">
                                    <span><img src="/meter/ico/circle_plus.png" alt="Add"></span>
                                </button>
                            </div>
                        </div>
                    </form>
                    <!--<small class="text-muted">Last updated 3 mins ago</small>-->
                </div>
            </div>
        <?php endforeach;?>
    </div>
</div>

<? include __DIR__ . '/footer.php'?>
