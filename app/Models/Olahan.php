<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Olahan extends Model
{
    use HasFactory;
    public $primaryKey='id';
    protected $tabel = "olahans";
    protected $fillable = 
    [
     'jenis_olahan'
    ];  
    public function admin(){
        return $this->hasMany(Admin2::class);
    }
}
