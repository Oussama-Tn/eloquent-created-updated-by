<?php

namespace AndyFleming\EloquentCreatedUpdatedBy;

use Auth;

class UpdatedByUserIdObserver
{

    public function saving($model)
    {

        // If there is an authorized user
        if (Auth::check()) {
            $user = Auth::user();
            $primaryKeyName = $user->primaryKey;
            $model->updated_by_user_id = $user->$primaryKeyName;
        }

    }

}