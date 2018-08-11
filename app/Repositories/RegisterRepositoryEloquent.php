<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\RegisterRepository;
use App\Entities\Register;
use App\Validators\RegisterValidator;

/**
 * Class RegisterRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class RegisterRepositoryEloquent extends BaseRepository implements RegisterRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Register::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return RegisterValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
