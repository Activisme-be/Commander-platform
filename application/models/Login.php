<?php defined('BASEPATH') OR exit('No direct script access allowed');

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class Login
 */
class Login extends Eloquent
{
    /**
     * Database table
     *
     * @var string
     */
    protected $table =  'sys_users';

    /**
     * Mass-assign fields
     *
     * @var array
     */
    protected $fillable = ['username', 'name', 'email', 'password', 'blocked'];

    /**
     * Disable timestamps.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * Permissions data relation for the user.
     *
     * @return array|collection
     */
    public function permissions()
    {
        return $this->belongsToMany('Permissions', 'pivot_login_permissions', 'permissions_id', 'login_id')->select('role');
    }
}
