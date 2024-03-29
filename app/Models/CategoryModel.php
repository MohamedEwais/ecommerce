<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryModel extends Model
{
    use HasFactory;
    protected $table='category';
    public $timestamps = false;

    static public function getSingle($id)
    {
        return self::find($id);
    }
    
    static public function getRecord()
    {
        return self::select('category.*','users.name as created_by_name')
            ->join('users','users.id','=','category.created_by')
            ->orderBy('category.id','desc')
            ->get();
    }
}
