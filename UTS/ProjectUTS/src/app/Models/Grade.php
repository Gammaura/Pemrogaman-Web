<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Grade extends Model
{
    use HasFactory;

    protected $fillable = ['student_id', 'mata_pelajaran', 'kelas', 'nilai'];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}

