<?php

namespace App\Repositories;

use App\Models\Typeencarement;
use App\Repositories\BaseRepository;

/**
 * Class TypeencarementRepository
 * @package App\Repositories
 * @version October 25, 2019, 1:50 pm UTC
*/

class TypeencarementRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Typeencarement::class;
    }
}
