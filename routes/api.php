<?php

use Illuminate\Http\Request;

Route::get('items', function () {
    return [
        'message' => 'ini adalah items',
    ];
});
