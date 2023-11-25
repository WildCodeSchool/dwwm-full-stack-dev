<?php
function ft_split($str) {
    $words = preg_split('/\s+/', $str); 
    sort($words); 
    return $words;
}