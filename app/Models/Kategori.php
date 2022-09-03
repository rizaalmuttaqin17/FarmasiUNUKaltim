<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Kategori
 * @package App\Models
 * @version September 2, 2022, 9:43 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $berita
 * @property string $kategori
 */
class Kategori extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'kategori';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'kategori'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'kategori' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'kategori' => 'nullable|string|max:45',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function berita()
    {
        return $this->hasMany(\App\Models\Beritum::class, 'kategori_id');
    }
}
