<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $rows = ['name1' => 'things', 'name2' => 'more things'];
    $vars = [
        "pagename" => "default",
        "tenants" => [
            "fred" => ["rows" => $rows],
            "bob" => ["rows" => $rows],
            "sadface" => ["error" => "It is sad", "rows" => $rows]
        ],
    ];
    return view("coreui::default.dashboard", $vars);
});
