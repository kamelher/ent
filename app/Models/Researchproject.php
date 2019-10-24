<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Researchproject
 * @package App\Models
 * @version October 24, 2019, 7:30 pm UTC
 *
 * @property integer user_id
 * @property string title
 * @property string|\Carbon\Carbon startDate
 * @property string|\Carbon\Carbon endDate
 * @property string abstract
 * @property string role
 * @property string path
 */
class Researchproject extends Model
{
    use SoftDeletes;

    public $table = 'researchprojects';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'user_id',
        'title',
        'startDate',
        'endDate',
        'abstract',
        'role',
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
        'title' => 'string',
        'startDate' => 'datetime',
        'endDate' => 'datetime',
        'abstract' => 'string',
        'role' => 'string',
        'path' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required|min:3',
        'startDate' => 'required|min:3',
        'endDate' => 'required|min:3',
        'abstract' => 'required|min:3',
        'role' => 'required',
        'path' => 'required'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
