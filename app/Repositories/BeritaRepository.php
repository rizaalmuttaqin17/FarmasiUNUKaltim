<?php

namespace App\Repositories;

use App\Models\Berita;
use App\Repositories\BaseRepository;

/**
 * Class BeritaRepository
 * @package App\Repositories
 * @version September 2, 2022, 9:42 am UTC
*/

class BeritaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'users_id',
        'kategori_id',
        'program_studi_id',
        'banner',
        'judul',
        'isi'
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
        return Berita::class;
    }
}
