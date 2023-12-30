<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Tokohp extends Model
{
protected $table = 'tokohp';
protected $primaryKey = 'id';
public $timestamps = false;
/**
* The attributes that are mass assignable.
*
* @var array
*/
protected $fillable = [
'merk', 'tipe','harga'
];
/**
* The attributes excluded from the model's JSON form.
*
* @var array
*/
protected $hidden = [];
}