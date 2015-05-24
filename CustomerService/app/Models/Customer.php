<?php namespace App\Models;
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 5/23/15
 * Time: 1:16 PM
 */

use Illuminate\Database\Eloquent\Model;
//use Jenssegers\Mongodb\Model;

class Customer extends Model {

    //
//    public $connection = "mongodb";
    public $connection = "mysql";

    protected $table = 'customers';

    public $incrementing = false;

    public $castOnSet = true;

    public static $snakeAttributes = false;

    protected $fillable = array(
        "fName",
        "mname",
        "name",
        "lName",
        "email",
        "phone"
    );

    protected $guarded = array('id');


}
