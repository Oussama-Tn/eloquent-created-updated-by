<?php

namespace AndyFleming\EloquentCreatedUpdatedBy;

trait CreatedUpdatedByTrait {

	use CreatedByUserRelationshipTrait;
	use CreatedByUserScopeTrait;
	use UpdatedByUserRelationshipTrait;
	use UpdatedByUserScopeTrait;
	
	public static function bootCreatedUpdatedByTrait()
	{
        static::observe(new CreatedByUserIdObserver);
        static::observe(new UpdatedByUserIdObserver);
		//static::addGlobalScope(new SoftDeletingScope);
	}

}
