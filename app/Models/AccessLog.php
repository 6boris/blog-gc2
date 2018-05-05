<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AccessLog extends Model
{
     //主键
     protected $primaryKey = 'id';
     protected $table = "log_accesslist";
     // 日期格式
     public $timestamps = true;
     // 自动记录创建和修改时间
     protected $dateFormat = 'Y-m-d H:i:s';
 
     /**
      * 需要转换成日期的属性
      * @var array
      */
     protected $dates = [
         'created_time',
         'updated_time',
     ];
     /**
      * 应该被转换成原生类型的属性。
      * @var array
      */
     protected $casts = [
         'data' => 'array',
     ];
     /**
      * 可以被批量赋值的属性
      * @var array
      */
     protected $fillable = ['updated_time','create_time'];
}
