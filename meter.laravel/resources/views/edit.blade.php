<!-- resources/views/edit.blade.php -->

@extends('layouts.app')

@section('content')
<div class="flex-center position-ref full-height">
    <div class="content">

        <form action="{{ url('meter-reading/update/'. $meterReading->id) }}" method="post">
            {{ csrf_field() }}
            <input type = "text" name = "id" value ="{{ $meterReading->id }}" hidden />
            <input type = "text" name = "meterId" value ="{{ $meterReading->meterId }}" hidden />

            <div class="form-group">
                <label for="exampleInputDate">Дата</label>
                <input type="date" name="date" class="form-control" id="exampleInputDate" aria-describedby="dateHelp" placeholder="Enter date" value ="{{ $meterReading->date }}">
                <small id="dateHelp" class="form-text text-muted">Дата на которую заносятся показания.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputReading">Показания</label>
                <input type="text" name="reading" class="form-control" id="exampleInputReading" placeholder="Reading" value ="{{ $meterReading->reading }}">
            </div>

            <button type="submit" class="btn btn-primary">Сохранить</button>
        </form>

    </div>
</div>
@endsection
