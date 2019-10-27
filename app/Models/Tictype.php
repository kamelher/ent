<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Tictype
 * @package App\Models
 * @version October 27, 2019, 11:14 am UTC
 *
 * @property string ticname
 * @property string ticdescription
 */
class Tictype extends Model
{
    use SoftDeletes;

    public $table = 'tictypes';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'ticname',
        'ticdescription'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'ticname' => 'string',
        'ticdescription' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'ticname' => 'required|min:3',
        'ticdescription' => 'required|min:20'
    ];

    
}
