<?php

namespace App\Console\Commands;

use App\Models\Group_User;
use Carbon\Carbon;
use Illuminate\Console\Command;

class UserCheck extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:check_expiration';

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
        $cor = Carbon::now();
        $group_user_all = Group_User::query()->where('expired_at–datetime', '>', $cor)->get();
        return 'Здравствуйте Истекло время вашего участия в группе name'.$group_user_all;

    }
}
