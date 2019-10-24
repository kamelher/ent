<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Intersting
 * @package App\Models
 * @version October 24, 2019, 5:22 pm UTC
 *
 * @property string name
 * @property integer user_id
 */
class Intersting extends Model
{
    use SoftDeletes;

    public $table = 'interstings';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'user_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'user_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required|min:3'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

}
