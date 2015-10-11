<?php namespace Jenssegers\Mongodb;

use Illuminate\Database\Eloquent\Model as BaseModel;
use Jenssegers\Mongodb\Eloquent\HybridRelations;
use Jenssegers\Mongodb\Contracts\Mongo as MongoContract;

abstract class Model extends BaseModel implements MongoContract {

    use Mongo, HybridRelations;

    /**
     * The collection associated with the model.
     *
     * @var string
     */
    protected $collection;

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = '_id';

}
