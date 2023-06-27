<?php

namespace App\Observers;

use App\Models\Record;
use App\Models\Log;

class RecordObserver
{
    /**
     * Handle the Record "created" event.
     *
     * @param  \App\Models\Record  $record
     * @return void
     */
    public function created(Record $record)
    {
        $log = new Log();
        $log->action = 'created';
        $log->model = 'Record';
        $log->model_id = $record->id;
        $log->new_value = json_encode($record);
        $log->save();
    }

    /**
     * Handle the Record "updated" event.
     *
     * @param  \App\Models\Record  $record
     * @return void
     */
    public function updated(Record $record)
    {
        //
    }

    /**
     * Handle the Record "deleted" event.
     *
     * @param  \App\Models\Record  $record
     * @return void
     */
    public function deleted(Record $record)
    {
        //
    }

    /**
     * Handle the Record "restored" event.
     *
     * @param  \App\Models\Record  $record
     * @return void
     */
    public function restored(Record $record)
    {
        //
    }

    /**
     * Handle the Record "force deleted" event.
     *
     * @param  \App\Models\Record  $record
     * @return void
     */
    public function forceDeleted(Record $record)
    {
        //
    }
}
