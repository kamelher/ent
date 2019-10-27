<?php

namespace App\Repositories;

use App\Models\Adress;
use App\Repositories\BaseRepository;

/**
 * Class AdressRepository
 * @package App\Repositories
 * @version October 24, 2019, 5:48 pm UTC
*/

class AdressRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'adress'
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
        return Adress::class;
    }
}
