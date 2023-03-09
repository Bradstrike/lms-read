<?php

function set_active($path, $active = 'active') {
    return call_user_func_array('Request::is', (array)$path) ? $active : '';
}

function randomPassword() {
    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $pass = array(); //remember to declare $pass as an array
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i < 8; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass); //turn the array into a string
}

function ticketStateColor($state) {
    if ($state == "Açık") {
        return "primary";
    }else if ($state == "Cevaplandı") {
        return "warning";
    }else if ($state == "Çözüldü") {
        return "success";
    }
}

function randomColors() {
    $colors = [
        "lighten", "white", "primary", "light", "secondary", "success", "info", "warning", "danger", "dark"
    ];

    return $colors[array_rand($colors)];
}