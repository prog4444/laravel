<?php

namespace App\Observers;

use App\Models\GroupUser;

class GroupObserver
{
    /**
     * Handle the GroupUser "created" event.
     *
     * @param  \App\Models\GroupUser  $groupUser
     * @return void
     */
    public function created(GroupUser $groupUser)
    {
        $group = GroupUser::query()->find($groupUser->group_id);
        $groupUser->expire_time =Carbon::now()->addHour($group->expire_hours);
        $groupUser->save();
    }

    /**
     * Handle the GroupUser "updated" event.
     *
     * @param  \App\Models\GroupUser  $groupUser
     * @return void
     */
    public function updated(GroupUser $groupUser)
    {
        //
    }

    /**
     * Handle the GroupUser "deleted" event.
     *
     * @param  \App\Models\GroupUser  $groupUser
     * @return void
     */
    public function deleted(GroupUser $groupUser)
    {
        //
    }

    /**
     * Handle the GroupUser "restored" event.
     *
     * @param  \App\Models\GroupUser  $groupUser
     * @return void
     */
    public function restored(GroupUser $groupUser)
    {
        //
    }

    /**
     * Handle the GroupUser "force deleted" event.
     *
     * @param  \App\Models\GroupUser  $groupUser
     * @return void
     */
    public function forceDeleted(GroupUser $groupUser)
    {
        //
    }
}
