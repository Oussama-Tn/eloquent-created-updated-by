<?php

namespace AndyFleming\EloquentCreatedUpdatedBy;

use Auth;

class CreatedByUserIdObserver
{

    public function creating($model)
    {

        // If there is an authorized user
        if (Auth::check()) {
            $user = Auth::user();
            $primaryKeyName = $user->primaryKey;
            $model->created_by_user_id = $user->$primaryKeyName;
        }

    }

}