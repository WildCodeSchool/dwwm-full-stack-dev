<?php

function ft_split($string)
{
    $words = preg_split('/\s+/', $string);
    sort($words);

    return array_values(array_filter($words));

    return $words;
}
