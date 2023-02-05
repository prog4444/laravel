<?php

namespace App\Console\Commands;

use App\Models\Group;
use App\Models\Group_User;
use App\Models\GroupUser;
use App\Models\Users;
use Illuminate\Console\Command;

class UserOne extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:member {user_id}';

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
        $group_id = $this->argument('user_id');
        $group_u = Users::query()->where('active', 'false')->first();
        if(!$group_u){
            Users::updated([
                'active' => 'True',
            ]);
            print_r(10);

        }else{
            print_r(1);
        }





    }
}
