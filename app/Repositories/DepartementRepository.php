<?php

namespace App\Repositories;

use App\Models\Departement;
use App\Repositories\BaseRepository;

/**
 * Class DepartementRepository
 * @package App\Repositories
 * @version October 24, 2019, 8:48 am UTC
*/

class DepartementRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'name_ar',
        'faculty_id'
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
        return Departement::class;
    }
}
