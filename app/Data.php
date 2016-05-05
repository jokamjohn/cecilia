<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    protected $table = "data";
    
    protected $fillable = [ 'date', 'humidity', 'temperature'];
    
    protected $dates = [ 'date', 'created_at', 'updated_at'];
}
