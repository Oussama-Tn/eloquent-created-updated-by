<?php

namespace AndyFleming\EloquentCreatedUpdatedBy;

trait CreatedByUserScopeTrait {

    public function scopeCreatedByUser($query,$userId)
    {
        return $query->where('created_by_user_id',$userId);
    }

}
