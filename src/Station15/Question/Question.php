<?php

namespace Src\Station15\Question;

class Question
{
    public function main($multiplieds, $multiplier): array
    {
        $calculator = new Calculator($multiplieds, $multiplier);
        return $calculator->multiply($multiplieds, $multiplier);
    }
}

$multiplier = 2;

$question = new Question();
$question->main([1, 2, 3], $multiplier);

