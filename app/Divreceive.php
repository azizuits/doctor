<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Divreceive extends Model
{
    //use HasFactory;
    protected $table = "divreceives";

    public function sendings()
    {
        return $this->hasOne('App\Sendings','id' );
    }
}
