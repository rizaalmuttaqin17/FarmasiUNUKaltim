<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Berita
 * @package App\Models
 * @version September 2, 2022, 9:42 am UTC
 *
 * @property \App\Models\Kategori $kategori
 * @property \App\Models\ProgramStudi $programStudi
 * @property \App\Models\User $users
 * @property integer $users_id
 * @property integer $kategori_id
 * @property integer $program_studi_id
 * @property string $banner
 * @property string $judul
 * @property string $isi
 */
class Berita extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'berita';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'users_id',
        'kategori_id',
        'program_studi_id',
        'banner',
        'judul',
        'isi'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'users_id' => 'integer',
        'kategori_id' => 'integer',
        'program_studi_id' => 'integer',
        'banner' => 'string',
        'judul' => 'string',
        'isi' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'users_id' => 'nullable',
        'kategori_id' => 'nullable',
        'program_studi_id' => 'nullable',
        'banner' => 'nullable|string|max:150',
        'judul' => 'nullable|string|max:254',
        'isi' => 'nullable|string',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function kategori()
    {
        return $this->belongsTo(\App\Models\Kategori::class, 'kategori_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function programStudi()
    {
        return $this->belongsTo(\App\Models\ProgramStudi::class, 'program_studi_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function users()
    {
        return $this->belongsTo(\App\Models\User::class, 'users_id');
    }
}
