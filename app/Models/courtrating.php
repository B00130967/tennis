<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class courtrating
 * @package App\Models
 * @version March 29, 2020, 12:47 pm UTC
 *
 * @property \App\Models\Court courtid
 * @property integer rating
 * @property string comment
 * @property integer courtid
 */
class courtrating extends Model
{

    public $table = 'courtrating';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'rating',
        'comment',
        'courtid'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'rating' => 'integer',
        'comment' => 'string',
        'courtid' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function courtid()
    {
        return $this->belongsTo(\App\Models\Court::class, 'courtid');
    }
}
