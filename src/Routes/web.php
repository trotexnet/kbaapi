<?php

Route::middleware('web')->group(function () {
    Route::get('/cierra/kba/{hsn}/{tsn}/', function($hsn ,$tsn) { return (new \Cierra\Kbaapi\Kba())->get($hsn, $tsn);});
    Route::get('/cierra/kba/{hsn}/{tsn}/validate', function($hsn ,$tsn) { return (new \Cierra\Kbaapi\Kba())->validate($hsn, $tsn);});
});
