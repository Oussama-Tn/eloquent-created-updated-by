<?php

namespace AndyFleming\EloquentCreatedUpdatedBy;

use Config;

trait CreatedByUserRelationshipTrait {

    public function createdByUser()
    {
        return $this->belongsTo(Config::get('auth.model'),'created_by_user_id');
    }

}