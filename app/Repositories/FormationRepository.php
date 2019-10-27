<?php

namespace App\Repositories;

use App\Models\Formation;
use App\Repositories\BaseRepository;

/**
 * Class FormationRepository
 * @package App\Repositories
 * @version October 24, 2019, 6:51 pm UTC
*/

class FormationRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'startDate',
        'endDate',
        'organization',
        'pfeTitle'
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
        return Formation::class;
    }
}
