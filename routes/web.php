<?php

use App\Models\SmartScan;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // json response
    $smartScans = SmartScan::all();
    return response()->json(
        $smartScans->map(function ($smartScan) {
            return [
                'id' => $smartScan->id,
                'file_name' => $smartScan->file_name,
                'response_json' => json_decode($smartScan->response_json),
            ];
        })
    );
});
