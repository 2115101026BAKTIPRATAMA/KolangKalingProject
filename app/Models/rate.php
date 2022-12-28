<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rate extends Model
{
    use HasFactory;
    public $primaryKey='rate_id';
    protected $tabel = "rates";
    protected $fillabel = [
      'rate_name','date_from','date_end' 
    ];
    // public function admins(){
    // return $this->hasMany(admins::class,'rate_id','rate_id');
    // }
}





