<?php

namespace App\Repositories;

use App\Models\Fakultas;
use App\Repositories\BaseRepository;

/**
 * Class FakultasRepository
 * @package App\Repositories
 * @version September 2, 2022, 9:07 am UTC
*/

class FakultasRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nama'
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
        return Fakultas::class;
    }
}
