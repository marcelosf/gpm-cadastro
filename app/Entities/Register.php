<?php

namespace Register\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Register.
 *
 * @package namespace App\Entities;
 */
class Register extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [

        'user_id',
        'rg',
        'address',
        'address_number',
        'address_complement',
        'district',
        'zip_code',
        'state',
        'city',
        'bloody_type',
        'emergency_number',
        'emergency_name',
        'picture',
        'phone',
        'membership_year',
        'membership_number',
        'cbm',
        'cbm_where',
        'birth_date',
        'medical_assurence'

    ];

    protected $dates = ['created_at', 'updated_at', 'birth_date'];

    protected $table = 'register';

    public function user() 
    {

        $this->belongsTo('Register\User');

    }

}
