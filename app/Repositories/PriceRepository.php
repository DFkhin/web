<?php

namespace App\Repositories;

use App\Models\Price;
use App\Repositories\BaseRepository;

/**
 * Class PriceRepository
 * @package App\Repositories
 * @version October 4, 2021, 3:33 pm UTC
*/

class PriceRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        
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
        return Price::class;
    }
}
