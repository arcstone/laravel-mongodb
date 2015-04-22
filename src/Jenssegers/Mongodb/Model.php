<?php namespace Jenssegers\Mongodb;

use Jenssegers\Mongodb\Contracts\Mongo as MongoContract;

abstract class Model extends \Illuminate\Database\Eloquent\Model implements MongoContract {

    use \Jenssegers\Mongodb\Mongo;

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

