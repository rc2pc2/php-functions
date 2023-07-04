<?php

include_once  __DIR__ . '/partials/vars.php';

function checkAtAndDot($haystack){
    if (str_contains($haystack, '@') && str_contains($haystack, '.') ){
        return true;
    }

    return false;
}