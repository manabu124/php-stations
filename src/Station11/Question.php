<?php

namespace Src\Station11;

class Question
{
    public function main(array $sweets): array
    {
        $budget = 300;  // 予算を設定
        $lessThanBudgetSweets = $this->getSweetsLessThanBudget($sweets, $budget);
        $keys = $this->getRandomKeys($lessThanBudgetSweets, $budget);
        return $this->makeCombination($sweets, $keys);
    }

    // 予算以下のスイーツだけを配列に追加する
    private function getSweetsLessThanBudget(array $sweets, int $budget)
    {
        $SweetsLessThanBudget = [];
        foreach ($sweets as $key => $price) {
            if ($sweets[$key]['price'] <= $budget) {
                $SweetsLessThanBudget[$key] = $sweets[$key];
            } else {
                continue;
            }
        }
        // print_r($SweetsLessThanBudget);
        return $SweetsLessThanBudget;
    }

    // キーを３つランダムに選択する
    private function getRandomKeys(array $lessThanBudgetSweets, int $budget)
    {
        $sweets = $lessThanBudgetSweets;
        $sweetsKeys = array_keys($sweets);

        while (true) {
            shuffle($sweetsKeys);
            $threeKeys = array_slice($sweetsKeys, 0, 3, false);

            $sum = 0;
            foreach ($threeKeys as $value) {
                $sum = $sum + $sweets[$value]['price'];
            }

            if ($sum <= $budget) {
                break;
            }
        }  
        // キーを小さい順に並び変える
        sort($threeKeys);
        print_r($threeKeys);
        return $threeKeys;
    }

    // 選んだキーの要素を抽出し結合する
    private function makeCombination(array $sweets, array $keys)
    {
        $combination = [];
        foreach ($keys as $key) {
            $combination[] = $sweets[$key];
        }
        print_r($combination);
        return $combination;
    }
}

$sweets = [
    ['name' => '飴玉', 'price' => 50],
    ['name' => '綿菓子', 'price' => 300],
    ['name' => 'チョコレート', 'price' => 88],
    ['name' => 'おまんじゅう', 'price' => 100],
    ['name' => 'せんべい', 'price' => 150]
];

(new Question())->main($sweets);