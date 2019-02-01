<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Meter;
use App\MeterReading;
use Illuminate\Http\Request;


Route::post('/meter-reading/add', function (Request $request) {

    $validator = Validator::make($request->all(), [
        'meterId' => 'required',
        'date' => 'required|date',
        'reading' => 'required|numeric',
    ]);

    if ($validator->fails()) {
        return redirect('/')
            ->withInput()
            ->withErrors($validator);
    }

    $meterReading = new MeterReading();
    $meterReading->meterId = $request->meterId;
    $meterReading->date = $request->date;
    $meterReading->reading = $request->reading;
    $meterReading->save();

    return redirect('/');
});


Route::delete('/meter-reading/delete/{meterReading}', function (MeterReading $meterReading) {
    $meterReading->delete();

    return redirect('/');
});


Route::edit('/meter-reading/edit/{meterReading}', function (MeterReading $meterReading) {

    return view('edit', [
        'meterReading' => $meterReading,
    ]);

});


Route::get('/', function () {

    $meters = Meter::orderBy('id', 'asc')->get();
    $meterReadings = MeterReading::orderByDesc('date')->get();

    return view('meter', [
        'meterReadings' => $meterReadings,
        'meters' => $meters
    ]);

});
