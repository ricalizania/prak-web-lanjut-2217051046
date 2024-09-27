<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    use HasFactory;

    protected $table = 'user';
    protected $guarded = ['id'];

    public function kelas()
    {
        return $this->belongsTo(Kelas::clas, 'kelas_id');
    }
}
