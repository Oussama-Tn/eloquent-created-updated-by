<?php

namespace AndyFleming\EloquentCreatedUpdatedBy;

trait UpdatedByUserScopeTrait {

    public function scopeUpdatedByUser($query,$userId)
    {
        return $query->where('updated_by_user_id',$userId);
    }

}