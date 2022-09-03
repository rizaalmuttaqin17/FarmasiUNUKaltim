<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class ProgramStudi
 * @package App\Models
 * @version September 2, 2022, 9:17 am UTC
 *
 * @property \App\Models\Fakulta $fakultas
 * @property \Illuminate\Database\Eloquent\Collection $berita
 * @property integer $fakultas_id
 * @property string $kode
 * @property string $nama
 */
class ProgramStudi extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'program_studi';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'fakultas_id',
        'kode',
        'nama'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'fakultas_id' => 'integer',
        'kode' => 'string',
        'nama' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'fakultas_id' => 'nullable',
        'kode' => 'nullable|string|max:15',
        'nama' => 'nullable|string|max:45',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function fakultas()
    {
        return $this->belongsTo(\App\Models\Fakultas::class, 'fakultas_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function berita()
    {
        return $this->hasMany(\App\Models\Beritum::class, 'program_studi_id');
    }
}
