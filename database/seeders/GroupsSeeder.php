<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use phpDocumentor\Reflection\Type;
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
        $group =
            [
                [
                    'name' => 'Группа 1',
                    'expire_hours' => Carbon::now()->addMonth(),
                ],
                [
                    'name' => 'Группа 2',
                    'expire_hours' => Carbon::now()->addMonth(),
                ],
            ];
        foreach ($group as $m){
            \App\Models\Group::create($m);
        }

    }
}
