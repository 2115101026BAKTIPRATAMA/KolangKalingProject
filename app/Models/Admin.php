<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{

    use HasFactory;
    public $primaryKey = 'id'; 
    protected $table ='admins';
    protected $fillable=[
        'user_id','title','desc','gambar','rate_id','jenis_olahan'
    ];
    public function olahan(){
        return $this->belongsTo(Olahan::class,'id','jenis_olahan');
        }

}
