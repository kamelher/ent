<?php

namespace App\Repositories;

use App\Models\Administrativetask;
use App\Repositories\BaseRepository;

/**
 * Class AdministrativetaskRepository
 * @package App\Repositories
 * @version October 24, 2019, 9:41 pm UTC
*/

class AdministrativetaskRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'posttype_id',
        'startDate',
        'endDate',
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
        return Administrativetask::class;
    }
}
