<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    public $primaryKey='id';
    protected $tabel = "categories";
    protected $fillable = [
     'nama'
    ];  
    public function admin(){
    return $this->hasMany(Admin::class,'id','Category');
    }
}
