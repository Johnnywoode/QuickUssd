<?php

namespace johnnywoode\quickussd\Http\models;
use Illuminate\Database\Eloquent\Model;

class ussd_user extends Model {

    protected $table = 'quickussd_users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['difficulty_level','name','office_id','phone','email','session','progress','confirm_from','menu_item_id'];




}
