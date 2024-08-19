<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mlandslide extends Model
{
    use HasFactory;

    protected $table ='tb_suhu';
    protected $primaryKey= 'id';
    protected $fillable = ['suhu','kelembaban', 'longitude', 'latitude', 'Ax','Ay','Az','Gx', 'Gy', 'Gz', 'Mx','My','Mz'];
}
