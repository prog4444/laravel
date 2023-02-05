<?php

namespace App\Observers;

use App\Models\Group;
use App\Models\Group_User;
use App\Models\GroupUser;
use Carbon\Carbon;

class GroupObserver
{
    /**
     * Handle the Group "created" event.
     *
     * @param  \App\Models\Group  $group
     * @return void
     */
    public function created(Group $groupUser)
    {
        $group = GroupUser::query()->find($groupUser->group_id);
        $groupUser->expire_time =Carbon::now()->addHour($group->expire_hours);
        $groupUser->save();
    }

    /**
     * Handle the Group "updated" event.
     *
     * @param  \App\Models\Group  $group
     * @return void
     */
    public function updated(Group $group)
    {
        //
    }

    /**
     * Handle the Group "deleted" event.
     *
     * @param  \App\Models\Group  $group
     * @return void
     */
    public function deleted(Group $group)
    {
        //
    }

    /**
     * Handle the Group "restored" event.
     *
     * @param  \App\Models\Group  $group
     * @return void
     */
    public function restored(Group $group)
    {
        //
    }

    /**
     * Handle the Group "force deleted" event.
     *
     * @param  \App\Models\Group  $group
     * @return void
     */
    public function forceDeleted(Group $group)
    {
        //
    }
}
