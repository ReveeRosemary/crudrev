<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;
    protected $table = 'guru';
    protected $primarykey = 'id';
    protected $fillable = ['NIP', 'Nama_Guru', 'Alamat_Guru', 'Jenis_Kelamin', 'Pendidikan_Guru' ];
}
