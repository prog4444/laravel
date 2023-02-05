<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use PHPUnit\TextUI\XmlConfiguration\Group;

class GroupsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//
        \App\Models\Group::truncate();
        $marka =
            [
                [
                    'name' => 'Группа 1',
                    'expire_hours' => '1'
                ],
                [
                    'name' => 'Группа 2',
                    'expire_hours' => '2'
                ],
            ];
        foreach ($marka as $m){
            \App\Models\Group::create($m);
        }

    }
}
