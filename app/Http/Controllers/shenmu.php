<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddCheck;
use Illuminate\Http\Request;
use App\Models\article;
use App\Models\type;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redis;
class shenmu extends Controller
{
    //展示页面
    public function index(Request $request){
        $ser=$request->input('ser');
        $data=article::index($ser);
        $data->appends(['ser'=>$ser]);
        return view('index',['data'=>$data]);
    }
    //添加页面
    public function show(){
        $type=type::show();
        return view('show',['type'=>$type]);
    }
    //添加
    public function add(AddCheck $request){
        $validated = $request->validated();
        $path = Storage::putFile('image', $request->file('img'));
        $validated['img']='/'.$path;
        $res=article::add($validated);
        if($res){
            return redirect('index');
        }else{
            return redirect()->back()->withErrors('添加失败');
        }
    }
    //删除
    public function del(Request $request){
        $id=$request->input('id');
        $res=article::del($id);
        if($res){
            return redirect('index');
        }else{
            return "<script>alert('删除失败');location.href='index'</script>";
        }
    }
    //详情
    public function lists(Request $request){
        $id=$request->input('id');
        if(Redis::hgetall($id)){
            $data=Redis::hgetall($id);
        }else{
            $data=article::lists($id)->toArray();
            Redis::hmset($id,$data);
        }
        return view('lists',['data'=>$data]);
    }
}
