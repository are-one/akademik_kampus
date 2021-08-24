<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matakuliah extends Model
{
    public $table = "matakuliah";
    
    protected $fillable = ['kode_mk', 'nama_mk', 'jml_sks'];
}