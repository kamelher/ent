<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Departement
 * @package App\Models
 * @version October 24, 2019, 8:48 am UTC
 *
 * @property string name
 * @property string name_ar
 * @property integer faculty_id
 */
class Departement extends Model
{
    use SoftDeletes;

    public $table = 'departements';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'name_ar',
        'faculty_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'name_ar' => 'string',
        'faculty_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required|min:3',
        'name_ar' => 'required|min:3'
    ];

    public function faculty(){
        return $this->belongsTo(Faculty::class);
    }

    public function users(){
        return $this->hasMany(User::class);
    }

}
