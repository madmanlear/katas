<?php

namespace Kata;

class MultiplesOfThreeAndFive
{
    public static function execute($limit)
    {
        if(!$limit) {
            return 0;
        }
        $multiples = array_map(function($number) {
            if($number % 3 == 0 || $number % 5 == 0) {
                return $number;
            }
        }, range(1, $limit));

        return array_sum($multiples);
    }
}