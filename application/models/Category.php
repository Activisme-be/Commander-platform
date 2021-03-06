<?php defined('BASEPATH') OR exit('No direct script acess allowed');

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class Category
 */
class Category extends Eloquent
{
    /**
     * Database table
     *
     * @var string
     */
    protected $table = 'sys_categories';

    /**
     * Mass-assign fields.
     *
     * @var array
     */
    protected $fillable = ['name', 'description', 'user_id'];

    /**
     * Disable timestamps
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * Creator relationship
     *
     * @return one-to-one relationship.
     */
    public function creator()
    {
        return $this->belongsTo('Login', 'user_id');
    }

    /**
     * Catgeory relationship.
     *
     * @return arry|collection
     */
     public function tickets()
     {
         return $this->belongsTo('Ticket');
     }
}
