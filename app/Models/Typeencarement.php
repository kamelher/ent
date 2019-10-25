<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Typeencarement
 * @package App\Models
 * @version October 25, 2019, 1:50 pm UTC
 *
 * @property string name
 */
class Typeencarement extends Model
{
    use SoftDeletes;

    public $table = 'typeencarements';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'name'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required|min:3'
    ];

    
}
