<?php

namespace App\Repositories;

use App\Models\Researchproject;
use App\Repositories\BaseRepository;

/**
 * Class ResearchprojectRepository
 * @package App\Repositories
 * @version October 24, 2019, 7:30 pm UTC
*/

class ResearchprojectRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'startDate',
        'endDate',
        'abstract',
        'role',
        'path'
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
        return Researchproject::class;
    }
}
