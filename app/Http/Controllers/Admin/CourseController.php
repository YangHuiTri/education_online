<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//引入模型
use App\Admin\Course;

class CourseController extends Controller
{
    //列表
    public function index(){
    	//获取数据
    	$data = Course::orderBy('sort','desc')->get();
    	//展示视图
    	return view('admin.course.index',compact('data'));
    }
}
