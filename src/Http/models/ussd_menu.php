<?php
namespace johnnywoode\quickussd\Http\models;
use Illuminate\Database\Eloquent\Model;

class ussd_menu extends Model {

    protected $table = 'quickussd_menus';


    protected $fillable = ['title','type','is_parent','confirmation_message'];


}
