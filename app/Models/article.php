<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class article extends Model
{
    use HasFactory;
    protected $guarded=[];
    static function index($ser){
        return self::join('types','types.tid','articles.tid')

                ->orderBy('id','desc')
                ->paginate(5);
    }
    static function add($data){
        return self::create($data);
    }
    static function del($id){
        return self::destroy($id);
    }
    static function lists($id){
        return self::join('types','types.tid','articles.tid')
            ->where('id',$id)->first();
    }
}
