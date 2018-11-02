<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //定义当前模型需要关联的数据表
    protected $table = 'role';
    //禁用时间
    public $timestamps = false;

    //将分派的权限进行处理
    public function assignAuth($data){
    	//处理数据
    	//获取auth_ids字段数据
    	$post['auth_ids'] = implode(',', $data['auth_id']);
    	//获取auth_ac字段
    	$tmp = Auth::where('pid','!=','0')->whereIn('id',$data['auth_id'])->get();
    	//循环拼凑controller和action
    	$ac = '';
    	foreach ($tmp as $value) {
    		$ac .= $value->controller . '@' . $value->action . ',';
    	}
    	//除去末尾的逗号
    	$post['auth_ac'] = strtolower(rtrim($ac,','));
    	//修改数据
    	return self::where('id',$data['id'])->update($post);
    }
}
