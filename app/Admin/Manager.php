<?php

namespace App\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable;

class Manager extends Model implements \Illuminate\Contracts\Auth\Authenticatable
{
    //定义当前模型需要关联的数据表
    protected $table = 'manager';

    use Authenticatable;

    //定义与角色模型的关联操作（一对一）
    public function role(){
    	return $this->hasOne('App\Admin\Role','id','role_id');
    }

}
