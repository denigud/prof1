<?php include __DIR__ . '/header.php'?>
    <?php $reading = $this->reading?>
    <div class="main">

        <form action="/?ctrl=Add" method="post">
            <input type = "text" name = "id" value ="<?php echo $reading->id?>" hidden />
            <input type = "text" name = "meterId" value ="<?php echo $reading->meterId?>" hidden />

            <div class="form-group">
                <label for="exampleInputDate">Дата</label>
                <input type="date" name="date" class="form-control" id="exampleInputDate" aria-describedby="dateHelp" placeholder="Enter date" value ="<?php echo $reading->date?>">
                <small id="dateHelp" class="form-text text-muted">Дата на которую заносятся показания.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputReading">Показания</label>
                <input type="text" name="reading" class="form-control" id="exampleInputReading" placeholder="Reading" value ="<?php echo $reading->reading?>">
            </div>

            <button type="submit" class="btn btn-primary">Сохранить</button>
        </form>


    </div>

<?php include __DIR__ . '/footer.php'?>