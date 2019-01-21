<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suplier extends Model
{
    protected $table = 'suplier';

    protected $fillable = [
    	'nama_sup', 'nama_perusahaan', 'no_hp', 'fax', 'npwp', 'email', 'alamat', 'keterangan'
	];

}
