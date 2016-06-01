<?php namespace Jenssegers\Mongodb\Eloquent;

use Illuminate\Database\Eloquent\Model as BaseModel;
use Jenssegers\Mongodb\Contracts\Mongo as MongoContract;

abstract class Model extends BaseModel implements MongoContract
{
    use Mongo;
    use HybridRelations;

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
