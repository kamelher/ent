<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Posttype
 * @package App\Models
 * @version October 24, 2019, 8:50 pm UTC
 *
 * @property string postname
 * @property string postDescription
 */
class Posttype extends Model
{
    use SoftDeletes;

    public $table = 'posttypes';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'postname',
        'postDescription'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'postname' => 'string',
        'postDescription' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'postname' => 'required|min:3',
        'postDescription' => 'required|min:3'
    ];


}
