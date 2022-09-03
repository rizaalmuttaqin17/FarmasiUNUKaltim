<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Fakultas
 * @package App\Models
 * @version September 2, 2022, 9:07 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $programStudis
 * @property string $nama
 */
class Fakultas extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'fakultas';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'nama'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nama' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nama' => 'nullable|string|max:45',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function programStudis()
    {
        return $this->hasMany(\App\Models\ProgramStudi::class, 'fakultas_id');
    }
}
