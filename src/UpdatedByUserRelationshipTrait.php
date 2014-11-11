<?php

namespace AndyFleming\EloquentCreatedUpdatedBy;

use Config;

trait UpdatedByUserRelationshipTrait {

    public function updatedByUser()
    {
        return $this->belongsTo(Config::get('auth.model'),'updated_by_user_id');
    }

}