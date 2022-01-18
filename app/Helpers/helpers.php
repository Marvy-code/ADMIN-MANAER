<?php
use Illuminate\Support\Str;

function setMenuClass($route, $class){
    $routeActuel = request()->route()->getName();
    if(contains($routeActuel, $route)){
        return $class;
    }
    return "";
}

function setMenuActive($route){
    $routeActuel = request()->route()->getName();
    if($routeActuel === $route){
        return "active";
    }
    return "";
}

function contains($container, $contenu){
    return Str::contains($container, $contenu);
}
