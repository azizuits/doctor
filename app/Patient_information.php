<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient_information extends Model
{
    //use HasFactory;
    protected $table = 'patient_informations';
    public $timestamps = false;
}
