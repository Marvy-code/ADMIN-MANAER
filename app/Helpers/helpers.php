<?php
use Illuminate\Support\Str;
function setMenuActive($route){
    $routeActuel = request()->route()->getName();
// dd($routeActuel);
    if(contains($routeActuel, $route)){
        return "active";
    }
    return "";
}

function contains($container, $contenu){
    return Str::contains($container, $contenu);
}