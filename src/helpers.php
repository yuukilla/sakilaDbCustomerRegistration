<?php


function isGetRequest(): bool
{
    return strtoupper($_SERVER['REQUEST_METHOD']) == 'GET';
}
function isPostRequest(): bool
{
    return strtoupper($_SERVER['REQUEST_METHOD']) == 'POST';
}