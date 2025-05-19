<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'nisn', 'kelas', 'tanggal_lahir', 'alamat', 'wali_murid'];

    public function grades()
    {
        return $this->hasMany(Grade::class);
    }
    
}
