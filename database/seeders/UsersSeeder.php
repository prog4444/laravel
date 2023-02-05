<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        \App\Models\User::truncate();
        $user =
            [
                [
                    'name' => 'Иванов',
                    'email' => 'info@datainlife.ru'
                ],
                [
                    'name' => 'Петров',
                    'email' => 'job@datainlife.ru'
                ],
            ];
        foreach ($user as $m){
            \App\Models\User::create($m);
        }
    }
}
