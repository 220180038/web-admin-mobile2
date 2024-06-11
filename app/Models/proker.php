<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class proker extends Model
{
    protected $table = 'proker';
    protected $primaryKey =     'id';
    protected $fillable = ['nama_proker', 'tanggal', 'id_bidang', 'tempat', 'pj', 'deskripsi'];

    
    
    use HasFactory;
}
