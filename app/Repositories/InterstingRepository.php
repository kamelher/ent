<?php

namespace App\Repositories;

use App\Models\Intersting;
use App\Repositories\BaseRepository;

/**
 * Class InterstingRepository
 * @package App\Repositories
 * @version October 24, 2019, 5:22 pm UTC
*/

class InterstingRepository extends BaseRepository
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
        return Intersting::class;
    }
}
