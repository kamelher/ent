<?php

namespace App\Repositories;

use App\Models\Ticusage;
use App\Repositories\BaseRepository;

/**
 * Class TicusageRepository
 * @package App\Repositories
 * @version October 27, 2019, 11:52 am UTC
*/

class TicusageRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Title',
        'user_id'
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
        return Ticusage::class;
    }
}
