<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin2 extends Model
{
    use HasFactory;
    public $primaryKey = 'id'; 
    protected $table ='admin2s';
    protected $fillable=[
        'Olahan_id','title','desc','gambar','rate_id'
    ];
    public function Olahan(){
        return $this->belongsTo(Olahan::class,'Olahan_id');
    }
}
