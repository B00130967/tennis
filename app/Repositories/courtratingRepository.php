<?php

namespace App\Repositories;

use App\Models\courtrating;
use App\Repositories\BaseRepository;

/**
 * Class courtratingRepository
 * @package App\Repositories
 * @version March 29, 2020, 12:47 pm UTC
*/

class courtratingRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'rating',
        'comment',
        'courtid'
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
        return courtrating::class;
    }
}
