<?php

namespace App\Repositories;

use App\Models\Tictype;
use App\Repositories\BaseRepository;

/**
 * Class TictypeRepository
 * @package App\Repositories
 * @version October 27, 2019, 11:14 am UTC
*/

class TictypeRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'ticname',
        'ticdescription'
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
        return Tictype::class;
    }
}
