<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Ticusage
 * @package App\Models
 * @version October 27, 2019, 11:52 am UTC
 *
 * @property string Title
 * @property string link
 * @property string certificatlink
 * @property integer user_id
 * @property integer tictype_id
 */
class Ticusage extends Model
{
    use SoftDeletes;

    public $table = 'ticusages';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'Title',
        'link',
        'certificatlink',
        'user_id',
        'tictype_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'Title' => 'string',
        'link' => 'string',
        'certificatlink' => 'string',
        'user_id' => 'integer',
        'tictype_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Title' => 'required|min:5',
        'link' => 'required|min:4',
        'certificatlink' => 'required'
    ];

    
}
