<?php

function render( string $file, array $arrData = [])
{
    foreach ( $arrData as $key => $value )
        $$key = $value;
        
    require_once __DIR__ . '/../views/' . $file . '.php';
}