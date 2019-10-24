<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Faculty
 * @package App\Models
 * @version October 23, 2019, 9:29 pm UTC
 *
 * @property string name
 * @property string name_ar
 */
class Faculty extends Model
{
    use SoftDeletes;

    public $table = 'faculties';


    protected $dates = ['deleted_at'];



    public $guarded = [];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'name_ar' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required|min:5',
        'name_ar' => 'required|min:5'
    ];

    public function deparetements(){
        return $this->hasMany(Departement::class);
    }

}
