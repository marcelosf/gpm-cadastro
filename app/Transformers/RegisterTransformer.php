<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Entities\Register;

/**
 * Class RegisterTransformer.
 *
 * @package namespace App\Transformers;
 */
class RegisterTransformer extends TransformerAbstract
{
    /**
     * Transform the Register entity.
     *
     * @param \App\Entities\Register $model
     *
     * @return array
     */
    public function transform(Register $model)
    {
        return [
            'id'         => (int) $model->id,

            /* place your other model properties here */

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
