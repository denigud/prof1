<? include __DIR__ . '/header.php'?>

<h2>Показания счетчиков</h2>

<div class="main">
    <div class="card-deck">
        <?php foreach ($this->data['data'] as $meter):?>
            <div class="card">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $meter['title'] ?></h5>
                    <p class="card-text"><?php echo $meter['site'] ?></p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                </div>
            </div>
        <?php endforeach;?>
    </div>
</div>

<? include __DIR__ . '/footer.php'?>
