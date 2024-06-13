<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penilaian extends Model
{
    use HasFactory;
    protected $table = 'penilaians';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $fillable = ['nim', 'nama', 'kd_matkul','nilai1','nilai2','kuis1','kuis2','uts','uas'];
    public $timestamps = false;

}
