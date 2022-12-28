<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Packages extends Model
{
    use HasFactory;
    public $primaryKey='package_id';
    protected $tabel = "packages";
    protected $fillabel = [
      'package_code','package_name','package_desc','feature_img','location_id','rate_id' 
    ];
    public function rates(){
    return $this->belongsTo(rates::class,'rate_id','rate_id');
    }
}




