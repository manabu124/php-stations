<?php

namespace Src\Station12\Question;

use Carbon\CarbonImmutable;

class Food extends Product
{
    // property はアクセス修飾子・型定義不問、 __construct での定義でなくとも良い
    public function __construct(int $originalPrice, private CarbonImmutable $useByDate)
    {
        parent::__construct($originalPrice);
    }

    public function price() :int
    {
        $price = $this->originalPrice;
        $now = CarbonImmutable::now();

        $time = $now->diffInHours($this->useByDate);
        if ($time < 5) {
            $price /= 2;
            $price = floor($price);
        }
        return $price;
    }





}
