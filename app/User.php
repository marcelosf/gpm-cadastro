<?php

/**
 * User Controller.
 * 
 * PHP version 7.1
 * 
 * @category Entities
 * @package  Register\Entities
 * @author   Marcelo Schneider <schneider.fei@gmail.com>
 * @license  http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link     https://github.com/marcelosf/gpm-cadastro Cadastro GPM
 */

namespace Register;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'fullname',
        'email',
        'password' 
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function register ()
    {

        return $this->hasOne('Register\Entities\Register');

    }
}
