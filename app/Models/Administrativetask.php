<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Administrativetask
 * @package App\Models
 * @version October 24, 2019, 9:41 pm UTC
 *
 * @property integer user_id
 * @property integer posttype_id
 * @property string|\Carbon\Carbon startDate
 * @property string|\Carbon\Carbon endDate
 * @property string path
 */
class Administrativetask extends Model
{
    use SoftDeletes;

    public $table = 'administrativetasks';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'user_id',
        'posttype_id',
        'startDate',
        'endDate',
        'path'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'posttype_id' => 'integer',
        'startDate' => 'datetime',
        'endDate' => 'datetime',
        'path' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'startDate' => 'required|min:3',
        'endDate' => 'required|min:3',
        'path' => 'required'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function posttype(){
        return $this->belongsTo(Posttype::class);
    }
}
