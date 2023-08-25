<?php

namespace johnnywoode\quickussd\Http\models;
use Illuminate\Database\Eloquent\Model;

class ussd_response extends Model {

    protected $table = 'quickussd_responses';

    protected $fillable = ['user_id','menu_id','response','menu_item_id'];


}
