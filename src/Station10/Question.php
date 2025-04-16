<?php

namespace Src\Station10;

class Question
{
    public function main(string $animal): string
    {
        return $this->getAnimalName($animal);
    }

    private function getAnimalName(string $animal): string
    {
        if ($animal === '猫') {
            return 'ミケ';
        } else if ($animal === '犬') {
            return 'ポチ';
        } else {
            return 'わかりません';
        }

    }
}
