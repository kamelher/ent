<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Adress
 * @package App\Models
 * @version October 24, 2019, 5:48 pm UTC
 *
 * @property integer user_id
 * @property string adress
 * @property string commune
 * @property string daira
 * @property string wilaya
 */
class Adress extends Model
{
    use SoftDeletes;

    public $table = 'adresses';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'user_id',
        'adress',
        'commune',
        'daira',
        'wilaya'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'adress' => 'string',
        'commune' => 'string',
        'daira' => 'string',
        'wilaya' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'adress' => 'required|min:3',
        'commune' => 'required',
        'daira' => 'required',
        'wilaya' => 'required'
    ];

    
}
