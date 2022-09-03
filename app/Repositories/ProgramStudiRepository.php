<?php

namespace App\Repositories;

use App\Models\ProgramStudi;
use App\Repositories\BaseRepository;

/**
 * Class ProgramStudiRepository
 * @package App\Repositories
 * @version September 2, 2022, 9:17 am UTC
*/

class ProgramStudiRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'fakultas_id',
        'kode',
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
        return ProgramStudi::class;
    }
}
