<!-- resources/views/meter.blade.php -->

@extends('layouts.app')

@section('content')

    <!-- Bootstrap шаблон... -->
<div class="panel-body flex-center position-ref full-height">
    @include('common.errors')

    <div class="content">
        <div class="title m-b-md">
            Показания счетчиков
        </div>
        <div class="card-goup">
            @foreach ($meters as $meter)
                <div class="card-deck">
                    <div class="card text-white bg-{{ $meter->cardstyle }} mb-3">
                        <div class="card-header"><a href="{{ $meter->site }}">{{ $meter->title }}</a>
                            <img src="{{ $meter->image }}" class="card-img-top" alt="logo">
                        </div>

                        <div class="card-body">
                            <table class="table table-sm">
                                <thead>
                                    <tr>
                                        <th scope="col">Дата</th>
                                        <th scope="col">Показание</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($meterReadings as $meterReading)
                                        @if($meterReading->meterid == $meter->id)
                                            <tr>
                                                <th scope="row">{{ $meterReading->date }}</th>
                                                <td>{{ $meterReading->reading }}</td>
                                                {{--<td style="width:140px; text-align: center">--}}
                                                    {{--<a class="btn btn-primary btn-xs" href="/reading/?id={{ $meterReading->id }}"><span class="fas fa-edit"></span></a>--}}
                                                    {{--<a class="btn btn-danger btn-xs" href="{{ url('meter-reading/delete/'.$meterReading->id) }}"><input type="hidden" name="_method" value="DELETE"><span class="fas fa-trash-alt"></span></a>--}}
                                                {{--</td>--}}
                                                <td><a href="{{ url('meter-reading/edit/'.$meterReading->id) }}" class="btn btn-warning"><i class="fa fa-edit"></i></a></td>

                                                <td>
                                                    <form action="{{ url('meter-reading/delete/'.$meterReading->id) }}" method="POST">
                                                        {{ csrf_field() }}
                                                        {{ method_field('DELETE') }}
                                                        <input type="hidden" name="_method" value="DELETE">
                                                        <button type="submit" class="btn btn-danger">
                                                            <i class="fa fa-trash-alt"></i>
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endif
                                    @endforeach
                                </tbody>
                            </table>
                            <h5 class="card-title"></h5>
                            <p class="card-text"></p>
                        </div>
                        <div class="card-footer">
                            <form method="post" action="{{ url('meter-reading/add') }}">
                                {{ csrf_field() }}
                                <input type = "text" name = "meterId" value ="{{ $meter->id }}" hidden>
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
            @endforeach
            </div>
        </div>
    </div>
</div>

@endsection
