<?php

namespace Src\Station09;

class Question
{
    public function main(): array
    {
        $users = [
            [
                'id' => 1,
                'last_name' => '山田',
                'first_name' => '太郎',
                'age' => 20,
                'password' => 'yamada',
            ],
            [
                'id' => 2,
                'last_name' => '鈴木',
                'first_name' => '次郎',
                'password' => 'suzuki',
            ],
            [
                'id' => 3,
                'last_name' => '佐藤',
                'first_name' => '花子',
                'password' => 'sato',
            ],
        ];

        // 〇'last_name' と 'first_name' を結合した要素を持つ、 'full_name' キーを追加（例: 'full_name' => '山田太郎' )
        $addName_users = [];
        foreach ($users as $user){
            $user['full_name'] = $user['last_name'] . $user['first_name'];
            $addName_users[] = $user;
        }
        print_r($addName_users);

        // 〇'age' キーの存在しない要素について、 'age' => null を追加
        $addAge_users = [];
        foreach ($addName_users as $user){
            $a = 0;
            foreach ($user as $key => $info) {
                if ($key === 'age') {
                    $a = 1;
                    break;
                }
            }  
            if ($a === 0) {
                $user['age'] = NULL;
            }
            $addAge_users[] = $user;
        }
        print_r($addAge_users);

        // 〇'password' キーを削除
        $removePass_users = [];
        foreach ($addAge_users as $user){
            $a = [];
            foreach ($user as $key => $info) {
                if ($key === 'password') {
                    continue;
                }
                $a[$key] = $info;
            }  
            $removePass_users[] = $a;
        }
        print_r($removePass_users);

        return $removePass_users;
    }
}

(new Question())->main();
