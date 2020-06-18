<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookController extends Controller
{
    //
    public function lists(Request $request){
        $id =  $request->id;
        echo 'book';
//        $name =  $request->name;
//        $input=$request->all();  #获取所有参数
//        dd($input);
//        $input = $request->only(['id','name']);  #获取部分参数


//        $id = $request->only(['id','name','password']);  #获取部分参数
//
//        $input=$request->all();  #获取所有参数
//
//        $input_many=$request->except(['_token','create_time']); #获取除了_token和create_time意外的所有参数

//        return view('admin.book.lists', ['id' => $id]);

    }
}
