<?php

namespace App\Console\Commands;

use App\Models\Group;
use App\Models\Group_User;
use Illuminate\Console\Command;

class UserOne extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:member {user_id}, {group_id}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $user_id = $this->argument('user_id');
        $group_id = $this->argument('group_id');
        $group = Group_User::create([
            'group_id' => $user_id,
        ]);
        $group_u = Group::query()->with('user')->where('active', false)->get();
        $group_u->user->update([
            'activer' => 'True',
        ]);
        return $group_u;



    }
}
