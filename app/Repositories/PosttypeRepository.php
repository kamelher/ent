<?php

namespace App\Repositories;

use App\Models\Posttype;
use App\Repositories\BaseRepository;

/**
 * Class PosttypeRepository
 * @package App\Repositories
 * @version October 24, 2019, 8:50 pm UTC
*/

class PosttypeRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'postname',
        'postDescription'
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
        return Posttype::class;
    }
}
